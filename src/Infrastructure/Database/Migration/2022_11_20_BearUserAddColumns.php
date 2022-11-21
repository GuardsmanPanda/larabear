<?php

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('bear_user', function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->boolean('is_user_activated')->default(true);
                $table->text('password')->nullable();
                $table->text('remember_token')->nullable()->unique();
                $table->text('password_reset_token')->nullable()->unique();
            } else {
                $table->boolean('is_user_activated')->default(1);
                $table->string('password')->nullable();
                $table->string('remember_token', 100)->nullable()->unique();
                $table->string('password_reset_token')->nullable()->unique();
            }
            $table->timestampTz('password_reset_expires_at')->nullable();
            $table->timestampTz('email_verified_at')->nullable();
            $table->timestampTz('last_login_at')->nullable();
            $table->jsonb('user_metadata_json');
        });
    }

    public function down(): void {
        Schema::table('bear_user', function (Blueprint $table) {
            $table->dropColumn('is_user_activated');
            $table->dropColumn('password');
            $table->dropColumn('remember_token');
            $table->dropColumn('email_verified_at');
            $table->dropColumn('last_login_at');
            $table->dropColumn('user_metadata_json');
        });
    }
};
