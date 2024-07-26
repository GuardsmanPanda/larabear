<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_access_token', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->uuid(column: 'id')->primary()->default(DB::raw('gen_random_uuid()'));
                $table->text(column: 'api_primary_key')->nullable();
            } else {
                $table->uuid(column: 'id')->primary();
                $table->string(column: 'api_primary_key')->nullable();
            }
            $table->text(column: 'description');
            $table->text(column: 'path_prefix_restriction')->default('');
            $table->ipAddress(column: 'ip_restriction')->default('0.0.0.0/0');
            $table->timestampTz(column: 'expires_at')->nullable();
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'external_api_enum')->nullable();
                $table->text(column: 'hashed_access_token')->index();
            } else {
                $table->string(column: 'external_api_enum')->nullable();
                $table->string(column: 'hashed_access_token')->index();
            }
            $table->date(column: 'last_usage_date')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
            $table->foreign('external_api_enum')->references('enum')->on(table: 'bear_external_api');
        });
    }


    public function down(): void {
        Schema::dropIfExists('bear_access_token');
    }
};
