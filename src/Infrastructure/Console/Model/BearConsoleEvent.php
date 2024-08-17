<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Console\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearConsoleEvent|null find(int $id, array $columns = ['*'])
 * @method static BearConsoleEvent findOrFail(int $id, array $columns = ['*'])
 * @method static BearConsoleEvent sole(array $columns = ['*'])
 * @method static BearConsoleEvent|null first(array $columns = ['*'])
 * @method static BearConsoleEvent firstOrFail(array $columns = ['*'])
 * @method static BearConsoleEvent firstOrCreate(array $filter, array $values)
 * @method static BearConsoleEvent firstOrNew(array $filter, array $values)
 * @method static BearConsoleEvent|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearConsoleEvent> all(array $columns = ['*'])
 * @method static Collection<int, BearConsoleEvent> get(array $columns = ['*'])
 * @method static Collection<array-key, BearConsoleEvent> pluck(string $column, string $key = null)
 * @method static Collection<int, BearConsoleEvent> fromQuery(string $query, array $bindings = [])
 * @method static Builder<BearConsoleEvent> lockForUpdate()
 * @method static Builder<BearConsoleEvent> select(array $columns = ['*'])
 * @method static Builder<BearConsoleEvent> selectRaw(string $expression, array $bindings = [])
 * @method static Builder<BearConsoleEvent> with(array $relations)
 * @method static Builder<BearConsoleEvent> leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder<BearConsoleEvent> where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static Builder<BearConsoleEvent> whereIn(string $column, array $values)
 * @method static Builder<BearConsoleEvent> whereNull(string|array $columns)
 * @method static Builder<BearConsoleEvent> whereNotNull(string|array $columns)
 * @method static Builder<BearConsoleEvent> whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearConsoleEvent> whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static Builder<BearConsoleEvent> whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static Builder<BearConsoleEvent> whereExists(Closure $callback)
 * @method static Builder<BearConsoleEvent> whereNotExists(Closure $callback)
 * @method static Builder<BearConsoleEvent> whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearConsoleEvent> withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static Builder<BearConsoleEvent> whereDoesntHave(string $relation, Closure $callback = null)
 * @method static Builder<BearConsoleEvent> whereRaw(string $sql, array $bindings = [])
 * @method static Builder<BearConsoleEvent> groupBy(string $groupBy)
 * @method static Builder<BearConsoleEvent> orderBy(string $column, string $direction = 'asc')
 * @method static Builder<BearConsoleEvent> orderByDesc(string $column)
 * @method static Builder<BearConsoleEvent> orderByRaw(string $sql, array $bindings = [])
 * @method static Builder<BearConsoleEvent> limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property int $id
 * @property int|null $execution_time_microseconds
 * @property string $command
 * @property string $console_id
 * @property string $created_at
 * @property string $event_type
 * @property string|null $output
 * @property string|null $cron_schedule_timezone
 * @property string|null $cron_schedule_expression
 * @property CarbonInterface $started_at
 * @property CarbonInterface|null $failed_at
 * @property CarbonInterface|null $finished_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearConsoleEvent extends Model {
    use LarabearFixDateFormatTrait;

    protected $table = 'bear_console_event';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'failed_at' => 'immutable_datetime',
        'finished_at' => 'immutable_datetime',
        'started_at' => 'immutable_datetime',
    ];

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
