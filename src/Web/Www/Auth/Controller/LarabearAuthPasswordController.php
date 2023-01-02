<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Auth\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearAccessTokenUserCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearUserUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Config\Service\BearConfigService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use GuardsmanPanda\Larabear\Web\UserApi\User\Service\LarabearUserApiUserService;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LarabearAuthPasswordController extends Controller {
    public function authenticateWithPasswordFromWeb(): RedirectResponse {
        $user = BearUser::where(column: 'user_email', operator: '=', value: Req::getStringOrDefault(key: 'email'))->first();
        if ($user === null || $user->is_user_activated !== true || $user->password === null) {
            return Resp::redirectWithMessage(url: BearConfigService::getString(config_key: 'larabear-auth.path_to_redirect_if_not_logged_in'), message: 'Invalid or deactivated user.');
        }
        if (!password_verify(password: Req::getStringOrDefault(key: 'password'), hash: $user->password)) {
            return Resp::redirectWithMessage(url: BearConfigService::getString(config_key: 'larabear-auth.path_to_redirect_if_not_logged_in'), message: 'Invalid password');
        }
        (new BearUserUpdater($user))->setLastLoginNow()->update();
        Session::migrate(destroy: true);
        Session::put(key: 'bear_user_id', value: $user->id);
        return new RedirectResponse(url: BearConfigService::getString(config_key: 'larabear-auth.path_to_redirect_if_logged_in'));
    }


    public function authenticateWithPasswordFromApp(): JsonResponse {
        $user = BearUser::where(column: 'user_email', operator: '=', value: Req::getStringOrDefault(key: 'email'))->first();
        if ($user === null || $user->is_user_activated !== true || $user->password === null) {
            return new JsonResponse(data: ['Error' => 'Invalid or deactivated user.'], status: 400);
        }
        if (!password_verify(password: Req::getStringOrDefault(key: 'password'), hash: $user->password)) {
            return new JsonResponse(data: ['Error' => 'Invalid password'], status: 400);
        }
        return LarabearUserApiUserService::getUserResponse(user: $user, token: BearAccessTokenUserCreator::create(user: $user, expires_at: now()->addHours(value: 25)));
    }
}
