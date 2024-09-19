<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Data;

use GuardsmanPanda\Larabear\Infrastructure\Locale\Enum\BearCountryEnum;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Enum\BearCountrySubdivisionTypeEnum;

final readonly class BearCountrySubdivisionData {
    public function __construct(
        public BearCountryEnum                $cca2,
        public string                         $name,
        public string                         $capital,
        public int                            $osm,
        public BearCountrySubdivisionTypeEnum $type,
    ) {
    }
}