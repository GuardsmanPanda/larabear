<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_country_subdivision_type', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'enum')->primary();
            } else {
                $table->string(column: 'enum')->primary();
            }
            $table->text(column: 'name');
            $table->timestampTz(column: 'created_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_country_subdivision_type');
    }
};
