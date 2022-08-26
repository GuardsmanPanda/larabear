<?php

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_log_route_usage', callback: static function (Blueprint $table) {
            if (BearDBService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'request_http_method');
                $table->text(column: 'request_route_path');
                $table->text(column: 'app_action_name');
            } else {
                $table->string(column: 'request_http_method');
                $table->string(column: 'request_route_path');
                $table->string(column: 'app_action_name');
            }
            $table->bigInteger(column: 'route_usage_count')->default(0);
            $table->bigInteger(column: 'route_usage_time_microseconds')->default(0);
            $table->timestampTz(column: 'last_usage_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->primary(['request_http_method', 'request_route', 'app_action_name']);
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_log_route_usage');
    }
};
