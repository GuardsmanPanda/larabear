<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearUserUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

final class BearBasicAuthMiddleware {
    public function handle(Request $request, Closure $next, string $field = 'email'): Response {
        $user_info = $request->getUser();
        if ($user_info === null) {
            return new Response(content: 'No User Provided', status: 401, headers: ['WWW-Authenticate' => 'Basic']);
        }
        $user = BearUser::where(column: $field, operator: '=', value: $user_info)->sole();
        if ($user->password === null || $request->getPassword() === null) {
            return new Response(content: 'No Password Provided or user has no set password.', status: 401, headers: ['WWW-Authenticate' => 'Basic']);
        }
        if (!password_verify(password: $request->getPassword(), hash: $user->password)) {
            return new Response(content: 'Invalid Password', status: 401, headers: ['WWW-Authenticate' => 'Basic']);
        }
        (new BearUserUpdater($user))->setLastLoginNow()->update();
        return $next($request);
    }


    public static function using(string $field = 'email'): string {
        return BearBasicAuthMiddleware::class . ':' . $field;
    }
}
