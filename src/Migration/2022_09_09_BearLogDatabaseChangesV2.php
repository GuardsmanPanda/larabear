<?php

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearMigrationService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists(table: 'bear_log_database_changes');
        Schema::create(table: 'bear_log_database_change', callback: static function (Blueprint $table): void {
            $table->id();
            if (BearDBService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'table_name')->index();
                $table->text(column: 'column_name')->nullable()->index();
                $table->bigInteger(column: 'record_id')->nullable()->index();
                $table->uuid(column: 'record_uuid')->nullable()->index();
                $table->text(column: 'record_identifier')->nullable()->index();
                $table->text(column: 'old_value')->nullable();
                $table->text(column: 'new_value')->nullable();
                $table->text(column: 'change_type');

            } else {
                $table->string(column: 'table_name')->index();
                $table->string(column: 'column_name')->nullable()->index();
                $table->bigInteger(column: 'record_id')->nullable()->index();
                $table->uuid(column: 'record_uuid')->nullable()->index();
                $table->string(column: 'record_identifier')->nullable()->index();
                $table->text(column: 'old_value')->nullable();
                $table->text(column: 'new_value')->nullable();
                $table->string(column: 'change_type');
            }
            $table->jsonb(column: 'record_json')->nullable();
            $table->boolean(column: 'is_soft_deletion')->nullable();
            BearMigrationService::buildUserReferencingColumn(table: $table, columnName: 'changed_by_user_id');
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->ipAddress(column: 'request_ip')->nullable()->index();
            if (BearDBService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'request_country_code')->nullable();
                $table->text(column: 'request_http_method');
                $table->text(column: 'request_http_path')->nullable();
            } else {
                $table->string(column: 'request_country_code')->nullable();
                $table->string(column: 'request_http_method');
                $table->string(column: 'request_http_path')->nullable();
            }
            $table->text(column: 'app_action_name')->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_log_database_change');
    }
};
