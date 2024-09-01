<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_country_division', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'country_cca2');
                $table->text(column: 'iso_3166');
            } else {
                $table->string(column: 'country_cca2');
                $table->string(column: 'iso_3166');
            }
            $table->text(column: 'name');
            $table->text(column: 'capital');
            $table->integer(column: 'area_km2');
            $table->integer(column: 'local_area_rank');
            $table->integer(column: 'global_area_rank');
            $table->integer(column: 'population');
            $table->integer(column: 'local_population_rank');
            $table->integer(column: 'global_population_rank');
            $table->timestampTz(column: 'created_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));

            $table->primary(columns: ['country_cca2', 'iso_3166']);
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_country_division');
    }
};
