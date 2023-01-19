<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigCreator;
use GuardsmanPanda\Larabear\Infrastructure\Config\Enum\BearConfigType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void {
        try {
            DB::beginTransaction();
            DB::delete("DELETE FROM bear_config WHERE config_key LIKE 'larabear%'");
            BearConfigCreator::create(
                config_key: 'larabear::last-unique-short-code',
                config_description: 'Used for generating unique short codes. (BearShortCodeService.php)',
                config_data_type: BearConfigType::STRING,
                config_string: '1'
            );
            BearConfigCreator::create(
                config_key: 'larabear::path-to-redirect-if-not-logged-in',
                config_description: 'Only used in session auth, if a user must be authenticated to see a route, but the user is not, then the user will be redirected to this path',
                config_data_type: BearConfigType::STRING,
                config_string: '/login'
            );
            BearConfigCreator::create(
                config_key: 'larabear::path-to-redirect-after-login',
                config_description: 'Used when authenticating through bear-auth, after a user logs in, they will be redirected to this path',
                config_data_type: BearConfigType::STRING,
                config_string: '/dashboard'
            );
            BearConfigCreator::create(
                config_key: 'larabear::oauth2-create-user-if-not-exists',
                config_description: 'If a user logs in via oauth2, but the user does not exist in the database, then create the user',
                config_data_type: BearConfigType::BOOLEAN,
                config_boolean: true
            );
            BearConfigCreator::create(
                config_key: 'larabear::log-console-event-store-for-days',
                config_description: 'How many days to store console errors.',
                config_data_type: BearConfigType::INTEGER,
                config_integer: 90
            );
            BearConfigCreator::create(
                config_key: 'larabear::log-response-error-store-for-days',
                config_description: 'How many days to store response errors.',
                config_data_type: BearConfigType::INTEGER,
                config_integer: 90
            );
            BearConfigCreator::create(
                config_key: 'larabear::log-access-token-store-for-days',
                config_description: 'How many days to store access token logs.',
                config_data_type: BearConfigType::INTEGER,
                config_integer: 90
            );
            BearConfigCreator::create(
                config_key: 'larabear::log-database-change-store-for-days',
                config_description: 'How many days to store database change logs.',
                config_data_type: BearConfigType::INTEGER,
                config_integer: 9000
            );
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function down(): void {
        throw new RuntimeException(message: 'Cannot reverse this migration.');
    }
};
