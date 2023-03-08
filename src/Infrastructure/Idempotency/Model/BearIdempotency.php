<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Idempotency\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearIdempotency|null find(string $id, array $columns = ['*'])
 * @method static BearIdempotency findOrFail(string $id, array $columns = ['*'])
 * @method static BearIdempotency sole(array $columns = ['*'])
 * @method static BearIdempotency|null first(array $columns = ['*'])
 * @method static BearIdempotency firstOrFail(array $columns = ['*'])
 * @method static BearIdempotency firstOrCreate(array $filter, array $values)
 * @method static BearIdempotency firstOrNew(array $filter, array $values)
 * @method static BearIdempotency|null firstWhere(string $column, string $operator = null, string|float|int|bool $value = null, string $boolean = 'and')
 * @method static Collection all(array $columns = ['*'])
 * @method static Collection get(array $columns = ['*'])
 * @method static Collection pluck($column, $key = null)
 * @method static Collection fromQuery(string $query, array $bindings = [])
 * @method static BearIdempotency lockForUpdate()
 * @method static BearIdempotency select(array $columns = ['*'])
 * @method static BearIdempotency with(array $relations)
 * @method static BearIdempotency leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearIdempotency where(string $column, string $operator = null, string|float|int|bool $value = null, string $boolean = 'and')
 * @method static BearIdempotency whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearIdempotency whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearIdempotency whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearIdempotency whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearIdempotency withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearIdempotency whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearIdempotency whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearIdempotency whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearIdempotency whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearIdempotency groupBy(string $groupBy)
 * @method static BearIdempotency orderBy(string $column, string $direction = 'asc')
 * @method static BearIdempotency orderByDesc(string $column)
 * @method static BearIdempotency limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static mixed sum(string $column)
 * @method static bool exists()
 *
 * @property string $created_at
 * @property string $idempotency_key
 * @property CarbonInterface $expires_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearIdempotency extends Model {
    use LarabearFixDateFormatTrait, BearLogDatabaseChanges;

    protected $table = 'bear_idempotency';
    protected $primaryKey = 'idempotency_key';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'expires_at' => 'immutable_datetime',
    ];

    protected $guarded = ['idempotency_key', 'updated_at', 'created_at', 'deleted_at'];
}
