<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Auth\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearUserLoginHistoryCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearUserUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Enum\BearUserLoginTypeEnum;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Config\Service\BearConfigService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

final class LarabearAuthController extends Controller {
    public function signIn(): RedirectResponse {
        $user = BearUser::where(column: 'user_email', operator: '=', value: Req::getStringOrDefault(key: 'email'))->first();
        if ($user === null || $user->is_user_activated !== true || $user->password === null) {
            return Resp::redirect(url: BearConfigService::getString(config_key: 'larabear::path-to-redirect-if-not-logged-in'), message: 'Invalid or deactivated user.');
        }
        if (!password_verify(password: Req::getStringOrDefault(key: 'password'), hash: $user->password)) {
            return Resp::redirect(url: BearConfigService::getString(config_key: 'larabear::path-to-redirect-if-not-logged-in'), message: 'Invalid password');
        }
        BearUserLoginHistoryCreator::create(user_id: $user->id, login_type: BearUserLoginTypeEnum::WEB_FORM);
        (new BearUserUpdater($user))->setLastLoginNow()->update();
        Session::migrate(destroy: true);
        Session::put(key: 'bear_user_id', value: $user->id);
        return new RedirectResponse(url: BearConfigService::getString(config_key: 'larabear::path-to-redirect-after-login'));
    }

    public function signOut(): RedirectResponse {
        Session::invalidate();
        return new RedirectResponse(url: BearConfigService::getString(config_key: 'larabear::path-to-redirect-if-not-logged-in'));
    }


    public function keepAlive(): Response {
        return Resp::noContent();
    }
}
