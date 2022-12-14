<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearPermissionCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearRoleCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearRolePermissionCreator;
use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigCreator;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void {
        $roles = [
            ['role_slug' => 'larabear.ui-full-access', 'role_description' => 'Gives full developer access to larabear UI'],
        ];
        $permissions = [
            ['permission_slug' => 'larabear-ui', 'permission_description' => 'Gives access to the larabear ui dashboard'],
        ];
        $role_permissions = [
            ['role_slug' => 'larabear.ui-full-access', 'permission_slug' => 'larabear-ui'],
        ];
        $configs = [
            ['config_key' => 'larabear.version', 'config_description' => 'Version of the larabear package.', 'config_data_type' => 'STRING', 'config_string' => '0.6.0'],
            ['config_key' => 'larabear.last_unique_short_code', 'config_description' => 'Used for generating unique short codes. (BearShortCodeService.php)', 'config_data_type' => 'STRING', 'config_string' => '1'],
            ['config_key' => 'larabear.delete_log_console_event_days', 'config_description' => 'How many days to store console errors.', 'config_data_type' => 'INTEGER', 'config_integer' => 90],
            ['config_key' => 'larabear.delete_log_response_error_days', 'config_description' => 'How many days to store response errors.', 'config_data_type' => 'INTEGER', 'config_integer' => 90],
            ['config_key' => 'larabear.delete_log_access_token_days', 'config_description' => 'How many days to store access token logs.', 'config_data_type' => 'INTEGER', 'config_integer' => 90],
            ['config_key' => 'larabear.delete_log_database_change_days', 'config_description' => 'How many days to store database change logs.', 'config_data_type' => 'INTEGER', 'config_integer' => 9000],
        ];

        foreach ($roles as $role) {
            try {
                DB::beginTransaction();
                BearRoleCreator::create(role_slug: $role['role_slug'], role_description: $role['role_description']);
                DB::commit();
            } catch (Throwable $t) {
                DB::rollBack();
            }
        }

        foreach ($permissions as $permission) {
            try {
                DB::beginTransaction();
                BearPermissionCreator::create(permission_slug: $permission['permission_slug'], permission_description: $permission['permission_description']);
                DB::commit();
            } catch (Throwable $t) {
                DB::rollBack();
            }
        }

        foreach ($role_permissions as $role_permission) {
            try {
                DB::beginTransaction();
                BearRolePermissionCreator::create(role_slug: $role_permission['role_slug'], permission_slug: $role_permission['permission_slug']);
                DB::commit();
            } catch (Throwable $t) {
                DB::rollBack();
            }
        }

        foreach ($configs as $config) {
            try {
                DB::beginTransaction();
                BearConfigCreator::create(
                    config_key: $config['config_key'],
                    config_description: $config['config_description'],
                    config_data_type: $config['config_data_type'],
                    config_string: $config['config_string'] ?? null,
                    config_integer: $config['config_integer'] ?? null,
                );
                DB::commit();
            } catch (Throwable $t) {
                DB::rollBack();
            }
        }
    }

    public function down(): void {
        throw new RuntimeException(message: 'This migration cannot be reversed.');
    }
};
