<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Integrity\Model;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
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
 * @method static Collection|BearLogIdempotency get(array $columns = ['*'])
 * @method static Collection|BearLogIdempotency fromQuery(string $query, array $bindings = [])
 * @method static BearLogIdempotency lockForUpdate()
 * @method static BearLogIdempotency select(array $columns = ['*'])
 * @method static BearLogIdempotency leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearLogIdempotency where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearLogIdempotency whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearLogIdempotency whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearLogIdempotency whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearLogIdempotency whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearLogIdempotency whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearLogIdempotency whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearLogIdempotency orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property string $created_at
 * @property string $idempotency_key
 * @property string $request_http_method
 * @property string|null $console_id
 * @property string|null $request_id
 * @property string|null $request_ip
 * @property string|null $request_http_path
 * @property string|null $request_country_code
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearLogIdempotency extends Model {
    use LarabearFixDateFormatTrait;

    protected $table = 'bear_log_idempotency';
    protected $primaryKey = 'idempotency_key';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $dateFormat = 'Y-m-d H:i:sO';
    public $timestamps = false;

    protected $guarded = ['idempotency_key', 'updated_at', 'created_at', 'deleted_at'];
}
