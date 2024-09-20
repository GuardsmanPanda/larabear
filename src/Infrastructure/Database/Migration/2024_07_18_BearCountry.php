<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_country', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'cca2')->primary();
                $table->text(column: 'cca3')->unique();
            } else {
                $table->string(column: 'cca2')->primary();
                $table->string(column: 'cca3')->unique();
            }
            $table->text(column: 'name');
            $table->text(column: 'capital');
            $table->text(column: 'tld');
            $table->integer(column: 'area_km2');
            $table->integer(column: 'area_rank');
            $table->bigInteger(column: 'population');
            $table->integer(column: 'population_rank');
            $table->text(column: 'currency_code');
            $table->text(column: 'currency_name');
            $table->text(column: 'currency_symbol');
            $table->text(column: 'calling_code');
            $table->boolean(column: 'is_driving_side_right');
            $table->integer(column: 'osm_relation_id')->nullable();
            $table->timestampTz(column: 'osm_sync_at')->nullable();
            $table->jsonb(column: 'cca2_borders_json');
            $table->timestampTz(column: 'created_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_country');
    }
};
