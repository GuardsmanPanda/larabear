<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigCreator;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_config', callback: static function (Blueprint $table): void {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'slug')->primary();
            } else {
                $table->string(column: 'slug')->primary();
            }
            $table->text(column: 'description');
            $table->text(column: 'config_string')->nullable();
            $table->text(column: 'encrypted_config_string')->nullable();
            $table->boolean(column: 'config_boolean')->nullable();
            $table->bigInteger(column: 'config_integer')->nullable();
            $table->date(column: 'config_date')->nullable();
            $table->timestampTz(column: 'config_timestamp')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        BearConfigCreator::create(
            config_key: 'larabear::log-store-for-days',
            config_description: 'How many days to store console errors.',
            config_integer: 60
        );

        BearConfigCreator::create(
            config_key: 'larabear::last-unique-short-code',
            config_description: 'Used for generating unique short codes.',
            config_string: '1'
        );
        BearConfigCreator::create(
            config_key: 'larabear::path-to-redirect-if-not-logged-in',
            config_description: 'Only used in session auth, if a user must be authenticated to see a route, but the user is not, then the user will be redirected to this path',
            config_string: '/login'
        );
        BearConfigCreator::create(
            config_key: 'larabear::path-to-redirect-after-login',
            config_description: 'Used when authenticating through bear-auth, after a user logs in, they will be redirected to this path',
            config_string: '/dashboard'
        );
        BearConfigCreator::create(
            config_key: 'larabear::oauth2-create-user-if-not-exists',
            config_description: 'If a user logs in via oauth2, but the user does not exist in the database, then create the user',
            config_boolean: true
        );
        BearConfigCreator::create(
            config_key: 'larabear::log-database-change-store-for-days',
            config_description: 'How many days to store database change logs.',
            config_integer: 9000
        );
    }


    public function down(): void {
        Schema::dropIfExists(table: 'bear_config');
    }
};
