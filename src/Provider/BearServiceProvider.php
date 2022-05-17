<?php

namespace GuardsmanPanda\Larabear\Provider;

use GuardsmanPanda\Larabear\Command\GenerateSessionKeyCommand;
use GuardsmanPanda\Larabear\Command\ValidateBearConfigurationCommand;
use Illuminate\Support\ServiceProvider;

class BearServiceProvider extends ServiceProvider {
    public function boot(): void {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateSessionKeyCommand::class,
                ValidateBearConfigurationCommand::class,
            ]);

            $this->publishes([
                __DIR__.'/../../config/config.php' => $this->app->configPath('bear.php'),
            ]);
        }
    }
}