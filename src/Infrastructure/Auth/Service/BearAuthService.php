<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Service;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearPermissionEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearRoleEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use Illuminate\Support\Facades\DB;
use RuntimeException;

final class BearAuthService {
    private static string $globalId = '-';
    private static BearUser|null $user = null;

    /** @var array<string, array<string>> $userPermissions */
    private static array $userPermissions = [];

    /** @var array<string, array<string>> $userRoles */
    private static array $userRoles = [];


    public static function getUserId(): string {
        return BearGlobalStateService::getUserId() ?? throw new RuntimeException(message: 'User not found');
    }
    public static function getUserIdOrNull(): string|null {
        return BearGlobalStateService::getUserId();
    }


    public static function getUser(): BearUser {
        self::cacheCheck();
        if (self::$user === null && BearGlobalStateService::getUserId() !== null) {
            self::$user = BearUser::find(id: BearGlobalStateService::getUserId());
        }
        return self::$user ?? throw new RuntimeException(message: 'User not found');
    }
    public static function getUserOrNull(): BearUser|null {
        self::cacheCheck();
        if (self::$user === null && BearGlobalStateService::getUserId() !== null) {
            self::$user = BearUser::find(id: BearGlobalStateService::getUserId());
        }
        return self::$user;
    }


    public static function hasPermission(BearPermissionEnumInterface $permission, ?string $userId = null): bool {
        return self::hasPermissionString(permission: $permission->getValue(), userId: $userId);
    }

    public static function hasPermissionString(string $permission, ?string $userId = null): bool {
        $userId ??= BearGlobalStateService::getUserId();
        if ($userId === null) {
            return false;
        }
        self::cacheCheck();
        if (!array_key_exists(key: $userId, array: self::$userPermissions)) {
            $perms = DB::select(query: "
                SELECT DISTINCT p.enum
                FROM bear_permission_user pu
                LEFT JOIN bear_permission p ON p.enum = pu.permission_enum
                WHERE pu.user_id = ?
                UNION DISTINCT
                SELECT DISTINCT p.enum
                FROM bear_role_user ru
                LEFT JOIN bear_role_permission rp on rp.role_enum = ru.role_enum
                LEFT JOIN bear_permission p on p.enum = rp.permission_enum
                WHERE ru.user_id = ?
            ", bindings: [$userId, $userId]);
            self::$userPermissions[$userId] = array_column(array: $perms, column_key: 'enum');
        }
        return in_array(needle: $permission, haystack: self::$userPermissions[$userId], strict: true);
    }


    public static function hasRole(BearRoleEnumInterface $role, ?string $userId = null): bool {
        return self::hasRoleString(role: $role->getValue(), userId: $userId);
    }

    public static function hasRoleString(string $role, ?string $userId = null): bool {
        $userId ??= BearGlobalStateService::getUserId();
        if ($userId === null) {
            return false;
        }
        self::cacheCheck();
        if (!array_key_exists(key: $userId, array: self::$userRoles)) {
            $tmp = DB::select(query: "
                SELECT r.enum
                FROM bear_role r
                JOIN bear_role_user ru ON ru.role_enum = r.enum
                WHERE ru.user_id = ?
            ", bindings: [$userId]);
            self::$userRoles[$userId] = array_column(array: $tmp, column_key: 'enum');
        }
        return in_array(needle: $role, haystack: self::$userRoles[$userId], strict: true);
    }


    private static function cacheCheck(): void {
        $current_global_id = BearGlobalStateService::getRequestId() ?? BearGlobalStateService::getConsoleIdOrNull() ?? '';
        if ($current_global_id !== self::$globalId) {
            self::$globalId = $current_global_id;
            self::$userPermissions = [];
            self::$userRoles = [];
            self::$user = null;
        }
    }
}
