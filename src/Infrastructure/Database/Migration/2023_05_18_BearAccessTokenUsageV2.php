<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists('bear_log_access_token_usage');
        Schema::dropIfExists('bear_access_token_usage');
        Schema::create(table: 'bear_access_token_usage', callback: static function (Blueprint $table) {
            $table->id();
            $table->ipAddress(column: 'request_ip');
            $table->text(column: 'request_country_code')->nullable();
            $table->text(column: 'request_method');
            $table->text(column: 'request_path');
            $table->jsonb(column: 'request_query_json')->nullable();
            $table->integer(column: 'response_status_code');
            $table->integer(column: 'response_time_in_microseconds');
            $table->uuid(column: 'access_token_app_id')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'request_id');
            } else {
                $table->string(column: 'request_id');
            }
            $table->foreign('access_token_app_id')->references('id')->on('bear_access_token_app');
            $table->index(['access_token_app_id', 'created_at']);
        });
    }

    public function down(): void {
        Schema::dropIfExists('bear_access_token_usage');
    }
};
