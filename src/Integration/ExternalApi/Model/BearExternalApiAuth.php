<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearExternalApiAuth|null find(string $id, array $columns = ['*'])
 * @method static BearExternalApiAuth findOrFail(string $id, array $columns = ['*'])
 * @method static BearExternalApiAuth sole(array $columns = ['*'])
 * @method static BearExternalApiAuth|null first(array $columns = ['*'])
 * @method static BearExternalApiAuth firstOrFail(array $columns = ['*'])
 * @method static BearExternalApiAuth firstOrCreate(array $filter, array $values)
 * @method static BearExternalApiAuth firstOrNew(array $filter, array $values)
 * @method static BearExternalApiAuth|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearExternalApiAuth> all(array $columns = ['*'])
 * @method static Collection<int, BearExternalApiAuth> get(array $columns = ['*'])
 * @method static Collection<array-key, BearExternalApiAuth> pluck(string $column, string $key = null)
 * @method static Collection<int, BearExternalApiAuth> fromQuery(string $query, array $bindings = [])
 * @method static Builder<BearExternalApiAuth> lockForUpdate()
 * @method static Builder<BearExternalApiAuth> select(array $columns = ['*'])
 * @method static Builder<BearExternalApiAuth> selectRaw(string $expression, array $bindings = [])
 * @method static Builder<BearExternalApiAuth> with(array $relations)
 * @method static Builder<BearExternalApiAuth> leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder<BearExternalApiAuth> where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static Builder<BearExternalApiAuth> whereIn(string $column, array $values)
 * @method static Builder<BearExternalApiAuth> whereNull(string|array $columns)
 * @method static Builder<BearExternalApiAuth> whereNotNull(string|array $columns)
 * @method static Builder<BearExternalApiAuth> whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearExternalApiAuth> whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearExternalApiAuth> whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static Builder<BearExternalApiAuth> whereExists(Closure $callback)
 * @method static Builder<BearExternalApiAuth> whereNotExists(Closure $callback)
 * @method static Builder<BearExternalApiAuth> whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearExternalApiAuth> withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearExternalApiAuth> whereDoesntHave(string $relation, Closure $callback = null)
 * @method static Builder<BearExternalApiAuth> whereRaw(string $sql, array $bindings = [])
 * @method static Builder<BearExternalApiAuth> groupBy(string $groupBy)
 * @method static Builder<BearExternalApiAuth> orderBy(string $column, string $direction = 'asc')
 * @method static Builder<BearExternalApiAuth> orderByDesc(string $column)
 * @method static Builder<BearExternalApiAuth> orderByRaw(string $sql, array $bindings = [])
 * @method static Builder<BearExternalApiAuth> limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property string $enum
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $query_name
 * @property string|null $header_name
 * @property string|null $token_prefix
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearExternalApiAuth extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_external_api_auth';
    protected $primaryKey = 'enum';
    protected $keyType = 'string';

    protected $guarded = ['enum', 'updated_at', 'created_at', 'deleted_at'];
}
