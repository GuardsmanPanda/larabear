<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Enum;

enum BearCountrySubdivisionTypeEnum: string {
    case AUTONOMOUS_COMMUNITY = 'AUTONOMOUS_COMMUNITY';
    case AUTONOMOUS_CITY = 'AUTONOMOUS_CITY';
    case COUNTRY = 'COUNTRY';
    case STATE = 'STATE';
    case PROVINCE = 'PROVINCE';
    case REGION = 'REGION';
    case TERRITORY = 'TERRITORY';
    case METROPOLITAN = 'METROPOLITAN';
    case DISTRICT = 'DISTRICT';
}
