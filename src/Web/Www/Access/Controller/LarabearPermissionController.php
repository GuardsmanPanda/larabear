<?php

namespace GuardsmanPanda\Larabear\Web\Www\Access\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearPermissionCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearPermissionDeleter;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LarabearPermissionController extends Controller {
    public function index(): View {
        return view(view: 'larabear-access::permission.index', data: [
            'permissions' => DB::select(query: "SELECT * FROM bear_permission ORDER BY permission_slug")
        ]);
    }

    public function createDialog(): View {
        return view(view: 'larabear-access::permission.create');
    }

    public function create(): View {
        BearPermissionCreator::create(permission_slug: Req::getStringOrDefault(key: 'permission_slug'), permission_description: Req::getString(key: 'permission_description'));
        return $this->index();
    }

    public function delete(string $slug): void {
        BearPermissionDeleter::deleteFromPermissionSlug(permission_slug: $slug);
    }
}
