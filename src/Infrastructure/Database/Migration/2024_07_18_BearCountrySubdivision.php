<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_country_subdivision', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'iso_3166')->primary();
                $table->text(column: 'country_cca2');
            } else {
                $table->string(column: 'iso_3166')->primary();
                $table->string(column: 'country_cca2');
            }
            $table->text(column: 'name');
            $table->text(column: 'capital');
            $table->integer(column: 'osm_relation_id');
            $table->text(column: 'country_subdivision_type_enum');
            $table->timestampTz(column: 'created_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));

            $table->foreign(columns: 'country_cca2')->references('cca2')->on(table: 'bear_country');
            $table->foreign(columns: 'country_subdivision_type_enum')->references('enum')->on(table: 'bear_country_subdivision_type');
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_country_subdivision');
    }
};
