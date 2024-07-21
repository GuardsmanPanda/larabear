<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearOauth2ClientType|null find(string $id, array $columns = ['*'])
 * @method static BearOauth2ClientType findOrFail(string $id, array $columns = ['*'])
 * @method static BearOauth2ClientType sole(array $columns = ['*'])
 * @method static BearOauth2ClientType|null first(array $columns = ['*'])
 * @method static BearOauth2ClientType firstOrFail(array $columns = ['*'])
 * @method static BearOauth2ClientType firstOrCreate(array $filter, array $values)
 * @method static BearOauth2ClientType firstOrNew(array $filter, array $values)
 * @method static BearOauth2ClientType|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearOauth2ClientType> all(array $columns = ['*'])
 * @method static Collection<int, BearOauth2ClientType> get(array $columns = ['*'])
 * @method static Collection<int|string, BearOauth2ClientType> pluck(string $column, string $key = null)
 * @method static Collection<int, BearOauth2ClientType> fromQuery(string $query, array $bindings = [])
 * @method static BearOauth2ClientType lockForUpdate()
 * @method static BearOauth2ClientType select(array $columns = ['*'])
 * @method static BearOauth2ClientType selectRaw(string $expression, array $bindings = [])
 * @method static BearOauth2ClientType with(array $relations)
 * @method static BearOauth2ClientType leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearOauth2ClientType where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static BearOauth2ClientType whereIn(string $column, array $values)
 * @method static BearOauth2ClientType whereNull(string|array $columns)
 * @method static BearOauth2ClientType whereNotNull(string|array $columns)
 * @method static BearOauth2ClientType whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearOauth2ClientType whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearOauth2ClientType whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static BearOauth2ClientType whereExists(Closure $callback)
 * @method static BearOauth2ClientType whereNotExists(Closure $callback)
 * @method static BearOauth2ClientType whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearOauth2ClientType withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearOauth2ClientType whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearOauth2ClientType whereRaw(string $sql, array $bindings = [])
 * @method static BearOauth2ClientType groupBy(string $groupBy)
 * @method static BearOauth2ClientType orderBy(string $column, string $direction = 'asc')
 * @method static BearOauth2ClientType orderByDesc(string $column)
 * @method static BearOauth2ClientType orderByRaw(string $sql, array $bindings = [])
 * @method static BearOauth2ClientType limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static mixed sum(string $column)
 * @method static bool exists()
 *
 * @property string $enum
 * @property string $token_uri
 * @property string $created_at
 * @property string $updated_at
 * @property string $authorize_uri
 * @property string $default_Scope
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearOauth2ClientType extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_oauth2_client_type';
    protected $primaryKey = 'enum';
    protected $keyType = 'string';

    protected $guarded = ['enum', 'updated_at', 'created_at', 'deleted_at'];
}
