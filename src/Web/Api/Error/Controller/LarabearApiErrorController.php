<?php

namespace GuardsmanPanda\Larabear\Web\Api\Error\Controller;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\LarabearDatabaseForeignKeyService;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\JsonResponse;

class LarabearApiErrorController extends Controller {
    public function kumaAlert(): JsonResponse {
        BearGlobalStateService::setLogResponseError(value: false);
        $error_count = DB::selectOne(query: "
            SELECT COUNT(*) AS error_count
            FROM bear_log_error
            WHERE error_severity IN ('HIGH', 'CRITICAL', 'EMERGENCY')
        ")->error_count;
        return new JsonResponse(data: ['error_count' => $error_count], status: $error_count > 0 ? 500 : 200);
    }

    public function dbSoftDeleteErrors(): JsonResponse {
        BearGlobalStateService::setLogResponseError(value: false);
        $connection = config(key: 'database.default');
        $error = LarabearDatabaseForeignKeyService::getSoftDeletedForeignKeyConstraints($connection);
        return new JsonResponse(data: $error, status: count($error) > 0 ? 500 : 200);
    }
}