<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Security\Crud;

use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use JsonException;

class BearSecurityIncidentCreator {
    public static function create(
        BearSeverityEnum $severity,
        string           $namespace,
        string           $headline,
        string           $description,
        string           $remediation = null,
        string           $reference = null,
        string|int       $causedByUserId = null,
    ): void {
        $query_json = null;
        try {
            $query = Req::allQueryData();
            $query_json = empty($query) ? null : json_encode(value: $query, flags: JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            Log::error(message: 'Failed to encode query parameters: ' . $e->getMessage());
        }
        DB::insert(query: "
            INSERT INTO bear_log_security_incident (security_incident_severity, security_incident_namespace, security_incident_headline, security_incident_description, security_incident_remediation, security_incident_reference, caused_by_user_id, request_ip, request_country_code, request_http_method, request_http_path, request_http_query, request_http_hostname)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ", bindings: [$severity->value, $namespace, $headline, $description, $remediation, $reference, $causedByUserId, Req::ip(), Req::ipCountry(), Req::method(), Req::path(), $query_json, Req::hostname()]);
    }
}
