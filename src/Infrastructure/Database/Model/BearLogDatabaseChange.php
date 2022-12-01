<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Model;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use stdClass;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
 * @method static Collection|BearLogDatabaseChange get(array $columns = ['*'])
 * @method static Collection|BearLogDatabaseChange fromQuery(string $query, array $bindings = [])
 * @method static BearLogDatabaseChange lockForUpdate()
 * @method static BearLogDatabaseChange select(array $columns = ['*'])
 * @method static BearLogDatabaseChange with(array $relations)
 * @method static BearLogDatabaseChange leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearLogDatabaseChange where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearLogDatabaseChange whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearLogDatabaseChange whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearLogDatabaseChange whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearLogDatabaseChange whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearLogDatabaseChange withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearLogDatabaseChange whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearLogDatabaseChange whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearLogDatabaseChange whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearLogDatabaseChange whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearLogDatabaseChange orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property int $id
 * @property int|null $record_id
 * @property bool|null $is_soft_deletion
 * @property string $created_at
 * @property string $table_name
 * @property string $change_type
 * @property string $request_http_method
 * @property string|null $user_id
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
 * @property string|null $request_country_code
 * @property string|null $request_http_hostname
 * @property stdClass|null $record_json
 *
 * @property BearUser|null $user
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearLogDatabaseChange extends Model {
    use LarabearFixDateFormatTrait;

    protected $table = 'bear_log_database_change';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'record_json' => AsArrayObject::class,
    ];

    public function user(): BelongsTo|null {
        return $this->belongsTo(related: BearUser::class, foreignKey: 'user_id', ownerKey: 'id');
    }

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
