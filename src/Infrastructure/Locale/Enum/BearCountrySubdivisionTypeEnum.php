<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Enum;

enum BearCountrySubdivisionTypeEnum: string {
    case COUNTRY = 'COUNTRY';
    case STATE = 'STATE';
    case PROVINCE = 'PROVINCE';
    case REGION = 'REGION';
    case TERRITORY = 'TERRITORY';
    case METROPOLITAN = 'METROPOLITAN';
    case DISTRICT = 'DISTRICT';
}
