<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('bear_oauth2_user', static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->jsonb(column: 'oauth2_user_data_json')->default(DB::raw("'{}'::jsonb"));
            } else {
                $table->jsonb(column: 'oauth2_user_data_json')->default(DB::raw('(json_object())'));
            }
            Schema::table('bear_user', static function (Blueprint $table) {
                $table->dropColumn('user_metadata_json');
            });
        });
        Schema::table('bear_user', static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->jsonb(column: 'user_data_json')->default(DB::raw("'{}'::jsonb"));
            } else {
                $table->jsonb(column: 'user_data_json')->default(DB::raw('(json_object())'));
            }
        });
    }

    public function down(): void {
        Schema::table('bear_oauth2_user', static function (Blueprint $table) {
            $table->dropColumn('oauth2_user_data_json');
        });
    }
};
