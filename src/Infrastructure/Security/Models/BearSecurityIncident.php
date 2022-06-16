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
 * @method static BearSecurityIncident |null find(int $id, array $columns = ['*'])
 * @method static BearSecurityIncident findOrFail(int $id, array $columns = ['*'])
 * @method static BearSecurityIncident findOrNew(int $id, array $columns = ['*'])
 * @method static BearSecurityIncident sole(array $columns = ['*'])
 * @method static BearSecurityIncident|null first(array $columns = ['*'])
 * @method static BearSecurityIncident firstOrFail(array $columns = ['*'])
 * @method static BearSecurityIncident firstOrCreate(array $filter, array $values)
 * @method static BearSecurityIncident firstOrNew(array $filter, array $values)
 * @method static BearSecurityIncident|null firstWhere(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Collection|BearSecurityIncident all(array $columns = ['*'])
 * @method static Collection|BearSecurityIncident fromQuery(string $query, array $bindings = [])
 * @method static Builder|BearSecurityIncident lockForUpdate()
 * @method static Builder|BearSecurityIncident select(array $columns = ['*'])
 * @method static Builder|BearSecurityIncident with(array  $relations)
 * @method static Builder|BearSecurityIncident leftJoin(string $table, string $first, string $operator = null, string $second = null)
 * @method static Builder|BearSecurityIncident where(string $column, string $operator = null, string $value = null, string $boolean = 'and')
 * @method static Builder|BearSecurityIncident whereIn(string $column, array $values, string $boolean = 'and', bool $not = false)
 * @method static Builder|BearSecurityIncident whereHas(string $relation, Closure $callback, string $operator = '>=', int $count = 1)
 * @method static Builder|BearSecurityIncident whereNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearSecurityIncident whereNotNull(string|array $columns, string $boolean = 'and')
 * @method static Builder|BearSecurityIncident whereRaw(string $sql, array $bindings, string $boolean = 'and')
 * @method static Builder|BearSecurityIncident orderBy(string $column, string $direction = 'asc')
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
class BearSecurityIncident extends Model {
    protected $table = 'bear_security_incident';
    protected $dateFormat = 'Y-m-d H:i:sO';
    public $timestamps = false;

    protected $casts = [
        'created_at' => 'immutable_datetime',
    ];

    protected $guarded = ['id','updated_at','created_at','deleted_at'];
}
