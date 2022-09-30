<?php

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_log_console_event', callback: static function (Blueprint $table): void {
            $table->id();
            if (BearDBService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'console_event_type');
                $table->text(column: 'console_command')->index();
                $table->text(column: 'cron_schedule_expression')->nullable();
                $table->text(column: 'cron_schedule_timezone')->nullable();
            } else {
                $table->string(column: 'console_event_type');
                $table->string(column: 'console_command')->index();
                $table->string(column: 'cron_schedule_expression')->nullable();
                $table->string(column: 'cron_schedule_timezone')->nullable();
            }
            $table->timestampTz(column: 'console_event_started_at');
            $table->timestampTz(column: 'console_event_finished_at')->nullable();
            $table->timestampTz(column: 'console_event_failed_at')->nullable();
            $table->bigInteger(column: 'execution_time_microseconds')->nullable();
            if (BearDBService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'console_event_id')->index();
            } else {
                $table->string(column: 'console_event_id')->index();
            }
            $table->text(column: 'console_event_output')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_log_console_event');
    }
};
