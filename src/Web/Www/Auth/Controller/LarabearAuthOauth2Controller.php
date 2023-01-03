<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Auth\Controller;

use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearUserUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Config\Service\BearConfigService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Service\BearOauth2ClientService;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Throwable;

class LarabearAuthOauth2Controller extends Controller {
    public function showSignInForm(): View {
        return Resp::view(view: 'Auth::sign-in-form', data: [
            'oauth2_clients' => DB::select(query: 'SELECT oauth2_client_id, oauth2_client_type FROM bear_oauth2_client'),
        ]);
    }

    public function oauth2Redirect(string $oauth2_client_id): RedirectResponse {
        return BearOauth2ClientService::getAuthorizeRedirectResponse(
            client: BearOauth2Client::findOrFail(id: $oauth2_client_id),
            afterSignInRedirectPath: Req::getString(key: 'redirect-path', defaultIfMissing: null),
            loginUser: Req::getBoolOrDefault(key: 'login-user', default: true),
            overwriteRedirectUri: "/bear/auth/oauth2-client/$oauth2_client_id/callback",
            specialScope: Req::getString(key: 'special-scope', defaultIfMissing: null),
            accountPrompt: Req::getBoolOrDefault(key: 'account-prompt', default: false),
        );
    }

    public static function oauth2Callback(string $oauth2_client_id): RedirectResponse {
        if (Req::getStringOrDefault(key: 'state', default: '-----') !== Session::get(key: 'oauth2_state')) {
            return Resp::redirectWithMessage(url: BearConfigService::getString(config_key: 'larabear-auth.path_to_redirect_if_not_logged_in'), message: 'Invalid state');
        }
        try {
            DB::beginTransaction();
            $afterLoginRedirect = Session::get(key: 'oauth2_redirect_url') ?? BearConfigService::getString(config_key: 'larabear-auth.path_to_redirect_after_login');
            $redirectUri = config(key: 'app.url') . "/bear/auth/oauth2-client/$oauth2_client_id/callback";
            $createUserIfNotExists = BearConfigService::getBoolean(config_key: 'larabear-auth.oauth2_create_user_if_not_exists');
            if (Session::get(key: 'oauth2_login_user', default: false) !== true) {
                $createUserIfNotExists = false;
            }
            $user = BearOauth2ClientService::getUserFromCallback(
                client: BearOauth2Client::findOrFail(id: $oauth2_client_id),
                code: Req::getStringOrDefault(key: 'code'),
                redirectUri: $redirectUri,
                createBearUser: $createUserIfNotExists
            );
            if ($user->user_id !== null && Session::get(key: 'oauth2_login_user', default: false) === true) {
                BearUserUpdater::fromId(id: $user->user_id)->setLastLoginNow()->update();
                Session::migrate(destroy: true);
                Session::put(key: 'bear_user_id', value: $user->user_id);
            }
            DB::commit();
            return new RedirectResponse(url: $afterLoginRedirect);
        } catch (Throwable $t) {
            DB::rollBack();
            BearLogErrorCreator::create(
                message: "Error while getting user from callback",
                namespace: 'larabear', key: 'oauth2-user-callback',
                severity: BearSeverityEnum::CRITICAL,
                exception: $t
            );
            return Resp::redirectWithMessage(url: BearConfigService::getString(config_key: 'larabear-auth.path_to_redirect_if_not_logged_in'), message: $t->getMessage());
        }
    }
}
