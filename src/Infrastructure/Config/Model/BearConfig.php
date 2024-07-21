<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearConfig|null find(string $id, array $columns = ['*'])
 * @method static BearConfig findOrFail(string $id, array $columns = ['*'])
 * @method static BearConfig sole(array $columns = ['*'])
 * @method static BearConfig|null first(array $columns = ['*'])
 * @method static BearConfig firstOrFail(array $columns = ['*'])
 * @method static BearConfig firstOrCreate(array $filter, array $values)
 * @method static BearConfig firstOrNew(array $filter, array $values)
 * @method static BearConfig|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearConfig> all(array $columns = ['*'])
 * @method static Collection<int, BearConfig> get(array $columns = ['*'])
 * @method static Collection<int|string, BearConfig> pluck(string $column, string $key = null)
 * @method static Collection<int, BearConfig> fromQuery(string $query, array $bindings = [])
 * @method static BearConfig lockForUpdate()
 * @method static BearConfig select(array $columns = ['*'])
 * @method static BearConfig selectRaw(string $expression, array $bindings = [])
 * @method static BearConfig with(array $relations)
 * @method static BearConfig leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearConfig where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static BearConfig whereIn(string $column, array $values)
 * @method static BearConfig whereNull(string|array $columns)
 * @method static BearConfig whereNotNull(string|array $columns)
 * @method static BearConfig whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearConfig whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearConfig whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static BearConfig whereExists(Closure $callback)
 * @method static BearConfig whereNotExists(Closure $callback)
 * @method static BearConfig whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearConfig withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearConfig whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearConfig whereRaw(string $sql, array $bindings = [])
 * @method static BearConfig groupBy(string $groupBy)
 * @method static BearConfig orderBy(string $column, string $direction = 'asc')
 * @method static BearConfig orderByDesc(string $column)
 * @method static BearConfig orderByRaw(string $sql, array $bindings = [])
 * @method static BearConfig limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static mixed sum(string $column)
 * @method static bool exists()
 *
 * @property int|null $config_integer
 * @property bool|null $config_boolean
 * @property string $slug
 * @property string $created_at
 * @property string $updated_at
 * @property string $description
 * @property string|null $config_string
 * @property string|null $encrypted_config_string
 * @property CarbonInterface|null $config_date
 * @property CarbonInterface|null $config_timestamp
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearConfig extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_config';
    protected $primaryKey = 'slug';
    protected $keyType = 'string';

    /** @var array<string, string> $casts */
    protected $casts = [
        'config_date' => 'immutable_date',
        'config_timestamp' => 'immutable_datetime',
        'encrypted_config_string' => 'encrypted',
    ];

    protected $guarded = ['slug', 'updated_at', 'created_at', 'deleted_at'];
}
