<?php

namespace GuardsmanPanda\Larabear\Infrastructure\App\Command;

use GuardsmanPanda\Larabear\Infrastructure\Config\Service\BearConfigService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Model\BearLogDatabaseChange;
use Illuminate\Console\Command;

class LarabearCleanLogTablesCommand extends Command {
    protected $signature = 'larabear:clean-log-tables';
    protected $description = 'Clean the log tables';

    public function handle(): void {
        $days_to_store_database_changes = BearConfigService::getInteger(config_key: 'larabear.delete_log_database_change_days');
        $res = BearLogDatabaseChange::where(column: 'created_at', operator: '<', value: now()->subDays($days_to_store_database_changes))->delete();
        if ($res > 0) {
            $this->info(string: "Deleted $res rows from bear_log_database_change");
        }
    }
}
