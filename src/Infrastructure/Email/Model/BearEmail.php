<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Email\Model;

use Carbon\CarbonInterface;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges;
use GuardsmanPanda\Larabear\Infrastructure\Database\Traits\LarabearFixDateFormatTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearEmail|null find(string $id, array $columns = ['*'])
 * @method static BearEmail findOrFail(string $id, array $columns = ['*'])
 * @method static BearEmail sole(array $columns = ['*'])
 * @method static BearEmail|null first(array $columns = ['*'])
 * @method static BearEmail firstOrFail(array $columns = ['*'])
 * @method static BearEmail firstOrCreate(array $filter, array $values)
 * @method static BearEmail firstOrNew(array $filter, array $values)
 * @method static BearEmail|null firstWhere(string $column, string $operator = null, string|float|int|bool $value = null, string $boolean = 'and')
 * @method static Collection all(array $columns = ['*'])
 * @method static Collection get(array $columns = ['*'])
 * @method static Collection fromQuery(string $query, array $bindings = [])
 * @method static BearEmail lockForUpdate()
 * @method static BearEmail select(array $columns = ['*'])
 * @method static BearEmail with(array $relations)
 * @method static BearEmail leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static BearEmail where(string $column, string $operator = null, string|float|int|bool $value = null, string $boolean = 'and')
 * @method static BearEmail whereExists(Closure $callback, string $boolean = 'and', bool $not = false)
 * @method static BearEmail whereNotExists(Closure $callback, string $boolean = 'and')
 * @method static BearEmail whereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearEmail whereDoesntHave(string $relation, Closure $callback = null)
 * @method static BearEmail withWhereHas(string $relation, Closure $callback = null, string $operator = '>=', int $count = 1)
 * @method static BearEmail whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static BearEmail whereNull(string|array $columns, string $boolean = 'and')
 * @method static BearEmail whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static BearEmail whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static BearEmail orderBy(string $column, string $direction = 'asc')
 * @method static BearEmail orderByDesc(string $column)
 * @method static BearEmail limit(int $value)
 * @method static int count(array $columns = ['*'])
 * @method static mixed sum(string $column)
 * @method static bool exists()
 *
 * @property int|null $email_error_code
 * @property bool $is_sandboxed
 * @property string $id
 * @property string $email_to
 * @property string $created_at
 * @property string $email_from
 * @property string $updated_at
 * @property string $email_subject
 * @property string|null $email_cc
 * @property string|null $email_bcc
 * @property string|null $email_tag
 * @property string|null $email_html
 * @property string|null $email_text
 * @property string|null $email_reply_to
 * @property string|null $email_from_name
 * @property string|null $email_postmark_id
 * @property string|null $email_error_message
 * @property CarbonInterface|null $email_sent_at
 * @property CarbonInterface|null $email_error_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearEmail extends Model {
    use BearLogDatabaseChanges, LarabearFixDateFormatTrait;

    protected $table = 'bear_email';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $dateFormat = 'Y-m-d H:i:sO';
    /** @var array<string> $log_exclude_columns */
    public array $log_exclude_columns = ['email_text', 'email_html'];

    /** @var array<string, string> $casts */
    protected $casts = [
        'email_error_at' => 'immutable_datetime',
        'email_sent_at' => 'immutable_datetime',
    ];

    protected $guarded = ['id', 'updated_at', 'created_at', 'deleted_at'];
}
