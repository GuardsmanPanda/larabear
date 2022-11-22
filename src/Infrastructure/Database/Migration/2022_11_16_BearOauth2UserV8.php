<?php

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
                $table->text(column: 'oauth2_user_identifier')->index();
                $table->text(column: 'oauth2_user_email')->nullable()->index();
                $table->text(column: 'oauth2_user_name')->nullable();
                $table->text(column: 'oauth2_scope');
            } else {
                $table->uuid(column: 'id')->primary();
                $table->string(column: 'oauth2_client_id');
                $table->string(column: 'oauth2_user_identifier')->index();
                $table->string(column: 'oauth2_user_email')->nullable()->index();
                $table->string(column: 'oauth2_user_name')->nullable();
                $table->string(column: 'oauth2_scope');
            }
            $table->uuid(column: 'user_id')->nullable()->index();
            $table->jsonb(column: 'oauth2_scope_json');
            $table->timestampTz(column: 'user_access_token_expires_at')->nullable();
            $table->text(column: 'encrypted_user_access_token')->nullable();
            $table->text(column: 'encrypted_user_refresh_token')->nullable();
            $table->timestampTz(column: 'user_access_token_first_error_at')->nullable()->index();
            $table->text(column: 'user_access_token_error_message')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->useCurrentOnUpdate();
            $table->foreign('user_id')->references('id')->on('bear_user');
            $table->foreign('oauth2_client_id')->references('oauth2_client_id')->on('bear_oauth2_client');
            $table->index(['oauth2_client_id', 'oauth2_user_identifier'], 'bear_user_client_id_oauth2_index');
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_oauth2_user');
    }
};
