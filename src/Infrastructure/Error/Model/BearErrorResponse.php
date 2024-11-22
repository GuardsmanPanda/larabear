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
 * @method static BearErrorResponse|null find(int $id, array $columns = ['*'])
 * @method static BearErrorResponse findOrFail(int $id, array $columns = ['*'])
 * @method static BearErrorResponse sole(array $columns = ['*'])
 * @method static BearErrorResponse|null first(array $columns = ['*'])
 * @method static BearErrorResponse firstOrFail(array $columns = ['*'])
 * @method static BearErrorResponse firstOrCreate(array $filter, array $values)
 * @method static BearErrorResponse firstOrNew(array $filter, array $values)
 * @method static BearErrorResponse|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearErrorResponse> all(array $columns = ['*'])
 * @method static Collection<int, BearErrorResponse> get(array $columns = ['*'])
 * @method static Collection<int, BearErrorResponse> fromQuery(string $query, array $bindings = [])
 * @method static Builder<BearErrorResponse> lockForUpdate()
 * @method static Builder<BearErrorResponse> select(array $columns = ['*'])
 * @method static Builder<BearErrorResponse> selectRaw(string $expression, array $bindings = [])
 * @method static Builder<BearErrorResponse> with(array $relations)
 * @method static Builder<BearErrorResponse> leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder<BearErrorResponse> where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static Builder<BearErrorResponse> whereIn(string $column, array $values)
 * @method static Builder<BearErrorResponse> whereNull(string|array $columns)
 * @method static Builder<BearErrorResponse> whereNotNull(string|array $columns)
 * @method static Builder<BearErrorResponse> whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearErrorResponse> whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearErrorResponse> whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static Builder<BearErrorResponse> whereExists(Closure $callback)
 * @method static Builder<BearErrorResponse> whereNotExists(Closure $callback)
 * @method static Builder<BearErrorResponse> whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearErrorResponse> withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearErrorResponse> whereDoesntHave(string $relation, Closure $callback = null)
 * @method static Builder<BearErrorResponse> whereRaw(string $sql, array $bindings = [])
 * @method static Builder<BearErrorResponse> groupBy(string $groupBy)
 * @method static Builder<BearErrorResponse> orderBy(string $column, string $direction = 'asc')
 * @method static Builder<BearErrorResponse> orderByDesc(string $column)
 * @method static Builder<BearErrorResponse> orderByRaw(string $sql, array $bindings = [])
 * @method static Builder<BearErrorResponse> limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property int $id
 * @property int $status_code
 * @property string $ip
 * @property string $hostname
 * @property string $http_path
 * @property string $created_at
 * @property string $http_method
 * @property string $response_body
 * @property string|null $content
 * @property string|null $referer
 * @property string|null $user_id
 * @property string|null $request_id
 * @property string|null $action_name
 * @property string|null $country_code
 * @property ArrayObject|null $query_json
 *
 * @property BearUser|null $user
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearErrorResponse extends Model {
    use LarabearFixDateFormatTrait;

    protected $table = 'bear_error_response';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'query_json' => AsArrayObject::class,
    ];

    /** @return BelongsTo<BearUser, $this>|null */
    public function user(): BelongsTo|null {
        return $this->belongsTo(related: BearUser::class, foreignKey: 'user_id', ownerKey: 'id');
    }

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
