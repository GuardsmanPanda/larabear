<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Model;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Cast\BearAsJsonCast;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use stdClass;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearLogResponseError|null find(int $id, array $columns = ['*'])
 * @method static BearLogResponseError findOrFail(int $id, array $columns = ['*'])
 * @method static BearLogResponseError sole(array $columns = ['*'])
 * @method static BearLogResponseError|null first(array $columns = ['*'])
 * @method static BearLogResponseError firstOrFail(array $columns = ['*'])
 * @method static BearLogResponseError firstOrCreate(array $filter, array $values)
 * @method static BearLogResponseError firstOrNew(array $filter, array $values)
 * @method static BearLogResponseError|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearLogResponseError all(array $columns = ['*'])
 * @method static Collection|BearLogResponseError fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearLogResponseError lockForUpdate()
 * @method static Builder|BearLogResponseError select(array $columns = ['*'])
 * @method static Builder|BearLogResponseError with(array $relations)
 * @method static Builder|BearLogResponseError leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearLogResponseError where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearLogResponseError whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLogResponseError whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static Builder|BearLogResponseError whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder|BearLogResponseError whereDoesntHave(string $relation, Closure $callback = null)
 * @method static Builder|BearLogResponseError withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder|BearLogResponseError whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLogResponseError whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLogResponseError whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLogResponseError whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static Builder|BearLogResponseError orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property int $id
 * @property int $response_status_code
 * @property string $created_at
 * @property string $request_ip
 * @property string $response_body
 * @property string $request_http_method
 * @property string $request_http_hostname
 * @property string|null $user_id
 * @property string|null $request_id
 * @property string|null $app_action_name
 * @property string|null $request_http_path
 * @property string|null $request_country_code
 * @property stdClass|null $request_http_query_json
 *
 * @property BearUser|null $user
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearLogResponseError extends Model {
    use LarabearFixDateFormatTrait;

    protected $table = 'bear_log_response_error';
    protected $dateFormat = 'Y-m-d H:i:sO';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'request_http_query_json' => BearAsJsonCast::class,
    ];

    public function user(): BelongsTo|null {
        return $this->belongsTo(related: BearUser::class, foreignKey: 'user_id', ownerKey: 'id');
    }

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
