<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Command;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Enum\LarabearPermissionEnum;
use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigCreator;
use GuardsmanPanda\Larabear\Infrastructure\Console\Service\BearTransactionCommand;

final class LarabearInitCommand extends BearTransactionCommand {
    protected $signature = 'bear:init';
    protected $description = 'Initialize the larabear package';

    protected function handleInTransaction(): void {
        LarabearPermissionEnum::syncToDatabase();

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
}
