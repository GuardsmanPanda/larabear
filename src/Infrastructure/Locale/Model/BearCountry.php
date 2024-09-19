<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearCountry|null find(string $id, array $columns = ['*'])
 * @method static BearCountry findOrFail(string $id, array $columns = ['*'])
 * @method static BearCountry sole(array $columns = ['*'])
 * @method static BearCountry|null first(array $columns = ['*'])
 * @method static BearCountry firstOrFail(array $columns = ['*'])
 * @method static BearCountry firstOrCreate(array $filter, array $values)
 * @method static BearCountry firstOrNew(array $filter, array $values)
 * @method static BearCountry|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearCountry> all(array $columns = ['*'])
 * @method static Collection<int, BearCountry> get(array $columns = ['*'])
 * @method static Collection<int, BearCountry> fromQuery(string $query, array $bindings = [])
 * @method static BearCountry lockForUpdate()
 * @method static BearCountry select(array $columns = ['*'])
 * @method static BearCountry selectRaw(string $expression, array $bindings = [])
 * @method static BearCountry with(array $relations)
 * @method static BearCountry leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearCountry where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static BearCountry whereIn(string $column, array $values)
 * @method static BearCountry whereNull(string|array $columns)
 * @method static BearCountry whereNotNull(string|array $columns)
 * @method static BearCountry whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearCountry whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearCountry whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static BearCountry whereExists(Closure $callback)
 * @method static BearCountry whereNotExists(Closure $callback)
 * @method static BearCountry whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearCountry withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearCountry whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearCountry whereRaw(string $sql, array $bindings = [])
 * @method static BearCountry groupBy(string $groupBy)
 * @method static BearCountry orderBy(string $column, string $direction = 'asc')
 * @method static BearCountry orderByDesc(string $column)
 * @method static BearCountry orderByRaw(string $sql, array $bindings = [])
 * @method static BearCountry limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static mixed sum(string $column)
 * @method static bool exists()
 *
 * @property int $area_km2
 * @property int $area_rank
 * @property int $population
 * @property int $population_rank
 * @property int|null $osm_relation_id
 * @property bool $is_driving_side_right
 * @property string $tld
 * @property string $cca2
 * @property string $cca3
 * @property string $name
 * @property string $capital
 * @property string $created_at
 * @property string $updated_at
 * @property string $calling_code
 * @property string $currency_code
 * @property string $currency_name
 * @property string $currency_symbol
 * @property string|null $dependency_status
 * @property CarbonInterface|null $osm_sync_at
 * @property ArrayObject<int,string> $cca2_borders_json
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearCountry extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_country';
    protected $primaryKey = 'cca2';
    protected $keyType = 'string';

    /** @var array<string, string> $casts */
    protected $casts = [
        'cca2_borders_json' => AsArrayObject::class,
        'osm_sync_at' => 'immutable_datetime',
    ];

    protected $guarded = ['cca2', 'updated_at', 'created_at', 'deleted_at'];
}
