<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Builder;
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
 * @method static Collection<int, BearConfig> fromQuery(string $query, array $bindings = [])
 * @method static Builder<BearConfig> lockForUpdate()
 * @method static Builder<BearConfig> select(array $columns = ['*'])
 * @method static Builder<BearConfig> selectRaw(string $expression, array $bindings = [])
 * @method static Builder<BearConfig> with(array $relations)
 * @method static Builder<BearConfig> leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder<BearConfig> where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static Builder<BearConfig> whereIn(string $column, array $values)
 * @method static Builder<BearConfig> whereNull(string|array $columns)
 * @method static Builder<BearConfig> whereNotNull(string|array $columns)
 * @method static Builder<BearConfig> whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearConfig> whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearConfig> whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static Builder<BearConfig> whereExists(Closure $callback)
 * @method static Builder<BearConfig> whereNotExists(Closure $callback)
 * @method static Builder<BearConfig> whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearConfig> withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearConfig> whereDoesntHave(string $relation, Closure $callback = null)
 * @method static Builder<BearConfig> whereRaw(string $sql, array $bindings = [])
 * @method static Builder<BearConfig> groupBy(string $groupBy)
 * @method static Builder<BearConfig> orderBy(string $column, string $direction = 'asc')
 * @method static Builder<BearConfig> orderByDesc(string $column)
 * @method static Builder<BearConfig> orderByRaw(string $sql, array $bindings = [])
 * @method static Builder<BearConfig> limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property int|null $config_integer
 * @property bool|null $config_boolean
 * @property string $enum
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
    protected $primaryKey = 'enum';
    protected $keyType = 'string';

    /** @var array<string, string> $casts */
    protected $casts = [
        'config_date' => 'immutable_date',
        'config_timestamp' => 'immutable_datetime',
        'encrypted_config_string' => 'encrypted',
    ];

    protected $guarded = ['slug', 'updated_at', 'created_at', 'deleted_at'];
}
