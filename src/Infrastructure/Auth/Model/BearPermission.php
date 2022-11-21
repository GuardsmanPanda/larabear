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
 * @method static BearPermission|null find(string $id, array $columns = ['*'])
 * @method static BearPermission findOrFail(string $id, array $columns = ['*'])
 * @method static BearPermission sole(array $columns = ['*'])
 * @method static BearPermission|null first(array $columns = ['*'])
 * @method static BearPermission firstOrFail(array $columns = ['*'])
 * @method static BearPermission firstOrCreate(array $filter, array $values)
 * @method static BearPermission firstOrNew(array $filter, array $values)
 * @method static BearPermission|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearPermission all(array $columns = ['*'])
 * @method static Collection|BearPermission fromQuery(string $query, array $bindings = [])
 * @method static BearPermission lockForUpdate()
 * @method static BearPermission select(array $columns = ['*'])
 * @method static BearPermission with(array  $relations)
 * @method static BearPermission leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearPermission where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearPermission whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearPermission whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearPermission whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static BearPermission whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearPermission whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearPermission whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearPermission whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearPermission orderBy(string $column, string $direction = 'asc')
 *
 * @property string $permission_slug
 * @property string|null $permission_description
 * @property CarbonInterface $created_at
 * @property CarbonInterface $updated_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearPermission extends Model {
    use BearLogDatabaseChanges;

    protected $table = 'bear_permission';
    protected $primaryKey = 'permission_slug';
    protected $keyType = 'string';
    protected $dateFormat = 'Y-m-d H:i:sO';

    /** @var array<string, string> $casts */
    protected $casts = [
        'created_at' => 'immutable_datetime',
        'updated_at' => 'immutable_datetime',
    ];

    protected $guarded = ['permission_slug', 'updated_at', 'created_at', 'deleted_at'];

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
