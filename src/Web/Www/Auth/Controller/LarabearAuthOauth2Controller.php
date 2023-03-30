<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Auth\Controller;

use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearUserLoginHistoryCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearUserUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Enum\BearUserLoginTypeEnum;
use GuardsmanPanda\Larabear\Infrastructure\Config\Service\BearConfigService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Service\BearOauth2ClientService;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Throwable;

final class LarabearAuthOauth2Controller extends Controller {

    public function oauth2Redirect(string $oauth2_client_id): RedirectResponse {
        return BearOauth2ClientService::getAuthorizeRedirectResponse(
            client: BearOauth2Client::findOrFail(id: $oauth2_client_id),
            afterSignInRedirectPath: Req::getString(key: 'redirect_path', defaultIfMissing: null),
            loginUser: Req::getBoolOrDefault(key: 'login_user', default: true),
            specialScope: Req::getString(key: 'special_scope', defaultIfMissing: null),
            accountPrompt: Req::getBoolOrDefault(key: 'account_prompt', default: false),
            internalRedirect: Req::getBoolOrDefault(key: 'internal_redirect', default: false),
        );
    }

    public static function oauth2Callback(string $oauth2_client_id): RedirectResponse {
        if (Req::getStringOrDefault(key: 'state', default: '-----') !== Session::get(key: 'oauth2_state')) {
            return Resp::redirectWithQueryMessage(url: BearConfigService::getString(config_key: 'larabear::path-to-redirect-if-not-logged-in'), message: 'Invalid state');
        }
        try {
            DB::beginTransaction();
            $afterLoginRedirect = Session::get(key: 'oauth2_redirect_path') ?? BearConfigService::getString(config_key: 'larabear::path-to-redirect-after-login');
            $redirectUri = config(key: 'app.url') . "/bear/auth/oauth2-client/$oauth2_client_id/callback";
            $createUserIfNotExists = BearConfigService::getBoolean(config_key: 'larabear::oauth2-create-user-if-not-exists');
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
                BearUserLoginHistoryCreator::create(user_id: $user->user_id, login_type: BearUserLoginTypeEnum::OAUTH2);
                BearUserUpdater::fromId(id: $user->user_id)->setLastLoginNow()->update();
                Session::migrate(destroy: true);
                Session::put(key: 'bear_user_id', value: $user->user_id);
            }
            DB::commit();
            return new RedirectResponse(url: $afterLoginRedirect);
        } catch (Throwable $t) {
            DB::rollBack();
            BearErrorCreator::create(
                message: "Error while getting user from callback",
                key: 'larabear::oauth2-user-callback',
                severity: BearSeverityEnum::CRITICAL,
                exception: $t
            );
            return Resp::redirectWithQueryMessage(url: BearConfigService::getString(config_key: 'larabear::path-to-redirect-if-not-logged-in'), message: $t->getMessage());
        }
    }
}
