<?php

namespace GuardsmanPanda\Larabear\Infrastructure\App\Command;

use GuardsmanPanda\Larabear\Infrastructure\Config\Service\BearConfigService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class LarabearCleanLogTablesCommand extends Command {
    protected $signature = 'larabear:clean-log-tables';
    protected $description = 'Clean the log tables';

    public function handle(): void {
        $days_to_store_database_changes = BearConfigService::getInteger(config_key: 'larabear.delete_log_database_change_days');
        $res = DB::delete("DELETE FROM bear_log_database_change WHERE created_at < NOW() - INTERVAL ? DAY", [$days_to_store_database_changes]);
        if ($res > 0) {
            $this->info(string: "Deleted $res rows from bear_log_database_change");
        }
    }
}
