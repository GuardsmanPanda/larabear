<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearOauth2User|null find(string $id, array $columns = ['*'])
 * @method static BearOauth2User findOrFail(string $id, array $columns = ['*'])
 * @method static BearOauth2User sole(array $columns = ['*'])
 * @method static BearOauth2User|null first(array $columns = ['*'])
 * @method static BearOauth2User firstOrFail(array $columns = ['*'])
 * @method static BearOauth2User firstOrCreate(array $filter, array $values)
 * @method static BearOauth2User firstOrNew(array $filter, array $values)
 * @method static BearOauth2User|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearOauth2User> all(array $columns = ['*'])
 * @method static Collection<int, BearOauth2User> get(array $columns = ['*'])
 * @method static Collection<array-key, BearOauth2User> pluck(string $column, string $key = null)
 * @method static Collection<int, BearOauth2User> fromQuery(string $query, array $bindings = [])
 * @method static Builder<BearOauth2User> lockForUpdate()
 * @method static Builder<BearOauth2User> select(array $columns = ['*'])
 * @method static Builder<BearOauth2User> selectRaw(string $expression, array $bindings = [])
 * @method static Builder<BearOauth2User> with(array $relations)
 * @method static Builder<BearOauth2User> leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder<BearOauth2User> where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static Builder<BearOauth2User> whereIn(string $column, array $values)
 * @method static Builder<BearOauth2User> whereNull(string|array $columns)
 * @method static Builder<BearOauth2User> whereNotNull(string|array $columns)
 * @method static Builder<BearOauth2User> whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearOauth2User> whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearOauth2User> whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static Builder<BearOauth2User> whereExists(Closure $callback)
 * @method static Builder<BearOauth2User> whereNotExists(Closure $callback)
 * @method static Builder<BearOauth2User> whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearOauth2User> withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearOauth2User> whereDoesntHave(string $relation, Closure $callback = null)
 * @method static Builder<BearOauth2User> whereRaw(string $sql, array $bindings = [])
 * @method static Builder<BearOauth2User> groupBy(string $groupBy)
 * @method static Builder<BearOauth2User> orderBy(string $column, string $direction = 'asc')
 * @method static Builder<BearOauth2User> orderByDesc(string $column)
 * @method static Builder<BearOauth2User> orderByRaw(string $sql, array $bindings = [])
 * @method static Builder<BearOauth2User> limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property string $id
 * @property string $scope
 * @property string $created_at
 * @property string $identifier
 * @property string $updated_at
 * @property string $oauth2_client_id
 * @property string|null $email
 * @property string|null $user_id
 * @property string|null $display_name
 * @property string|null $encrypted_access_token
 * @property string|null $encrypted_refresh_token
 * @property string|null $access_token_error_message
 * @property ArrayObject $scope_json
 * @property CarbonInterface|null $access_token_expires_at
 *
 * @property BearUser|null $user
 * @property BearOauth2Client $oauth2Client
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearOauth2User extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_oauth2_user';
    protected $keyType = 'string';

    /** @var array<string, string> $casts */
    protected $casts = [
        'access_token_expires_at' => 'immutable_datetime',
        'encrypted_access_token' => 'encrypted',
        'encrypted_refresh_token' => 'encrypted',
        'scope_json' => AsArrayObject::class,
    ];

    /** @return BelongsTo<BearUser, self>|null */
    public function user(): BelongsTo|null {
        return $this->belongsTo(related: BearUser::class, foreignKey: 'user_id', ownerKey: 'id');
    }

    /** @return BelongsTo<BearOauth2Client, self> */
    public function oauth2Client(): BelongsTo {
        return $this->belongsTo(related: BearOauth2Client::class, foreignKey: 'oauth2_client_id', ownerKey: 'id');
    }

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
