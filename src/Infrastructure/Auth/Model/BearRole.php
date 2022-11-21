<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use RuntimeException;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearRole|null find(string $id, array $columns = ['*'])
 * @method static BearRole findOrFail(string $id, array $columns = ['*'])
 * @method static BearRole sole(array $columns = ['*'])
 * @method static BearRole|null first(array $columns = ['*'])
 * @method static BearRole firstOrFail(array $columns = ['*'])
 * @method static BearRole firstOrCreate(array $filter, array $values)
 * @method static BearRole firstOrNew(array $filter, array $values)
 * @method static BearRole|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearRole all(array $columns = ['*'])
 * @method static Collection|BearRole fromQuery(string $query, array $bindings = [])
 * @method static BearRole lockForUpdate()
 * @method static BearRole select(array $columns = ['*'])
 * @method static BearRole with(array  $relations)
 * @method static BearRole leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearRole where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearRole whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearRole whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearRole whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static BearRole whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearRole whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearRole whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearRole whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearRole orderBy(string $column, string $direction = 'asc')
 *
 * @property string $role_slug
 * @property string|null $role_description
 * @property CarbonInterface $created_at
 * @property CarbonInterface $updated_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearRole extends Model {
    use BearLogDatabaseChanges;

    protected $table = 'bear_role';
    protected $primaryKey = 'role_slug';
    protected $keyType = 'string';
    protected $dateFormat = 'Y-m-d H:i:sO';

    /** @var array<string, string> $casts */
    protected $casts = [
        'created_at' => 'immutable_datetime',
        'updated_at' => 'immutable_datetime',
    ];

    protected $guarded = ['role_slug', 'updated_at', 'created_at', 'deleted_at'];

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
}
