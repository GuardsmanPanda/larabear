<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Service;

use GuardsmanPanda\Larabear\Infrastructure\Locale\Model\BearCountry;

final class BearCountryService {
    public static function countryExists(string $countryIso2Code): bool {
        return BearCountry::find(id: $countryIso2Code, columns: ['country_iso2_code']) !== null;
    }
}
