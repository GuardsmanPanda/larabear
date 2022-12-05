<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Access\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearRoleCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearRoleDeleter;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LarabearRoleController extends Controller {
    public function index(): View {
        return view(view: 'larabear-access::role.index', data: [
            'roles' => DB::select(query: "SELECT * FROM bear_role ORDER BY role_slug")
        ]);
    }

    public function createDialog(): View {
        return view(view: 'larabear-access::role.create');
    }

    public function create(): View {
        BearRoleCreator::create(role_slug: Req::getStringOrDefault(key: 'role_slug'), role_description: Req::getString(key: 'role_description'));
        return $this->index();
    }

    public function delete(string $slug): void {
        BearRoleDeleter::deleteFromRoleSlug(role_slug: $slug);
    }
}
