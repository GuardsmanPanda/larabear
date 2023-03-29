<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigCreator;
use GuardsmanPanda\Larabear\Infrastructure\Config\Enum\BearConfigType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void {
        DB::delete(query: "DELETE FROM bear_config WHERE config_key = 'larabear::log-console-event-store-for-days';");
        DB::delete(query: "DELETE FROM bear_config WHERE config_key = 'larabear::log-access-token-store-for-days';");
        DB::delete(query: "DELETE FROM bear_config WHERE config_key = 'larabear::log-response-error-store-for-days';");
        BearConfigCreator::create(
            config_key: 'larabear::log-store-for-days',
            config_description: 'How many days to store console errors.',
            config_data_type: BearConfigType::INTEGER,
            config_integer: 60
        );
    }

    public function down(): void {
        throw new RuntimeException(message: 'Cannot reverse this migration.');
    }
};
