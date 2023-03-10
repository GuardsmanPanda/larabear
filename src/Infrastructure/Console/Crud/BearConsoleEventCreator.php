<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Console\Crud;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Console\Model\BearConsoleEvent;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

final class BearConsoleEventCreator {
    public static function create(
        string $console_event_type,
        string $console_command,
        string $cron_schedule_expression = null,
        string $cron_schedule_timezone = null,
        CarbonInterface $console_event_finished_at = null,
        CarbonInterface $console_event_failed_at = null,
        int $execution_time_microseconds = null,
        string $console_event_output = null
    ): BearConsoleEvent {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearConsoleEvent();

        $model->console_event_type = $console_event_type;
        $model->console_command = $console_command;
        $model->console_event_started_at = Carbon::now();
        $model->console_id = BearGlobalStateService::getConsoleId();
        $model->cron_schedule_expression = $cron_schedule_expression;
        $model->cron_schedule_timezone = $cron_schedule_timezone;
        $model->console_event_finished_at = $console_event_finished_at;
        $model->console_event_failed_at = $console_event_failed_at;
        $model->execution_time_microseconds = $execution_time_microseconds;
        $model->console_event_output = $console_event_output;

        $model->save();
        return $model;
    }
}
