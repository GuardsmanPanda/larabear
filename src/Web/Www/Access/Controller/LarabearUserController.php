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
                SELECT u.* FROM bear_user u ORDER BY u.display_name
            "),
        ]);
    }

    public function roleAndPermissionDialog(string $user_id): View {
        $user = BearUser::findOrFail(id: $user_id);
        return Htmx::dialogView(view: 'larabear-access::user.user-role-permission', title: "Roles & Permissions For $user->display_name", data: [
            'user' => $user,
            'roles' => DB::select(query: "
                SELECT
                    r.*,
                    EXISTS(SELECT * FROM bear_role_user WHERE user_id = ? AND role_enum = r.enum) AS has_role
                FROM bear_role r
            ", bindings: [$user_id]),
            'permissions' => DB::select(query: "
                SELECT
                    p.*,
                    EXISTS(SELECT * FROM bear_permission_user WHERE user_id = ? AND permission_enum = p.enum) AS has_permission,
                    EXISTS(SELECT * FROM bear_role_user bru INNER JOIN bear_role_permission brp ON bru.role_enum = brp.role_enum WHERE bru.user_id = ? AND brp.permission_enum = p.enum) AS has_permission_from_role
                FROM bear_permission p
            ", bindings: [$user_id, $user_id]),
            ]);
    }


    public function addRoleToUser(string $user_id, string $role_enum): View {
        BearRoleUserCreator::createFromString(role_enum: $role_enum, user_id: $user_id);
        return $this->roleAndPermissionDialog(user_id: $user_id);
    }


    public function deleteRoleFromUser(string $user_id, string $role_enum): View {
        BearRoleUserDeleter::delete(model: BearRoleUser::findOrFail(ids: ['user_id' => $user_id, 'role_enum' => $role_enum]));
        return $this->roleAndPermissionDialog(user_id: $user_id);
    }


    public function addPermissionToUser(string $user_id, string $permission_enum): View {
        BearPermissionUserCreator::createFromString(permission_enum: $permission_enum, user_id: $user_id);
        return $this->roleAndPermissionDialog(user_id: $user_id);
    }


    public function deletePermissionFromUser(string $user_id, string $permission_enum): View {
        BearPermissionUserDeleter::delete(model: BearPermissionUser::findOrFail(ids: ['user_id' => $user_id, 'permission_enum' => $permission_enum]));
        return $this->roleAndPermissionDialog(user_id: $user_id);
    }
}
