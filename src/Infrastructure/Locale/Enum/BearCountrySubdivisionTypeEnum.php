<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Enum;

use GuardsmanPanda\Larabear\Infrastructure\App\Interface\BearDatabaseBackedEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Crud\LarabearCountrySubdivisionTypeCrud;

enum BearCountrySubdivisionTypeEnum: string implements BearDatabaseBackedEnumInterface {
    case CANTON = 'CANTON';
    case CITY = 'CITY';
    case COMMUNITY = 'COMMUNITY';
    case COUNTRY = 'COUNTRY';
    case COUNTY = 'COUNTY';
    case DEPENDENCY = 'DEPENDENCY';
    case DISTRICT = 'DISTRICT';
    case EMIRATE = 'EMIRATE';
    case METROPOLITAN = 'METROPOLITAN';
    case MUNICIPALITY = 'MUNICIPALITY';
    case OBLAST = 'OBLAST';
    case PARISH = 'PARISH';
    case PROVINCE = 'PROVINCE';
    case REGION = 'REGION';
    case STATE = 'STATE';
    case TERRITORY = 'TERRITORY';


    public function getName(): string {
        return match ($this) {
            self::COMMUNITY => 'Community',
            self::CANTON => 'Canton',
            self::CITY => 'City',
            self::COUNTRY => 'Country',
            self::COUNTY => 'County',
            self::DEPENDENCY => 'Dependency',
            self::DISTRICT => 'District',
            self::EMIRATE => 'Emirate',
            self::METROPOLITAN => 'Metropolitan',
            self::MUNICIPALITY => 'Municipality',
            self::OBLAST => 'Oblast',
            self::PARISH => 'Parish',
            self::PROVINCE => 'Province',
            self::REGION => 'Region',
            self::STATE => 'State',
            self::TERRITORY => 'Territory',
        };
    }


    public static function syncToDatabase(): void {
        foreach (self::cases() as $enum) {
            LarabearCountrySubdivisionTypeCrud::syncToDatabase($enum);
        }
    }
}
