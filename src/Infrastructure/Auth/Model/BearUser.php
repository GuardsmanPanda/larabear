<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearUser|null find(string $id, array $columns = ['*'])
 * @method static BearUser findOrFail(string $id, array $columns = ['*'])
 * @method static BearUser sole(array $columns = ['*'])
 * @method static BearUser|null first(array $columns = ['*'])
 * @method static BearUser firstOrFail(array $columns = ['*'])
 * @method static BearUser firstOrCreate(array $filter, array $values)
 * @method static BearUser firstOrNew(array $filter, array $values)
 * @method static BearUser|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearUser all(array $columns = ['*'])
 * @method static Collection|BearUser fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearUser lockForUpdate()
 * @method static Builder|BearUser select(array $columns = ['*'])
 * @method static Builder|BearUser with(array $relations)
 * @method static Builder|BearUser leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearUser where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearUser whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearUser whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static Builder|BearUser whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static Builder|BearUser whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearUser whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearUser whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearUser whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static Builder|BearUser orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 *
 * @property string $id
 * @property string|null $user_email
 * @property string|null $linked_user_id
 * @property string|null $user_display_name
 * @property string|null $user_country_iso2_code
 * @property string|null $user_language_iso2_code
 * @property CarbonInterface $created_at
 * @property CarbonInterface $updated_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearUser extends Model {
    use BearLogDatabaseChanges;

    protected $table = 'bear_user';
    protected $keyType = 'string';
    public function getDateFormat(): string {
        return BearDBService::defaultConnectionDriver() === 'mysql' ? 'Y-m-d H:i:s' : 'Y-m-d H:i:sO';
    }

    /** @var array<string, string> $casts */
    protected $casts = [
        'created_at' => 'immutable_datetime',
        'updated_at' => 'immutable_datetime',
    ];

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
