<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Console\Crud;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Console\Model\BearConsoleEvent;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

final class BearConsoleEventCreator {
    public static function create(
        string $event_type,
        string $command,
        string $cron_schedule_expression = null,
        string $cron_schedule_timezone = null,
        CarbonInterface $finished_at = null,
        CarbonInterface $failed_at = null,
        int $execution_time_microseconds = null,
        string $output = null
    ): BearConsoleEvent {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['CLI']);

        $model = new BearConsoleEvent();

        $model->event_type = $event_type;
        $model->command = $command;
        $model->started_at = Carbon::now();
        $model->console_id = BearGlobalStateService::getConsoleId();
        $model->cron_schedule_expression = $cron_schedule_expression;
        $model->cron_schedule_timezone = $cron_schedule_timezone;
        $model->finished_at = $finished_at;
        $model->failed_at = $failed_at;
        $model->execution_time_microseconds = $execution_time_microseconds;
        $model->output = $output;

        $model->save();
        return $model;
    }
}
