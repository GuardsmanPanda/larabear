<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use RuntimeException;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearAccessTokenUser|null find(string $id, array $columns = ['*'])
 * @method static BearAccessTokenUser findOrFail(string $id, array $columns = ['*'])
 * @method static BearAccessTokenUser sole(array $columns = ['*'])
 * @method static BearAccessTokenUser|null first(array $columns = ['*'])
 * @method static BearAccessTokenUser firstOrFail(array $columns = ['*'])
 * @method static BearAccessTokenUser firstOrCreate(array $filter, array $values)
 * @method static BearAccessTokenUser firstOrNew(array $filter, array $values)
 * @method static BearAccessTokenUser firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearAccessTokenUser all(array $columns = ['*'])
 * @method static Collection|BearAccessTokenUser fromQuery(string $query, array $bindings = [])
 * @method static BearAccessTokenUser lockForUpdate()
 * @method static BearAccessTokenUser select(array $columns = ['*'])
 * @method static BearAccessTokenUser with(array  $relations)
 * @method static BearAccessTokenUser leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearAccessTokenUser where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearAccessTokenUser whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearAccessTokenUser whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearAccessTokenUser whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static BearAccessTokenUser whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearAccessTokenUser whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearAccessTokenUser whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearAccessTokenUser whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearAccessTokenUser orderBy(string $column, string $direction = 'asc')
 *
 * @property int $expiry_time_increment_in_minutes
 * @property string $id
 * @property string $user_id
 * @property string $hashed_access_token
 * @property CarbonInterface $created_at
 * @property CarbonInterface $expires_at
 * @property CarbonInterface $invalid_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearAccessTokenUser extends Model {
    protected $table = 'bear_access_token_user';
    protected $keyType = 'string';
    public $timestamps = false;

    /** @var array<string, string> $casts */
    protected $casts = [
        'created_at' => 'immutable_datetime',
        'expires_at' => 'immutable_datetime',
        'invalid_at' => 'immutable_datetime',
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
