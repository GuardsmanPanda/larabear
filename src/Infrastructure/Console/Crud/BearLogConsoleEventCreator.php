<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Console\Crud;

use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Console\Model\BearLogConsoleEvent;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use RuntimeException;
use stdClass;

class BearLogConsoleEventCreator {
    public static function create(
        string $console_event_type,
        string $console_command,
        stdClass $console_input_parameters,
        string $console_event_id,
        string $cron_schedule_expression = null,
        string $cron_schedule_timezone = null,
        CarbonInterface $console_event_finished_at = null,
        CarbonInterface $console_event_failed_at = null,
        int $execution_time_microseconds = null,
        string $console_event_output = null
    ): BearLogConsoleEvent {
        BearDBService::mustBeInTransaction();
        if (!Req::isWriteRequest()) {
            throw new RuntimeException(message: 'Database write operations should not be performed in read-only [GET, HEAD, OPTIONS] requests.');
        }
        $model = new BearLogConsoleEvent();

        $model->console_event_type = $console_event_type;
        $model->console_command = $console_command;
        $model->console_input_parameters = $console_input_parameters;
        $model->console_event_started_at = CarbonImmutable::now();
        $model->console_event_id = $console_event_id;
        $model->cron_schedule_expression = $cron_schedule_expression;
        $model->cron_schedule_timezone = $cron_schedule_timezone;
        $model->console_event_finished_at = $console_event_finished_at;
        $model->console_event_failed_at = $console_event_failed_at;
        $model->execution_time_microseconds = $execution_time_microseconds;
        $model->console_event_output = $console_event_output;

        $model->save();
        return $model->fresh();
    }
}
