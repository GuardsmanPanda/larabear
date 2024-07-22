<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Auth\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearUserUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Config\Enum\LarabearConfigEnum;
use GuardsmanPanda\Larabear\Infrastructure\Config\Service\BearConfigService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

final class LarabearAuthController extends Controller {
    public function signIn(): RedirectResponse {
        $user = BearUser::where(column: 'user_email', operator: '=', value: Req::getString(key: 'email'))->first();
        if ($user === null || $user->password === null) {
            return Resp::redirect(url: BearConfigService::getString(enum: LarabearConfigEnum::LARABEAR_PATH_TO_REDIRECT_IF_NOT_LOGGED_IN), message: 'Invalid or deactivated user.');
        }
        if (!password_verify(password: Req::getString(key: 'password'), hash: $user->password)) {
            return Resp::redirect(url: BearConfigService::getString(enum: LarabearConfigEnum::LARABEAR_PATH_TO_REDIRECT_IF_NOT_LOGGED_IN), message: 'Invalid password');
        }
        (new BearUserUpdater($user))->setLastLoginNow()->update();
        Session::migrate(destroy: true);
        Session::put(key: 'bear_user_id', value: $user->id);
        return new RedirectResponse(url: BearConfigService::getString(enum: LarabearConfigEnum::LARABEAR_PATH_TO_REDIRECT_AFTER_LOGIN));
    }

    public function signOut(): RedirectResponse {
        Session::invalidate();
        return new RedirectResponse(url: BearConfigService::getString(enum: LarabearConfigEnum::LARABEAR_PATH_TO_REDIRECT_IF_NOT_LOGGED_IN));
    }


    public function keepAlive(): Response {
        return Resp::noContent();
    }
}
