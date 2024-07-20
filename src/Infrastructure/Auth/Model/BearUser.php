<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Service\BearAuthService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearDatabaseChangeTrait;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Model\BearCountry;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Model\BearLanguage;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use RuntimeException;

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
 * @method static Collection<BearUser> all(array $columns = ['*'])
 * @method static Collection<BearUser> get(array $columns = ['*'])
 * @method static Collection<BearUser> fromQuery(string $query, array $bindings = [])
 * @method static BearUser lockForUpdate()
 * @method static BearUser select(array $columns = ['*'])
 * @method static BearUser with(array $relations)
 * @method static BearUser leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearUser where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static BearUser whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearUser whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearUser whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearUser whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearUser withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearUser whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearUser whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearUser whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearUser whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearUser orderBy(string $column, string $direction = 'asc')
 * @method static int count(array $columns = ['*'])
 * @method static bool exists()
 *
 * @property bool $is_user_activated
 * @property string $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $user_display_name
 * @property string|null $password
 * @property string|null $user_city
 * @property string|null $user_email
 * @property string|null $user_last_name
 * @property string|null $user_first_name
 * @property string|null $remember_token
 * @property string|null $user_profile_image
 * @property string|null $password_reset_token
 * @property string|null $user_country_iso2_code
 * @property string|null $user_language_iso2_code
 * @property ArrayObject $user_data_json
 * @property CarbonInterface|null $last_login_at
 * @property CarbonInterface|null $email_verified_at
 * @property CarbonInterface|null $password_reset_expires_at
 *
 * @property BearLanguage|null $userLanguageIso2Code
 * @property BearCountry|null $userCountryIso2Code
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
final class BearUser extends Model implements Authenticatable {
    use BearDatabaseChangeTrait, LarabearFixDateFormatTrait;

    protected $table = 'bear_user';
    protected $keyType = 'string';
    public $incrementing = false;
    /** @var array<string> $log_exclude_columns */
    public array $log_exclude_columns = ['password', 'remember_token', 'password_reset_token', 'last_login_at'];

    /** @var array<string, string> $casts */
    protected $casts = [
        'email_verified_at' => 'immutable_datetime',
        'last_login_at' => 'immutable_datetime',
        'password_reset_expires_at' => 'immutable_datetime',
        'user_data_json' => AsArrayObject::class,
    ];

    public function userLanguageIso2Code(): BelongsTo|null {
        return $this->belongsTo(related: BearLanguage::class, foreignKey: 'user_language_iso2_code', ownerKey: 'language_iso2_code');
    }

    public function userCountryIso2Code(): BelongsTo|null {
        return $this->belongsTo(related: BearCountry::class, foreignKey: 'user_country_iso2_code', ownerKey: 'country_iso2_code');
    }

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];

    public function getAuthIdentifierName(): string {
        return 'id';
    }

    public function getAuthIdentifier(): string {
        return $this->id;
    }

    public function getAuthPassword(): string {
        return $this->password ?? throw new RuntimeException(message: 'Password is not set');
    }

    public function getRememberToken(): string {
        return $this->remember_token ?? throw new RuntimeException(message: 'Remember token is not set');
    }

    public function setRememberToken($value): void {
        $this->remember_token = $value;
    }

    public function getRememberTokenName(): string {
        return 'remember_token';
    }

    public function hasPermission(string $permission): bool {
        return BearAuthService::hasPermission(permission: $permission, userId: $this->id);
    }

    public function hasRole(string $role): bool {
        return BearAuthService::hasRole(role: $role, userId: $this->id);
    }

    public function getAuthPasswordName(): string {
        return 'password';
    }
}
