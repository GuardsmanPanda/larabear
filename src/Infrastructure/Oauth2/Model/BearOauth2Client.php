<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
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
 * @method static BearOauth2Client|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearOauth2Client all(array $columns = ['*'])
 * @method static Collection|BearOauth2Client get(array $columns = ['*'])
 * @method static Collection|BearOauth2Client fromQuery(string $query, array $bindings = [])
 * @method static BearOauth2Client lockForUpdate()
 * @method static BearOauth2Client select(array $columns = ['*'])
 * @method static BearOauth2Client leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearOauth2Client where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearOauth2Client whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearOauth2Client whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearOauth2Client whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearOauth2Client whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearOauth2Client whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearOauth2Client whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearOauth2Client orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property string $created_at
 * @property string $updated_at
 * @property string $oauth2_client_id
 * @property string $oauth2_token_uri
 * @property string $oauth2_client_slug
 * @property string $oauth2_user_scope
 * @property string $oauth2_client_type
 * @property string $oauth2_authorize_uri
 * @property string $oauth2_client_description
 * @property string $encrypted_oauth2_client_secret
 * @property string|null $oauth2_client_scope
 * @property string|null $oauth2_client_base_url
 * @property string|null $oauth2_client_redirect_path
 * @property string|null $client_access_token_error_message
 * @property string|null $encrypted_oauth2_client_access_token
 * @property CarbonInterface|null $client_access_token_first_error_at
 * @property CarbonInterface|null $oauth2_client_access_token_expires_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearOauth2Client extends Model {
    use BearLogDatabaseChanges, LarabearFixDateFormatTrait;

    protected $table = 'bear_oauth2_client';
    protected $primaryKey = 'oauth2_client_id';
    protected $keyType = 'string';
    public $incrementing = false;
    /** @var array<string> $log_exclude_columns */
    public array $log_exclude_columns = ['oauth2_client_access_token_expires_at', 'encrypted_oauth2_client_access_token'];

    /** @var array<string, string> $casts */
    protected $casts = [
        'client_access_token_first_error_at' => 'immutable_datetime',
        'encrypted_oauth2_client_access_token' => 'encrypted',
        'encrypted_oauth2_client_secret' => 'encrypted',
        'oauth2_client_access_token_expires_at' => 'immutable_datetime',
    ];

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
