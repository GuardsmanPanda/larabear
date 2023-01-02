<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\UserApi\User\Service;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\JsonResponse;

class LarabearUserApiUserService {
    public static function getUserResponse(BearUser $user, string $token = null): JsonResponse {
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
            'token' => $token,
        ]);
    }
}
