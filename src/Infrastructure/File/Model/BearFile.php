<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\File\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearFile|null find(string $id, array $columns = ['*'])
 * @method static BearFile findOrFail(string $id, array $columns = ['*'])
 * @method static BearFile sole(array $columns = ['*'])
 * @method static BearFile|null first(array $columns = ['*'])
 * @method static BearFile firstOrFail(array $columns = ['*'])
 * @method static BearFile firstOrCreate(array $filter, array $values)
 * @method static BearFile firstOrNew(array $filter, array $values)
 * @method static BearFile|null firstWhere(string $column, string $operator, string|float|int|bool $value)
 * @method static Collection<BearFile> all(array $columns = ['*'])
 * @method static Collection<BearFile> get(array $columns = ['*'])
 * @method static Collection<BearFile> pluck(string $column, string $key = null)
 * @method static Collection<BearFile> fromQuery(string $query, array $bindings = [])
 * @method static BearFile lockForUpdate()
 * @method static BearFile select(array $columns = ['*'])
 * @method static BearFile selectRaw(string $expression, array $bindings = [])
 * @method static BearFile with(array $relations)
 * @method static BearFile leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearFile where(string $column, string $operator = null, string|float|int|bool $value = null)
 * @method static BearFile whereIn(string $column, array $values)
 * @method static BearFile whereNull(string|array $columns)
 * @method static BearFile whereNotNull(string|array $columns)
 * @method static BearFile whereYear(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearFile whereMonth(string $column, string $operator, CarbonInterface|string|int $value)
 * @method static BearFile whereDate(string $column, string $operator, CarbonInterface|string $value)
 * @method static BearFile whereExists(Closure $callback)
 * @method static BearFile whereNotExists(Closure $callback)
 * @method static BearFile whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearFile withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearFile whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearFile whereRaw(string $sql, array $bindings = [])
 * @method static BearFile groupBy(string $groupBy)
 * @method static BearFile orderBy(string $column, string $direction = 'asc')
 * @method static BearFile orderByDesc(string $column)
 * @method static BearFile orderByRaw(string $sql, array $bindings = [])
 * @method static BearFile limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static mixed sum(string $column)
 * @method static bool exists()
 *
 * @property string $id
 * @property string $mime_type
 * @property string $created_at
 * @property string $updated_at
 * @property string $original_name
 * @property string|null $cloud_path
 * @property string|null $local_path
 * @property string|null $created_by_user_id
 * @property ArrayObject $data_json
 *
 * @property BearUser|null $createdByUser
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearFile extends Model {
    use BearLogDatabaseChanges, LarabearFixDateFormatTrait;

    protected $table = 'bear_file';
    protected $keyType = 'string';
    public $incrementing = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'data_json' => AsArrayObject::class,
    ];

    public function createdByUser(): BelongsTo|null {
        return $this->belongsTo(related: BearUser::class, foreignKey: 'created_by_user_id', ownerKey: 'id');
    }

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
