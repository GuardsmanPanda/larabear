<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Access\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearRolePermissionCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearRolePermissionDeleter;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRolePermission;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Htmx;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearRoleCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearRoleDeleter;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

final class LarabearRoleController extends Controller {
    public function index(): View {
        return Resp::view(view: 'larabear-access::role.index', data: [
            'roles' => DB::select(query: "
                SELECT 
                    r.*,
                    (SELECT COUNT(*) FROM bear_role_permission WHERE role_slug = r.role_slug) AS permission_count
                FROM bear_role r ORDER BY role_slug
            "),
        ]);
    }

    public function createDialog(): View {
        return Htmx::dialogView(view: 'larabear-access::role.create', title: "Create Role");
    }

    public function create(): View {
        BearRoleCreator::create(role_slug: Req::getStringOrDefault(key: 'role_slug'), role_description: Req::getString(key: 'role_description'));
        return $this->index();
    }

    public function permissionDialog(string $role_slug): View {
        return Htmx::dialogView(view: 'larabear-access::role.role-permission', title: "Add / Remove Permissions From $role_slug", data: [
            'role_slug' => $role_slug,
            'permissions' => DB::select(query: "
                SELECT
                    p.*,
                    EXISTS(SELECT * FROM bear_role_permission WHERE role_slug = ? AND permission_slug = p.permission_slug) AS has_permission
                FROM bear_permission p
            ", bindings: [$role_slug]),
        ]);
    }

    public function addPermissionToRole(string $role_slug, string $permission_slug): view {
        BearRolePermissionCreator::create(role_slug: $role_slug, permission_slug: $permission_slug);
        return $this->permissionDialog(role_slug: $role_slug);
    }

    public function deletePermissionFromRole(string $role_slug, string $permission_slug): view {
        BearRolePermissionDeleter::delete(model: BearRolePermission::findOrFail([
            'role_slug' => $role_slug,
            'permission_slug' => $permission_slug,
        ]));
        return $this->permissionDialog(role_slug: $role_slug);
    }

    public function delete(string $role_slug): void {
        BearRoleDeleter::deleteFromRoleSlug(role_slug: $role_slug);
    }
}
