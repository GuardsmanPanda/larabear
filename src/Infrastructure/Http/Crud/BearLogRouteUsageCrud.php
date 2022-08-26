<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\DB;

class BearLogRouteUsageCrud {
    public static function createOrUpdate(): void {
        $method = Req::method();
        $route = Req::routePath();
        $action = Req::actionName();
        if ($route === null || $action === null) {
            return;
        }
        DB::insert(query: "
        ");
    }
}