<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

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
 * @method static BearPermission|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearPermission> all(array $columns = ['*'])
 * @method static Collection<int, BearPermission> get(array $columns = ['*'])
 * @method static Collection<int|string, BearPermission> pluck(string $column, string $key = null)
 * @method static Collection<int, BearPermission> fromQuery(string $query, array $bindings = [])
 * @method static BearPermission lockForUpdate()
 * @method static BearPermission select(array $columns = ['*'])
 * @method static BearPermission selectRaw(string $expression, array $bindings = [])
 * @method static BearPermission with(array $relations)
 * @method static BearPermission leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearPermission where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static BearPermission whereIn(string $column, array $values)
 * @method static BearPermission whereNull(string|array $columns)
 * @method static BearPermission whereNotNull(string|array $columns)
 * @method static BearPermission whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearPermission whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearPermission whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static BearPermission whereExists(Closure $callback)
 * @method static BearPermission whereNotExists(Closure $callback)
 * @method static BearPermission whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearPermission withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearPermission whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearPermission whereRaw(string $sql, array $bindings = [])
 * @method static BearPermission groupBy(string $groupBy)
 * @method static BearPermission orderBy(string $column, string $direction = 'asc')
 * @method static BearPermission orderByDesc(string $column)
 * @method static BearPermission orderByRaw(string $sql, array $bindings = [])
 * @method static BearPermission limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static mixed sum(string $column)
 * @method static bool exists()
 *
 * @property string $enum
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $description
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearPermission extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_permission';
    protected $primaryKey = 'enum';
    protected $keyType = 'string';

    protected $guarded = ['enum', 'updated_at', 'created_at', 'deleted_at'];
}
