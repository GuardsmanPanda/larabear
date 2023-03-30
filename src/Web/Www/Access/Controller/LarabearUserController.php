<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Access\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearPermissionUserCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearPermissionUserDeleter;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearRoleUserCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearRoleUserDeleter;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearPermissionUser;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRoleUser;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Htmx;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

final class LarabearUserController extends Controller {
    public function index(): View {
        return Resp::view(view: 'larabear-access::user.index', data: [
            'users' => DB::select(query: "
                SELECT u.* FROM bear_user u ORDER BY u.user_display_name
            "),
        ]);
    }

    public function roleAndPermissionDialog(string $user_id): View {
        $user = BearUser::findOrFail(id: $user_id);
        return Htmx::dialogView(view: 'larabear-access::user.user-role-permission', title: "Roles & Permissions For $user->user_display_name", data: [
            'user' => $user,
            'roles' => DB::select(query: "
                SELECT
                    r.*,
                    EXISTS(SELECT * FROM bear_role_user WHERE user_id = ? AND role_slug = r.role_slug) AS has_role
                FROM bear_role r
            ", bindings: [$user_id]),
            'permissions' => DB::select(query: "
                SELECT
                    p.*,
                    EXISTS(SELECT * FROM bear_permission_user WHERE user_id = ? AND permission_slug = p.permission_slug) AS has_permission,
                    EXISTS(SELECT * FROM bear_role_user bru INNER JOIN bear_role_permission brp ON bru.role_slug = brp.role_slug WHERE bru.user_id = ? AND brp.permission_slug = p.permission_slug) AS has_permission_from_role
                FROM bear_permission p
            ", bindings: [$user_id, $user_id]),
            ]);
    }

    public function addRoleToUser(string $user_id, string $role_slug): View {
        BearRoleUserCreator::create(role_slug: $role_slug, user_id: $user_id);
        return $this->roleAndPermissionDialog(user_id: $user_id);
    }

    public function deleteRoleFromUser(string $user_id, string $role_slug): View {
        BearRoleUserDeleter::delete(model: BearRoleUser::findOrFail(ids: ['user_id' => $user_id, 'role_slug' => $role_slug]));
        return $this->roleAndPermissionDialog(user_id: $user_id);
    }

    public function addPermissionToUser(string $user_id, string $permission_slug): View {
        BearPermissionUserCreator::create(permission_slug: $permission_slug, user_id: $user_id);
        return $this->roleAndPermissionDialog(user_id: $user_id);
    }

    public function deletePermissionFromUser(string $user_id, string $permission_slug): View {
        BearPermissionUserDeleter::delete(model: BearPermissionUser::findOrFail(ids: ['user_id' => $user_id, 'permission_slug' => $permission_slug]));
        return $this->roleAndPermissionDialog(user_id: $user_id);
    }
}
