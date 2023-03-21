<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists(table: 'bear_log_error');
        Schema::dropIfExists(table: 'bear_error');
        Schema::create(table: 'bear_error', callback: static function (Blueprint $table): void {
            $table->id();
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'error_severity')->index();
                $table->text(column: 'error_key')->nullable()->index();
            } else {
                $table->string(column: 'error_severity')->index();
                $table->string(column: 'error_key')->nullable()->index();
            }
            $table->text(column: 'error_message')->nullable();
            $table->text(column: 'error_remedy')->nullable();
            $table->text(column: 'exception_message')->nullable();
            $table->text(column: 'exception_class')->nullable();
            $table->text(column: 'exception_trace')->nullable();
            $table->uuid(column: 'user_id')->nullable()->index();
            $table->ipAddress(column: 'request_ip')->nullable()->index();
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'request_country_code')->nullable();
                $table->text(column: 'request_method');
                $table->text(column: 'request_path')->nullable();
            } else {
                $table->string(column: 'request_country_code')->nullable();
                $table->string(column: 'request_method');
                $table->string(column: 'request_path', length: 2048)->nullable();
            }
            $table->jsonb(column: 'request_query_json')->nullable();
            $table->text(column: 'app_action_name')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'request_hostname')->nullable();
                $table->text(column: 'request_id')->nullable();
                $table->text(column: 'email_status_text')->nullable();
            } else {
                $table->string(column: 'request_hostname')->nullable();
                $table->string(column: 'request_id')->nullable();
                $table->string(column: 'email_status_text')->nullable();
            }
            $table->uuid(column: 'console_id')->nullable();
            $table->foreign('user_id')->references('id')->on('bear_user');
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_error');
    }
};
