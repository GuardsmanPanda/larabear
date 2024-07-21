<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Console\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
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
 * @method static Collection<int|string, BearConsoleEvent> pluck(string $column, string $key = null)
 * @method static Collection<int, BearConsoleEvent> fromQuery(string $query, array $bindings = [])
 * @method static BearConsoleEvent lockForUpdate()
 * @method static BearConsoleEvent select(array $columns = ['*'])
 * @method static BearConsoleEvent selectRaw(string $expression, array $bindings = [])
 * @method static BearConsoleEvent with(array $relations)
 * @method static BearConsoleEvent leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearConsoleEvent where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static BearConsoleEvent whereIn(string $column, array $values)
 * @method static BearConsoleEvent whereNull(string|array $columns)
 * @method static BearConsoleEvent whereNotNull(string|array $columns)
 * @method static BearConsoleEvent whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearConsoleEvent whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearConsoleEvent whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static BearConsoleEvent whereExists(Closure $callback)
 * @method static BearConsoleEvent whereNotExists(Closure $callback)
 * @method static BearConsoleEvent whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearConsoleEvent withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearConsoleEvent whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearConsoleEvent whereRaw(string $sql, array $bindings = [])
 * @method static BearConsoleEvent groupBy(string $groupBy)
 * @method static BearConsoleEvent orderBy(string $column, string $direction = 'asc')
 * @method static BearConsoleEvent orderByDesc(string $column)
 * @method static BearConsoleEvent orderByRaw(string $sql, array $bindings = [])
 * @method static BearConsoleEvent limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static mixed sum(string $column)
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
