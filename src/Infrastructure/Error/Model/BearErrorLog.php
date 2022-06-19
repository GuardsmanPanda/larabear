<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Model;

use Carbon\CarbonInterface;
use Closure;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearErrorLog|null find(int $id, array $columns = ['*'])
 * @method static BearErrorLog findOrFail(int $id, array $columns = ['*'])
 * @method static BearErrorLog findOrNew(int $id, array $columns = ['*'])
 * @method static BearErrorLog sole(array $columns = ['*'])
 * @method static BearErrorLog|null first(array $columns = ['*'])
 * @method static BearErrorLog firstOrFail(array $columns = ['*'])
 * @method static BearErrorLog firstOrCreate(array $filter, array $values)
 * @method static BearErrorLog firstOrNew(array $filter, array $values)
 * @method static BearErrorLog firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearErrorLog all(array $columns = ['*'])
 * @method static Collection|BearErrorLog fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearErrorLog lockForUpdate()
 * @method static Builder|BearErrorLog select(array $columns = ['*'])
 * @method static Builder|BearErrorLog with(array  $relations)
 * @method static Builder|BearErrorLog leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearErrorLog where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearErrorLog whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearErrorLog whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static Builder|BearErrorLog whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearErrorLog whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearErrorLog whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static Builder|BearErrorLog orderBy(string $column, string $direction = 'asc')
 *
 * @property int $id
 * @property string $error_group
 * @property string $error_severity
 * @property string $error_namespace
 * @property string $request_http_method
 * @property string|null $user_id
 * @property string|null $request_ip
 * @property string|null $error_message
 * @property string|null $exception_trace
 * @property string|null $exception_message
 * @property string|null $request_http_path
 * @property string|null $request_http_query
 * @property string|null $request_country_code
 * @property CarbonInterface $created_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearErrorLog extends Model {
    protected $table = 'bear_error_log';
    protected $dateFormat = 'Y-m-d H:i:sO';
    public $timestamps = false;

    protected $casts = [
        'created_at' => 'immutable_datetime',
    ];

    protected $guarded = ['id','updated_at','created_at','deleted_at'];
}
