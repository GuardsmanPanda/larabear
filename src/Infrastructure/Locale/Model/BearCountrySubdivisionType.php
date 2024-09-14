<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Model;

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
 * @method static BearCountrySubdivisionType|null find(string $id, array $columns = ['*'])
 * @method static BearCountrySubdivisionType findOrFail(string $id, array $columns = ['*'])
 * @method static BearCountrySubdivisionType sole(array $columns = ['*'])
 * @method static BearCountrySubdivisionType|null first(array $columns = ['*'])
 * @method static BearCountrySubdivisionType firstOrFail(array $columns = ['*'])
 * @method static BearCountrySubdivisionType firstOrCreate(array $filter, array $values)
 * @method static BearCountrySubdivisionType firstOrNew(array $filter, array $values)
 * @method static BearCountrySubdivisionType|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearCountrySubdivisionType> all(array $columns = ['*'])
 * @method static Collection<int, BearCountrySubdivisionType> get(array $columns = ['*'])
 * @method static Collection<int, BearCountrySubdivisionType> fromQuery(string $query, array $bindings = [])
 * @method static Builder<BearCountrySubdivisionType> lockForUpdate()
 * @method static Builder<BearCountrySubdivisionType> select(array $columns = ['*'])
 * @method static Builder<BearCountrySubdivisionType> selectRaw(string $expression, array $bindings = [])
 * @method static Builder<BearCountrySubdivisionType> with(array $relations)
 * @method static Builder<BearCountrySubdivisionType> leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder<BearCountrySubdivisionType> where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static Builder<BearCountrySubdivisionType> whereIn(string $column, array $values)
 * @method static Builder<BearCountrySubdivisionType> whereNull(string|array $columns)
 * @method static Builder<BearCountrySubdivisionType> whereNotNull(string|array $columns)
 * @method static Builder<BearCountrySubdivisionType> whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearCountrySubdivisionType> whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearCountrySubdivisionType> whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static Builder<BearCountrySubdivisionType> whereExists(Closure $callback)
 * @method static Builder<BearCountrySubdivisionType> whereNotExists(Closure $callback)
 * @method static Builder<BearCountrySubdivisionType> whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearCountrySubdivisionType> withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearCountrySubdivisionType> whereDoesntHave(string $relation, Closure $callback = null)
 * @method static Builder<BearCountrySubdivisionType> whereRaw(string $sql, array $bindings = [])
 * @method static Builder<BearCountrySubdivisionType> groupBy(string $groupBy)
 * @method static Builder<BearCountrySubdivisionType> orderBy(string $column, string $direction = 'asc')
 * @method static Builder<BearCountrySubdivisionType> orderByDesc(string $column)
 * @method static Builder<BearCountrySubdivisionType> orderByRaw(string $sql, array $bindings = [])
 * @method static Builder<BearCountrySubdivisionType> limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property string $enum
 * @property string $name
 * @property string $created_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearCountrySubdivisionType extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_country_subdivision_type';
    protected $primaryKey = 'enum';
    protected $keyType = 'string';
    public $timestamps = false;

    protected $guarded = ['enum', 'updated_at', 'created_at', 'deleted_at'];
}
