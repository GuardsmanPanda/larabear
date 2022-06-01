<?php

namespace GuardsmanPanda\Larabear\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Service\Req;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class TokenAuthMiddleware {
    public static string $primary_api_key = '';
    public function handle(Request $request, Closure $next) {
        if ($request->bearerToken() === null) {
            throw new AccessDeniedHttpException(message: 'The request must include a bearer token.');
        }
        $hashed_token = hash('xxh128', $request->bearerToken());
        $access = DB::selectOne("
            SELECT at.id, at.api_primary_key, at.expires_at
            FROM access_token at
            WHERE
                at.hashed_access_token = ?
                AND (((? <<= at.ipv4_limit AND at.ipv4_limit != '0.0.0.0/0'::inet) OR (? <<= at.ipv6_limit AND at.ipv6_limit != '::/0'::inet)) OR (at.ipv4_limit = '0.0.0.0/0'::inet AND at.ipv6_limit = '::/0'::inet))
                AND at.api_route_prefix = ?
        ", [$hashed_token, Req::ip(), Req::ip(), explode('/', ltrim($request->path(), '/'))[0]]);

        //if access token is not valid, abort
        if ($access === null || $access->id === null) {
            $message = 'The supplied access token is not valid.. ip: ' . Req::ip() . ', country: ' . Req::ipCountry() . ', area: ' .  explode('/', ltrim($request->path(), '/'))[0] . ', hashed_token: ' . $hashed_token;
            DB::insert("
                INSERT INTO audit_api (ip, country_code, http_method, http_path, response_code, api_error_message)
                VALUES (?, ?, ?, ?, 403, ?)", [Req::ip(), Req::ipCountry(), Req::method(), Req::path(), $message]
            );
            abort(403, $message);
        }
        self::$primary_api_key = $access->api_primary_key;;
        return $next($request);
    }

    public function terminate(Request $request, Response $response): void {
        $hashed_token = hash('xxh128', $request->bearerToken());
        DB::insert("
            INSERT INTO audit_api (access_token_id, ip, country_code, http_method, http_path, response_code, api_error_message, request_time_millis, namespace)
            VALUES ((SELECT id FROM access_token WHERE hashed_access_token = ?), ?, ?, ?, ?, ?, ?, ?, ?)",
            [$hashed_token, Req::ip(), Req::ipCountry(), Req::method(), Req::path(), $response->getStatusCode(), $response->getStatusCode() >= 400 ? $response->getContent() : null, round((microtime(true)- get_defined_constants()['LARAVEL_START'])*1000), explode('/', ltrim($request->path(), '/'))[0]]
        );
    }
}
