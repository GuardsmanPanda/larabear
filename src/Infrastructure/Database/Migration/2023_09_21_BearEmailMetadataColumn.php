<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('bear_email', static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->jsonb(column: 'additional_data_json')->default(DB::raw("'{}'::jsonb"));
            } else {
                $table->jsonb(column: 'additional_data_json')->default(DB::raw('(json_object())'));
            }
        });
    }

    public function down(): void {
        throw new RuntimeException(message: 'Cannot reverse this migration.');
    }
};
