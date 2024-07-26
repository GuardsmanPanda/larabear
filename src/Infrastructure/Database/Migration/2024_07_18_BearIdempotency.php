<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_idempotency', callback: static function (Blueprint $table): void {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'idempotency_key')->primary();
            } else {
                $table->string(column: 'idempotency_key')->primary();
            }
            $table->timestampTz(column: 'created_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'expires_at')->nullable();
        });
    }


    public function down(): void {
        Schema::dropIfExists(table: 'bear_idempotency');
    }
};
