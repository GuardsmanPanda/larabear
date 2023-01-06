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
 * @method static BearRole|null find(string $id, array $columns = ['*'])
 * @method static BearRole findOrFail(string $id, array $columns = ['*'])
 * @method static BearRole sole(array $columns = ['*'])
 * @method static BearRole|null first(array $columns = ['*'])
 * @method static BearRole firstOrFail(array $columns = ['*'])
 * @method static BearRole firstOrCreate(array $filter, array $values)
 * @method static BearRole firstOrNew(array $filter, array $values)
 * @method static BearRole|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection all(array $columns = ['*'])
 * @method static Collection get(array $columns = ['*'])
 * @method static Collection fromQuery(string $query, array $bindings = [])
 * @method static BearRole lockForUpdate()
 * @method static BearRole select(array $columns = ['*'])
 * @method static BearRole with(array $relations)
 * @method static BearRole leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearRole where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearRole whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearRole whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearRole whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearRole whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearRole withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearRole whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearRole whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearRole whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearRole whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearRole orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property string $role_slug
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $role_description
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearRole extends Model {
    use BearLogDatabaseChanges, LarabearFixDateFormatTrait;

    protected $table = 'bear_role';
    protected $primaryKey = 'role_slug';
    protected $keyType = 'string';

    protected $guarded = ['role_slug', 'updated_at', 'created_at', 'deleted_at'];
}
