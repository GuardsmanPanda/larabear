<?php

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearMigrationService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists('bear_user');
        Schema::create(table: 'bear_user', callback: static function (Blueprint $table) {
            $table->uuid(column: 'id')->primary();
            BearMigrationService::buildUserReferencingColumn(table: $table, columnName: 'linked_user_id');
            if (BearDBService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'user_display_name')->nullable();
                $table->text(column: 'user_email')->nullable()->index();
                $table->text(column: 'user_country_iso2_code')->nullable();
                $table->text(column: 'user_language_iso2_code')->nullable();
            } else {
                $table->string(column: 'user_display_name')->nullable();
                $table->string(column: 'user_email')->nullable()->index();
                $table->string(column: 'user_country_iso2_code')->nullable();
                $table->string(column: 'user_language_iso2_code')->nullable();
            }
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->useCurrentOnUpdate();
            $table->foreign('user_country_iso2_code')->references('country_iso2_code')->on('bear_country');
            $table->foreign('user_language_iso2_code')->references('language_iso2_code')->on('bear_language');
        });
    }

    public function down(): void {
        Schema::dropIfExists('bear_user');
    }
};
