<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Security\Models;

use Carbon\CarbonInterface;
use Closure;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * AUTO GENERATED FILE DO NOT MODIFY
 *
 * @method static BearLogSecurityIncident|null find(int $id, array $columns = ['*'])
 * @method static BearLogSecurityIncident findOrFail(int $id, array $columns = ['*'])
 * @method static BearLogSecurityIncident findOrNew(int $id, array $columns = ['*'])
 * @method static BearLogSecurityIncident sole(array $columns = ['*'])
 * @method static BearLogSecurityIncident|null first(array $columns = ['*'])
 * @method static BearLogSecurityIncident firstOrFail(array $columns = ['*'])
 * @method static BearLogSecurityIncident firstOrCreate(array $filter, array $values)
 * @method static BearLogSecurityIncident firstOrNew(array $filter, array $values)
 * @method static BearLogSecurityIncident firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearLogSecurityIncident all(array $columns = ['*'])
 * @method static Collection|BearLogSecurityIncident fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearLogSecurityIncident lockForUpdate()
 * @method static Builder|BearLogSecurityIncident select(array $columns = ['*'])
 * @method static Builder|BearLogSecurityIncident with(array  $relations)
 * @method static Builder|BearLogSecurityIncident leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearLogSecurityIncident where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearLogSecurityIncident whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearLogSecurityIncident whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static Builder|BearLogSecurityIncident whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLogSecurityIncident whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearLogSecurityIncident whereRaw(string $sql, array $bindings = [], string $boolean = 'and')
 * @method static Builder|BearLogSecurityIncident orderBy(string $column, string $direction = 'asc')
 *
 * @property int $id
 * @property string $request_http_method
 * @property string $security_incident_headline
 * @property string $security_incident_severity
 * @property string $security_incident_namespace
 * @property string $security_incident_description
 * @property string|null $request_ip
 * @property string|null $caused_by_user_id
 * @property string|null $request_http_path
 * @property string|null $request_http_query
 * @property string|null $request_country_code
 * @property string|null $request_http_hostname
 * @property string|null $security_incident_reference
 * @property string|null $security_incident_remediation
 * @property CarbonInterface $created_at
 *
 * AUTO GENERATED FILE DO NOT MODIFY
 */
class BearLogSecurityIncident extends Model {
    protected $table = 'bear_log_security_incident';
    protected $dateFormat = 'Y-m-d H:i:sO';
    public $timestamps = false;

    protected $casts = [
        'created_at' => 'immutable_datetime',
    ];

    protected $guarded = ['id','updated_at','created_at','deleted_at'];
}
