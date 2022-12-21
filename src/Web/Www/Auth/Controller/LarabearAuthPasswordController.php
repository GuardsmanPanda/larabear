<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Auth\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearAccessTokenUserCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearUserUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Config\Service\BearConfigService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
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

        (new BearUserUpdater($user))->setLastLoginNow()->update();
        return new JsonResponse(data: [
            'id' => $user->id,
            'user_email' => $user->user_email,
            'user_first_name' => $user->user_first_name,
            'user_last_name' => $user->user_last_name,
            'user_display_name' => $user->user_display_name,
            'user_city' => $user->user_city,
            'user_country_iso2_code' => $user->user_country_iso2_code,
            'user_language_iso2_code' => $user->user_language_iso2_code,
            'user_data_json' => $user->user_data_json,
            'roles' => DB::select(query: "SELECT role_slug FROM bear_role_user WHERE user_id = ?", bindings: [$user->id]),
            'permissions' => DB::select(query: "
                SELECT DISTINCT 
                    p.permission_slug
                FROM bear_permission p
                WHERE 
                    EXISTS(SELECT * FROM bear_role_user bru INNER JOIN bear_role_permission brp ON bru.role_slug = brp.role_slug WHERE bru.user_id = ? AND brp.permission_slug = p.permission_slug)
                    OR EXISTS(SELECT * FROM bear_permission_user WHERE user_id = ? AND permission_slug = p.permission_slug)
            ", bindings: [$user->id, $user->id]),
            'message' => 'Logged in successfully.',
            'token' => BearAccessTokenUserCreator::create(user: $user, expires_at: now()->addHours(value: 25)),
        ]);
    }
}
