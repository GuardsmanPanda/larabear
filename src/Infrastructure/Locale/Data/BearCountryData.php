<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Data;

final readonly class BearCountryData {
    /**
     * @param Array<int, string> $borders
     */
    public function __construct(
        public string      $cca2,
        public string      $cca3,
        public string      $name,
        public string      $capital,
        public string      $tld,
        public int         $area_km2,
        public int         $area_rank,
        public int         $population,
        public int         $population_rank,
        public string      $currency_code,
        public string      $currency_name,
        public string      $currency_symbol,
        public string      $calling_code,
        public bool        $is_driving_side_right,
        public int|null    $osm_relation_id,
        public string|null $dependency_status,
        public array       $borders,
    ) {
    }
}
