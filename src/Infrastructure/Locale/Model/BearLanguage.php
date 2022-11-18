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
 * @method static BearLanguage|null find(string $id, array $columns = ['*'])
 * @method static BearLanguage findOrFail(string $id, array $columns = ['*'])
 * @method static BearLanguage sole(array $columns = ['*'])
 * @method static BearLanguage|null first(array $columns = ['*'])
 * @method static BearLanguage firstOrFail(array $columns = ['*'])
 * @method static BearLanguage firstOrCreate(array $filter, array $values)
 * @method static BearLanguage firstOrNew(array $filter, array $values)
 * @method static BearLanguage|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearLanguage all(array $columns = ['*'])
 * @method static Collection|BearLanguage fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearLanguage lockForUpdate()
 * @method static Builder|BearLanguage select(array $columns = ['*'])
 * @method static Builder|BearLanguage with(array  $relations)
 * @method static Builder|BearLanguage leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearLanguage where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearLanguage whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLanguage whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static Builder|BearLanguage whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static Builder|BearLanguage whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLanguage whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLanguage whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLanguage whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static Builder|BearLanguage orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property string $language_name
 * @property string $language_iso2_code
 * @property string $language_iso3_code
 * @property CarbonInterface $created_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearLanguage extends Model {
    use BearLogDatabaseChanges;

    protected $table = 'bear_language';
    protected $primaryKey = 'language_iso2_code';
    protected $keyType = 'string';
    protected $dateFormat = 'Y-m-d H:i:sO';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'created_at' => 'immutable_datetime',
    ];

    protected $guarded = ['language_iso2_code', 'updated_at', 'created_at', 'deleted_at'];
}
