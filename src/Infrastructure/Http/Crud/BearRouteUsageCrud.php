<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\DB;

final class BearRouteUsageCrud {
    public static function createOrUpdate(int $multiply = 1): void {
        $method = Req::method();
        $route = Req::routePath();
        $action = Req::actionName();
        if ($action === null) {
            return;
        }
        $time = 0;
        if (defined(constant_name: 'LARAVEL_START')) {
            $time = (int)((microtime(as_float: true) - get_defined_constants()['LARAVEL_START']) * 1_000_000 * $multiply);
        }
        if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
            DB::insert(query: "
            INSERT INTO bear_route_usage (http_method, http_path, action_name, count, time_microseconds)
            VALUES (?, ?, ?, ?, ?)
            ON CONFLICT (http_method, http_path, action_name)  DO UPDATE SET
                last_usage_at = NOW(),                                                                                                  
                count = bear_route_usage.count + excluded.count,
                time_microseconds = bear_route_usage.time_microseconds + excluded.time_microseconds
        ", bindings: [$method, $route, $action, $multiply, $time]);
        }
    }
}
