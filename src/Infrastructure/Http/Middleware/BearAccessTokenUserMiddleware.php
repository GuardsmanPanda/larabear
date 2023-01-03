<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class BearAccessTokenUserMiddleware {
    public function handle(Request $request, Closure $next): Response {
       if ($request->bearerToken() === null) {
           throw new AccessDeniedHttpException(message: 'The request must include a bearer token.');
       }
       $hashed_access_token = hash(algo: 'xxh128', data: $request->bearerToken());
       $access = DB::selectOne(query: "
            SELECT at.user_id
            FROM bear_access_token_user at
            WHERE at.hashed_token = ? AND at.user_token_type = 'BEARER'AND at.expires_at > NOW()
        ", bindings: [$hashed_access_token]);

        // If access token is not valid, abort
        if ($access === null || $access->user_id === null) {
            throw new AccessDeniedHttpException(message: "The supplied access token is not valid.");
        }
        BearGlobalStateService::setUserId(userId: $access->user_id);
        return $next($request);
    }
}
