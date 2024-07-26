<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Model;

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
 * @method static BearRole|null find(string $id, array $columns = ['*'])
 * @method static BearRole findOrFail(string $id, array $columns = ['*'])
 * @method static BearRole sole(array $columns = ['*'])
 * @method static BearRole|null first(array $columns = ['*'])
 * @method static BearRole firstOrFail(array $columns = ['*'])
 * @method static BearRole firstOrCreate(array $filter, array $values)
 * @method static BearRole firstOrNew(array $filter, array $values)
 * @method static BearRole|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearRole> all(array $columns = ['*'])
 * @method static Collection<int, BearRole> get(array $columns = ['*'])
 * @method static Collection<int|string, BearRole> pluck(string $column, string $key = null)
 * @method static Collection<int, BearRole> fromQuery(string $query, array $bindings = [])
 * @method static Builder<BearRole> lockForUpdate()
 * @method static Builder<BearRole> select(array $columns = ['*'])
 * @method static Builder<BearRole> selectRaw(string $expression, array $bindings = [])
 * @method static Builder<BearRole> with(array $relations)
 * @method static Builder<BearRole> leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder<BearRole> where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static Builder<BearRole> whereIn(string $column, array $values)
 * @method static Builder<BearRole> whereNull(string|array $columns)
 * @method static Builder<BearRole> whereNotNull(string|array $columns)
 * @method static Builder<BearRole> whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearRole> whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearRole> whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static Builder<BearRole> whereExists(Closure $callback)
 * @method static Builder<BearRole> whereNotExists(Closure $callback)
 * @method static Builder<BearRole> whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearRole> withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearRole> whereDoesntHave(string $relation, Closure $callback = null)
 * @method static Builder<BearRole> whereRaw(string $sql, array $bindings = [])
 * @method static Builder<BearRole> groupBy(string $groupBy)
 * @method static Builder<BearRole> orderBy(string $column, string $direction = 'asc')
 * @method static Builder<BearRole> orderByDesc(string $column)
 * @method static Builder<BearRole> orderByRaw(string $sql, array $bindings = [])
 * @method static Builder<BearRole> limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property string $enum
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $description
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearRole extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_role';
    protected $primaryKey = 'enum';
    protected $keyType = 'string';

    protected $guarded = ['enum', 'updated_at', 'created_at', 'deleted_at'];
}
