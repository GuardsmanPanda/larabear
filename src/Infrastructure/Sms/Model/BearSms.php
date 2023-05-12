<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Sms\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearSms|null find(string $id, array $columns = ['*'])
 * @method static BearSms findOrFail(string $id, array $columns = ['*'])
 * @method static BearSms sole(array $columns = ['*'])
 * @method static BearSms|null first(array $columns = ['*'])
 * @method static BearSms firstOrFail(array $columns = ['*'])
 * @method static BearSms firstOrCreate(array $filter, array $values)
 * @method static BearSms firstOrNew(array $filter, array $values)
 * @method static BearSms|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<int, BearSms> all(array $columns = ['*'])
 * @method static Collection<int, BearSms> get(array $columns = ['*'])
 * @method static Collection<int|string, BearSms> pluck(string $column, string $key = null)
 * @method static Collection<int, BearSms> fromQuery(string $query, array $bindings = [])
 * @method static BearSms lockForUpdate()
 * @method static BearSms select(array $columns = ['*'])
 * @method static BearSms selectRaw(string $expression, array $bindings = [])
 * @method static BearSms with(array $relations)
 * @method static BearSms leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearSms where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static BearSms whereIn(string $column, array $values)
 * @method static BearSms whereNull(string|array $columns)
 * @method static BearSms whereNotNull(string|array $columns)
 * @method static BearSms whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearSms whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearSms whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static BearSms whereExists(Closure $callback)
 * @method static BearSms whereNotExists(Closure $callback)
 * @method static BearSms whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearSms withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearSms whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearSms whereRaw(string $sql, array $bindings = [])
 * @method static BearSms groupBy(string $groupBy)
 * @method static BearSms orderBy(string $column, string $direction = 'asc')
 * @method static BearSms orderByDesc(string $column)
 * @method static BearSms orderByRaw(string $sql, array $bindings = [])
 * @method static BearSms limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static mixed sum(string $column)
 * @method static bool exists()
 *
 * @property int|null $sms_error_code
 * @property bool $is_sandboxed
 * @property string $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $sms_message
 * @property string $to_phone_number
 * @property string|null $sms_tag
 * @property string|null $sms_twilio_id
 * @property string|null $sms_error_message
 * @property CarbonInterface|null $sms_sent_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearSms extends Model {
    use BearLogDatabaseChanges, LarabearFixDateFormatTrait;

    protected $table = 'bear_sms';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $dateFormat = 'Y-m-d\TH:i:sP';

    /** @var array<string, string> $casts */
    protected $casts = [
        'sms_sent_at' => 'immutable_datetime',
    ];

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
