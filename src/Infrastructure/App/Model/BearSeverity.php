<?php

namespace GuardsmanPanda\Larabear\Infrastructure\App\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

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
 * @method static Collection|BearSeverity all(array $columns = ['*'])
 * @method static Collection|BearSeverity fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearSeverity lockForUpdate()
 * @method static Builder|BearSeverity select(array $columns = ['*'])
 * @method static Builder|BearSeverity with(array  $relations)
 * @method static Builder|BearSeverity leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearSeverity where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearSeverity whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearSeverity whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static Builder|BearSeverity whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static Builder|BearSeverity whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearSeverity whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearSeverity whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearSeverity whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static Builder|BearSeverity orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property int $severity_level
 * @property string $slug
 * @property string $severity_name
 * @property string $severity_description
 * @property CarbonInterface $created_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearSeverity extends Model {
    use BearLogDatabaseChanges;

    protected $table = 'bear_severity';
    protected $primaryKey = 'slug';
    protected $keyType = 'string';
    protected $dateFormat = 'Y-m-d H:i:sO';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'created_at' => 'immutable_datetime',
    ];

    protected $guarded = ['slug', 'updated_at', 'created_at', 'deleted_at'];
}
