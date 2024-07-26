<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Builder;
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
 * @method static BearError|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearError> all(array $columns = ['*'])
 * @method static Collection<int, BearError> get(array $columns = ['*'])
 * @method static Collection<int|string, BearError> pluck(string $column, string $key = null)
 * @method static Collection<int, BearError> fromQuery(string $query, array $bindings = [])
 * @method static Builder<BearError> lockForUpdate()
 * @method static Builder<BearError> select(array $columns = ['*'])
 * @method static Builder<BearError> selectRaw(string $expression, array $bindings = [])
 * @method static Builder<BearError> with(array $relations)
 * @method static Builder<BearError> leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder<BearError> where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static Builder<BearError> whereIn(string $column, array $values)
 * @method static Builder<BearError> whereNull(string|array $columns)
 * @method static Builder<BearError> whereNotNull(string|array $columns)
 * @method static Builder<BearError> whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearError> whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearError> whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static Builder<BearError> whereExists(Closure $callback)
 * @method static Builder<BearError> whereNotExists(Closure $callback)
 * @method static Builder<BearError> whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearError> withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearError> whereDoesntHave(string $relation, Closure $callback = null)
 * @method static Builder<BearError> whereRaw(string $sql, array $bindings = [])
 * @method static Builder<BearError> groupBy(string $groupBy)
 * @method static Builder<BearError> orderBy(string $column, string $direction = 'asc')
 * @method static Builder<BearError> orderByDesc(string $column)
 * @method static Builder<BearError> orderByRaw(string $sql, array $bindings = [])
 * @method static Builder<BearError> limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property int $id
 * @property string $severity
 * @property string $created_at
 * @property string $http_method
 * @property string|null $ip
 * @property string|null $slug
 * @property string|null $message
 * @property string|null $referer
 * @property string|null $user_id
 * @property string|null $hostname
 * @property string|null $http_path
 * @property string|null $console_id
 * @property string|null $request_id
 * @property string|null $action_name
 * @property string|null $country_code
 * @property string|null $exception_class
 * @property string|null $exception_trace
 * @property string|null $exception_message
 * @property ArrayObject|null $query_json
 *
 * @property BearUser|null $user
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearError extends Model {
    use LarabearFixDateFormatTrait;

    protected $table = 'bear_error';
    protected $dateFormat = 'Y-m-d\TH:i:sP';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'query_json' => AsArrayObject::class,
    ];

    /** @return BelongsTo<BearUser, self>|null */
    public function user(): BelongsTo|null {
        return $this->belongsTo(related: BearUser::class, foreignKey: 'user_id', ownerKey: 'id');
    }

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
