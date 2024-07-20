<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigCreator;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        BearConfigCreator::create(
            slug: 'larabear::log-store-for-days',
            description: 'How many days to store console errors.',
            config_integer: 60
        );
        BearConfigCreator::create(
            slug: 'larabear::last-unique-short-code',
            description: 'Used for generating unique short codes.',
            config_string: '1'
        );
        BearConfigCreator::create(
            slug: 'larabear::path-to-redirect-if-not-logged-in',
            description: 'Only used in session auth, if a user must be authenticated to see a route, but the user is not, then the user will be redirected to this path',
            config_string: '/login'
        );
        BearConfigCreator::create(
            slug: 'larabear::path-to-redirect-after-login',
            description: 'Used when authenticating through bear-auth, after a user logs in, they will be redirected to this path',
            config_string: '/dashboard'
        );
        BearConfigCreator::create(
            slug: 'larabear::oauth2-create-user-if-not-exists',
            description: 'If a user logs in via oauth2, but the user does not exist in the database, then create the user',
            config_boolean: true
        );
        BearConfigCreator::create(
            slug: 'larabear::log-database-change-store-for-days',
            description: 'How many days to store database change logs.',
            config_integer: 9000
        );
    }


    public function down(): void {
        Schema::dropIfExists(table: 'bear_config');
    }
};
