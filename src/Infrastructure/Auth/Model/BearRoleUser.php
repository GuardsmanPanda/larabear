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
 * @method static BearRoleUser sole(array $columns = ['*'])
 * @method static BearRoleUser|null first(array $columns = ['*'])
 * @method static BearRoleUser firstOrFail(array $columns = ['*'])
 * @method static BearRoleUser firstOrCreate(array $filter, array $values)
 * @method static BearRoleUser firstOrNew(array $filter, array $values)
 * @method static BearRoleUser|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearRoleUser> all(array $columns = ['*'])
 * @method static Collection<int, BearRoleUser> get(array $columns = ['*'])
 * @method static Collection<array-key, BearRoleUser> pluck(string $column, string $key = null)
 * @method static Collection<int, BearRoleUser> fromQuery(string $query, array $bindings = [])
 * @method static Builder<BearRoleUser> lockForUpdate()
 * @method static Builder<BearRoleUser> select(array $columns = ['*'])
 * @method static Builder<BearRoleUser> selectRaw(string $expression, array $bindings = [])
 * @method static Builder<BearRoleUser> with(array $relations)
 * @method static Builder<BearRoleUser> leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder<BearRoleUser> where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static Builder<BearRoleUser> whereIn(string $column, array $values)
 * @method static Builder<BearRoleUser> whereNull(string|array $columns)
 * @method static Builder<BearRoleUser> whereNotNull(string|array $columns)
 * @method static Builder<BearRoleUser> whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearRoleUser> whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearRoleUser> whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static Builder<BearRoleUser> whereExists(Closure $callback)
 * @method static Builder<BearRoleUser> whereNotExists(Closure $callback)
 * @method static Builder<BearRoleUser> whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearRoleUser> withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearRoleUser> whereDoesntHave(string $relation, Closure $callback = null)
 * @method static Builder<BearRoleUser> whereRaw(string $sql, array $bindings = [])
 * @method static Builder<BearRoleUser> groupBy(string $groupBy)
 * @method static Builder<BearRoleUser> orderBy(string $column, string $direction = 'asc')
 * @method static Builder<BearRoleUser> orderByDesc(string $column)
 * @method static Builder<BearRoleUser> orderByRaw(string $sql, array $bindings = [])
 * @method static Builder<BearRoleUser> limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property string $user_id
 * @property string $role_enum
 * @property string $created_at
 *
 * @property BearUser $user
 * @property BearRole $role
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearRoleUser extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_role_user';
    /** @var array<string> primaryKeyArray */
    private array $primaryKeyArray = ['role_enum', 'user_id'];
    protected $keyType = 'array';
    public $incrementing = false;
    public $timestamps = false;

    /** @return BelongsTo<BearUser, self> */
    public function user(): BelongsTo {
        return $this->belongsTo(related: BearUser::class, foreignKey: 'user_id', ownerKey: 'id');
    }

    /** @return BelongsTo<BearRole, self> */
    public function roleEnum(): BelongsTo {
        return $this->belongsTo(related: BearRole::class, foreignKey: 'role_enum', ownerKey: 'enum');
    }

    protected $guarded = ['role_enum', 'user_id', 'updated_at', 'created_at', 'deleted_at'];


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
     * @return BearRoleUser|null
     */
    public static function find(array $ids, array $columns = ['*']): BearRoleUser|null {
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
     * @return BearRoleUser
     */
    public static function findOrFail(array $ids, array $columns = ['*']): BearRoleUser {
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
