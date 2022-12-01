<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Model;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\App\Model\BearSeverity;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use stdClass;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearLogError|null find(int $id, array $columns = ['*'])
 * @method static BearLogError findOrFail(int $id, array $columns = ['*'])
 * @method static BearLogError sole(array $columns = ['*'])
 * @method static BearLogError|null first(array $columns = ['*'])
 * @method static BearLogError firstOrFail(array $columns = ['*'])
 * @method static BearLogError firstOrCreate(array $filter, array $values)
 * @method static BearLogError firstOrNew(array $filter, array $values)
 * @method static BearLogError|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearLogError all(array $columns = ['*'])
 * @method static Collection|BearLogError get(array $columns = ['*'])
 * @method static Collection|BearLogError fromQuery(string $query, array $bindings = [])
 * @method static BearLogError lockForUpdate()
 * @method static BearLogError select(array $columns = ['*'])
 * @method static BearLogError with(array $relations)
 * @method static BearLogError leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearLogError where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearLogError whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearLogError whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearLogError whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearLogError whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearLogError withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearLogError whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearLogError whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearLogError whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearLogError whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearLogError orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property int $id
 * @property string $created_at
 * @property string $error_severity
 * @property string $error_namespace
 * @property string $request_http_method
 * @property string|null $user_id
 * @property string|null $error_key
 * @property string|null $console_id
 * @property string|null $request_id
 * @property string|null $request_ip
 * @property string|null $error_remedy
 * @property string|null $error_message
 * @property string|null $app_action_name
 * @property string|null $exception_trace
 * @property string|null $exception_message
 * @property string|null $request_http_path
 * @property string|null $request_country_code
 * @property string|null $request_http_hostname
 * @property stdClass|null $request_http_query_json
 *
 * @property BearUser|null $user
 * @property BearSeverity $errorSeverity
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearLogError extends Model {
    use LarabearFixDateFormatTrait;

    protected $table = 'bear_log_error';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'request_http_query_json' => AsArrayObject::class,
    ];

    public function user(): BelongsTo|null {
        return $this->belongsTo(related: BearUser::class, foreignKey: 'user_id', ownerKey: 'id');
    }

    public function errorSeverity(): BelongsTo {
        return $this->belongsTo(related: BearSeverity::class, foreignKey: 'error_severity', ownerKey: 'slug');
    }

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
