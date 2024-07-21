<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearPermissionInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Service\BearAuthService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

final class BearPermissionMiddleware {
    public function handle(Request $request, Closure $next, string $permission): Response {
        $result = BearAuthService::hasPermission(permission: $permission);
        if ($result !== true) {
            BearErrorCreator::create(
                message: 'User tried to access a resource that requires a permission that the user does not have.',
                slug: 'larabear::permission-middleware',
                severity: BearSeverityEnum::WARNING
            );
            throw new AccessDeniedHttpException(message: 'You do not have the required permission.');
        }
        return $next($request);
    }

    public static function using(BearPermissionInterface $permission): string {
        return BearPermissionMiddleware::class . ':' . $permission->getValue();
    }

    public static function usingValue(String $permission): string {
        return BearPermissionMiddleware::class . ':' . $permission;
    }
}
