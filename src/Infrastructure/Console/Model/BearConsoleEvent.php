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
 * @method static BearConsoleEvent|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection all(array $columns = ['*'])
 * @method static Collection get(array $columns = ['*'])
 * @method static Collection fromQuery(string $query, array $bindings = [])
 * @method static BearConsoleEvent lockForUpdate()
 * @method static BearConsoleEvent select(array $columns = ['*'])
 * @method static BearConsoleEvent leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearConsoleEvent where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearConsoleEvent whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearConsoleEvent whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearConsoleEvent whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearConsoleEvent whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearConsoleEvent whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearConsoleEvent whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearConsoleEvent orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property int $id
 * @property int|null $execution_time_microseconds
 * @property string $console_id
 * @property string $created_at
 * @property string $console_command
 * @property string $console_event_type
 * @property string|null $console_event_output
 * @property string|null $cron_schedule_timezone
 * @property string|null $cron_schedule_expression
 * @property CarbonInterface $console_event_started_at
 * @property CarbonInterface|null $console_event_failed_at
 * @property CarbonInterface|null $console_event_finished_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearConsoleEvent extends Model {
    use LarabearFixDateFormatTrait;

    protected $table = 'bear_console_event';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'console_event_failed_at' => 'immutable_datetime',
        'console_event_finished_at' => 'immutable_datetime',
        'console_event_started_at' => 'immutable_datetime',
    ];

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
