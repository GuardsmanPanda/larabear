<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Model;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearSeverity|null find(string $id, array $columns = ['*'])
 * @method static BearSeverity findOrFail(string $id, array $columns = ['*'])
 * @method static BearSeverity sole(array $columns = ['*'])
 * @method static BearSeverity|null first(array $columns = ['*'])
 * @method static BearSeverity firstOrFail(array $columns = ['*'])
 * @method static BearSeverity firstOrCreate(array $filter, array $values)
 * @method static BearSeverity firstOrNew(array $filter, array $values)
 * @method static BearSeverity|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection all(array $columns = ['*'])
 * @method static Collection get(array $columns = ['*'])
 * @method static Collection fromQuery(string $query, array $bindings = [])
 * @method static BearSeverity lockForUpdate()
 * @method static BearSeverity select(array $columns = ['*'])
 * @method static BearSeverity leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearSeverity where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearSeverity whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearSeverity whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearSeverity whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearSeverity whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearSeverity whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearSeverity whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearSeverity orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property int $severity_level
 * @property string $slug
 * @property string $created_at
 * @property string $severity_name
 * @property string $severity_description
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearSeverity extends Model {
    use BearLogDatabaseChanges, LarabearFixDateFormatTrait;

    protected $table = 'bear_severity';
    protected $primaryKey = 'slug';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $guarded = ['slug', 'updated_at', 'created_at', 'deleted_at'];
}
