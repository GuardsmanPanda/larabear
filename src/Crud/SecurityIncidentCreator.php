<?php

namespace GuardsmanPanda\Larabear\Crud;

use GuardsmanPanda\Larabear\Enum\SecurityIncidentSeverityEnum;

class SecurityIncidentCreator {
    public static function create(
        string $namespace,
        SecurityIncidentSeverityEnum $severity,
        string $headline,
        string $description,
        string $remediation = null,
        string $reference = null,
    ): void {

    }
}