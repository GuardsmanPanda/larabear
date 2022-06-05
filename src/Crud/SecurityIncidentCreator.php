<?php

namespace GuardsmanPanda\Larabear\Crud;

use GuardsmanPanda\Larabear\Enum\SecurityIncidentSeverityEnum;
use Illuminate\Support\Facades\DB;

class SecurityIncidentCreator {
    public static function create(
        string $namespace,
        SecurityIncidentSeverityEnum $severity,
        string $headline,
        string $description,
        string $remediation = null,
        string $reference = null,
        string $loggedInUserId = null,
    ): void {
        DB::insert("
            INSERT INTO bear_security_incident (security_incident_severity, security_incident_namespace, security_incident_headline, security_incident_description, security_incident_remediation, security_incident_reference, request_ip, user_id, country_code, http_method, http_path, http_query)
            VALUES (?, ?, ?, ?, ?, ?)
            ", [$namespace, $severity, $headline, $description, $remediation, $reference]
        );
    }
}