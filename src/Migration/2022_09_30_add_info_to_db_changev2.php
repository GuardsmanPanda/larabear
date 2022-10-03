<?php

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        try {
            Schema::table('bear_log_database_change', static function (Blueprint $table) {
                $table->dropColumn(columns: 'request_id');
                $table->dropColumn(columns: 'console_id');
            });
        } catch (Throwable $t) {
            // Do nothing
        }
        Schema::table('bear_log_database_change', static function (Blueprint $table) {
            if (BearDBService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'request_id')->nullable();
            } else {
                $table->string(column: 'request_id')->nullable();
            }
            $table->uuid(column: 'console_id')->nullable();
        });
    }

    public function down(): void {
        Schema::table('bear_log_database_change', static function (Blueprint $table) {
            $table->dropColumn(columns: 'request_id');
            $table->dropColumn(columns: 'console_id');
        });
    }
};
