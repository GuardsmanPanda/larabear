<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_external_api', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'enum')->primary();
            } else {
                $table->string(column: 'enum')->primary();
            }
            $table->text(column: 'description');
            $table->text(column: 'external_api_type_enum');
            $table->text(column: 'encrypted_token')->nullable();
            $table->text(column: 'base_url')->nullable();
            $table->text(column: 'oauth2_client_id')->nullable();
            $table->uuid(column: 'oauth2_user_id')->nullable();
            $table->jsonb(column: 'base_headers_json')->nullable();
            $table->jsonb(column: 'metadata_json')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->useCurrentOnUpdate();
            $table->foreign('oauth2_user_id')->references('id')->on(table: 'bear_oauth2_user');
            $table->foreign('oauth2_client_id')->references('id')->on(table: 'bear_oauth2_client');

        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_external_api');
    }
};
