<?php

namespace GuardsmanPanda\Larabear\Provider;

use Carbon\CarbonImmutable;
use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Command\BearValidateConfigurationCommand;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Console\Crud\BearLogConsoleEventCreator;
use GuardsmanPanda\Larabear\Infrastructure\Console\Crud\BearLogConsoleEventUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Database\Command\BearCheckForeignKeysOnSoftDeletesCommand;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Http\Command\BearGenerateSessionKeyCommand;
use Illuminate\Console\Events\CommandFinished;
use Illuminate\Console\Events\CommandStarting;
use Illuminate\Console\Events\ScheduledTaskFinished;
use Illuminate\Console\Events\ScheduledTaskStarting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Throwable;

class BearServiceProvider extends ServiceProvider {
    private array $ignoreCommands = [
        '',
        'about',
        'migrate',
        'optimize',
        'package:discover',
        'schedule:run',
    ];


    public function boot(): void {
        if ($this->app->runningInConsole()) {
            $this->addEventListeners();

            $this->commands(commands: [
                BearGenerateSessionKeyCommand::class,
                BearValidateConfigurationCommand::class,
                BearCheckForeignKeysOnSoftDeletesCommand::class,
            ]);

            $this->publishes(paths: [__DIR__ . '/../../config/config.php' => $this->app->configPath(path: 'bear.php'),], groups: 'bear');
            $this->loadMigrationsFrom(paths: [__DIR__ . '/../Migration']);
        }
    }


    private function addEventListeners(): void {
        Event::listen(events: CommandStarting::class, listener: function ($event) {
            if (in_array($event->command, $this->ignoreCommands, true)) {
                return;
            }
            BearGlobalStateService::setConsoleId(consoleId: Str::uuid()->toString());
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
                BearLogConsoleEventCreator::create(
                    console_event_type: 'scheduled_task',
                    console_command: $event->task->command,
                    cron_schedule_expression: $event->task->expression,
                    cron_schedule_timezone: $event->task->timezone,
                );
                DB::commit();
            } catch (Throwable $t) {
                DB::rollBack();
                BearLogErrorCreator::create(message: $t->getMessage(), namespace: 'larabear', key: 'log-console-scheduled-task-starting', severity: BearSeverityEnum::MEDIUM, exception: $t);
            }
        });


        Event::listen(events: CommandFinished::class, listener: function ($event) {
            if (in_array($event->command, $this->ignoreCommands, true)) {
                return;
            }
            try {
                DB::beginTransaction();
                $updater = BearLogConsoleEventUpdater::fromConsoleEventId(consoleEventId: BearGlobalStateService::getConsoleId());
                if ($event->exitCode === 0) {
                    $updater->setConsoleEventFinishedAt(CarbonImmutable::now());
                } else {
                    $updater->setConsoleEventFailedAt(CarbonImmutable::now());
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
                    $updater->setConsoleEventFinishedAt(CarbonImmutable::now());
                } else {
                    $updater->setConsoleEventFailedAt(CarbonImmutable::now());
                    $command = $event->task->command;
                    BearLogErrorCreator::create(
                        message: "Scheduled task [$command] failed",
                        namespace: 'larabear',
                        key: 'scheduled-task-failed',
                        severity: BearSeverityEnum::HIGH,
                    );
                }
                $updater->setExecutionTimeMicroseconds((int)($event->runtime * 1_000_000));
                $updater->save();
                DB::commit();
            } catch (Throwable $t) {
                DB::rollBack();
                BearLogErrorCreator::create(message: $t->getMessage(), namespace: 'larabear', key: 'log-console-scheduled-task-finished', severity: BearSeverityEnum::MEDIUM, exception: $t);
            }
        });
    }
}
