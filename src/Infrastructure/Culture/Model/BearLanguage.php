<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Culture\Model;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

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
 * @method static Collection|BearLanguage get(array $columns = ['*'])
 * @method static Collection|BearLanguage fromQuery(string $query, array $bindings = [])
 * @method static BearLanguage lockForUpdate()
 * @method static BearLanguage select(array $columns = ['*'])
 * @method static BearLanguage with(array $relations)
 * @method static BearLanguage leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearLanguage where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearLanguage whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearLanguage whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearLanguage whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearLanguage whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearLanguage withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearLanguage whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearLanguage whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearLanguage whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearLanguage whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearLanguage orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property string $created_at
 * @property string $language_name
 * @property string $language_iso2_code
 * @property string $language_iso3_code
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearLanguage extends Model {
    use BearLogDatabaseChanges, LarabearFixDateFormatTrait;

    protected $table = 'bear_language';
    protected $primaryKey = 'language_iso2_code';
    protected $keyType = 'string';
    public $timestamps = false;

    protected $guarded = ['language_iso2_code', 'updated_at', 'created_at', 'deleted_at'];
}
