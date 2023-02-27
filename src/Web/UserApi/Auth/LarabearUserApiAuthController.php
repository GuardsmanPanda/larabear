<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\UserApi\Auth;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearAccessTokenUserCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearAccessTokenUserDeleter;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Web\UserApi\User\Service\LarabearUserApiUserService;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

final class LarabearUserApiAuthController extends Controller {
    public function signIn(): JsonResponse {
        $user = BearUser::where(column: 'user_email', operator: '=', value: Req::getStringOrDefault(key: 'email'))->first();
        if ($user === null || $user->is_user_activated !== true || $user->password === null) {
            return new JsonResponse(data: ['error' => 'Invalid or deactivated user.'], status: 401);
        }
        if (!password_verify(password: Req::getStringOrDefault(key: 'password'), hash: $user->password)) {
            return new JsonResponse(data: ['error' => 'Invalid password.'], status: 401);
        }
        $duration = (Req::getBoolOrDefault(key: 'remember_me', default: false) ? 35 : 1) * 24 + 1;
        return LarabearUserApiUserService::getUserResponse(user: $user, token: BearAccessTokenUserCreator::create(user: $user, expires_at: now()->addHours(value: $duration)));
    }

    public function signOut(): JsonResponse {
        $token = Req::request()->bearerToken();
        if ($token !== null) {
            BearAccessTokenUserDeleter::deleteFromHashedToken(hashed_token: hash(algo: 'xxh128', data: $token));
            return new JsonResponse(data: ['message' => 'Sign out success.']);
        }
        return new JsonResponse(data: ['error' => 'No token provided, you are not currently logged in.'], status: 404);
    }
}
