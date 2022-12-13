<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigCreator;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists(table: 'bear_config');
        if (BearDatabaseService::defaultConnectionDriver() === 'mysql') {
            DB::statement("
                    CREATE TABLE bear_config (
                        config_key VARCHAR(255) PRIMARY KEY,
                        config_description TEXT NULL,
                        config_data_type VARCHAR(255) NOT NULL,
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
                $table->text(column: 'config_data_type');
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
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_config');
    }
};
