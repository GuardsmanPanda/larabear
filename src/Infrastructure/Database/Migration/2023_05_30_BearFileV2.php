<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_file', callback: static function (Blueprint $table): void {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->uuid(column: 'id')->primary()->default(DB::raw('gen_random_uuid()'));
                $table->text(column: 'original_name');
                $table->text(column: 'mime_type');
                $table->text(column: 'local_path')->nullable();
                $table->text(column: 'cloud_path')->nullable();
                $table->jsonb(column: 'data_json')->default(DB::raw("'{}'::jsonb"));
            } else {
                $table->uuid(column: 'id')->primary();
                $table->string(column: 'original_name');
                $table->string(column: 'mime_type');
                $table->string(column: 'local_path')->nullable();
                $table->string(column: 'cloud_path')->nullable();
                $table->jsonb(column: 'data_json')->default(DB::raw('(json_object())'));
            }
            $table->uuid(column: 'created_by_user_id')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('created_by_user_id')->references('id')->on('bear_user');
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_file');
    }
};
