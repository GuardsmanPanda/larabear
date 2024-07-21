<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Model;

use Carbon\CarbonInterface;
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
 * @method static Collection<int|string, BearErrorResponse> pluck(string $column, string $key = null)
 * @method static Collection<int, BearErrorResponse> fromQuery(string $query, array $bindings = [])
 * @method static BearErrorResponse lockForUpdate()
 * @method static BearErrorResponse select(array $columns = ['*'])
 * @method static BearErrorResponse selectRaw(string $expression, array $bindings = [])
 * @method static BearErrorResponse with(array $relations)
 * @method static BearErrorResponse leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearErrorResponse where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static BearErrorResponse whereIn(string $column, array $values)
 * @method static BearErrorResponse whereNull(string|array $columns)
 * @method static BearErrorResponse whereNotNull(string|array $columns)
 * @method static BearErrorResponse whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearErrorResponse whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearErrorResponse whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static BearErrorResponse whereExists(Closure $callback)
 * @method static BearErrorResponse whereNotExists(Closure $callback)
 * @method static BearErrorResponse whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearErrorResponse withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearErrorResponse whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearErrorResponse whereRaw(string $sql, array $bindings = [])
 * @method static BearErrorResponse groupBy(string $groupBy)
 * @method static BearErrorResponse orderBy(string $column, string $direction = 'asc')
 * @method static BearErrorResponse orderByDesc(string $column)
 * @method static BearErrorResponse orderByRaw(string $sql, array $bindings = [])
 * @method static BearErrorResponse limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static mixed sum(string $column)
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

    /** @return BelongsTo<BearUser, self>|null */
    public function user(): BelongsTo|null {
        return $this->belongsTo(related: BearUser::class, foreignKey: 'user_id', ownerKey: 'id');
    }

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
