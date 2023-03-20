<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists('bear_access_token_log');
        Schema::dropIfExists('bear_application_access_token');
        Schema::create(table: 'bear_access_token_app', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->uuid(column: 'id')->primary()->default(DB::raw('gen_random_uuid()'));
                $table->text(column: 'api_primary_key')->nullable();
                $table->text(column: 'route_prefix_restriction')->default('');
                $table->text(column: 'server_hostname_restriction')->nullable();
            } else {
                $table->uuid(column: 'id')->primary();
                $table->string(column: 'api_primary_key')->nullable();
                $table->string(column: 'route_prefix_restriction')->default('');
                $table->string(column: 'server_hostname_restriction')->nullable();
            }
            $table->ipAddress(column: 'request_ip_restriction')->default('0.0.0.0/0');
            $table->text(column: 'access_token_purpose');
            $table->timestampTz(column: 'expires_at')->nullable();
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'hashed_access_token')->index();
            } else {
                $table->string(column: 'hashed_access_token')->index();
            }
            $table->timestampTz(column: 'last_usage_at')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->useCurrentOnUpdate();
        });
    }

    public function down(): void {
        Schema::dropIfExists('bear_access_token_app');
    }
};
