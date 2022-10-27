<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Console\Listener;

use Carbon\Carbon;
use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Console\Crud\BearLogConsoleEventCreator;
use GuardsmanPanda\Larabear\Infrastructure\Console\Crud\BearLogConsoleEventUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use Illuminate\Console\Events\CommandFinished;
use Illuminate\Console\Events\CommandStarting;
use Illuminate\Console\Events\ScheduledTaskFinished;
use Illuminate\Console\Events\ScheduledTaskStarting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Str;
use Throwable;

class ConsoleRegisterListeners {
    private static array $ignoreCommands = [
        '',
        'about',
        'migrate',
        'optimize',
        'optimize:clear',
        'package:discover',
        'schedule:run',
    ];

    public static function RegisterListeners(): void {
        Event::listen(events: CommandStarting::class, listener: static function ($event) {
            BearGlobalStateService::setConsoleId(consoleId: Str::uuid()->toString());
            if ($event->command === null || in_array(needle: $event->command, haystack: self::$ignoreCommands, strict: true)) {
                return;
            }
            try {
                DB::beginTransaction();
                BearLogConsoleEventCreator::create(
                    console_event_type: 'command',
                    console_command: $event->input->__toString(),
                );
                DB::commit();
            } catch (Throwable $t) {
                DB::rollBack();
                BearLogErrorCreator::create(message: $t->getMessage(), namespace: 'larabear', key: 'log-console-command-starting', severity: BearSeverityEnum::MEDIUM, exception: $t);
            }
        });


        Event::listen(events: ScheduledTaskStarting::class, listener: static function ($event) {
            BearGlobalStateService::setConsoleId(consoleId: Str::uuid()->toString());
            try {
                DB::beginTransaction();
                $event->task->storeOutput();
                BearLogConsoleEventCreator::create(
                    console_event_type: 'scheduled_task',
                    console_command: $event->task->command ?? $event->task->getSummaryForDisplay(),
                    cron_schedule_expression: $event->task->expression,
                    cron_schedule_timezone: $event->task->timezone,
                );
                DB::commit();
            } catch (Throwable $t) {
                DB::rollBack();
                BearLogErrorCreator::create(message: $t->getMessage(), namespace: 'larabear', key: 'log-console-scheduled-task-starting', severity: BearSeverityEnum::MEDIUM, exception: $t);
            }
        });


        Event::listen(events: CommandFinished::class, listener: static function ($event) {
            if ($event->command === null || in_array(needle: $event->command, haystack: self::$ignoreCommands, strict: true)) {
                return;
            }
            try {
                DB::beginTransaction();
                $updater = BearLogConsoleEventUpdater::fromConsoleEventId(consoleEventId: BearGlobalStateService::getConsoleId());
                if ($event->exitCode === 0) {
                    $updater->setConsoleEventFinishedAt(Carbon::now());
                } else {
                    $updater->setConsoleEventFailedAt(Carbon::now());
                }
                $updater->setExecutionTimeMicroseconds((int)((microtime(as_float: true) - get_defined_constants()['LARAVEL_START']) * 1_000_000));
                $updater->save();
                DB::commit();
            } catch (Throwable $t) {
                DB::rollBack();
                BearLogErrorCreator::create(message: $t->getMessage(), namespace: 'larabear', key: 'log-console-command-finished', severity: BearSeverityEnum::MEDIUM, exception: $t);
            }
        });


        Event::listen(events: ScheduledTaskFinished::class, listener: static function ($event) {
            try {
                DB::beginTransaction();
                $updater = BearLogConsoleEventUpdater::fromConsoleEventId(consoleEventId: BearGlobalStateService::getConsoleId());
                if ($event->task->exitCode === 0) {
                    $updater->setConsoleEventFinishedAt(Carbon::now());
                } else {
                    $updater->setConsoleEventFailedAt(Carbon::now());
                    $command = $event->task->command;
                    BearLogErrorCreator::create(
                        message: "Scheduled task [$command] failed",
                        namespace: 'larabear',
                        key: 'scheduled-task-failed',
                        severity: BearSeverityEnum::HIGH,
                    );
                }
                $updater->setExecutionTimeMicroseconds((int)($event->runtime * 1_000_000));
                try {
                    $updater->setConsoleEventOutput(file_get_contents($event->task->output));
                } catch (Throwable $t) {
                    $updater->setConsoleEventOutput("# Command output not available");
                }
                $updater->save();
                DB::commit();
            } catch (Throwable $t) {
                DB::rollBack();
                BearLogErrorCreator::create(message: $t->getMessage(), namespace: 'larabear', key: 'log-console-scheduled-task-finished', severity: BearSeverityEnum::MEDIUM, exception: $t);
            }
        });
    }
}
