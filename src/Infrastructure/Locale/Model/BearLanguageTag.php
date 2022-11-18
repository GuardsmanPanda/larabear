<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearLanguageTag|null find(string $id, array $columns = ['*'])
 * @method static BearLanguageTag findOrFail(string $id, array $columns = ['*'])
 * @method static BearLanguageTag sole(array $columns = ['*'])
 * @method static BearLanguageTag|null first(array $columns = ['*'])
 * @method static BearLanguageTag firstOrFail(array $columns = ['*'])
 * @method static BearLanguageTag firstOrCreate(array $filter, array $values)
 * @method static BearLanguageTag firstOrNew(array $filter, array $values)
 * @method static BearLanguageTag|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearLanguageTag all(array $columns = ['*'])
 * @method static Collection|BearLanguageTag fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearLanguageTag lockForUpdate()
 * @method static Builder|BearLanguageTag select(array $columns = ['*'])
 * @method static Builder|BearLanguageTag with(array  $relations)
 * @method static Builder|BearLanguageTag leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearLanguageTag where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearLanguageTag whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLanguageTag whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static Builder|BearLanguageTag whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static Builder|BearLanguageTag whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLanguageTag whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLanguageTag whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLanguageTag whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static Builder|BearLanguageTag orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property string $language_tag
 * @property string $country_iso2_code
 * @property string $language_iso2_code
 * @property CarbonInterface $created_at
 *
 * @property BearLanguage $languageIso2Code
 * @property BearCountry $countryIso2Code
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearLanguageTag extends Model {
    use BearLogDatabaseChanges;

    protected $table = 'bear_language_tag';
    protected $primaryKey = 'language_tag';
    protected $keyType = 'string';
    protected $dateFormat = 'Y-m-d H:i:sO';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'created_at' => 'immutable_datetime',
    ];


    public function languageIso2Code(): BelongsTo {
        return $this->belongsTo(related: BearLanguage::class, foreignKey: 'language_iso2_code', ownerKey: 'language_iso2_code');
    }
    public function countryIso2Code(): BelongsTo {
        return $this->belongsTo(related: BearCountry::class, foreignKey: 'country_iso2_code', ownerKey: 'country_iso2_code');
    }

    protected $guarded = ['language_tag', 'updated_at', 'created_at', 'deleted_at'];
}
