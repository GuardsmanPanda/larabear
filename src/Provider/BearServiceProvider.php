<?php

namespace GuardsmanPanda\Larabear\Provider;

use GuardsmanPanda\Larabear\Infrastructure\App\Command\BearValidateConfigurationCommand;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Command\BearCheckForeignKeysOnSoftDeletesCommand;
use GuardsmanPanda\Larabear\Infrastructure\Http\Command\BearGenerateSessionKeyCommand;
use Illuminate\Console\Events\CommandFinished;
use Illuminate\Console\Events\CommandStarting;
use Illuminate\Console\Events\ScheduledTaskFinished;
use Illuminate\Console\Events\ScheduledTaskStarting;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class BearServiceProvider extends ServiceProvider {
    public function boot(): void {
        if ($this->app->runningInConsole()) {
            Event::listen(events: CommandStarting::class, listener: static function ($event) {
                BearGlobalStateService::setConsoleId(consoleId: Str::uuid()->toString());
            });

            Event::listen(events: ScheduledTaskStarting::class, listener: static function ($event) {
                BearGlobalStateService::setConsoleId(consoleId: Str::uuid()->toString());
            });

            Event::listen(events: CommandFinished::class, listener: function ($event) {
                //dd($event);
            });

            Event::listen(events: ScheduledTaskFinished::class, listener: function ($event) {
                //dd($event);
            });

            $this->commands(commands: [
                BearGenerateSessionKeyCommand::class,
                BearValidateConfigurationCommand::class,
                BearCheckForeignKeysOnSoftDeletesCommand::class,
            ]);

            $this->publishes(paths: [__DIR__ . '/../../config/config.php' => $this->app->configPath(path: 'bear.php'),], groups: 'bear');
            $this->loadMigrationsFrom(paths: [__DIR__ . '/../Migration']);
        }
    }
}
