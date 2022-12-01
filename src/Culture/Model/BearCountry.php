<?php

namespace GuardsmanPanda\Larabear\Culture\Model;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
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
 * @method static BearCountry|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearCountry all(array $columns = ['*'])
 * @method static Collection|BearCountry get(array $columns = ['*'])
 * @method static Collection|BearCountry fromQuery(string $query, array $bindings = [])
 * @method static BearCountry lockForUpdate()
 * @method static BearCountry select(array $columns = ['*'])
 * @method static BearCountry with(array $relations)
 * @method static BearCountry leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearCountry where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearCountry whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearCountry whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearCountry whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearCountry whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearCountry withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearCountry whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearCountry whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearCountry whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearCountry whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearCountry orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property bool $is_country_independent
 * @property string $created_at
 * @property string $country_tld
 * @property string $country_name
 * @property string $country_iso2_code
 * @property string $country_iso3_code
 * @property string $country_calling_code
 * @property string $country_currency_code
 * @property string|null $country_dependency_status
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearCountry extends Model {
    use BearLogDatabaseChanges, LarabearFixDateFormatTrait;

    protected $table = 'bear_country';
    protected $primaryKey = 'country_iso2_code';
    protected $keyType = 'string';
    public $timestamps = false;

    protected $guarded = ['country_iso2_code', 'updated_at', 'created_at', 'deleted_at'];
}
