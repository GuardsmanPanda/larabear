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
    ): void {
       // DB::insert("
       //     INSERT INTO bear_security_incident (severity, namespace, headline, description, remediation, reference, request_ip, user_id, country_code, http_method, http_path, http_query)
       //     VALUES (?, ?, ?, ?, ?, ?)
       //     ", [$namespace, $severity, $headline, $description, $remediation, $reference]
       // );
    }
}