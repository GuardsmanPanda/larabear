<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Model;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearError|null find(int $id, array $columns = ['*'])
 * @method static BearError findOrFail(int $id, array $columns = ['*'])
 * @method static BearError sole(array $columns = ['*'])
 * @method static BearError|null first(array $columns = ['*'])
 * @method static BearError firstOrFail(array $columns = ['*'])
 * @method static BearError firstOrCreate(array $filter, array $values)
 * @method static BearError firstOrNew(array $filter, array $values)
 * @method static BearError|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection all(array $columns = ['*'])
 * @method static Collection get(array $columns = ['*'])
 * @method static Collection fromQuery(string $query, array $bindings = [])
 * @method static BearError lockForUpdate()
 * @method static BearError select(array $columns = ['*'])
 * @method static BearError with(array $relations)
 * @method static BearError leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearError where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearError whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearError whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearError whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearError whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearError withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearError whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearError whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearError whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearError whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearError orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property int $id
 * @property string $created_at
 * @property string $error_severity
 * @property string $request_method
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
 * @property string|null $request_path
 * @property string|null $request_country_code
 * @property string|null $request_hostname
 * @property ArrayObject|null $request_query_json
 *
 * @property BearUser|null $user
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearError extends Model {
    use LarabearFixDateFormatTrait;

    protected $table = 'bear_error';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'request_query_json' => AsArrayObject::class,
    ];

    public function user(): BelongsTo|null {
        return $this->belongsTo(related: BearUser::class, foreignKey: 'user_id', ownerKey: 'id');
    }

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
