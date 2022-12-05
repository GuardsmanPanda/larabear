<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Culture\Model;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
 * @method static Collection|BearLanguageTag get(array $columns = ['*'])
 * @method static Collection|BearLanguageTag fromQuery(string $query, array $bindings = [])
 * @method static BearLanguageTag lockForUpdate()
 * @method static BearLanguageTag select(array $columns = ['*'])
 * @method static BearLanguageTag with(array $relations)
 * @method static BearLanguageTag leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearLanguageTag where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearLanguageTag whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearLanguageTag whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearLanguageTag whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearLanguageTag whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearLanguageTag withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearLanguageTag whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearLanguageTag whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearLanguageTag whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearLanguageTag whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearLanguageTag orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property string $created_at
 * @property string $language_tag
 * @property string $country_iso2_code
 * @property string $language_iso2_code
 *
 * @property BearLanguage $languageIso2Code
 * @property BearCountry $countryIso2Code
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearLanguageTag extends Model {
    use BearLogDatabaseChanges, LarabearFixDateFormatTrait;

    protected $table = 'bear_language_tag';
    protected $primaryKey = 'language_tag';
    protected $keyType = 'string';
    public $timestamps = false;

    public function languageIso2Code(): BelongsTo {
        return $this->belongsTo(related: BearLanguage::class, foreignKey: 'language_iso2_code', ownerKey: 'language_iso2_code');
    }

    public function countryIso2Code(): BelongsTo {
        return $this->belongsTo(related: BearCountry::class, foreignKey: 'country_iso2_code', ownerKey: 'country_iso2_code');
    }

    protected $guarded = ['language_tag', 'updated_at', 'created_at', 'deleted_at'];
}
