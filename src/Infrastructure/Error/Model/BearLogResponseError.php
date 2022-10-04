<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Model;

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
 * @method static BearLogResponseError|null find(int $id, array $columns = ['*'])
 * @method static BearLogResponseError findOrFail(int $id, array $columns = ['*'])
 * @method static BearLogResponseError sole(array $columns = ['*'])
 * @method static BearLogResponseError|null first(array $columns = ['*'])
 * @method static BearLogResponseError firstOrFail(array $columns = ['*'])
 * @method static BearLogResponseError firstOrCreate(array $filter, array $values)
 * @method static BearLogResponseError firstOrNew(array $filter, array $values)
 * @method static BearLogResponseError firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearLogResponseError all(array $columns = ['*'])
 * @method static Collection|BearLogResponseError fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearLogResponseError lockForUpdate()
 * @method static Builder|BearLogResponseError select(array $columns = ['*'])
 * @method static Builder|BearLogResponseError with(array  $relations)
 * @method static Builder|BearLogResponseError leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearLogResponseError where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearLogResponseError whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLogResponseError whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static Builder|BearLogResponseError whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static Builder|BearLogResponseError whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLogResponseError whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLogResponseError whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLogResponseError whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static Builder|BearLogResponseError orderBy(string $column, string $direction = 'asc')
 *
 * @property int $id
 * @property int $response_status_code
 * @property string $request_ip
 * @property string $response_body
 * @property string $request_http_path
 * @property string $request_http_method
 * @property string $request_http_hostname
 * @property string|null $user_id
 * @property string|null $app_action_name
 * @property string|null $request_country_code
 * @property stdClass|null $request_http_query_json
 * @property CarbonInterface $created_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearLogResponseError extends Model {
    protected $connection = 'pgsql';
    protected $table = 'bear_log_response_error';
    protected $dateFormat = 'Y-m-d H:i:sO';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'created_at' => 'immutable_datetime',
        'request_http_query_json' => BearAsJsonCast::class,
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