<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearDatabaseChange|null find(int $id, array $columns = ['*'])
 * @method static BearDatabaseChange findOrFail(int $id, array $columns = ['*'])
 * @method static BearDatabaseChange sole(array $columns = ['*'])
 * @method static BearDatabaseChange|null first(array $columns = ['*'])
 * @method static BearDatabaseChange firstOrFail(array $columns = ['*'])
 * @method static BearDatabaseChange firstOrCreate(array $filter, array $values)
 * @method static BearDatabaseChange firstOrNew(array $filter, array $values)
 * @method static BearDatabaseChange|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearDatabaseChange> all(array $columns = ['*'])
 * @method static Collection<int, BearDatabaseChange> get(array $columns = ['*'])
 * @method static Collection<int|string, BearDatabaseChange> pluck(string $column, string $key = null)
 * @method static Collection<int, BearDatabaseChange> fromQuery(string $query, array $bindings = [])
 * @method static Builder<BearDatabaseChange> lockForUpdate()
 * @method static Builder<BearDatabaseChange> select(array $columns = ['*'])
 * @method static Builder<BearDatabaseChange> selectRaw(string $expression, array $bindings = [])
 * @method static Builder<BearDatabaseChange> with(array $relations)
 * @method static Builder<BearDatabaseChange> leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder<BearDatabaseChange> where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static Builder<BearDatabaseChange> whereIn(string $column, array $values)
 * @method static Builder<BearDatabaseChange> whereNull(string|array $columns)
 * @method static Builder<BearDatabaseChange> whereNotNull(string|array $columns)
 * @method static Builder<BearDatabaseChange> whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearDatabaseChange> whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearDatabaseChange> whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static Builder<BearDatabaseChange> whereExists(Closure $callback)
 * @method static Builder<BearDatabaseChange> whereNotExists(Closure $callback)
 * @method static Builder<BearDatabaseChange> whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearDatabaseChange> withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearDatabaseChange> whereDoesntHave(string $relation, Closure $callback = null)
 * @method static Builder<BearDatabaseChange> whereRaw(string $sql, array $bindings = [])
 * @method static Builder<BearDatabaseChange> groupBy(string $groupBy)
 * @method static Builder<BearDatabaseChange> orderBy(string $column, string $direction = 'asc')
 * @method static Builder<BearDatabaseChange> orderByDesc(string $column)
 * @method static Builder<BearDatabaseChange> orderByRaw(string $sql, array $bindings = [])
 * @method static Builder<BearDatabaseChange> limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property int $id
 * @property int|null $record_id
 * @property bool|null $is_soft_deletion
 * @property string $created_at
 * @property string $table_name
 * @property string $change_type
 * @property string $http_method
 * @property string|null $ip
 * @property string|null $user_id
 * @property string|null $hostname
 * @property string|null $http_path
 * @property string|null $new_value
 * @property string|null $old_value
 * @property string|null $console_id
 * @property string|null $request_id
 * @property string|null $action_name
 * @property string|null $column_name
 * @property string|null $record_uuid
 * @property string|null $country_code
 * @property string|null $record_identifier
 * @property ArrayObject|null $record_json
 *
 * @property BearUser|null $user
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearDatabaseChange extends Model {
    use LarabearFixDateFormatTrait;

    protected $table = 'bear_database_change';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'record_json' => AsArrayObject::class,
    ];

    /** @return BelongsTo<BearUser, self>|null */
    public function user(): BelongsTo|null {
        return $this->belongsTo(related: BearUser::class, foreignKey: 'user_id', ownerKey: 'id');
    }

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
