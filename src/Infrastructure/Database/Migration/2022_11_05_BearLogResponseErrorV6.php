<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
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
            $table->uuid(column: 'user_id')->nullable()->index();
            $table->integer(column: 'response_status_code')->index();
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
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
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'request_id')->nullable();
            } else {
                $table->string(column: 'request_id')->nullable();
            }
            $table->foreign('user_id')->references('id')->on('bear_user');
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_log_response_error');
    }
};
