<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Auth\Controller;

use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Action\BearAuthCookieLoginAction;
use GuardsmanPanda\Larabear\Infrastructure\Config\Enum\LarabearConfigEnum;
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
            afterSignInRedirectPath: Req::getStringOrNull(key: 'redirect_path', isOptional: true),
            loginUser: Req::getBoolOrDefault(key: 'login_user', default: true),
            specialScope: Req::getStringOrNull(key: 'special_scope', isOptional: true),
            accountPrompt: Req::getBoolOrDefault(key: 'account_prompt', default: false),
            internalRedirect: Req::getBoolOrDefault(key: 'internal_redirect', default: false),
        );
    }

    public static function oauth2Callback(string $oauth2_client_id): RedirectResponse {
        if (Req::getStringOrDefault(key: 'state', default: '-----') !== Session::get(key: 'oauth2_state')) {
            return Resp::redirect(url: BearConfigService::getString(enum: LarabearConfigEnum::LARABEAR_PATH_TO_REDIRECT_IF_NOT_LOGGED_IN), message: 'Invalid state');
        }
        try {
            DB::beginTransaction();
            $afterLoginRedirect = Session::get(key: 'oauth2_redirect_path') ?? BearConfigService::getString(enum: LarabearConfigEnum::LARABEAR_PATH_TO_REDIRECT_AFTER_LOGIN);
            $redirectUri = config(key: 'app.url') . "/bear/auth/oauth2-client/$oauth2_client_id/callback";
            $createUserIfNotExists = BearConfigService::getBoolean(enum: LarabearConfigEnum::LARABEAR_OAUTH2_CREATE_USER_IF_NOT_EXISTS);
            if (Session::get(key: 'oauth2_login_user', default: false) !== true) {
                $createUserIfNotExists = false;
            }
            $user = BearOauth2ClientService::getUserFromCallback(
                client: BearOauth2Client::findOrFail(id: $oauth2_client_id),
                code: Req::getString(key: 'code'),
                redirectUri: $redirectUri,
                createBearUser: $createUserIfNotExists
            );
            if ($user->user !== null && Session::get(key: 'oauth2_login_user', default: false) === true) {
                BearAuthCookieLoginAction::login(user: $user->user);
            }
            DB::commit();
            return new RedirectResponse(url: $afterLoginRedirect);
        } catch (Throwable $t) {
            DB::rollBack();
            BearErrorCreator::create(
                message: "Error while getting user from callback",
                slug: 'larabear::oauth2-user-callback',
                severity: BearSeverityEnum::CRITICAL,
                exception: $t
            );
            return Resp::redirect(url: BearConfigService::getString(enum: LarabearConfigEnum::LARABEAR_PATH_TO_REDIRECT_IF_NOT_LOGGED_IN), message: $t->getMessage());
        }
    }
}
