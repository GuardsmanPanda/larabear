<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Enum\BearCountryEnum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use RuntimeException;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearCountrySubdivision sole(array $columns = ['*'])
 * @method static BearCountrySubdivision|null first(array $columns = ['*'])
 * @method static BearCountrySubdivision firstOrFail(array $columns = ['*'])
 * @method static BearCountrySubdivision firstOrCreate(array $filter, array $values)
 * @method static BearCountrySubdivision firstOrNew(array $filter, array $values)
 * @method static BearCountrySubdivision|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearCountrySubdivision> all(array $columns = ['*'])
 * @method static Collection<int, BearCountrySubdivision> get(array $columns = ['*'])
 * @method static Collection<int, BearCountrySubdivision> fromQuery(string $query, array $bindings = [])
 * @method static Builder<BearCountrySubdivision> lockForUpdate()
 * @method static Builder<BearCountrySubdivision> select(array $columns = ['*'])
 * @method static Builder<BearCountrySubdivision> selectRaw(string $expression, array $bindings = [])
 * @method static Builder<BearCountrySubdivision> with(array $relations)
 * @method static Builder<BearCountrySubdivision> leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder<BearCountrySubdivision> where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static Builder<BearCountrySubdivision> whereIn(string $column, array $values)
 * @method static Builder<BearCountrySubdivision> whereNull(string|array $columns)
 * @method static Builder<BearCountrySubdivision> whereNotNull(string|array $columns)
 * @method static Builder<BearCountrySubdivision> whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearCountrySubdivision> whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearCountrySubdivision> whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static Builder<BearCountrySubdivision> whereExists(Closure $callback)
 * @method static Builder<BearCountrySubdivision> whereNotExists(Closure $callback)
 * @method static Builder<BearCountrySubdivision> whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearCountrySubdivision> withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearCountrySubdivision> whereDoesntHave(string $relation, Closure $callback = null)
 * @method static Builder<BearCountrySubdivision> whereRaw(string $sql, array $bindings = [])
 * @method static Builder<BearCountrySubdivision> groupBy(string $groupBy)
 * @method static Builder<BearCountrySubdivision> orderBy(string $column, string $direction = 'asc')
 * @method static Builder<BearCountrySubdivision> orderByDesc(string $column)
 * @method static Builder<BearCountrySubdivision> orderByRaw(string $sql, array $bindings = [])
 * @method static Builder<BearCountrySubdivision> limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property int $area_km2
 * @property int $population
 * @property int $local_area_rank
 * @property int $global_area_rank
 * @property int $local_population_rank
 * @property int $global_population_rank
 * @property string $name
 * @property string $capital
 * @property string $iso_3166
 * @property string $created_at
 * @property string $updated_at
 * @property BearCountryEnum $country_cca2
 *
 * @property BearCountry $countryCca2
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearCountrySubdivision extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_country_subdivision';
    /** @var array<string> primaryKeyArray */
    private array $primaryKeyArray = ['country_cca2', 'iso_3166'];
    protected $keyType = 'array';
    public $incrementing = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'country_cca2' => BearCountryEnum::class,
    ];

    /** @return BelongsTo<BearCountry, self> */
    public function countryCca2(): BelongsTo {
        return $this->belongsTo(related: BearCountry::class, foreignKey: 'country_cca2', ownerKey: 'cca2');
    }

    protected $guarded = ['country_cca2', 'iso_3166', 'updated_at', 'created_at', 'deleted_at'];


    /** @return Mixed[] */
    public function getKey(): array {
        $attributes = [];
        foreach ($this->primaryKeyArray as $key) {
            $attributes[$key] = $this->getAttribute($key);
        }
        return $attributes;
    }

    /**
     * @param array<string, string|int> $ids # Ids in the form ['key1' => 'value1', 'key2' => 'value2']
     * @param array<string> $columns
     * @return BearCountrySubdivision|null
     */
    public static function find(array $ids, array $columns = ['*']): BearCountrySubdivision|null {
        $me = new self;
        $query = $me->newQuery();
        foreach ($me->primaryKeyArray as $key) {
            $query->where(column: $key, operator: '=', value: $ids[$key]);
        }
        $result = $query->first($columns);
        return $result instanceof self ? $result : null;
    }

    /**
     * @param array<string, string|int> $ids # Ids in the form ['key1' => 'value1', 'key2' => 'value2']
     * @param array<string> $columns
     * @return BearCountrySubdivision
     */
    public static function findOrFail(array $ids, array $columns = ['*']): BearCountrySubdivision {
        $result = self::find(ids: $ids, columns: $columns);
        return $result ?? throw new RuntimeException(message: "No result found for " . self::class . " with ids " . json_encode($ids, JSON_THROW_ON_ERROR));
    }

    protected function setKeysForSaveQuery($query): Builder {
        foreach ($this->primaryKeyArray as $key) {
            $query->where(column: $key, operator: "=", value: $this->$key ?? throw new RuntimeException(message: "Missing primary key value for $key"));
        }
        return $query;
    }
    protected function setKeysForSelectQuery($query): Builder {
        foreach ($this->primaryKeyArray as $key) {
            $query->where(column: $key, operator: "=", value: $this->$key ?? throw new RuntimeException(message: "Missing primary key value for $key"));
        }
        return $query;
    }
}
