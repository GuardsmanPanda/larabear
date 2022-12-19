<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists('bear_access_token_user');
        Schema::create(table: 'bear_access_token_user', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'hashed_token')->primary();
                $table->uuid(column: 'user_id')->index();
                $table->timestampTz(column: 'expires_at')->index();
                $table->text(column: 'user_token_type');
            } else {
                $table->string(column: 'hashed_token')->primary();
                $table->uuid(column: 'user_id')->index();
                $table->timestampTz(column: 'expires_at')->index();
                $table->string(column: 'user_token_type');
            }
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('user_id')->references('id')->on('bear_user');
        });
    }

    public function down(): void {
        Schema::dropIfExists('bear_access_token_user');
    }
};
