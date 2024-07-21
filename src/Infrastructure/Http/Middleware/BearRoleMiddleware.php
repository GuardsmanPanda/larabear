<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearRoleInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Service\BearAuthService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

final class BearRoleMiddleware {
    public function handle(Request $request, Closure $next, string $role): Response {
        $result = BearAuthService::hasRole(role: $role);
        if ($result !== true) {
            BearErrorCreator::create(
                message: 'User tried to access a resource that requires a role that the user does not have.',
                slug: 'larabear::role-middleware',
                severity: BearSeverityEnum::WARNING,
            );
            throw new AccessDeniedHttpException(message: 'You do not have the required role.');
        }
        return $next($request);
    }

    public static function using(BearRoleInterface $role): string {
        return BearRoleMiddleware::class . ':' . $role->getValue();
    }
}
