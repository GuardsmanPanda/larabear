<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use RuntimeException;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearRolePermission sole(array $columns = ['*'])
 * @method static BearRolePermission|null first(array $columns = ['*'])
 * @method static BearRolePermission firstOrFail(array $columns = ['*'])
 * @method static BearRolePermission firstOrCreate(array $filter, array $values)
 * @method static BearRolePermission firstOrNew(array $filter, array $values)
 * @method static BearRolePermission|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearRolePermission> all(array $columns = ['*'])
 * @method static Collection<int, BearRolePermission> get(array $columns = ['*'])
 * @method static Collection<int|string, BearRolePermission> pluck(string $column, string $key = null)
 * @method static Collection<int, BearRolePermission> fromQuery(string $query, array $bindings = [])
 * @method static BearRolePermission lockForUpdate()
 * @method static BearRolePermission select(array $columns = ['*'])
 * @method static BearRolePermission selectRaw(string $expression, array $bindings = [])
 * @method static BearRolePermission with(array $relations)
 * @method static BearRolePermission leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearRolePermission where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static BearRolePermission whereIn(string $column, array $values)
 * @method static BearRolePermission whereNull(string|array $columns)
 * @method static BearRolePermission whereNotNull(string|array $columns)
 * @method static BearRolePermission whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearRolePermission whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearRolePermission whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static BearRolePermission whereExists(Closure $callback)
 * @method static BearRolePermission whereNotExists(Closure $callback)
 * @method static BearRolePermission whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearRolePermission withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearRolePermission whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearRolePermission whereRaw(string $sql, array $bindings = [])
 * @method static BearRolePermission groupBy(string $groupBy)
 * @method static BearRolePermission orderBy(string $column, string $direction = 'asc')
 * @method static BearRolePermission orderByDesc(string $column)
 * @method static BearRolePermission orderByRaw(string $sql, array $bindings = [])
 * @method static BearRolePermission limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static mixed sum(string $column)
 * @method static bool exists()
 *
 * @property string $role_enum
 * @property string $created_at
 * @property string $permission_enum
 *
 * @property BearRole $roleEnum
 * @property BearPermission $permissionEnum
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearRolePermission extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_role_permission';
    /** @var array<string> primaryKeyArray */
    private array $primaryKeyArray = ['role_enum', 'permission_enum'];
    protected $keyType = 'array';
    public $incrementing = false;
    public $timestamps = false;

    /** @return BelongsTo<BearRole, self> */
    public function roleEnum(): BelongsTo {
        return $this->belongsTo(related: BearRole::class, foreignKey: 'role_enum', ownerKey: 'enum');
    }

    /** @return BelongsTo<BearPermission, self> */
    public function permissionEnum(): BelongsTo {
        return $this->belongsTo(related: BearPermission::class, foreignKey: 'permission_enum', ownerKey: 'enum');
    }

    protected $guarded = ['role_enum', 'permission_enum', 'updated_at', 'created_at', 'deleted_at'];


    /** @return Mixed[] */
    public function getKey(): array {
        $attributes = [];
        foreach ($this->primaryKeyArray as $key) {
            $attributes[$key] = $this->getAttribute($key);
        }
        return $attributes;
    }

    /**
     * @param array<string, string> $ids # Ids in the form ['key1' => 'value1', 'key2' => 'value2']
     * @param array<string> $columns
     * @return BearRolePermission|null
     */
    public static function find(array $ids, array $columns = ['*']): BearRolePermission|null {
        $me = new self;
        $query = $me->newQuery();
        foreach ($me->primaryKeyArray as $key) {
            $query->where(column: $key, operator: '=', value: $ids[$key]);
        }
        $result = $query->first($columns);
        return $result instanceof self ? $result : null;
    }

    /**
     * @param array<string, string> $ids # Ids in the form ['key1' => 'value1', 'key2' => 'value2']
     * @param array<string> $columns
     * @return BearRolePermission
     */
    public static function findOrFail(array $ids, array $columns = ['*']): BearRolePermission {
        $result = self::find(ids: $ids, columns: $columns);
        return $result ?? throw new RuntimeException(message: "No result found for " . self::class . " with ids " . json_encode($ids, JSON_THROW_ON_ERROR));
    }

    protected function setKeysForSaveQuery($query): EloquentBuilder {
        foreach ($this->primaryKeyArray as $key) {
            $query->where(column: $key, operator: "=", value: $this->$key ?? throw new RuntimeException(message: "Missing primary key value for $key"));
        }
        return $query;
    }
    protected function setKeysForSelectQuery($query): EloquentBuilder {
        foreach ($this->primaryKeyArray as $key) {
            $query->where(column: $key, operator: "=", value: $this->$key ?? throw new RuntimeException(message: "Missing primary key value for $key"));
        }
        return $query;
    }
}
