<?php

namespace GuardsmanPanda\Larabear\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Crud\SecurityIncidentCreator;
use GuardsmanPanda\Larabear\Enum\SecurityIncidentSeverityEnum;
use GuardsmanPanda\Larabear\Service\Req;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class BearTokenAuthMiddleware {
    public static string|null $primary_api_key = null;
    private static string|null $hashed_access_token = null;

    public function handle(Request $request, Closure $next) {
        if ($request->bearerToken() === null) {
            throw new AccessDeniedHttpException(message: 'The request must include a bearer token.');
        }
        self::$hashed_access_token = hash('xxh128', $request->bearerToken());
        $access = DB::selectOne("
            SELECT at.id, at.api_primary_key, at.expires_at
            FROM bear_access_token at
            WHERE
                at.hashed_access_token = ?
                AND (((? <<= at.ipv4_limit AND at.ipv4_limit != '0.0.0.0/0'::inet) OR (? <<= at.ipv6_limit AND at.ipv6_limit != '::/0'::inet)) OR (at.ipv4_limit = '0.0.0.0/0'::inet AND at.ipv6_limit = '::/0'::inet))
                AND starts_with(?, at.api_route_prefix)
        ", [self::$hashed_access_token, Req::ip(), Req::path()]);

        //if access token is not valid, abort
        if ($access === null || $access->id === null) {
            $message = 'The supplied access token is not valid.. ip: ' . Req::ip() . ', country: ' . Req::ipCountry() . ', path: ' .  Req::path() . ', hashed_token: ' . self::$hashed_access_token;
            SecurityIncidentCreator::create(
                namespace: 'bear-token-auth',
                severity: SecurityIncidentSeverityEnum::HIGH,
                headline: 'Invalid access token',
                description: $message,
                remediation: 'Check the system making the call, if it is not under your control then consider blacklisting the IP address.',
            );
        }
        self::$primary_api_key = $access->api_primary_key;
        return $next($request);
    }

    public function terminate(Request $request, Response $response): void {
        DB::insert("
            INSERT INTO bear_access_token_log (request_ip, country_code, http_method, http_path, http_query, response_status_code, response_body, response_time_milliseconds, access_token_id)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, (SELECT id FROM bear_access_token WHERE hashed_access_token = ?))",
            [Req::ip(), Req::ipCountry(), Req::method(), Req::path(), json_encode(Req::allQuery(), JSON_THROW_ON_ERROR), $response->getStatusCode(), $response->getStatusCode() >= 400 ? $response->getContent() : null, round((microtime(true)- get_defined_constants()['LARAVEL_START'])*1000), self::$hashed_access_token]
        );
    }
}
