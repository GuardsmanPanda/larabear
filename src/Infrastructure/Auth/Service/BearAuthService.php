<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Service;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use Illuminate\Support\Facades\DB;

class BearAuthService {
    private static string $globalId = '';
    private static BearUser|null $user = null;

    /** @var array<string, array<string>> $userPermissions */
    private static array $userPermissions = [];

    /** @var array<string, array<string>> $userRoles */
    private static array $userRoles = [];


    public static function getUserId(): string|null {
        return BearGlobalStateService::getUserId();
    }

    public static function getUser(): BearUser|null {
        self::cacheCheck();
        if (self::$user === null && BearGlobalStateService::getUserId() !== null) {
            self::$user = BearUser::find(id: BearGlobalStateService::getUserId());
        }
        return self::$user;
    }

    /**
     * @param string|array<string> $permission
     * @param string|null $userId
     * @return bool
     */
    public static function hasPermission(string|array $permission, string $userId = null): bool {
        $userId ??= BearGlobalStateService::getUserId();
        if ($userId === null) {
            return false;
        }
        self::cacheCheck();
        if (!isset(self::$userPermissions[$userId])) {
            $perms = DB::select(query: "
                SELECT DISTINCT p.permission_slug
                FROM bear_permission_user pu
                LEFT JOIN bear_permission p ON p.permission_slug = pu.permission_slug
                WHERE pu.user_id = ?
                UNION DISTINCT
                SELECT DISTINCT p.permission_slug
                FROM bear_role_user ru
                LEFT JOIN bear_role_permission rp on rp.role_slug = ru.role_slug
                LEFT JOIN bear_permission p on p.permission_slug = rp.permission_slug
                WHERE ru.user_id = ?
            ", bindings: [$userId, $userId]);
            self::$userPermissions[$userId] = array_column(array: $perms, column_key: 'permission_slug');
        }

        if (is_string(value: $permission)) {
            $permission = explode(separator: '|', string: $permission);
        }
        foreach ($permission as $perm) {
            if (in_array(needle: $perm, haystack: self::$userPermissions[$userId], strict: true)) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param string|array<string> $role
     * @param string|null $userId
     * @return bool
     */
    public static function hasRole(string|array $role, string $userId = null): bool {
        $userId ??= BearGlobalStateService::getUserId();
        if ($userId === null) {
            return false;
        }
        self::cacheCheck();
        if (!isset(self::$userRoles[$userId])) {
            $tmp = DB::select(query: "
                    SELECT r.role_slug
                    FROM bear_role r
                    JOIN bear_role_user ru ON ru.role_slug = r.role_slug
                    WHERE ru.user_id = ?
            ", bindings: [$userId]);
            self::$userRoles[$userId] = array_column(array: $tmp, column_key: 'role_slug');
        }

        if (is_string(value: $role)) {
            $role = explode(separator: '|', string: $role);
        }
        foreach ($role as $r) {
            if (in_array(needle: $r, haystack: self::$userRoles[$userId], strict: true)) {
                return true;
            }
        }
        return false;
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
