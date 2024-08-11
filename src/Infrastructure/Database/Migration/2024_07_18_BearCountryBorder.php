<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_country_border', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'country_cca2');
                $table->text(column: 'bordering_country_cca2');
            } else {
                $table->string(column: 'country_cca2');
                $table->string(column: 'bordering_country_cca2');
            }
            $table->timestampTz(column: 'created_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
            $table->primary(columns: ['country_cca2', 'bordering_country_cca2']);
        });

    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_country_border');
    }
};
