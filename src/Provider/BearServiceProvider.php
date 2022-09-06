<?php

namespace GuardsmanPanda\Larabear\Provider;

use GuardsmanPanda\Larabear\Infrastructure\App\Command\BearValidateConfigurationCommand;
use GuardsmanPanda\Larabear\Infrastructure\Database\Command\BearCheckForeignKeysOnSoftDeletesCommand;
use GuardsmanPanda\Larabear\Infrastructure\Http\Command\BearGenerateSessionKeyCommand;
use Illuminate\Support\ServiceProvider;

class BearServiceProvider extends ServiceProvider {
    public function boot(): void {
        if ($this->app->runningInConsole()) {
            $this->commands(commands: [
                BearGenerateSessionKeyCommand::class,
                BearValidateConfigurationCommand::class,
                BearCheckForeignKeysOnSoftDeletesCommand::class,
            ]);
            $this->publishes(paths: [__DIR__ . '/../../config/config.php' => $this->app->configPath(path: 'bear.php'),], groups: 'bear');
            $this->loadMigrationsFrom(paths: [ __DIR__.'/../Migration']);
        }
    }
}
