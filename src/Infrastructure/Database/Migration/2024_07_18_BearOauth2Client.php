<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_oauth2_client', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'id')->primary();
                $table->text(column: 'description');
                $table->text(column: 'oauth2_client_type_enum');
            } else {
                $table->string(column: 'id')->primary();
                $table->string(column: 'description');
                $table->string(column: 'oauth2_client_type_enum');
            }
            $table->text(column: 'user_scope');
            $table->text(column: 'user_redirect_path');
            $table->text(column: 'encrypted_secret');
            $table->text(column: 'client_scope')->nullable();
            $table->text(column: 'client_base_url')->nullable();
            $table->timestampTz(column: 'access_token_expires_at')->nullable();
            $table->text(column: 'access_token_error_message')->nullable();
            $table->text(column: 'encrypted_access_token')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('oauth2_client_type_enum')->references('enum')->on(table: 'oauth2_client_type');
        });
    }


    public function down(): void {
        Schema::dropIfExists(table: 'bear_oauth2_client');
    }
};
