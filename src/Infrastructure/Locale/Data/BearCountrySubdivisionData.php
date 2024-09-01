<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Data;

use GuardsmanPanda\Larabear\Infrastructure\Locale\Enum\BearCountryEnum;

final readonly class BearCountrySubdivisionData {
    public function __construct(
        public string $iso_3166,
        public BearCountryEnum $country_cca2,
        public string $name,
        public string $capital,
        public int $area_km2,
        public int $local_area_rank,
        public int $population,
        public int $local_population_rank,
    ) {
    }
}