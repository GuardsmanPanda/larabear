<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_error', callback: static function (Blueprint $table): void {
            $table->id();
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'severity')->index();
                $table->text(column: 'slug')->nullable()->index();
            } else {
                $table->string(column: 'severity')->index();
                $table->string(column: 'slug')->nullable()->index();
            }
            $table->text(column: 'message')->nullable();
            $table->text(column: 'exception_message')->nullable();
            $table->text(column: 'exception_class')->nullable();
            $table->text(column: 'exception_trace')->nullable();
            $table->uuid(column: 'user_id')->nullable()->index();
            $table->ipAddress(column: 'ip')->nullable()->index();
            $table->text(column: 'country_code')->nullable();
            $table->text(column: 'http_method');
            $table->text(column: 'http_path')->nullable();
            $table->jsonb(column: 'query_json')->nullable();
            $table->text(column: 'action_name')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
            $table->text(column: 'request_id')->nullable();
            $table->text(column: 'referer')->nullable();
            $table->text(column: 'hostname')->nullable();
            $table->uuid(column: 'console_id')->nullable();
            $table->foreign('user_id')->references('id')->on(table: 'bear_user');
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_error');
    }
};
