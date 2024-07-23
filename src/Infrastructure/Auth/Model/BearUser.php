<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearPermissionEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearRoleEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Service\BearAuthService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Model\BearCountry;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use RuntimeException;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearUser|null find(string $id, array $columns = ['*'])
 * @method static BearUser findOrFail(string $id, array $columns = ['*'])
 * @method static BearUser sole(array $columns = ['*'])
 * @method static BearUser|null first(array $columns = ['*'])
 * @method static BearUser firstOrFail(array $columns = ['*'])
 * @method static BearUser firstOrCreate(array $filter, array $values)
 * @method static BearUser firstOrNew(array $filter, array $values)
 * @method static BearUser|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearUser> all(array $columns = ['*'])
 * @method static Collection<int, BearUser> get(array $columns = ['*'])
 * @method static Collection<int|string, BearUser> pluck(string $column, string $key = null)
 * @method static Collection<int, BearUser> fromQuery(string $query, array $bindings = [])
 * @method static BearUser lockForUpdate()
 * @method static BearUser select(array $columns = ['*'])
 * @method static BearUser selectRaw(string $expression, array $bindings = [])
 * @method static BearUser with(array $relations)
 * @method static BearUser leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearUser where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static BearUser whereIn(string $column, array $values)
 * @method static BearUser whereNull(string|array $columns)
 * @method static BearUser whereNotNull(string|array $columns)
 * @method static BearUser whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearUser whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearUser whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static BearUser whereExists(Closure $callback)
 * @method static BearUser whereNotExists(Closure $callback)
 * @method static BearUser whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearUser withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearUser whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearUser whereRaw(string $sql, array $bindings = [])
 * @method static BearUser groupBy(string $groupBy)
 * @method static BearUser orderBy(string $column, string $direction = 'asc')
 * @method static BearUser orderByDesc(string $column)
 * @method static BearUser orderByRaw(string $sql, array $bindings = [])
 * @method static BearUser limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static mixed sum(string $column)
 * @method static bool exists()
 *
 * @property string $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $display_name
 * @property string $map_style_enum
 * @property string $map_marker_enum
 * @property string|null $email
 * @property string|null $password
 * @property string|null $country_cca2
 * @property string|null $remember_token
 * @property CarbonInterface|null $last_login_at
 *
 * @property BearCountry $countryCca2
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearUser extends Model implements Authenticatable {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_user';
    protected $keyType = 'string';
    protected $dateFormat = 'Y-m-d\TH:i:sP';

    /** @var array<string, string> $casts */
    protected $casts = [
        'last_login_at' => 'immutable_datetime',
    ];

    /** @return BelongsTo<BearCountry, self> */
    public function countryCca2(): BelongsTo {
        return $this->belongsTo(related: BearCountry::class, foreignKey: 'country_cca2', ownerKey: 'cca2');
    }

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];

    public function getAuthIdentifierName(): string {
        return 'id';
    }

    public function getAuthIdentifier(): string {
        return $this->id;
    }

    public function getAuthPassword(): string {
        return $this->password ?? throw new RuntimeException(message: 'Password is not set');
    }

    public function getRememberToken(): string {
        return $this->remember_token ?? throw new RuntimeException(message: 'Remember token is not set');
    }

    public function setRememberToken($value): void {
        $this->remember_token = $value;
    }

    public function getRememberTokenName(): string {
        return 'remember_token';
    }

    public function hasPermission(BearPermissionEnumInterface $permission): bool {
        return BearAuthService::hasPermission(permission: $permission, userId: $this->id);
    }

    public function hasRole(BearRoleEnumInterface $role): bool {
        return BearAuthService::hasRole(role: $role, userId: $this->id);
    }

    public function getAuthPasswordName(): string {
        return 'password';
    }
}
