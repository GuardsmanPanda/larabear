<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Api\Monitoring\Controller;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\JsonResponse;

final class LarabearMonitoringQueueController extends Controller {
    public function failedJobsCount(): JsonResponse {
        BearGlobalStateService::setLogResponseError(value: false);
        $failed_jobs_count = DB::table(table: config(key: 'queue.failed.table'))->count();
        return new JsonResponse(data: ['failed_jobs_count' => $failed_jobs_count], status: $failed_jobs_count > 0 ? 500 : 200);
    }

    public function staleJobsCount(): JsonResponse {
        BearGlobalStateService::setLogResponseError(value: false);
        $jobs_table = config(key: 'queue.connections.database.table');
        $minutes = Req::getIntOrDefault(key: 'minutes', default: 30);
        $stale_jobs_count = DB::table(table: $jobs_table)
            ->where(column: 'available_at', operator: '<', value: now()->subMinutes($minutes)->getTimestamp())
            ->count();
        return new JsonResponse(data: ['stale_jobs_count' => $stale_jobs_count], status: $stale_jobs_count > 0 ? 500 : 200);
    }
}
