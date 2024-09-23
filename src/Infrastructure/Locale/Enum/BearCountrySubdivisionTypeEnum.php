<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Enum;

use GuardsmanPanda\Larabear\Infrastructure\App\Interface\BearDatabaseBackedEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Crud\LarabearCountrySubdivisionTypeCrud;

enum BearCountrySubdivisionTypeEnum: string implements BearDatabaseBackedEnumInterface {
    case ADMINISTRATION = 'ADMINISTRATION';
    case CANTON = 'CANTON';
    case CITY = 'CITY';
    case COMMUNITY = 'COMMUNITY';
    case COLLECTIVITY = 'COLLECTIVITY';
    case COMMUNE = 'COMMUNE';
    case COUNTRY = 'COUNTRY';
    case COUNTY = 'COUNTY';
    case DEPARTMENT = 'DEPARTMENT';
    case DEPENDENCY = 'DEPENDENCY';
    case DISTRICT = 'DISTRICT';
    case DIVISION = 'DIVISION';
    case EMIRATE = 'EMIRATE';
    case ENTITY = 'ENTITY';
    case GOVERNORATE = 'GOVERNORATE';
    case ISLAND = 'ISLAND';
    case METROPOLITAN = 'METROPOLITAN';
    case MUNICIPALITY = 'MUNICIPALITY';
    case OBLAST = 'OBLAST';
    case OUTLYING_AREA = 'OUTLYING_AREA';
    case PARISH = 'PARISH';
    case POPULARATE = 'POPULARATE';
    case PREFECTURE = 'PREFECTURE';
    case PROVINCE = 'PROVINCE';
    case QUARTER = 'QUARTER';
    case RAYON = 'RAYON';
    case REGION = 'REGION';
    case REGIONAL_STATE = 'REGIONAL_STATE';
    case REPUBLIC = 'REPUBLIC';
    case SECTOR = 'SECTOR';
    case SELF_GOVERNED_PART = 'SELF_GOVERNED_PART';
    case STATE = 'STATE';
    case TERRITORY = 'TERRITORY';
    case TOWN = 'TOWN';
    case UNION_TERRITORY = 'UNION_TERRITORY';
    case UNIT = 'UNIT';


    public function getName(): string {
        return match ($this) {
            self::ADMINISTRATION => 'Administration',
            self::COMMUNITY => 'Community',
            self::CANTON => 'Canton',
            self::CITY => 'City',
            self::COLLECTIVITY => 'Collectivity',
            self::COMMUNE => 'Commune',
            self::COUNTRY => 'Country',
            self::COUNTY => 'County',
            self::DEPARTMENT => 'Department',
            self::DEPENDENCY => 'Dependency',
            self::DISTRICT => 'District',
            self::DIVISION => 'Division',
            self::EMIRATE => 'Emirate',
            self::ENTITY => 'Entity',
            self::GOVERNORATE => 'Governorate',
            self::ISLAND => 'Island',
            self::METROPOLITAN => 'Metropolitan',
            self::MUNICIPALITY => 'Municipality',
            self::OBLAST => 'Oblast',
            self::OUTLYING_AREA => 'Outlying Area',
            self::PARISH => 'Parish',
            self::POPULARATE => 'Popularate',
            self::PREFECTURE => 'Prefecture',
            self::PROVINCE => 'Province',
            self::QUARTER => 'Quarter',
            self::RAYON => 'Rayon',
            self::REGION => 'Region',
            self::REGIONAL_STATE => 'Regional State',
            self::REPUBLIC => 'Republic',
            self::SECTOR => 'Sector',
            self::SELF_GOVERNED_PART => 'Self-Governed Part',
            self::STATE => 'State',
            self::TERRITORY => 'Territory',
            self::TOWN => 'Town',
            self::UNION_TERRITORY => 'Union Territory',
            self::UNIT => 'Unit',
        };
    }


    public static function syncToDatabase(): void {
        foreach (self::cases() as $enum) {
            LarabearCountrySubdivisionTypeCrud::syncToDatabase($enum);
        }
    }
}
