<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Enum\BearCountryEnum;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Enum\BearCountrySubdivisionTypeEnum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearCountrySubdivision|null find(string $id, array $columns = ['*'])
 * @method static BearCountrySubdivision findOrFail(string $id, array $columns = ['*'])
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
 * @property int $osm_relation_id
 * @property string $name
 * @property string $capital
 * @property string $iso_3166
 * @property string $created_at
 * @property string $updated_at
 * @property BearCountryEnum $country_cca2
 * @property BearCountrySubdivisionTypeEnum $country_subdivision_type_enum
 *
 * @property BearCountry $countryCca2
 * @property BearCountrySubdivisionType $countrySubdivisionType
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearCountrySubdivision extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_country_subdivision';
    protected $primaryKey = 'iso_3166';
    protected $keyType = 'string';

    /** @var array<string, string> $casts */
    protected $casts = [
        'country_cca2' => BearCountryEnum::class,
        'country_subdivision_type_enum' => BearCountrySubdivisionTypeEnum::class,
    ];

    /** @return BelongsTo<BearCountry, self> */
    public function countryCca2(): BelongsTo {
        return $this->belongsTo(related: BearCountry::class, foreignKey: 'country_cca2', ownerKey: 'cca2');
    }

    /** @return BelongsTo<BearCountrySubdivisionType, self> */
    public function countrySubdivisionType(): BelongsTo {
        return $this->belongsTo(related: BearCountrySubdivisionType::class, foreignKey: 'country_subdivision_type_enum', ownerKey: 'enum');
    }

    protected $guarded = ['iso_3166', 'updated_at', 'created_at', 'deleted_at'];
}
