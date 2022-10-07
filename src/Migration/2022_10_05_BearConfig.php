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
        Schema::create(table: 'bear_config', callback: static function (Blueprint $table): void {
            if (BearDBService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'config_key')->primary();
            } else {
                $table->string(column: 'config_key')->primary();
            }
            $table->text(column: 'config_string')->nullable();
            $table->text(column: 'encrypted_config_string')->nullable();
            $table->boolean(column: 'config_boolean')->nullable();
            $table->integer(column: 'config_integer')->nullable();
            $table->date(column: 'config_date')->nullable();
            $table->timestampTz(column: 'config_timestamp')->nullable();
            if (BearDBService::defaultConnectionDriver() === 'pgsql') {
                $table->jsonb(column: 'config_json')->default( '{}');
            } else {
                $table->jsonb(column: 'config_json')->default( '(json_object())');
            }
            $table->timestampTz(column: 'created_at')->default(DB::raw( 'CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw( 'CURRENT_TIMESTAMP'));
        });

        BearConfigCreator::create(config_key: 'larabear.version', config_string: '0.4.0');
        BearConfigCreator::create(config_key: 'larabear.last_short_url_code', config_string: '1');
        BearConfigCreator::create(config_key: 'larabear.delete_log_console_event_after_days', config_integer: 60);
        BearConfigCreator::create(config_key: 'larabear.delete_log_response_error_after_days', config_integer: 60);
        BearConfigCreator::create(config_key: 'larabear.delete_log_access_token_after_days', config_integer: 60);
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_config');
    }
};
