<?php

namespace GuardsmanPanda\Larabear\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Service\Req;
use Illuminate\Http\Request;

class Initiate {
    public static array $headers = [];

    public function handle(Request $request, Closure $next) {
        Req::$r = $request;
        if ($request->bearerToken() !== null || $request->cookie('session.cookie') !== null) {
            self::$headers['Cache-Control'] = 'must-revalidate, no-store, private';
        }
        $resp = $next($request);
        if (method_exists($resp, 'header')) {
            foreach (self::$headers as $key => $value) {
                $resp->header($key, $value);
            }
        }
        return $resp;
    }
}