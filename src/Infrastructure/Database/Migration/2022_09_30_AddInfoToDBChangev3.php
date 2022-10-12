<?php

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        $cols = Schema::getColumnListing(table: 'bear_log_database_change');
        if (in_array(needle: 'request_id', haystack: $cols, strict: true)) {
            Schema::table(table: 'bear_log_database_change', callback: static function (Blueprint $table): void {
                $table->dropColumn(columns: 'request_id');
            });
        }
        if (in_array(needle: 'console_id', haystack: $cols, strict: true)) {
            Schema::table(table: 'bear_log_database_change', callback: static function (Blueprint $table): void {
                $table->dropColumn(columns: 'console_id');
            });
        }

        Schema::table('bear_log_database_change', static function (Blueprint $table) {
            if (BearDBService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'request_http_hostname')->nullable();
                $table->text(column: 'request_id')->nullable();
            } else {
                $table->string(column: 'request_http_hostname')->nullable();
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
