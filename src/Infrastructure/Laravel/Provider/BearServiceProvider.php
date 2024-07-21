<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Laravel\Provider;

use GuardsmanPanda\Larabear\Infrastructure\App\Command\LarabearCleanTablesCommand;
use GuardsmanPanda\Larabear\Infrastructure\App\Command\LarabearInitCommand;
use GuardsmanPanda\Larabear\Infrastructure\App\Command\LarabearValidateConfigurationCommand;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Enum\LarabearPermissionEnum;
use GuardsmanPanda\Larabear\Infrastructure\Console\Listener\ConsoleRegisterListeners;
use GuardsmanPanda\Larabear\Infrastructure\Database\Command\LarabearDatabaseCheckForeignKeysOnSoftDeletesCommand;
use GuardsmanPanda\Larabear\Infrastructure\Database\Command\LarabearDatabaseCrudGeneratorCommand;
use GuardsmanPanda\Larabear\Infrastructure\Database\Command\LarabearDatabaseModelGeneratorCommand;
use GuardsmanPanda\Larabear\Infrastructure\Http\Command\LarabearGenerateSessionKeyCommand;
use GuardsmanPanda\Larabear\Infrastructure\Http\Middleware\BearHtmxMiddleware;
use GuardsmanPanda\Larabear\Infrastructure\Http\Middleware\BearPermissionMiddleware;
use GuardsmanPanda\Larabear\Infrastructure\Http\Middleware\BearRoleMiddleware;
use GuardsmanPanda\Larabear\Infrastructure\Http\Middleware\BearSessionAuthMiddleware;
use GuardsmanPanda\Larabear\Infrastructure\Http\Middleware\BearTransactionMiddleware;
use GuardsmanPanda\Larabear\Infrastructure\Integrity\Command\LarabearPhpStanCommand;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Command\LarabearOauth2CheckAccessCommand;
use GuardsmanPanda\Larabear\Infrastructure\Security\Command\LarabearSecurityOsvScannerCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Contracts\Foundation\CachesRoutes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

final class BearServiceProvider extends ServiceProvider {
    public function boot(): void {
        Config::set(key: 'database.connections.larabear_transaction_free', value: Config::get(key: 'database.connections.' . Config::get(key: 'database.default')));

        if (!($this->app instanceof CachesRoutes && $this->app->routesAreCached())) {
            // Web Authentication Routes, mostly for the control panel.
            Route::prefix('bear')->middleware([
                BearSessionAuthMiddleware::onlyAuthenticated(),
                BearHtmxMiddleware::using(layout_location: 'larabear::layout'),
                BearTransactionMiddleware::class,
                BearPermissionMiddleware::using(permission: LarabearPermissionEnum::LARABEAR_UI)
            ])->group(function () {
                Route::prefix('')->group(base_path(path: 'vendor/guardsmanpanda/larabear/src/Web/Www/Dashboard/routes.php'));
                Route::prefix('access')->group(base_path(path: 'vendor/guardsmanpanda/larabear/src/Web/Www/Access/routes.php'));
                Route::prefix('credential')->group(base_path(path: 'vendor/guardsmanpanda/larabear/src/Web/Www/Credential/routes.php'));
                Route::prefix('config')->group(base_path(path: 'vendor/guardsmanpanda/larabear/src/Web/Www/Config/routes.php'));
                Route::prefix('log')->group(base_path(path: 'vendor/guardsmanpanda/larabear/src/Web/Www/Log/routes.php'));
            });

            // Routes with no authentication required.
            Route::prefix('bear')->middleware([BearSessionAuthMiddleware::allowGuests(), BearTransactionMiddleware::class])->group(function () {
                Route::prefix('auth')->group(base_path(path: 'vendor/guardsmanpanda/larabear/src/Web/Www/Auth/routes.php'));
            });
        }

        Model::preventAccessingMissingAttributes();
        app(abstract: 'router')->aliasMiddleware('permission', BearPermissionMiddleware::class);
        app(abstract: 'router')->aliasMiddleware('role', BearRoleMiddleware::class);
        app(abstract: 'router')->aliasMiddleware('session', BearSessionAuthMiddleware::class);

        if ($this->app->runningInConsole()) {
            ConsoleRegisterListeners::RegisterListeners();
            $this->commands(commands: [
                LarabearGenerateSessionKeyCommand::class,
                LarabearValidateConfigurationCommand::class,
                LarabearDatabaseCheckForeignKeysOnSoftDeletesCommand::class,
                LarabearCleanTablesCommand::class,
                LarabearDatabaseCrudGeneratorCommand::class,
                LarabearDatabaseModelGeneratorCommand::class,
                LarabearPhpStanCommand::class,
                LarabearInitCommand::class,
                LarabearSecurityOsvScannerCommand::class,
                LarabearOauth2CheckAccessCommand::class,
            ]);

            $this->publishes(paths: [base_path(path: 'vendor/guardsmanpanda/larabear/config/config.php') => $this->app->configPath(path: 'bear.php')], groups: 'bear');
            $this->publishes(paths: [base_path(path: 'vendor/guardsmanpanda/larabear/assets/public') => $this->app->basePath(path: 'public')], groups: 'bear-flags');
            $this->loadMigrationsFrom(paths: [base_path(path: 'vendor/guardsmanpanda/larabear/src/Infrastructure/Database/Migration')]);

            $this->app->booted(function () {
                $schedule = $this->app->make(abstract: Schedule::class);
                $schedule->command(LarabearCleanTablesCommand::class)->dailyAt(time: '01:45');
                $schedule->command(LarabearOauth2CheckAccessCommand::class)->dailyAt(time: '02:07');
            });
        } else {
            $this->loadViewsFrom(path: base_path(path: 'vendor/guardsmanpanda/larabear/src/Web/Www/Access/View'), namespace: 'larabear-access');
            $this->loadViewsFrom(path: base_path(path: 'vendor/guardsmanpanda/larabear/src/Web/Www/Credential/View'), namespace: 'larabear-credential');
            $this->loadViewsFrom(path: base_path(path: 'vendor/guardsmanpanda/larabear/src/Web/Www/Config/View'), namespace: 'larabear-config');
            $this->loadViewsFrom(path: base_path(path: 'vendor/guardsmanpanda/larabear/src/Web/Www/Dashboard/View'), namespace: 'larabear-dashboard');
            $this->loadViewsFrom(path: base_path(path: 'vendor/guardsmanpanda/larabear/src/Web/Www/Log/View'), namespace: 'larabear-log');
            $this->loadViewsFrom(path: base_path(path: 'vendor/guardsmanpanda/larabear/src/Web/Www/Internal/View'), namespace: 'larabear');
            $this->loadViewsFrom(path: base_path(path: 'vendor/guardsmanpanda/larabear/src/Infrastructure/Error/View'), namespace: 'larabear-error');
        }
        Blade::componentNamespace('GuardsmanPanda\\Larabear\\Web\\Www\\Shared\\Component', 'bear');
        $this->loadViewsFrom(path: base_path(path: 'vendor/guardsmanpanda/larabear/src/Web/Www/Shared/View'), namespace: 'bear');
    }
}
