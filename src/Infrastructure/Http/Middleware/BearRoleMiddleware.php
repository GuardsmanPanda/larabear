<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Service\BearAuthService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class BearRoleMiddleware {
    public function handle(Request $request, Closure $next, string $role): Response {
        $result = BearAuthService::hasRole(role: $role);
        if ($result !== true) {
            BearLogErrorCreator::create(
                message: 'User tried to access a resource that requires a role that the user does not have.',
                namespace: 'larabear-auth',
                key: 'role-middleware',
                severity: BearSeverityEnum::MEDIUM,
                remedy: 'You either need to add the role to the user or remove the role from the resource. (But only if  the user is supposed to access this resource.)',
            );
            throw new AccessDeniedHttpException(message: 'You do not have the required role.');
        }
        return $next($request);
    }
}
