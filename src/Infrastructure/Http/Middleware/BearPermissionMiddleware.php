<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Service\BearAuthService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

final class BearPermissionMiddleware {
    public function handle(Request $request, Closure $next, string $permission): Response {
        $result = BearAuthService::hasPermission(permission: $permission);
        if ($result !== true) {
            BearLogErrorCreator::create(
                message: 'User tried to access a resource that requires a permission that the user does not have.',
                namespace: 'larabear-auth',
                key: 'permission-middleware',
                severity: BearSeverityEnum::MEDIUM,
                remedy: 'You either need to add the permission to the user or remove the permission from the resource. (But only if  the user is supposed to access this resource.)',
            );
            throw new AccessDeniedHttpException(message: 'You do not have the required permission.');
        }
        return $next($request);
    }
}
