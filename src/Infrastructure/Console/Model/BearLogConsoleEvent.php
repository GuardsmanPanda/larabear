<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Console\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Database\Cast\BearAsJsonCast;
use stdClass;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use RuntimeException;

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
 * @method static Collection|BearLogConsoleEvent fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearLogConsoleEvent lockForUpdate()
 * @method static Builder|BearLogConsoleEvent select(array $columns = ['*'])
 * @method static Builder|BearLogConsoleEvent with(array  $relations)
 * @method static Builder|BearLogConsoleEvent leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearLogConsoleEvent where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearLogConsoleEvent whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLogConsoleEvent whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static Builder|BearLogConsoleEvent whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static Builder|BearLogConsoleEvent whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLogConsoleEvent whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLogConsoleEvent whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLogConsoleEvent whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static Builder|BearLogConsoleEvent orderBy(string $column, string $direction = 'asc')
 *
 * @property int $id
 * @property int|null $execution_time_microseconds
 * @property string $console_command
 * @property string $console_event_id
 * @property string $console_event_type
 * @property string|null $console_event_output
 * @property string|null $cron_schedule_timezone
 * @property string|null $cron_schedule_expression
 * @property stdClass $console_input_parameters
 * @property CarbonInterface $created_at
 * @property CarbonInterface $console_event_started_at
 * @property CarbonInterface|null $console_event_failed_at
 * @property CarbonInterface|null $console_event_finished_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearLogConsoleEvent extends Model {
    protected $table = 'bear_log_console_event';
    protected $dateFormat = 'Y-m-d H:i:sO';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'console_event_failed_at' => 'immutable_datetime',
        'console_event_finished_at' => 'immutable_datetime',
        'console_event_started_at' => 'immutable_datetime',
        'console_input_parameters' => BearAsJsonCast::class,
        'created_at' => 'immutable_datetime',
    ];

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];

    public function getAttribute($key) {
        $resp =  parent::getAttribute($key);
        if ($resp !== null || array_key_exists(key: $key, array: $this->attributes) || array_key_exists(key: $key, array: $this->relations)) {
            return $resp;
        }
        BearLogErrorCreator::create(
            message: "Attribute $key not loaded on " . static::class,
            namespace: "larabear",
            key: "attribute_not_loaded",
            severity: BearSeverityEnum::CRITICAL,
            remedy: "Make sure to include used attributes in the SELECT statement",
        );
        throw new RuntimeException(message: "Attribute $key not loaded on " . static::class);
    }
}
