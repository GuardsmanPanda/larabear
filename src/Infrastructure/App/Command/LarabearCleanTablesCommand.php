<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Command;

use GuardsmanPanda\Larabear\Infrastructure\Config\Service\BearConfigService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

final class LarabearCleanTablesCommand extends Command {
    protected $signature = 'larabear:clean-tables';
    protected $description = 'Clean the log tables';

    public function handle(): void {
        $days_to_store_database_changes = BearConfigService::getInteger(config_key: 'larabear::log-database-change-store-for-days');
        $res = DB::delete(query: "DELETE FROM bear_database_change WHERE created_at < ?", bindings: [now()->subDays($days_to_store_database_changes)->toDateString()]);
        if ($res > 0) {
            $this->info(string: "Deleted $res rows from bear_log_database_change");
        }

        $days_to_store_logs = BearConfigService::getInteger(config_key: 'larabear::log-store-for-days');
        $res = DB::delete(query: "DELETE FROM bear_console_event WHERE created_at < ?", bindings: [now()->subDays($days_to_store_logs)->toDateString()]);
        if ($res > 0) {
            $this->info(string: "Deleted $res rows from bear_console_event");
        }

        $res = DB::delete(query: "DELETE FROM bear_error WHERE created_at < ?", bindings: [now()->subDays($days_to_store_logs)->toDateString()]);
        if ($res > 0) {
            $this->info(string: "Deleted $res rows from bear_error_response");
        }

        $res = DB::delete(query: "DELETE FROM bear_error_response WHERE created_at < ?", bindings: [now()->subDays($days_to_store_logs)->toDateString()]);
        if ($res > 0) {
            $this->info(string: "Deleted $res rows from bear_error");
        }

        $res = DB::delete(query: "DELETE FROM bear_idempotency WHERE bear_idempotency.expires_at < NOW()");
        if ($res > 0) {
            $this->info(string: "Deleted $res rows from bear_idempotency");
        }
    }
}
