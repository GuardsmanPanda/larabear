<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('bear_user', static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->boolean(column: 'is_user_activated')->default(true);
                $table->text(column: 'password')->nullable();
                $table->text(column: 'remember_token')->nullable()->unique();
                $table->text(column: 'password_reset_token')->nullable()->unique();
            } else {
                $table->boolean(column: 'is_user_activated')->default(1);
                $table->string(column: 'password')->nullable();
                $table->string(column: 'remember_token', length: 100)->nullable()->unique();
                $table->string(column: 'password_reset_token')->nullable()->unique();
            }
            $table->timestampTz(column: 'password_reset_expires_at')->nullable();
            $table->timestampTz(column: 'email_verified_at')->nullable();
            $table->timestampTz(column: 'last_login_at')->nullable();
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->jsonb(column: 'user_metadata_json')->default(DB::raw("'{}'::jsonb"));
            } else {
                $table->jsonb(column: 'user_metadata_json')->default(DB::raw('(json_object())'));
            }
        });
    }

    public function down(): void {
        Schema::table('bear_user', static function (Blueprint $table) {
            $table->dropColumn('is_user_activated');
            $table->dropColumn('password');
            $table->dropColumn('remember_token');
            $table->dropColumn('email_verified_at');
            $table->dropColumn('last_login_at');
            $table->dropColumn('user_metadata_json');
        });
    }
};
