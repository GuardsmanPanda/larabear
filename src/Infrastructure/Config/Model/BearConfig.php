<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Cast\BearAsJsonCast;
use stdClass;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearConfig|null find(string $id, array $columns = ['*'])
 * @method static BearConfig findOrFail(string $id, array $columns = ['*'])
 * @method static BearConfig sole(array $columns = ['*'])
 * @method static BearConfig|null first(array $columns = ['*'])
 * @method static BearConfig firstOrFail(array $columns = ['*'])
 * @method static BearConfig firstOrCreate(array $filter, array $values)
 * @method static BearConfig firstOrNew(array $filter, array $values)
 * @method static BearConfig|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearConfig all(array $columns = ['*'])
 * @method static Collection|BearConfig fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearConfig lockForUpdate()
 * @method static Builder|BearConfig select(array $columns = ['*'])
 * @method static Builder|BearConfig with(array  $relations)
 * @method static Builder|BearConfig leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearConfig where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearConfig whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearConfig whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static Builder|BearConfig whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static Builder|BearConfig whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearConfig whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearConfig whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearConfig whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static Builder|BearConfig orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property int|null $config_integer
 * @property bool|null $config_boolean
 * @property string $config_key
 * @property string $config_data_type
 * @property string $config_description
 * @property string|null $config_string
 * @property string|null $encrypted_config_string
 * @property stdClass $config_json
 * @property CarbonInterface|null $config_date
 * @property CarbonInterface $created_at
 * @property CarbonInterface $updated_at
 * @property CarbonInterface|null $config_timestamp
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearConfig extends Model {
    use BearLogDatabaseChanges;

    protected $table = 'bear_config';
    protected $primaryKey = 'config_key';
    protected $keyType = 'string';
    protected $dateFormat = 'Y-m-d H:i:sO';

    /** @var array<string, string> $casts */
    protected $casts = [
        'config_date' => 'immutable_date',
        'config_json' => BearAsJsonCast::class,
        'config_timestamp' => 'immutable_datetime',
        'created_at' => 'immutable_datetime',
        'encrypted_config_string' => 'encrypted',
        'updated_at' => 'immutable_datetime',
    ];

    protected $guarded = ['config_key', 'updated_at', 'created_at', 'deleted_at'];
}
