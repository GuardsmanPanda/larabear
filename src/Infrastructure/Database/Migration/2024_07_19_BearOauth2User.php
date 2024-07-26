<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_oauth2_user', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->uuid(column: 'id')->primary()->default(DB::raw('gen_random_uuid()'));
                $table->text(column: 'oauth2_client_id');
                $table->text(column: 'identifier')->index();
                $table->text(column: 'email')->nullable()->index();
            } else {
                $table->uuid(column: 'id')->primary();
                $table->string(column: 'oauth2_client_id');
                $table->string(column: 'identifier')->index();
                $table->string(column: 'email')->nullable()->index();
            }
            $table->text(column: 'display_name')->nullable();
            $table->text(column: 'scope');
            $table->uuid(column: 'user_id')->nullable()->index();
            $table->jsonb(column: 'scope_json');
            $table->timestampTz(column: 'access_token_expires_at')->nullable();
            $table->text(column: 'encrypted_access_token')->nullable();
            $table->text(column: 'encrypted_refresh_token')->nullable();
            $table->text(column: 'access_token_error_message')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
            $table->foreign('user_id')->references('id')->on('bear_user');
            $table->foreign('oauth2_client_id')->references('id')->on('bear_oauth2_client');
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_oauth2_user');
    }
};
