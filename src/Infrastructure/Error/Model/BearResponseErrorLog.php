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
 * @method static BearResponseErrorLog|null find(int $id, array $columns = ['*'])
 * @method static BearResponseErrorLog findOrFail(int $id, array $columns = ['*'])
 * @method static BearResponseErrorLog findOrNew(int $id, array $columns = ['*'])
 * @method static BearResponseErrorLog sole(array $columns = ['*'])
 * @method static BearResponseErrorLog|null first(array $columns = ['*'])
 * @method static BearResponseErrorLog firstOrFail(array $columns = ['*'])
 * @method static BearResponseErrorLog firstOrCreate(array $filter, array $values)
 * @method static BearResponseErrorLog firstOrNew(array $filter, array $values)
 * @method static BearResponseErrorLog firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearResponseErrorLog all(array $columns = ['*'])
 * @method static Collection|BearResponseErrorLog fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearResponseErrorLog lockForUpdate()
 * @method static Builder|BearResponseErrorLog select(array $columns = ['*'])
 * @method static Builder|BearResponseErrorLog with(array  $relations)
 * @method static Builder|BearResponseErrorLog leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearResponseErrorLog where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearResponseErrorLog whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearResponseErrorLog whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static Builder|BearResponseErrorLog whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearResponseErrorLog whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearResponseErrorLog whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static Builder|BearResponseErrorLog orderBy(string $column, string $direction = 'asc')
 *
 * @property int $id
 * @property int $response_status_code
 * @property string $request_ip
 * @property string $response_body
 * @property string $request_http_path
 * @property string $request_http_method
 * @property string $request_http_hostname
 * @property string|null $user_id
 * @property string|null $request_http_query
 * @property string|null $request_country_code
 * @property CarbonInterface $created_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearResponseErrorLog extends Model {
    protected $table = 'bear_response_error_log';
    protected $dateFormat = 'Y-m-d H:i:sO';
    public $timestamps = false;

    protected $casts = [
        'created_at' => 'immutable_datetime',
    ];

    protected $guarded = ['id','updated_at','created_at','deleted_at'];
}
