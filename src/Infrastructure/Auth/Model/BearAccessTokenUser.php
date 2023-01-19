<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Enum\BearUserTokenTypeEnum;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearAccessTokenUser|null find(string $id, array $columns = ['*'])
 * @method static BearAccessTokenUser findOrFail(string $id, array $columns = ['*'])
 * @method static BearAccessTokenUser sole(array $columns = ['*'])
 * @method static BearAccessTokenUser|null first(array $columns = ['*'])
 * @method static BearAccessTokenUser firstOrFail(array $columns = ['*'])
 * @method static BearAccessTokenUser firstOrCreate(array $filter, array $values)
 * @method static BearAccessTokenUser firstOrNew(array $filter, array $values)
 * @method static BearAccessTokenUser|null firstWhere(string $column, string $operator = null, string|float|int|bool $value = null, string $boolean = 'and')
 * @method static Collection all(array $columns = ['*'])
 * @method static Collection get(array $columns = ['*'])
 * @method static Collection fromQuery(string $query, array $bindings = [])
 * @method static BearAccessTokenUser lockForUpdate()
 * @method static BearAccessTokenUser select(array $columns = ['*'])
 * @method static BearAccessTokenUser with(array $relations)
 * @method static BearAccessTokenUser leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearAccessTokenUser where(string $column, string $operator = null, string|float|int|bool $value = null, string $boolean = 'and')
 * @method static BearAccessTokenUser whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearAccessTokenUser whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearAccessTokenUser whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearAccessTokenUser whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearAccessTokenUser withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearAccessTokenUser whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearAccessTokenUser whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearAccessTokenUser whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearAccessTokenUser whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearAccessTokenUser orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property string $user_id
 * @property string $created_at
 * @property string $hashed_token
 * @property CarbonInterface $expires_at
 * @property BearUserTokenTypeEnum $user_token_type
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearAccessTokenUser extends Model {
    use LarabearFixDateFormatTrait;

    protected $table = 'bear_access_token_user';
    protected $primaryKey = 'hashed_token';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $dateFormat = 'Y-m-d\TH:i:sP';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'expires_at' => 'immutable_datetime',
        'user_token_type' => BearUserTokenTypeEnum::class,
    ];

    protected $guarded = ['hashed_token', 'updated_at', 'created_at', 'deleted_at'];
}
