<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists('bear_log_access_token_usage');
        Schema::dropIfExists('bear_access_token_log');
        Schema::dropIfExists('bear_user_access_token');
        Schema::dropIfExists('bear_access_token_user');
        Schema::create(table: 'bear_access_token_user', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->uuid(column: 'id')->primary()->default(DB::raw('gen_random_uuid()'));
            } else {
                $table->uuid(column: 'id')->primary();
            }
            $table->uuid(column: 'user_id')->index();
            $table->timestampTz(column: 'expires_at');
            $table->integer(column: 'expiry_time_increment_in_minutes')->unsigned();
            $table->timestampTz(column: 'invalid_at');
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'hashed_access_token')->index();
            } else {
                $table->string(column: 'hashed_access_token')->index();
            }
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('user_id')->references('id')->on('bear_user');
        });
    }

    public function down(): void {
        Schema::dropIfExists('bear_access_token_user');
    }
};
