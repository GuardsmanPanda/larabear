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
 * @method static BearAccessToken|null find(string $id, array $columns = ['*'])
 * @method static BearAccessToken findOrFail(string $id, array $columns = ['*'])
 * @method static BearAccessToken sole(array $columns = ['*'])
 * @method static BearAccessToken|null first(array $columns = ['*'])
 * @method static BearAccessToken firstOrFail(array $columns = ['*'])
 * @method static BearAccessToken firstOrCreate(array $filter, array $values)
 * @method static BearAccessToken firstOrNew(array $filter, array $values)
 * @method static BearAccessToken|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection all(array $columns = ['*'])
 * @method static Collection get(array $columns = ['*'])
 * @method static Collection fromQuery(string $query, array $bindings = [])
 * @method static BearAccessToken lockForUpdate()
 * @method static BearAccessToken select(array $columns = ['*'])
 * @method static BearAccessToken with(array $relations)
 * @method static BearAccessToken leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearAccessToken where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearAccessToken whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearAccessToken whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearAccessToken whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearAccessToken whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearAccessToken withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearAccessToken whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearAccessToken whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearAccessToken whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearAccessToken whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearAccessToken orderBy(string $column, string $direction = 'asc')
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
final class BearAccessToken extends Model {
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
