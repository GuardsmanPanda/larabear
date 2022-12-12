<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigCreator;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void {
        $configs = [
            [
                'config_key' => 'larabear-auth.path_to_redirect_if_not_logged_in',
                'config_description' => 'Only used in session auth, if a user must be authenticated to see a route, but the user is not, then the user will be redirected to this path',
                'config_data_type' => 'STRING',
                'config_string' => '/',
            ],
            [
                'config_key' => 'larabear-auth.path_to_redirect_after_login',
                'config_description' => 'Used when authenticating through bear-auth, after a user logs in, they will be redirected to this path',
                'config_data_type' => 'STRING',
                'config_string' => '/dashboard',
            ],
            [
                'config_key' => 'larabear-auth.oauth2_create_user_if_not_exists',
                'config_description' => 'If a user logs in via oauth2, but the user does not exist in the database, then create the user',
                'config_data_type' => 'BOOLEAN',
                'config_boolean' => true,
            ],
        ];

        foreach ($configs as $config) {
            try {
                DB::beginTransaction();
                BearConfigCreator::create(
                    config_key: $config['config_key'],
                    config_description: $config['config_description'],
                    config_data_type: $config['config_data_type'],
                    config_string: $config['config_string'] ?? null,
                    config_boolean: $config['config_boolean'] ?? null
                );
                DB::commit();
            } catch (Throwable) {
                DB::rollBack();
                // Ignore duplicate key errors
            }
        }
    }

    public function down(): void {
        throw new RuntimeException(message: 'Cannot rollback this migration.');
    }
};
