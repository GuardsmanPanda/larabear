<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists(table: 'bear_sms');
        Schema::create(table: 'bear_sms', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->uuid(column: 'id')->primary()->default(DB::raw('gen_random_uuid()'));
                $table->text(column: 'to_phone_number')->index();
                $table->text(column: 'sms_tag')->nullable()->index();
            } else {
                $table->uuid(column: 'id')->primary();
                $table->string(column: 'to_phone_number')->index();
                $table->string(column: 'sms_tag')->nullable()->index();
            }
            $table->text(column: 'sms_message');
            $table->boolean(column: 'is_sandboxed')->default(false);
            $table->timestampTz(column: 'sms_sent_at')->nullable()->index();
            $table->integer(column: 'sms_error_code')->nullable();
            $table->text(column: 'sms_error_message')->nullable();
            $table->text(column: 'sms_twilio_id')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->useCurrentOnUpdate();
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_sms');
    }
};
