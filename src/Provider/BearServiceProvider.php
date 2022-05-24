<?php

namespace GuardsmanPanda\Larabear\Provider;

use GuardsmanPanda\Larabear\Command\BearConfigMergeCommand;
use GuardsmanPanda\Larabear\Command\BearGenerateSessionKeyCommand;
use GuardsmanPanda\Larabear\Command\BearValidateConfigurationCommand;
use Illuminate\Support\ServiceProvider;

class BearServiceProvider extends ServiceProvider {
    public function boot(): void {
        if ($this->app->runningInConsole()) {
            $this->commands(commands: [
                BearConfigMergeCommand::class,
                BearGenerateSessionKeyCommand::class,
                BearValidateConfigurationCommand::class,
            ]);

            $this->publishes(paths:[
                __DIR__ . '/../../config/config.php' => $this->app->configPath(path: 'bear.php'),
            ]);
        }
    }
}
