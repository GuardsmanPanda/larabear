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
                $table->text(column: 'client_id')->primary();
                $table->text(column: 'client_description');
                $table->text(column: 'client_type_enum');
                $table->text(column: 'client_base_url')->nullable();
                $table->text(column: 'client_scope')->nullable();
                $table->text(column: 'encrypted_oauth2_client_secret');
                $table->text(column: 'user_scope')->default('');
                $table->text(column: 'client_redirect_path')->nullable();
            } else {
                $table->string(column: 'client_id')->primary();
                $table->string(column: 'client_description');
                $table->string(column: 'client_type_enum');
                $table->string(column: 'client_base_url')->nullable();
                $table->string(column: 'client_scope')->nullable();
                $table->string(column: 'encrypted_oauth2_client_secret');
                $table->string(column: 'user_scope')->default('');
                $table->string(column: 'client_redirect_path')->nullable();
            }
            $table->boolean(column: 'allow_user_logins')->default(false);
            $table->timestampTz(column: 'client_access_token_expires_at')->nullable();
            $table->text(column: 'encrypted_client_access_token')->nullable();
            $table->timestampTz(column: 'client_access_token_first_error_at')->nullable()->index();
            $table->text(column: 'client_access_token_error_message')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('client_type_enum')->references('enumeration')->on(table: 'oauth2_client_type');
        });
    }


    public function down(): void {
        Schema::dropIfExists(table: 'bear_oauth2_client');
    }
};
