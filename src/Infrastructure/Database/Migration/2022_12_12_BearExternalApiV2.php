<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists(table: 'bear_external_api');
        Schema::create(table: 'bear_external_api', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->uuid(column: 'id')->primary()->default(DB::raw('gen_random_uuid()'));
                $table->text(column: 'external_api_slug')->index();
                $table->text(column: 'external_api_description');
                $table->text(column: 'external_api_type');
                $table->text(column: 'encrypted_external_api_token')->nullable();
                $table->text(column: 'external_api_base_url')->nullable();
            } else {
                $table->uuid(column: 'id')->primary();
                $table->string(column: 'external_api_slug')->index();
                $table->string(column: 'external_api_description');
                $table->string(column: 'external_api_type');
                $table->string(column: 'encrypted_external_api_token', length: 4096)->nullable();
                $table->string(column: 'external_api_base_url')->nullable();
            }
            $table->uuid(column: 'oauth2_user_id')->nullable();
            $table->jsonb(column: 'external_api_base_headers_json')->nullable();
            $table->jsonb(column: 'external_api_metadata_json')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->useCurrentOnUpdate();
            $table->foreign('oauth2_user_id')->references('id')->on('bear_oauth2_user');
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_external_api');
    }
};
