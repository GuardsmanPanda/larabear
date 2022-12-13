<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Model;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearPermission|null find(string $id, array $columns = ['*'])
 * @method static BearPermission findOrFail(string $id, array $columns = ['*'])
 * @method static BearPermission sole(array $columns = ['*'])
 * @method static BearPermission|null first(array $columns = ['*'])
 * @method static BearPermission firstOrFail(array $columns = ['*'])
 * @method static BearPermission firstOrCreate(array $filter, array $values)
 * @method static BearPermission firstOrNew(array $filter, array $values)
 * @method static BearPermission|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection all(array $columns = ['*'])
 * @method static Collection get(array $columns = ['*'])
 * @method static Collection fromQuery(string $query, array $bindings = [])
 * @method static BearPermission lockForUpdate()
 * @method static BearPermission select(array $columns = ['*'])
 * @method static BearPermission with(array $relations)
 * @method static BearPermission leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearPermission where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearPermission whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearPermission whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearPermission whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearPermission whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearPermission withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearPermission whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearPermission whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearPermission whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearPermission whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearPermission orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property string $created_at
 * @property string $updated_at
 * @property string $permission_slug
 * @property string|null $permission_description
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearPermission extends Model {
    use BearLogDatabaseChanges, LarabearFixDateFormatTrait;

    protected $table = 'bear_permission';
    protected $primaryKey = 'permission_slug';
    protected $keyType = 'string';

    protected $guarded = ['permission_slug', 'updated_at', 'created_at', 'deleted_at'];
}
