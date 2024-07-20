<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_route_usage', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'http_method');
                $table->text(column: 'http_path');
                $table->text(column: 'action_name');
            } else {
                $table->string(column: 'http_method');
                $table->string(column: 'http_path');
                $table->string(column: 'action_name');
            }
            $table->bigInteger(column: 'count')->default(0);
            $table->bigInteger(column: 'time_microseconds')->default(0);
            $table->timestampTz(column: 'last_usage_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->primary(columns: ['http_method', 'http_path', 'action_name'], name: 'bear_route_usage_pk');
        });
    }


    public function down(): void {
        Schema::dropIfExists(table: 'bear_route_usage');
    }
};
