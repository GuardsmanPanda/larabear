<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Command;

use GuardsmanPanda\Larabear\Infrastructure\Config\Service\BearConfigService;
use GuardsmanPanda\Larabear\Infrastructure\Console\Model\BearLogConsoleEvent;
use GuardsmanPanda\Larabear\Infrastructure\Database\Model\BearLogDatabaseChange;
use GuardsmanPanda\Larabear\Infrastructure\Error\Model\BearLogResponseError;
use Illuminate\Console\Command;

final class LarabearCleanLogTablesCommand extends Command {
    protected $signature = 'larabear:clean-log-tables';
    protected $description = 'Clean the log tables';

    public function handle(): void {
        $days_to_store_database_changes = BearConfigService::getInteger(config_key: 'larabear.delete_log_database_change_days');
        $res = BearLogDatabaseChange::where(column: 'created_at', operator: '<', value: now()->subDays($days_to_store_database_changes)->toDateString())->delete();
        if ($res > 0) {
            $this->info(string: "Deleted $res rows from bear_log_database_change");
        }

        $days_to_store_database_changes = BearConfigService::getInteger(config_key: 'larabear.delete_log_console_event_days');
        $res = BearLogConsoleEvent::where(column: 'created_at', operator: '<', value: now()->subDays($days_to_store_database_changes)->toDateString())->delete();
        if ($res > 0) {
            $this->info(string: "Deleted $res rows from bear_log_console_event");
        }

        $days_to_store_database_changes = BearConfigService::getInteger(config_key: 'larabear.delete_log_response_error_days');
        $res = BearLogResponseError::where(column: 'created_at', operator: '<', value: now()->subDays($days_to_store_database_changes)->toDateString())->delete();
        if ($res > 0) {
            $this->info(string: "Deleted $res rows from bear_log_response_error");
        }
    }
}
