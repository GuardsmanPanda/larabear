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
 * @method static BearLogIdempotency|null find(string $id, array $columns = ['*'])
 * @method static BearLogIdempotency findOrFail(string $id, array $columns = ['*'])
 * @method static BearLogIdempotency sole(array $columns = ['*'])
 * @method static BearLogIdempotency|null first(array $columns = ['*'])
 * @method static BearLogIdempotency firstOrFail(array $columns = ['*'])
 * @method static BearLogIdempotency firstOrCreate(array $filter, array $values)
 * @method static BearLogIdempotency firstOrNew(array $filter, array $values)
 * @method static BearLogIdempotency|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearLogIdempotency all(array $columns = ['*'])
 * @method static Collection|BearLogIdempotency fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearLogIdempotency lockForUpdate()
 * @method static Builder|BearLogIdempotency select(array $columns = ['*'])
 * @method static Builder|BearLogIdempotency with(array  $relations)
 * @method static Builder|BearLogIdempotency leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearLogIdempotency where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearLogIdempotency whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLogIdempotency whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static Builder|BearLogIdempotency whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static Builder|BearLogIdempotency whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLogIdempotency whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLogIdempotency whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLogIdempotency whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static Builder|BearLogIdempotency orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property string $idempotency_key
 * @property string $request_http_method
 * @property string|null $console_id
 * @property string|null $request_id
 * @property string|null $request_ip
 * @property string|null $request_http_path
 * @property string|null $request_country_code
 * @property CarbonInterface $created_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearLogIdempotency extends Model {
    protected $table = 'bear_log_idempotency';
    protected $primaryKey = 'idempotency_key';
    protected $keyType = 'string';
    protected $dateFormat = 'Y-m-d H:i:sO';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'created_at' => 'immutable_datetime',
    ];

    protected $guarded = ['idempotency_key', 'updated_at', 'created_at', 'deleted_at'];
}
