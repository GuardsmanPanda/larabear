<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Console\Listener;

use Carbon\Carbon;
use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Console\Crud\BearConsoleEventCreator;
use GuardsmanPanda\Larabear\Infrastructure\Console\Crud\BearConsoleEventUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use Illuminate\Console\Events\CommandFinished;
use Illuminate\Console\Events\CommandStarting;
use Illuminate\Console\Events\ScheduledTaskFinished;
use Illuminate\Console\Events\ScheduledTaskStarting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Str;
use RuntimeException;
use Throwable;

final class ConsoleRegisterListeners {
    /** @var array<string> $ignoreCommands */
    private static array $ignoreCommands = [
        '',
        'about',
        'migrate:status',
        'optimize',
        'optimize:clear',
        'package:discover',
        'schedule:run',
        'queue:work',
    ];

    public static function RegisterListeners(): void {
        Event::listen(events: CommandStarting::class, listener: static function ($event) {
            BearGlobalStateService::setConsoleId(consoleId: Str::uuid()->toString());
            if ($event->command === null || in_array(needle: $event->command, haystack: self::$ignoreCommands, strict: true)) {
                return;
            }
            try {
                DB::beginTransaction();
                BearConsoleEventCreator::create(
                    event_type: 'COMMAND',
                    command: $event->input->__toString(),
                );
                DB::commit();
            } catch (Throwable $t) {
                DB::rollBack();
                BearErrorCreator::create(message: $t->getMessage(), slug: 'larabear::log-console-command-starting', severity: BearSeverityEnum::WARNING, exception: $t);
            }
        });


        Event::listen(events: ScheduledTaskStarting::class, listener: static function ($event) {
            BearGlobalStateService::setConsoleId(consoleId: Str::uuid()->toString());
            try {
                DB::beginTransaction();
                $event->task->storeOutput();
                BearConsoleEventCreator::create(
                    event_type: 'SCHEDULED_TASK',
                    command: $event->task->command ?? $event->task->getSummaryForDisplay(),
                    cron_schedule_expression: $event->task->expression,
                    cron_schedule_timezone: $event->task->timezone,
                );
                DB::commit();
            } catch (Throwable $t) {
                DB::rollBack();
                BearErrorCreator::create(message: $t->getMessage(), slug: 'larabear::log-console-scheduled-task-starting', severity: BearSeverityEnum::WARNING, exception: $t);
            }
        });


        Event::listen(events: CommandFinished::class, listener: static function ($event) {
            if ($event->command === null || in_array(needle: $event->command, haystack: self::$ignoreCommands, strict: true)) {
                return;
            }
            try {
                DB::beginTransaction();
                $updater = BearConsoleEventUpdater::fromConsoleEventId(consoleEventId: BearGlobalStateService::getConsoleId());
                if ($event->exitCode === 0) {
                    $updater->setFinishedAt(Carbon::now());
                } else {
                    $updater->setFailedAt(Carbon::now());
                }
                $updater->setExecutionTimeMicroseconds((int)((microtime(as_float: true) - get_defined_constants()['LARAVEL_START']) * 1_000_000))->update();
                DB::commit();
            } catch (Throwable $t) {
                DB::rollBack();
                BearErrorCreator::create(message: $t->getMessage(), slug: 'larabear::log-console-command-finished', severity: BearSeverityEnum::WARNING, exception: $t);
            }
        });


        Event::listen(events: ScheduledTaskFinished::class, listener: static function ($event) {
            try {
                DB::beginTransaction();
                $updater = BearConsoleEventUpdater::fromConsoleEventId(consoleEventId: BearGlobalStateService::getConsoleId());
                if ($event->task->exitCode === 0) {
                    $updater->setFinishedAt(Carbon::now());
                } else {
                    $updater->setFailedAt(Carbon::now());
                    $command = $event->task->command;
                    BearErrorCreator::create(
                        message: "Scheduled task [$command] failed",
                        slug: 'larabear::scheduled-task-failed',
                        severity: BearSeverityEnum::WARNING,
                    );
                }
                $updater->setExecutionTimeMicroseconds((int)($event->runtime * 1_000_000));
                try {
                    $data = file_get_contents($event->task->output);
                    if (!is_string($data)) {
                        throw new RuntimeException(message: 'Could not read scheduled task output');
                    }
                    $updater->setOutput(output: $data )->update();
                } catch (Throwable $t) {
                    $updater->setOutput(output: "# Command output not available [{$t->getMessage()}]")->update();
                }
                DB::commit();
            } catch (Throwable $t) {
                DB::rollBack();
                BearErrorCreator::create(message: $t->getMessage(), slug: 'larabear::log-console-scheduled-task-finished', severity: BearSeverityEnum::WARNING, exception: $t);
            }
        });
    }
}
