<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2User;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Enum\BearExternalApiTypeEnum;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearExternalApi|null find(string $id, array $columns = ['*'])
 * @method static BearExternalApi findOrFail(string $id, array $columns = ['*'])
 * @method static BearExternalApi sole(array $columns = ['*'])
 * @method static BearExternalApi|null first(array $columns = ['*'])
 * @method static BearExternalApi firstOrFail(array $columns = ['*'])
 * @method static BearExternalApi firstOrCreate(array $filter, array $values)
 * @method static BearExternalApi firstOrNew(array $filter, array $values)
 * @method static BearExternalApi|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection all(array $columns = ['*'])
 * @method static Collection get(array $columns = ['*'])
 * @method static Collection pluck($column, $key = null)
 * @method static Collection fromQuery(string $query, array $bindings = [])
 * @method static BearExternalApi lockForUpdate()
 * @method static BearExternalApi select(array $columns = ['*'])
 * @method static BearExternalApi selectRaw(string $expression, array $bindings = [])
 * @method static BearExternalApi with(array $relations)
 * @method static BearExternalApi leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearExternalApi where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static BearExternalApi whereIn(string $column, array $values)
 * @method static BearExternalApi whereNull(string|array $columns)
 * @method static BearExternalApi whereNotNull(string|array $columns)
 * @method static BearExternalApi whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearExternalApi whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearExternalApi whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static BearExternalApi whereExists(Closure $callback)
 * @method static BearExternalApi whereNotExists(Closure $callback)
 * @method static BearExternalApi whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearExternalApi withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearExternalApi whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearExternalApi whereRaw(string $sql, array $bindings = [])
 * @method static BearExternalApi groupBy(string $groupBy)
 * @method static BearExternalApi orderBy(string $column, string $direction = 'asc')
 * @method static BearExternalApi orderByDesc(string $column)
 * @method static BearExternalApi orderByRaw(string $sql, array $bindings = [])
 * @method static BearExternalApi limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static mixed sum(string $column)
 * @method static bool exists()
 *
 * @property string $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $external_api_slug
 * @property string $external_api_description
 * @property string|null $oauth2_user_id
 * @property string|null $oauth2_client_id
 * @property string|null $external_api_base_url
 * @property string|null $encrypted_external_api_token
 * @property ArrayObject|null $external_api_metadata_json
 * @property ArrayObject|null $external_api_base_headers_json
 * @property BearExternalApiTypeEnum $external_api_type
 *
 * @property BearOauth2User|null $oauth2User
 * @property BearOauth2Client|null $oauth2Client
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearExternalApi extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_external_api';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $dateFormat = 'Y-m-d\TH:i:sP';

    /** @var array<string, string> $casts */
    protected $casts = [
        'encrypted_external_api_token' => 'encrypted',
        'external_api_metadata_json' => AsArrayObject::class,
        'external_api_base_headers_json' => AsArrayObject::class,
        'external_api_type' => BearExternalApiTypeEnum::class,
    ];

    public function oauth2User(): BelongsTo|null {
        return $this->belongsTo(related: BearOauth2User::class, foreignKey: 'oauth2_user_id', ownerKey: 'id');
    }

    public function oauth2Client(): BelongsTo|null {
        return $this->belongsTo(related: BearOauth2Client::class, foreignKey: 'oauth2_client_id', ownerKey: 'oauth2_client_id');
    }

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
