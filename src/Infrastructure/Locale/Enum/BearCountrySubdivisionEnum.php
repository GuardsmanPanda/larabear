<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Enum;

use GuardsmanPanda\Larabear\Infrastructure\App\Interface\BearDatabaseBackedEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Crud\LarabearCountrySubdivisionCrud;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Data\BearCountrySubdivisionData;

enum BearCountrySubdivisionEnum: string implements BearDatabaseBackedEnumInterface {
    case GB_ENG = 'GB_ENG';
    case GB_NIR = 'GB_NIR';
    case GB_SCT = 'GB_SCT';
    case GB_WLS = 'GB_WLS';


    public function getCountrySubdivisionData(): BearCountrySubdivisionData {
        return match ($this) {
            self::GB_ENG => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::GB, iso_3166: 'GB-ENG',
                name: 'England', capital: 'London',
                area_km2: 130395, local_area_rank: 1,
                population: 56223000, local_population_rank: 1,
            ),
            self::GB_NIR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::GB, iso_3166: 'GB-NIR',
                name: 'Northern Ireland', capital: 'Belfast',
                area_km2: 14330, local_area_rank: 4,
                population: 1910543, local_population_rank: 4,
            ),
            self::GB_SCT => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::GB, iso_3166: 'GB-SCT',
                name: 'Scotland', capital: 'Edinburgh',
                area_km2: 80231, local_area_rank: 2,
                population: 5463300, local_population_rank: 2,
            ),
            self::GB_WLS => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::GB, iso_3166: 'GB-WLS',
                name: 'Wales', capital: 'Cardiff',
                area_km2: 20779, local_area_rank: 3,
                population: 3139000, local_population_rank: 3,
            ),
        };
    }


    public static function syncToDatabase(): void {
        foreach (self::cases() as $case) {
            LarabearCountrySubdivisionCrud::syncToDatabase($case);
        }
    }
}
