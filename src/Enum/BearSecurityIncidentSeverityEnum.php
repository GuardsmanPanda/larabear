<?php

namespace GuardsmanPanda\Larabear\Enum;

enum BearSecurityIncidentSeverityEnum: string {
    case BASELINE = 'BASELINE';
    case LOW = 'LOW';
    case MEDIUM = 'MEDIUM';
    case HIGH = 'HIGH';
    case CRITICAL = 'CRITICAL';
    case EMERGENCY = 'EMERGENCY';
}
