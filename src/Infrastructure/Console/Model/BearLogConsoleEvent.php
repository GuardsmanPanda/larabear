<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Console\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearLogConsoleEvent|null find(int $id, array $columns = ['*'])
 * @method static BearLogConsoleEvent findOrFail(int $id, array $columns = ['*'])
 * @method static BearLogConsoleEvent sole(array $columns = ['*'])
 * @method static BearLogConsoleEvent|null first(array $columns = ['*'])
 * @method static BearLogConsoleEvent firstOrFail(array $columns = ['*'])
 * @method static BearLogConsoleEvent firstOrCreate(array $filter, array $values)
 * @method static BearLogConsoleEvent firstOrNew(array $filter, array $values)
 * @method static BearLogConsoleEvent|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearLogConsoleEvent all(array $columns = ['*'])
 * @method static Collection|BearLogConsoleEvent get(array $columns = ['*'])
 * @method static Collection|BearLogConsoleEvent fromQuery(string $query, array $bindings = [])
 * @method static BearLogConsoleEvent lockForUpdate()
 * @method static BearLogConsoleEvent select(array $columns = ['*'])
 * @method static BearLogConsoleEvent leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearLogConsoleEvent where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearLogConsoleEvent whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearLogConsoleEvent whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearLogConsoleEvent whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearLogConsoleEvent whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearLogConsoleEvent whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearLogConsoleEvent whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearLogConsoleEvent orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
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
class BearLogConsoleEvent extends Model {
    use LarabearFixDateFormatTrait;

    protected $table = 'bear_log_console_event';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'console_event_failed_at' => 'immutable_datetime',
        'console_event_finished_at' => 'immutable_datetime',
        'console_event_started_at' => 'immutable_datetime',
    ];

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
