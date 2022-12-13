<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Model;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
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
 * @method static BearPermissionUser|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection all(array $columns = ['*'])
 * @method static Collection get(array $columns = ['*'])
 * @method static Collection fromQuery(string $query, array $bindings = [])
 * @method static BearPermissionUser lockForUpdate()
 * @method static BearPermissionUser select(array $columns = ['*'])
 * @method static BearPermissionUser with(array $relations)
 * @method static BearPermissionUser leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearPermissionUser where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearPermissionUser whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearPermissionUser whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearPermissionUser whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearPermissionUser whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearPermissionUser withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearPermissionUser whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearPermissionUser whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearPermissionUser whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearPermissionUser whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearPermissionUser orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property string $user_id
 * @property string $created_at
 * @property string $permission_slug
 *
 * @property BearUser $user
 * @property BearPermission $permission
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearPermissionUser extends Model {
    use BearLogDatabaseChanges, LarabearFixDateFormatTrait;

    protected $table = 'bear_permission_user';
    /** @var array<string> primaryKeyArray */
    private array $primaryKeyArray = ['permission_slug', 'user_id'];
    protected $keyType = 'array';
    public $incrementing = false;
    public $timestamps = false;

    public function user(): BelongsTo {
        return $this->belongsTo(related: BearUser::class, foreignKey: 'user_id', ownerKey: 'id');
    }

    public function permission(): BelongsTo {
        return $this->belongsTo(related: BearPermission::class, foreignKey: 'permission_slug', ownerKey: 'permission_slug');
    }

    protected $guarded = ['permission_slug', 'user_id', 'updated_at', 'created_at', 'deleted_at'];


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
            if (isset($this->$key)) {
                $query->where(column: $key, operator: '=', value: $this->$key);
            } else {
                throw new RuntimeException(message: "Missing primary key value for $key");
            }
        }
        return $query;
    }
    protected function setKeysForSelectQuery($query): EloquentBuilder {
        foreach ($this->primaryKeyArray as $key) {
            if (isset($this->$key)) {
                $query->where(column: $key, operator: '=', value: $this->$key);
            } else {
                throw new RuntimeException(message: "Missing primary key value for $key");
            }
        }
        return $query;
    }
}
