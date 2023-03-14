<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearAccessTokenApp|null find(string $id, array $columns = ['*'])
 * @method static BearAccessTokenApp findOrFail(string $id, array $columns = ['*'])
 * @method static BearAccessTokenApp sole(array $columns = ['*'])
 * @method static BearAccessTokenApp|null first(array $columns = ['*'])
 * @method static BearAccessTokenApp firstOrFail(array $columns = ['*'])
 * @method static BearAccessTokenApp firstOrCreate(array $filter, array $values)
 * @method static BearAccessTokenApp firstOrNew(array $filter, array $values)
 * @method static BearAccessTokenApp|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection all(array $columns = ['*'])
 * @method static Collection get(array $columns = ['*'])
 * @method static Collection fromQuery(string $query, array $bindings = [])
 * @method static BearAccessTokenApp lockForUpdate()
 * @method static BearAccessTokenApp select(array $columns = ['*'])
 * @method static BearAccessTokenApp with(array $relations)
 * @method static BearAccessTokenApp leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearAccessTokenApp where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearAccessTokenApp whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearAccessTokenApp whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearAccessTokenApp whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearAccessTokenApp whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearAccessTokenApp withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearAccessTokenApp whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearAccessTokenApp whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearAccessTokenApp whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearAccessTokenApp whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearAccessTokenApp orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property string $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $hashed_access_token
 * @property string $access_token_purpose
 * @property string $request_ip_restriction
 * @property string $route_prefix_restriction
 * @property string|null $api_primary_key
 * @property CarbonInterface|null $expires_at
 * @property CarbonInterface|null $last_usage_date
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearAccessTokenApp extends Model {
    use BearLogDatabaseChanges, LarabearFixDateFormatTrait;

    protected $table = 'bear_access_token_app';
    protected $keyType = 'string';
    public $incrementing = false;
    /** @var array<string> $log_exclude_columns */
    public array $log_exclude_columns = ['last_usage_date'];

    /** @var array<string, string> $casts */
    protected $casts = [
        'expires_at' => 'immutable_datetime',
        'last_usage_date' => 'immutable_datetime',
    ];

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
