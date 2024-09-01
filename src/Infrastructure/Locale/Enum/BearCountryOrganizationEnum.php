<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Enum;

enum BearCountryOrganizationEnum: string {
    case EUROPEAN_UNION = 'EUROPEAN_UNION';
    case G7 = 'G7';


    /**
     * @return array<string>
     */
    function getCountryCca2Array(): array {
        return match ($this) {
            self::EUROPEAN_UNION => ['AT', 'BE', 'BG', 'CY', 'CZ', 'DE', 'DK', 'EE', 'ES', 'FI', 'FR', 'GR', 'HR', 'HU', 'IE', 'IT', 'LT', 'LU', 'LV', 'MT', 'NL', 'PL', 'PT', 'RO', 'SE', 'SI', 'SK'],
            self::G7 => ['CA', 'DE', 'FR', 'GB', 'IT', 'JP', 'US'],
        };
    }
}
