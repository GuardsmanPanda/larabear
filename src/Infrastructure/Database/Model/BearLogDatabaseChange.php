<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Model;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Cast\BearAsJsonCast;
use stdClass;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearLogDatabaseChange|null find(int $id, array $columns = ['*'])
 * @method static BearLogDatabaseChange findOrFail(int $id, array $columns = ['*'])
 * @method static BearLogDatabaseChange sole(array $columns = ['*'])
 * @method static BearLogDatabaseChange|null first(array $columns = ['*'])
 * @method static BearLogDatabaseChange firstOrFail(array $columns = ['*'])
 * @method static BearLogDatabaseChange firstOrCreate(array $filter, array $values)
 * @method static BearLogDatabaseChange firstOrNew(array $filter, array $values)
 * @method static BearLogDatabaseChange|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearLogDatabaseChange all(array $columns = ['*'])
 * @method static Collection|BearLogDatabaseChange fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearLogDatabaseChange lockForUpdate()
 * @method static Builder|BearLogDatabaseChange select(array $columns = ['*'])
 * @method static Builder|BearLogDatabaseChange with(array  $relations)
 * @method static Builder|BearLogDatabaseChange leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearLogDatabaseChange where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearLogDatabaseChange whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLogDatabaseChange whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static Builder|BearLogDatabaseChange whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static Builder|BearLogDatabaseChange whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLogDatabaseChange whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLogDatabaseChange whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLogDatabaseChange whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static Builder|BearLogDatabaseChange orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property int $id
 * @property int|null $record_id
 * @property bool|null $is_soft_deletion
 * @property string $created_at
 * @property string $table_name
 * @property string $change_type
 * @property string $request_http_method
 * @property string|null $new_value
 * @property string|null $old_value
 * @property string|null $console_id
 * @property string|null $request_id
 * @property string|null $request_ip
 * @property string|null $column_name
 * @property string|null $record_uuid
 * @property string|null $app_action_name
 * @property string|null $record_identifier
 * @property string|null $request_http_path
 * @property string|null $changed_by_user_id
 * @property string|null $request_country_code
 * @property string|null $request_http_hostname
 * @property stdClass|null $record_json
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearLogDatabaseChange extends Model {
    protected $table = 'bear_log_database_change';
    protected $dateFormat = 'Y-m-d H:i:sO';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'record_json' => BearAsJsonCast::class,
    ];

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}