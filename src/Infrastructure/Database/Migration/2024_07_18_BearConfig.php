<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigCreator;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_config', callback: static function (Blueprint $table): void {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'enum')->primary();
            } else {
                $table->string(column: 'enum')->primary();
            }
            $table->text(column: 'description');
            $table->text(column: 'config_string')->nullable();
            $table->text(column: 'encrypted_config_string')->nullable();
            $table->boolean(column: 'config_boolean')->nullable();
            $table->bigInteger(column: 'config_integer')->nullable();
            $table->date(column: 'config_date')->nullable();
            $table->timestampTz(column: 'config_timestamp')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }


    public function down(): void {
        Schema::dropIfExists(table: 'bear_config');
    }
};
