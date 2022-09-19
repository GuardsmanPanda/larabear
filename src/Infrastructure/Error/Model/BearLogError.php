<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Model\BearSeverity;
use GuardsmanPanda\Larabear\Infrastructure\Database\Cast\BearAsJsonCast;
use stdClass;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;
use RuntimeException;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearLogError|null find(int $id, array $columns = ['*'])
 * @method static BearLogError findOrFail(int $id, array $columns = ['*'])
 * @method static BearLogError sole(array $columns = ['*'])
 * @method static BearLogError|null first(array $columns = ['*'])
 * @method static BearLogError firstOrFail(array $columns = ['*'])
 * @method static BearLogError firstOrCreate(array $filter, array $values)
 * @method static BearLogError firstOrNew(array $filter, array $values)
 * @method static BearLogError firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearLogError all(array $columns = ['*'])
 * @method static Collection|BearLogError fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearLogError lockForUpdate()
 * @method static Builder|BearLogError select(array $columns = ['*'])
 * @method static Builder|BearLogError with(array  $relations)
 * @method static Builder|BearLogError leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearLogError where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearLogError whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLogError whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static Builder|BearLogError whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static Builder|BearLogError whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLogError whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLogError whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLogError whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static Builder|BearLogError orderBy(string $column, string $direction = 'asc')
 *
 * @property int $id
 * @property string $error_severity
 * @property string $error_namespace
 * @property string $request_http_method
 * @property string|null $user_id
 * @property string|null $error_key
 * @property string|null $request_ip
 * @property string|null $error_remedy
 * @property string|null $error_message
 * @property string|null $app_action_name
 * @property string|null $exception_trace
 * @property string|null $exception_message
 * @property string|null $request_http_path
 * @property string|null $request_country_code
 * @property stdClass|null $request_http_query_json
 * @property CarbonInterface $created_at
 *
 * @property BearSeverity $errorSeverity
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearLogError extends Model {
    protected $connection = 'pgsql';
    protected $table = 'bear_log_error';
    protected $dateFormat = 'Y-m-d H:i:sO';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'created_at' => 'immutable_datetime',
        'request_http_query_json' => BearAsJsonCast::class,
    ];

    public function errorSeverity(): BelongsTo {
        return $this->belongsTo(related: BearSeverity::class, foreignKey: 'error_severity', ownerKey: 'slug');
    }

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
