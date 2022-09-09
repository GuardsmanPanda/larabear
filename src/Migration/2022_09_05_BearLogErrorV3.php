<?php

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearMigrationService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists(table: 'bear_log_error');
        Schema::create(table: 'bear_log_error', callback: static function (Blueprint $table): void {
            $table->id();
            if (BearDBService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'error_severity')->index();
                $table->text(column: 'error_namespace')->index();
                $table->text(column: 'error_key')->nullable()->index();
            } else {
                $table->string(column: 'error_severity')->index();
                $table->string(column: 'error_namespace')->index();
                $table->string(column: 'error_key')->nullable()->index();
            }
            $table->text(column: 'error_message')->nullable();
            $table->text(column: 'error_remedy')->nullable();
            $table->text(column: 'exception_message')->nullable();
            $table->text(column: 'exception_trace')->nullable();
            BearMigrationService::buildUserReferencingColumn(table: $table, columnName: 'user_id');
            $table->ipAddress(column: 'request_ip')->nullable()->index();
            if (BearDBService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'request_country_code')->nullable();
                $table->text(column: 'request_http_method');
            } else {
                $table->string(column: 'request_country_code')->nullable();
                $table->string(column: 'request_http_method');
            }
            $table->text(column: 'request_http_path')->nullable();
            $table->jsonb(column: 'request_http_query_json')->nullable();
            $table->text(column: 'app_action_name')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('error_severity', 'error_severity_foreign')->references('slug')->on('bear_severity');
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_log_error');
    }
};