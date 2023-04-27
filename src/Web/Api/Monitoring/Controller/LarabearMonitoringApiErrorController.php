<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Api\Monitoring\Controller;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\LarabearDatabaseForeignKeyService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Json;
use GuardsmanPanda\Larabear\Web\Api\Monitoring\Exception\LarabearMonitoringException;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\JsonResponse;

final class LarabearMonitoringApiErrorController extends Controller {
    public function noSevereErrors(): JsonResponse {
        BearGlobalStateService::setLogResponseError(value: false);
        $error_count = DB::selectOne(query: "
            SELECT COUNT(*) AS error_count
            FROM bear_error
            WHERE error_severity IN ('HIGH', 'CRITICAL', 'EMERGENCY')
        ")->error_count;
        return $error_count === 0 ? Json::empty() : throw new LarabearMonitoringException(detail: "There are $error_count severe errors with severity HIGH, CRITICAL or EMERGENCY");
    }

    public function noSoftDeleteErrors(): JsonResponse {
        BearGlobalStateService::setLogResponseError(value: false);
        $connection = config(key: 'database.default');
        $error = LarabearDatabaseForeignKeyService::getSoftDeletedForeignKeyConstraints($connection);
        return new JsonResponse(data: $error, status: count($error) > 0 ? 500 : 200);
    }
}
