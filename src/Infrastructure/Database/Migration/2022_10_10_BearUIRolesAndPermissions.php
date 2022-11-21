<?php

use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearPermissionCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearRoleCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearRolePermissionCreator;
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
    }

    public function down(): void {
        throw new RuntimeException(message: 'This migration cannot be reversed.');
    }
};
