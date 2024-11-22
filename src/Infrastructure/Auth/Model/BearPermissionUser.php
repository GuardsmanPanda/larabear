<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use RuntimeException;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearPermissionUser sole(array $columns = ['*'])
 * @method static BearPermissionUser|null first(array $columns = ['*'])
 * @method static BearPermissionUser firstOrFail(array $columns = ['*'])
 * @method static BearPermissionUser firstOrCreate(array $filter, array $values)
 * @method static BearPermissionUser firstOrNew(array $filter, array $values)
 * @method static BearPermissionUser|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearPermissionUser> all(array $columns = ['*'])
 * @method static Collection<int, BearPermissionUser> get(array $columns = ['*'])
 * @method static Collection<int, BearPermissionUser> fromQuery(string $query, array $bindings = [])
 * @method static Builder<BearPermissionUser> lockForUpdate()
 * @method static Builder<BearPermissionUser> select(array $columns = ['*'])
 * @method static Builder<BearPermissionUser> selectRaw(string $expression, array $bindings = [])
 * @method static Builder<BearPermissionUser> with(array $relations)
 * @method static Builder<BearPermissionUser> leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder<BearPermissionUser> where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static Builder<BearPermissionUser> whereIn(string $column, array $values)
 * @method static Builder<BearPermissionUser> whereNull(string|array $columns)
 * @method static Builder<BearPermissionUser> whereNotNull(string|array $columns)
 * @method static Builder<BearPermissionUser> whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearPermissionUser> whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearPermissionUser> whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static Builder<BearPermissionUser> whereExists(Closure $callback)
 * @method static Builder<BearPermissionUser> whereNotExists(Closure $callback)
 * @method static Builder<BearPermissionUser> whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearPermissionUser> withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearPermissionUser> whereDoesntHave(string $relation, Closure $callback = null)
 * @method static Builder<BearPermissionUser> whereRaw(string $sql, array $bindings = [])
 * @method static Builder<BearPermissionUser> groupBy(string $groupBy)
 * @method static Builder<BearPermissionUser> orderBy(string $column, string $direction = 'asc')
 * @method static Builder<BearPermissionUser> orderByDesc(string $column)
 * @method static Builder<BearPermissionUser> orderByRaw(string $sql, array $bindings = [])
 * @method static Builder<BearPermissionUser> limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property string $user_id
 * @property string $created_at
 * @property string $permission_enum
 *
 * @property BearUser $user
 * @property BearPermission $permission
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearPermissionUser extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_permission_user';
    /** @var array<string> primaryKeyArray */
    private array $primaryKeyArray = ['permission_enum', 'user_id'];
    protected $keyType = 'array';
    public $incrementing = false;
    public $timestamps = false;

    /** @return BelongsTo<BearUser, $this> */
    public function user(): BelongsTo {
        return $this->belongsTo(related: BearUser::class, foreignKey: 'user_id', ownerKey: 'id');
    }

    /** @return BelongsTo<BearPermission, $this> */
    public function permissionEnum(): BelongsTo {
        return $this->belongsTo(related: BearPermission::class, foreignKey: 'permission_enum', ownerKey: 'enum');
    }

    protected $guarded = ['permission_enum', 'user_id', 'updated_at', 'created_at', 'deleted_at'];


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
     * @return BearPermissionUser|null
     */
    public static function find(array $ids, array $columns = ['*']): BearPermissionUser|null {
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
     * @return BearPermissionUser
     */
    public static function findOrFail(array $ids, array $columns = ['*']): BearPermissionUser {
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
