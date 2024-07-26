<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Model\BearExternalApi;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearAccessToken|null find(string $id, array $columns = ['*'])
 * @method static BearAccessToken findOrFail(string $id, array $columns = ['*'])
 * @method static BearAccessToken sole(array $columns = ['*'])
 * @method static BearAccessToken|null first(array $columns = ['*'])
 * @method static BearAccessToken firstOrFail(array $columns = ['*'])
 * @method static BearAccessToken firstOrCreate(array $filter, array $values)
 * @method static BearAccessToken firstOrNew(array $filter, array $values)
 * @method static BearAccessToken|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearAccessToken> all(array $columns = ['*'])
 * @method static Collection<int, BearAccessToken> get(array $columns = ['*'])
 * @method static Collection<int|string, BearAccessToken> pluck(string $column, string $key = null)
 * @method static Collection<int, BearAccessToken> fromQuery(string $query, array $bindings = [])
 * @method static Builder<BearAccessToken> lockForUpdate()
 * @method static Builder<BearAccessToken> select(array $columns = ['*'])
 * @method static Builder<BearAccessToken> selectRaw(string $expression, array $bindings = [])
 * @method static Builder<BearAccessToken> with(array $relations)
 * @method static Builder<BearAccessToken> leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder<BearAccessToken> where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static Builder<BearAccessToken> whereIn(string $column, array $values)
 * @method static Builder<BearAccessToken> whereNull(string|array $columns)
 * @method static Builder<BearAccessToken> whereNotNull(string|array $columns)
 * @method static Builder<BearAccessToken> whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearAccessToken> whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearAccessToken> whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static Builder<BearAccessToken> whereExists(Closure $callback)
 * @method static Builder<BearAccessToken> whereNotExists(Closure $callback)
 * @method static Builder<BearAccessToken> whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearAccessToken> withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearAccessToken> whereDoesntHave(string $relation, Closure $callback = null)
 * @method static Builder<BearAccessToken> whereRaw(string $sql, array $bindings = [])
 * @method static Builder<BearAccessToken> groupBy(string $groupBy)
 * @method static Builder<BearAccessToken> orderBy(string $column, string $direction = 'asc')
 * @method static Builder<BearAccessToken> orderByDesc(string $column)
 * @method static Builder<BearAccessToken> orderByRaw(string $sql, array $bindings = [])
 * @method static Builder<BearAccessToken> limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property string $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $description
 * @property string $ip_restriction
 * @property string $hashed_access_token
 * @property string $path_prefix_restriction
 * @property string|null $api_primary_key
 * @property string|null $external_api_enum
 * @property CarbonInterface|null $last_usage_date
 * @property CarbonInterface|null $expires_at
 *
 * @property BearExternalApi|null $externalApi
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearAccessToken extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_access_token';
    protected $keyType = 'string';

    /** @var array<string, string> $casts */
    protected $casts = [
        'expires_at' => 'immutable_datetime',
        'last_usage_date' => 'immutable_datetime',
    ];

    /** @return BelongsTo<BearExternalApi, self>|null */
    public function externalApiEnum(): BelongsTo|null {
        return $this->belongsTo(related: BearExternalApi::class, foreignKey: 'external_api_enum', ownerKey: 'enum');
    }

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
