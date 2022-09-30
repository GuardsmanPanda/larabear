<?php

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearMigrationService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists(table: 'bear_log_response_error');
        Schema::create(table: 'bear_log_response_error', callback: static function (Blueprint $table) {
            $table->id();
            $table->ipAddress(column: 'request_ip')->index();
            BearMigrationService::buildUserReferencingColumn(table: $table, columnName: 'user_id');
            $table->integer(column: 'response_status_code')->index();
            if (BearDBService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'request_country_code')->nullable();
                $table->text(column: 'request_http_method');
                $table->text(column: 'request_http_path')->nullable();
            } else {
                $table->string(column: 'request_country_code')->nullable();
                $table->string(column: 'request_http_method');
                $table->string(column: 'request_http_path', length: 2048)->nullable();
            }
            $table->jsonb(column: 'request_http_query_json')->nullable();
            $table->text(column: 'request_http_hostname');
            $table->text(column: 'app_action_name')->nullable();
            $table->text(column: 'response_body');
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            if (BearDBService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'request_id')->nullable();
            } else {
                $table->string(column: 'request_id')->nullable();
            }
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_log_response_error');
    }
};
