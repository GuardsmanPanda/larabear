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
use Illuminate\Database\Query\Builder;
use RuntimeException;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearRoleUser sole(array $columns = ['*'])
 * @method static BearRoleUser|null first(array $columns = ['*'])
 * @method static BearRoleUser firstOrFail(array $columns = ['*'])
 * @method static BearRoleUser firstOrCreate(array $filter, array $values)
 * @method static BearRoleUser firstOrNew(array $filter, array $values)
 * @method static BearRoleUser|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearRoleUser all(array $columns = ['*'])
 * @method static Collection|BearRoleUser fromQuery(string $query, array $bindings = [])
 * @method static BearRoleUser lockForUpdate()
 * @method static BearRoleUser select(array $columns = ['*'])
 * @method static BearRoleUser with(array  $relations)
 * @method static BearRoleUser leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearRoleUser where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearRoleUser whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearRoleUser whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearRoleUser whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static BearRoleUser whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearRoleUser whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearRoleUser whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearRoleUser whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearRoleUser orderBy(string $column, string $direction = 'asc')
 *
 * @property string $user_id
 * @property string $role_slug
 * @property CarbonInterface $created_at
 *
 * @property BearRole $role
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearRoleUser extends Model {
    use BearLogDatabaseChanges;

    protected $connection = 'pgsql';
    protected $table = 'bear_role_user';
    /** @var array<string> primaryKeyArray */
    private array $primaryKeyArray = ['role_slug', 'user_id'];
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

    protected $guarded = ['role_slug', 'user_id', 'updated_at', 'created_at', 'deleted_at'];

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
