<?php

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
            $table->text(column: 'config_text')->nullable();
            $table->text(column: 'encrypted_config_text')->nullable();
            $table->boolean(column: 'config_boolean')->nullable();
            $table->integer(column: 'config_integer')->nullable();
            $table->date(column: 'config_date')->nullable();
            $table->timestampTz(column: 'config_timestamp')->nullable();
            $table->jsonb(column: 'config_json')->default('{}');
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_config');
    }
};
