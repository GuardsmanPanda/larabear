<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Api\Monitoring\Controller;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Json;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Web\Api\Monitoring\Exception\LarabearMonitoringException;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\JsonResponse;

final class LarabearMonitoringApiQueueController extends Controller {
    public function noFailedJobs(): JsonResponse {
        BearGlobalStateService::setLogResponseError(value: false);
        $minutes = Req::getIntOrDefault(key: 'minutes', default: 50000);
        $failed_jobs_count = DB::table(table: config(key: 'queue.failed.table'))
            ->where(column: 'failed_at', operator: '>', value: now()->subMinutes($minutes)->toDateTimeString())
            ->count();
        return $failed_jobs_count === 0 ? Json::empty() : throw new LarabearMonitoringException(detail: "There are $failed_jobs_count failed jobs");
    }

    public function noStaleJobs(): JsonResponse {
        BearGlobalStateService::setLogResponseError(value: false);
        $jobs_table = config(key: 'queue.connections.database.table');
        $minutes = Req::getIntOrDefault(key: 'minutes', default: 30);
        $stale_jobs_count = DB::table(table: $jobs_table)
            ->where(column: 'available_at', operator: '<', value: now()->subMinutes($minutes)->getTimestamp())
            ->count();
        return $stale_jobs_count === 0 ? Json::empty() : throw new LarabearMonitoringException(detail: "There are $stale_jobs_count jobs that have been waiting for more than $minutes minutes");
    }
}
