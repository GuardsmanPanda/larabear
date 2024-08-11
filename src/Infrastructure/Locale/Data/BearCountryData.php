<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Data;

use Illuminate\Database\Eloquent\Casts\ArrayObject;

final readonly class BearCountryData {
    /**
     * @param ArrayObject<int, string> $borders
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
        public string|null $dependency_status,
        public ArrayObject       $borders,
    ) {
    }
}