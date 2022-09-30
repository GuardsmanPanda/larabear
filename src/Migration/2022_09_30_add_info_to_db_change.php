<?php

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('bear_log_database_changes', static function (Blueprint $table) {
            if (BearDBService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'request_id')->nullable();
                $table->text(column: 'console_id')->nullable();
            } else {
                $table->string(column: 'request_id')->nullable();
                $table->string(column: 'console_id')->nullable();
            }
        });
    }

    public function down(): void {
        Schema::table('bear_log_database_changes', static function (Blueprint $table) {
            $table->dropColumn(columns: 'request_id');
            $table->dropColumn(columns: 'console_id');
        });
    }
};
