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
 * @method static BearErrorResponse|null find(int $id, array $columns = ['*'])
 * @method static BearErrorResponse findOrFail(int $id, array $columns = ['*'])
 * @method static BearErrorResponse sole(array $columns = ['*'])
 * @method static BearErrorResponse|null first(array $columns = ['*'])
 * @method static BearErrorResponse firstOrFail(array $columns = ['*'])
 * @method static BearErrorResponse firstOrCreate(array $filter, array $values)
 * @method static BearErrorResponse firstOrNew(array $filter, array $values)
 * @method static BearErrorResponse|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection all(array $columns = ['*'])
 * @method static Collection get(array $columns = ['*'])
 * @method static Collection fromQuery(string $query, array $bindings = [])
 * @method static BearErrorResponse lockForUpdate()
 * @method static BearErrorResponse select(array $columns = ['*'])
 * @method static BearErrorResponse with(array $relations)
 * @method static BearErrorResponse leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearErrorResponse where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearErrorResponse whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearErrorResponse whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearErrorResponse whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearErrorResponse whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearErrorResponse withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearErrorResponse whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearErrorResponse whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearErrorResponse whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearErrorResponse whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearErrorResponse orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property int $id
 * @property int $response_status_code
 * @property string $created_at
 * @property string $request_ip
 * @property string $response_body
 * @property string $request_method
 * @property string $request_hostname
 * @property string|null $user_id
 * @property string|null $request_id
 * @property string|null $app_action_name
 * @property string|null $request_path
 * @property string|null $request_country_code
 * @property string|null $request_referer
 * @property ArrayObject|null $request_query_json
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
        'request_query_json' => AsArrayObject::class,
    ];

    public function user(): BelongsTo|null {
        return $this->belongsTo(related: BearUser::class, foreignKey: 'user_id', ownerKey: 'id');
    }

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
