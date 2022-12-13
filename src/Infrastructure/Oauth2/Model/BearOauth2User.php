<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
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
 * @method static BearOauth2User|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection all(array $columns = ['*'])
 * @method static Collection get(array $columns = ['*'])
 * @method static Collection fromQuery(string $query, array $bindings = [])
 * @method static BearOauth2User lockForUpdate()
 * @method static BearOauth2User select(array $columns = ['*'])
 * @method static BearOauth2User with(array $relations)
 * @method static BearOauth2User leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearOauth2User where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearOauth2User whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearOauth2User whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearOauth2User whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearOauth2User whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearOauth2User withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearOauth2User whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearOauth2User whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearOauth2User whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearOauth2User whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearOauth2User orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property string $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $oauth2_scope
 * @property string $oauth2_client_id
 * @property string $oauth2_user_identifier
 * @property string|null $user_id
 * @property string|null $oauth2_user_name
 * @property string|null $oauth2_user_email
 * @property string|null $encrypted_user_access_token
 * @property string|null $encrypted_user_refresh_token
 * @property string|null $user_access_token_error_message
 * @property ArrayObject $oauth2_scope_json
 * @property CarbonInterface|null $user_access_token_expires_at
 * @property CarbonInterface|null $user_access_token_first_error_at
 *
 * @property BearUser|null $user
 * @property BearOauth2Client $oauth2Client
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearOauth2User extends Model {
    use BearLogDatabaseChanges, LarabearFixDateFormatTrait;

    protected $table = 'bear_oauth2_user';
    protected $keyType = 'string';
    public $incrementing = false;
    /** @var array<string> $log_exclude_columns */
    public array $log_exclude_columns = ['user_access_token_expires_at', 'encrypted_user_access_token', 'encrypted_user_refresh_token'];

    /** @var array<string, string> $casts */
    protected $casts = array(
        'encrypted_user_access_token' => 'encrypted',
        'encrypted_user_refresh_token' => 'encrypted',
        'oauth2_scope_json' => AsArrayObject::class,
        'token_refresh_error_at' => 'immutable_datetime',
        'user_access_token_expires_at' => 'immutable_datetime',
        'user_access_token_first_error_at' => 'immutable_datetime',
    );

    public function user(): BelongsTo|null {
        return $this->belongsTo(related: BearUser::class, foreignKey: 'user_id', ownerKey: 'id');
    }

    public function oauth2Client(): BelongsTo {
        return $this->belongsTo(related: BearOauth2Client::class, foreignKey: 'oauth2_client_id', ownerKey: 'oauth2_client_id');
    }

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
