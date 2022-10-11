<?php

use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigCreator;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists(table: 'bear_config');
        if (BearDBService::defaultConnectionDriver() === 'mysql') {
            DB::statement("
                    CREATE TABLE bear_config (
                        config_key VARCHAR(255) PRIMARY KEY,
                        config_description TEXT NULL,
                        config_string TEXT NULL,
                        encrypted_config_string TEXT NULL,
                        config_boolean TINYINT(1) NULL,
                        config_integer BIGINT NULL,
                        config_date DATE NULL,
                        config_timestamp TIMESTAMP NULL,
                        config_json JSON NULL DEFAULT (json_object()),
                        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                    );
            ");
        } else {
            Schema::create(table: 'bear_config', callback: static function (Blueprint $table): void {
                $table->text(column: 'config_key')->primary();
                $table->text(column: 'config_description');
                $table->text(column: 'config_string')->nullable();
                $table->text(column: 'encrypted_config_string')->nullable();
                $table->boolean(column: 'config_boolean')->nullable();
                $table->bigInteger(column: 'config_integer')->nullable();
                $table->date(column: 'config_date')->nullable();
                $table->timestampTz(column: 'config_timestamp')->nullable();
                $table->jsonb(column: 'config_json')->default('{}');
                $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            });
        }
        try {
            DB::beginTransaction();
            BearConfigCreator::create(config_key: 'larabear.version', config_description: 'Version of the larabear package.', config_string: '0.5.0');
            BearConfigCreator::create(config_key: 'larabear.last_short_url_code', config_description: 'Used for Generation ShortUrl codes. (BearShortUrlCodeService.php)', config_string: '1');
            BearConfigCreator::create(config_key: 'larabear.delete_log_console_event_days', config_description: 'How many days to store console errors.', config_integer: 60);
            BearConfigCreator::create(config_key: 'larabear.delete_log_response_error_days', config_description: 'How many days to store response errors.', config_integer: 60);
            BearConfigCreator::create(config_key: 'larabear.delete_log_access_token_days', config_description: 'How many days to store access token logs.', config_integer: 60);
            DB::commit();
        } catch (Throwable $t) {
            DB::rollBack();
            throw $t;
        }
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_config');
    }
};
