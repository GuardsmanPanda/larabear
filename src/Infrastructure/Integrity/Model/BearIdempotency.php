<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Integrity\Model;

use Carbon\CarbonInterface;
use Closure;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearIdempotency |null find(string $id, array $columns = ['*'])
 * @method static BearIdempotency findOrFail(string $id, array $columns = ['*'])
 * @method static BearIdempotency findOrNew(string $id, array $columns = ['*'])
 * @method static BearIdempotency sole(array $columns = ['*'])
 * @method static BearIdempotency|null first(array $columns = ['*'])
 * @method static BearIdempotency firstOrFail(array $columns = ['*'])
 * @method static BearIdempotency firstOrCreate(array $filter, array $values)
 * @method static BearIdempotency firstOrNew(array $filter, array $values)
 * @method static BearIdempotency|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearIdempotency all(array $columns = ['*'])
 * @method static Collection|BearIdempotency fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearIdempotency lockForUpdate()
 * @method static Builder|BearIdempotency select(array $columns = ['*'])
 * @method static Builder|BearIdempotency with(array  $relations)
 * @method static Builder|BearIdempotency leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearIdempotency where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearIdempotency whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearIdempotency whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static Builder|BearIdempotency whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearIdempotency whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearIdempotency whereRaw(string $sql, array $bindings, string $boolean = 'and')
 * @method static Builder|BearIdempotency orderBy(string $column, string $direction = 'asc')
 *
 * @property string $idempotency_key
 * @property string $request_http_method
 * @property string|null $request_ip
 * @property string|null $request_http_path
 * @property string|null $request_country_code
 * @property CarbonInterface $created_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearIdempotency extends Model {
    protected $table = 'bear_idempotency';
    protected $primaryKey = 'idempotency_key';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $dateFormat = 'Y-m-d H:i:sO';
    public $timestamps = false;

    protected $casts = [
        'created_at' => 'immutable_datetime',
    ];

    protected $guarded = ['idempotency_key','updated_at','created_at','deleted_at'];
}
