<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
 * @method static BearRolePermission|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearRolePermission all(array $columns = ['*'])
 * @method static Collection|BearRolePermission fromQuery(string $query, array $bindings = [])
 * @method static BearRolePermission lockForUpdate()
 * @method static BearRolePermission select(array $columns = ['*'])
 * @method static BearRolePermission with(array  $relations)
 * @method static BearRolePermission leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearRolePermission where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearRolePermission whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearRolePermission whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearRolePermission whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static BearRolePermission whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearRolePermission whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearRolePermission whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearRolePermission whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearRolePermission orderBy(string $column, string $direction = 'asc')
 *
 * @property string $role_slug
 * @property string $permission_slug
 * @property CarbonInterface $created_at
 *
 * @property BearRole $role
 * @property BearPermission $permission
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearRolePermission extends Model {
    use BearLogDatabaseChanges;

    protected $table = 'bear_role_permission';
    /** @var array<string> primaryKeyArray */
    private array $primaryKeyArray = ['role_slug', 'permission_slug'];
    protected $keyType = 'array';
    public $incrementing = false;
    protected $dateFormat = 'Y-m-d H:i:sO';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'created_at' => 'immutable_datetime',
    ];


    public function role(): BelongsTo {
        return $this->belongsTo(related: BearRole::class, foreignKey: 'role_slug', ownerKey: 'role_slug');
    }
    public function permission(): BelongsTo {
        return $this->belongsTo(related: BearPermission::class, foreignKey: 'permission_slug', ownerKey: 'permission_slug');
    }

    protected $guarded = ['role_slug', 'permission_slug', 'updated_at', 'created_at', 'deleted_at'];

    public function getAttribute($key) {
        $resp =  parent::getAttribute($key);
        if ($resp !== null || array_key_exists(key: $key, array: $this->attributes) || array_key_exists(key: $key, array: $this->relations)) {
            return $resp;
        }
        BearLogErrorCreator::create(
            message: "Attribute $key not loaded on " . static::class,
            namespace: "larabear",
            key: "attribute_not_loaded",
            severity: BearSeverityEnum::CRITICAL,
            remedy: "Make sure to include used attributes in the SELECT statement",
        );
        throw new RuntimeException(message: "Attribute $key not loaded on " . static::class);
    }


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
        return $result ?? throw (new ModelNotFoundException())->setModel(model: __CLASS__, ids: array_values($ids));
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
