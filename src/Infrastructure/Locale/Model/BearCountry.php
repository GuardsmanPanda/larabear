<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

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
 * @method static BearCountry|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearCountry all(array $columns = ['*'])
 * @method static Collection|BearCountry fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearCountry lockForUpdate()
 * @method static Builder|BearCountry select(array $columns = ['*'])
 * @method static Builder|BearCountry with(array  $relations)
 * @method static Builder|BearCountry leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearCountry where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearCountry whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearCountry whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static Builder|BearCountry whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static Builder|BearCountry whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearCountry whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearCountry whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearCountry whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static Builder|BearCountry orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property bool $is_country_independent
 * @property string $country_tld
 * @property string $country_name
 * @property string $country_iso2_code
 * @property string $country_iso3_code
 * @property string $country_dialing_code
 * @property string $country_currency_code
 * @property string|null $country_dependency_status
 * @property CarbonInterface $created_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearCountry extends Model {
    use BearLogDatabaseChanges;

    protected $table = 'bear_country';
    protected $primaryKey = 'country_iso2_code';
    protected $keyType = 'string';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'created_at' => 'immutable_datetime',
    ];

    protected $guarded = ['country_iso2_code', 'updated_at', 'created_at', 'deleted_at'];
}
