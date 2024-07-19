<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

final class BearAccessTokenMiddleware {
    public function handle(Request $request, Closure $next): Response {
        if ($request->bearerToken() === null) {
            throw new AccessDeniedHttpException(message: 'The request must include a bearer token.');
        }
        $hashed_access_token = hash(algo: 'xxh128', data: $request->bearerToken());

        if (DB::getPdo()->getAttribute(attribute: PDO::ATTR_DRIVER_NAME) === 'pgsql') {
            $access = DB::selectOne(query: "
            SELECT at.id, at.api_primary_key, at.last_usage_date
            FROM bear_access_token_app at
            WHERE
                at.hashed_access_token = ? AND ? <<= at.request_ip_restriction
                AND starts_with(?, at.route_prefix_restriction)
                AND (at.expires_at IS NULL OR at.expires_at > now())
        ", bindings: [$hashed_access_token, Req::ip(), Req::path()]);
        } else {
            $access = DB::selectOne(query: "
            SELECT at.id, at.api_primary_key, at.last_usage_date
            FROM bear_access_token_app at
            WHERE
                at.hashed_access_token = ? AND (at.request_ip_restriction = '0.0.0.0/0' OR at.request_ip_restriction = ?)
                AND (? LIKE CONCAT(at.route_prefix_restriction , '%'))
                AND (at.expires_at IS NULL OR at.expires_at > now())
            ", bindings: [$hashed_access_token, Req::ip(), Req::path()]);
        }

        // If access token is not valid, abort
        if ($access === null || $access->id === null) {
            $message = 'The supplied access token is not valid.. ip: ' . Req::ip() . ', country: ' . Req::ipCountry() . ', path: ' . Req::path() . ', hostname: ' . Req::hostname() . ', hashed_token: ' . $hashed_access_token;
            BearErrorCreator::create(
                message: $message,
                key: 'larabear::invalid-access-token-app',
                severity: BearSeverityEnum::HIGH,
                remedy: 'Check the system making the call, if it is not under your control then consider blacklisting the IP address.',
            );
            throw new AccessDeniedHttpException(message: $message);
        }

        //Update last usage date
        if ($access->last_usage_date === null || $access->last_usage_date !== now()->toDateString()) {
            DB::update(query: "
                UPDATE bear_access_token_app
                SET last_usage_date = now()
                WHERE id = ?
            ", bindings: [$access->id]);
        }

        BearGlobalStateService::setApiPrimaryKey($access->api_primary_key);
        BearGlobalStateService::setAccessTokenId($access->id);
        return $next($request);
    }


    public function terminate(Request $request, Response $response): void {
        $status_code = $response->getStatusCode();
        $time = -1;
        if (defined(constant_name: 'LARAVEL_START')) {
            $time = (int)((microtime(as_float: true) - get_defined_constants()['LARAVEL_START']) * 1_000_000);
        }
    }
}
