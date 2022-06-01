<?php

namespace GuardsmanPanda\Larabear\Enum;

enum SecurityIncidentSeverityEnum: string {
    case BASELINE = 'BASELINE';
    case LOW = 'LOW';
    case MEDIUM = 'MEDIUM';
    case HIGH = 'HIGH';
    case CRITICAL = 'CRITICAL';
    case EMERGENCY = 'EMERGENCY';
}
