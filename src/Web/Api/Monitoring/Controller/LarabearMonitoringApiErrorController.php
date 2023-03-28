<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Api\Monitoring\Controller;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
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
        return new JsonResponse(data: ['error_count' => $error_count], status: $error_count > 0 ? 500 : 200);
    }
}
