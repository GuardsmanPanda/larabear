<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use RuntimeException;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearRouteUsage sole(array $columns = ['*'])
 * @method static BearRouteUsage|null first(array $columns = ['*'])
 * @method static BearRouteUsage firstOrFail(array $columns = ['*'])
 * @method static BearRouteUsage firstOrCreate(array $filter, array $values)
 * @method static BearRouteUsage firstOrNew(array $filter, array $values)
 * @method static BearRouteUsage|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearRouteUsage> all(array $columns = ['*'])
 * @method static Collection<int, BearRouteUsage> get(array $columns = ['*'])
 * @method static Collection<int, BearRouteUsage> fromQuery(string $query, array $bindings = [])
 * @method static Builder<BearRouteUsage> lockForUpdate()
 * @method static Builder<BearRouteUsage> select(array $columns = ['*'])
 * @method static Builder<BearRouteUsage> selectRaw(string $expression, array $bindings = [])
 * @method static Builder<BearRouteUsage> with(array $relations)
 * @method static Builder<BearRouteUsage> leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder<BearRouteUsage> where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static Builder<BearRouteUsage> whereIn(string $column, array $values)
 * @method static Builder<BearRouteUsage> whereNull(string|array $columns)
 * @method static Builder<BearRouteUsage> whereNotNull(string|array $columns)
 * @method static Builder<BearRouteUsage> whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearRouteUsage> whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearRouteUsage> whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static Builder<BearRouteUsage> whereExists(Closure $callback)
 * @method static Builder<BearRouteUsage> whereNotExists(Closure $callback)
 * @method static Builder<BearRouteUsage> whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearRouteUsage> withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearRouteUsage> whereDoesntHave(string $relation, Closure $callback = null)
 * @method static Builder<BearRouteUsage> whereRaw(string $sql, array $bindings = [])
 * @method static Builder<BearRouteUsage> groupBy(string $groupBy)
 * @method static Builder<BearRouteUsage> orderBy(string $column, string $direction = 'asc')
 * @method static Builder<BearRouteUsage> orderByDesc(string $column)
 * @method static Builder<BearRouteUsage> orderByRaw(string $sql, array $bindings = [])
 * @method static Builder<BearRouteUsage> limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property int $count
 * @property int $time_microseconds
 * @property string $http_path
 * @property string $created_at
 * @property string $action_name
 * @property string $http_method
 * @property CarbonInterface $last_usage_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearRouteUsage extends Model {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_route_usage';
    /** @var array<string> primaryKeyArray */
    private array $primaryKeyArray = ['http_method', 'http_path', 'action_name'];
    protected $keyType = 'array';
    public $incrementing = false;
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'last_usage_at' => 'immutable_datetime',
    ];

    protected $guarded = ['http_method', 'http_path', 'action_name', 'updated_at', 'created_at', 'deleted_at'];


    /** @return Mixed[] */
    public function getKey(): array {
        $attributes = [];
        foreach ($this->primaryKeyArray as $key) {
            $attributes[$key] = $this->getAttribute($key);
        }
        return $attributes;
    }

    /**
     * @param array<string, string|int> $ids # Ids in the form ['key1' => 'value1', 'key2' => 'value2']
     * @param array<string> $columns
     * @return BearRouteUsage|null
     */
    public static function find(array $ids, array $columns = ['*']): BearRouteUsage|null {
        $me = new self;
        $query = $me->newQuery();
        foreach ($me->primaryKeyArray as $key) {
            $query->where(column: $key, operator: '=', value: $ids[$key]);
        }
        $result = $query->first($columns);
        return $result instanceof self ? $result : null;
    }

    /**
     * @param array<string, string|int> $ids # Ids in the form ['key1' => 'value1', 'key2' => 'value2']
     * @param array<string> $columns
     * @return BearRouteUsage
     */
    public static function findOrFail(array $ids, array $columns = ['*']): BearRouteUsage {
        $result = self::find(ids: $ids, columns: $columns);
        return $result ?? throw new RuntimeException(message: "No result found for " . self::class . " with ids " . json_encode($ids, JSON_THROW_ON_ERROR));
    }

    protected function setKeysForSaveQuery($query): Builder {
        foreach ($this->primaryKeyArray as $key) {
            $query->where(column: $key, operator: "=", value: $this->$key ?? throw new RuntimeException(message: "Missing primary key value for $key"));
        }
        return $query;
    }
    protected function setKeysForSelectQuery($query): Builder {
        foreach ($this->primaryKeyArray as $key) {
            $query->where(column: $key, operator: "=", value: $this->$key ?? throw new RuntimeException(message: "Missing primary key value for $key"));
        }
        return $query;
    }
}
