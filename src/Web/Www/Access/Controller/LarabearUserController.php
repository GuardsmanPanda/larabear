<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Access\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LarabearUserController extends Controller {
    public function index(): View {
        return view(view: 'larabear-access::user.index', data: [
            'users' => DB::select(query: "
                SELECT u.* FROM bear_user u ORDER BY u.user_display_name
            "),
        ]);
    }

    public function roleAndPermissionDialog(string $user_id): View {
        return view(view: 'larabear-access::user.index', data: [
            'user' => BearUser::findOrFail(id: $user_id),
            'roles' => DB::select(query: "
                SELECT
                    r.*,
                    EXISTS(SELECT * FROM bear_role_user WHERE user_id = ? AND role_slug = r.role_slug) AS has_role
                FROM bear_role r
            ", bindings: [$user_id]),
            'permissions' => DB::select(query: "
                SELECT
                    p.*,
                   EXISTS(SELECT * FROM bear_permission_user WHERE user_id = ? AND permission_slug = p.permission_slug) AS has_permission
                FROM bear_permission p
            ", bindings: [$user_id]),
            ]);
    }
}