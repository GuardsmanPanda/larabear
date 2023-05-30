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
                $table->text(column: 'phone_number')->index();
                $table->text(column: 'tag')->nullable()->index();
            } else {
                $table->uuid(column: 'id')->primary();
                $table->string(column: 'phone_number')->index();
                $table->string(column: 'tag')->nullable()->index();
            }
            $table->text(column: 'message');
            $table->boolean(column: 'is_sandboxed')->default(false);
            $table->timestampTz(column: 'sent_at')->nullable()->index();
            $table->integer(column: 'error_code')->nullable();
            $table->text(column: 'error_message')->nullable();
            $table->text(column: 'twilio_id')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->useCurrentOnUpdate();
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_sms');
    }
};
