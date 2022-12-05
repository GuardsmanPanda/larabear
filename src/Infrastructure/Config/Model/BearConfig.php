<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

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
 * @method static Collection|BearConfig get(array $columns = ['*'])
 * @method static Collection|BearConfig fromQuery(string $query, array $bindings = [])
 * @method static BearConfig lockForUpdate()
 * @method static BearConfig select(array $columns = ['*'])
 * @method static BearConfig leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearConfig where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearConfig whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearConfig whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearConfig whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearConfig whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearConfig whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearConfig whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearConfig orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property int|null $config_integer
 * @property bool|null $config_boolean
 * @property string $config_key
 * @property string $created_at
 * @property string $updated_at
 * @property string $config_data_type
 * @property string $config_description
 * @property string|null $config_string
 * @property string|null $encrypted_config_string
 * @property ArrayObject $config_json
 * @property CarbonInterface|null $config_date
 * @property CarbonInterface|null $config_timestamp
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearConfig extends Model {
    use BearLogDatabaseChanges, LarabearFixDateFormatTrait;

    protected $table = 'bear_config';
    protected $primaryKey = 'config_key';
    protected $keyType = 'string';
    public $incrementing = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'config_date' => 'immutable_date',
        'config_json' => AsArrayObject::class,
        'config_timestamp' => 'immutable_datetime',
        'encrypted_config_string' => 'encrypted',
    ];

    protected $guarded = ['config_key', 'updated_at', 'created_at', 'deleted_at'];
}
