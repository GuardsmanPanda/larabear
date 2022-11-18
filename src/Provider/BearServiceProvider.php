<?php

namespace GuardsmanPanda\Larabear\Provider;

use GuardsmanPanda\Larabear\Infrastructure\App\Command\LarabearValidateConfigurationCommand;
use GuardsmanPanda\Larabear\Infrastructure\App\Command\LarabearCleanLogTablesCommand;
use GuardsmanPanda\Larabear\Infrastructure\Console\Listener\ConsoleRegisterListeners;
use GuardsmanPanda\Larabear\Infrastructure\Database\Command\LarabearDatabaseCheckForeignKeysOnSoftDeletesCommand;
use GuardsmanPanda\Larabear\Infrastructure\Database\Command\LarabearDatabaseCrudGeneratorCommand;
use GuardsmanPanda\Larabear\Infrastructure\Http\Command\LarabearGenerateSessionKeyCommand;
use GuardsmanPanda\Larabear\Infrastructure\Integrity\Command\LarabearPhpStanCommand;
use GuardsmanPanda\Larabear\Infrastructure\Database\Command\LarabearDatabaseModelGeneratorCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class BearServiceProvider extends ServiceProvider {

    public function boot(): void {
        if (method_exists(object_or_class: Model::class, method: 'preventsAccessingMissingAttributes')) {
            Model::preventAccessingMissingAttributes();
        }
        if ($this->app->runningInConsole()) {
            ConsoleRegisterListeners::RegisterListeners();

            $this->commands(commands: [
                LarabearGenerateSessionKeyCommand::class,
                LarabearValidateConfigurationCommand::class,
                LarabearDatabaseCheckForeignKeysOnSoftDeletesCommand::class,
                LarabearCleanLogTablesCommand::class,
                LarabearDatabaseCrudGeneratorCommand::class,
                LarabearDatabaseModelGeneratorCommand::class,
                LarabearPhpStanCommand::class,
            ]);

            $this->publishes(paths: [__DIR__ . '/../../config/config.php' => $this->app->configPath(path: 'bear.php'),], groups: 'bear');
            $this->publishes(paths: [__DIR__ . '/../../assets/public' => $this->app->basePath(path: 'public'),], groups: 'bear-flags');
            $this->loadMigrationsFrom(paths: [__DIR__ . '/../Infrastructure/Database/Migration']);

            $this->app->booted(function () {
                $schedule = $this->app->make(Schedule::class);
                $schedule->command('larabear:clean-log-tables')->dailyAt(time: '01:45');
            });
        }
    }
}
