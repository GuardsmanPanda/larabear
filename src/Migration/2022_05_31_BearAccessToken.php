<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_access_token', callback: static function (Blueprint $table) {
            if (DB::getPdo()->getAttribute(PDO::ATTR_DRIVER_NAME) === 'pgsql') {
                $table->uuid(column: 'id')->primary()->default(DB::raw('gen_random_uuid()'));
            }   else {
                $table->uuid(column: 'id')->primary()->default(DB::raw('uuid()'));
            }
            $table->text(column: 'api_route_prefix')->default('');
            $table->text(column: 'api_primary_key')->nullable();
            $table->ipAddress(column: 'ip_restriction')->default('0.0.0.0/0');
            $table->timestampTz(column: 'expires_at')->nullable();
            $table->text(column: 'hashed_access_token')->unique();
            $table->integer(column: 'usage_count')->default(0);
            $table->timestampTz(column: 'last_usage_at')->nullable();
            $table->integer(column: 'delete_get_request_log_after_days')->nullable();
            $table->integer(column: 'delete_all_request_log_after_days')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->useCurrentOnUpdate();
        });
    }

    public function down(): void {
        Schema::dropIfExists('bear_access_token');
    }
};
