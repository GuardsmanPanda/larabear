<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Enum\LarabearOauth2ClientTypeEnum;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearOauth2Client|null find(string $id, array $columns = ['*'])
 * @method static BearOauth2Client findOrFail(string $id, array $columns = ['*'])
 * @method static BearOauth2Client sole(array $columns = ['*'])
 * @method static BearOauth2Client|null first(array $columns = ['*'])
 * @method static BearOauth2Client firstOrFail(array $columns = ['*'])
 * @method static BearOauth2Client firstOrCreate(array $filter, array $values)
 * @method static BearOauth2Client firstOrNew(array $filter, array $values)
 * @method static BearOauth2Client|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearOauth2Client> all(array $columns = ['*'])
 * @method static Collection<int, BearOauth2Client> get(array $columns = ['*'])
 * @method static Collection<int|string, BearOauth2Client> pluck(string $column, string $key = null)
 * @method static Collection<int, BearOauth2Client> fromQuery(string $query, array $bindings = [])
 * @method static BearOauth2Client lockForUpdate()
 * @method static BearOauth2Client select(array $columns = ['*'])
 * @method static BearOauth2Client selectRaw(string $expression, array $bindings = [])
 * @method static BearOauth2Client with(array $relations)
 * @method static BearOauth2Client leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearOauth2Client where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static BearOauth2Client whereIn(string $column, array $values)
 * @method static BearOauth2Client whereNull(string|array $columns)
 * @method static BearOauth2Client whereNotNull(string|array $columns)
 * @method static BearOauth2Client whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearOauth2Client whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearOauth2Client whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static BearOauth2Client whereExists(Closure $callback)
 * @method static BearOauth2Client whereNotExists(Closure $callback)
 * @method static BearOauth2Client whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearOauth2Client withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearOauth2Client whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearOauth2Client whereRaw(string $sql, array $bindings = [])
 * @method static BearOauth2Client groupBy(string $groupBy)
 * @method static BearOauth2Client orderBy(string $column, string $direction = 'asc')
 * @method static BearOauth2Client orderByDesc(string $column)
 * @method static BearOauth2Client orderByRaw(string $sql, array $bindings = [])
 * @method static BearOauth2Client limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static mixed sum(string $column)
 * @method static bool exists()
 *
 * @property string $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $user_scope
 * @property string $description
 * @property string $encrypted_secret
 * @property string $user_redirect_path
 * @property string|null $client_scope
 * @property string|null $client_base_url
 * @property string|null $encrypted_access_token
 * @property string|null $access_token_error_message
 * @property CarbonInterface|null $access_token_expires_at
 * @property LarabearOauth2ClientTypeEnum $oauth2_client_type_enum
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearOauth2Client extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_oauth2_client';
    protected $keyType = 'string';

    /** @var array<string, string> $casts */
    protected $casts = [
        'access_token_expires_at' => 'immutable_datetime',
        'encrypted_access_token' => 'encrypted',
        'encrypted_secret' => 'encrypted',
        'oauth2_client_type_enum' => LarabearOauth2ClientTypeEnum::class,
    ];

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
