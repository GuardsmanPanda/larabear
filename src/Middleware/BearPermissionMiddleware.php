<?php

namespace GuardsmanPanda\Larabear\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Service\AuthService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BearPermissionMiddleware {
    public function handle(Request $request, Closure $next, string $permission): Response {
        $result = AuthService::hasPermission($permission);
        if ($result !== true) {

        }
        return $next($request);
    }
}