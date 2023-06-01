<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists(table: 'bear_log_console_event');
        Schema::dropIfExists(table: 'bear_console_event');
        Schema::create(table: 'bear_console_event', callback: static function (Blueprint $table): void {
            $table->id();
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'event_type');
                $table->text(column: 'command')->index();
                $table->text(column: 'cron_schedule_expression')->nullable();
                $table->text(column: 'cron_schedule_timezone')->nullable();
            } else {
                $table->string(column: 'event_type');
                $table->string(column: 'command')->index();
                $table->string(column: 'cron_schedule_expression')->nullable();
                $table->string(column: 'cron_schedule_timezone')->nullable();
            }
            $table->timestampTz(column: 'started_at');
            $table->timestampTz(column: 'finished_at')->nullable();
            $table->timestampTz(column: 'failed_at')->nullable();
            $table->bigInteger(column: 'execution_time_microseconds')->nullable();
            $table->mediumText(column: 'output')->nullable();
            $table->uuid(column: 'console_id')->index();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_console_event');
    }
};
