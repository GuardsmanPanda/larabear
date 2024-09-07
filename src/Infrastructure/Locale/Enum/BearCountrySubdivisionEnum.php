<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Enum;

use GuardsmanPanda\Larabear\Infrastructure\App\Interface\BearDatabaseBackedEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Crud\LarabearCountrySubdivisionCrud;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Data\BearCountrySubdivisionData;

enum BearCountrySubdivisionEnum: string implements BearDatabaseBackedEnumInterface {
    // GREAT BRITAIN
    case GB_ENG = 'GB-ENG';
    case GB_NIR = 'GB-NIR';
    case GB_SCT = 'GB-SCT';
    case GB_WLS = 'GB-WLS';

    // THE UNITED STATES
    case US_AL = 'US-AL';
    case US_AK = 'US-AK';
    case US_AZ = 'US-AZ';
    case US_AR = 'US-AR';
    case US_CA = 'US-CA';
    case US_CO = 'US-CO';
    case US_CT = 'US-CT';
    case US_DE = 'US-DE';
    case US_FL = 'US-FL';
    case US_GA = 'US-GA';
    case US_HI = 'US-HI';
    case US_ID = 'US-ID';
    case US_IL = 'US-IL';
    case US_IN = 'US-IN';
    case US_IA = 'US-IA';
    case US_KS = 'US-KS';
    case US_KY = 'US-KY';
    case US_LA = 'US-LA';
    case US_ME = 'US-ME';
    case US_MD = 'US-MD';
    case US_MA = 'US-MA';
    case US_MI = 'US-MI';
    case US_MN = 'US-MN';
    case US_MS = 'US-MS';
    case US_MO = 'US-MO';
    case US_MT = 'US-MT';
    case US_NE = 'US-NE';
    case US_NV = 'US-NV';
    case US_NH = 'US-NH';
    case US_NJ = 'US-NJ';
    case US_NM = 'US-NM';
    case US_NY = 'US-NY';
    case US_NC = 'US-NC';
    case US_ND = 'US-ND';
    case US_OH = 'US-OH';
    case US_OK = 'US-OK';
    case US_OR = 'US-OR';
    case US_PA = 'US-PA';
    case US_RI = 'US-RI';
    case US_SC = 'US-SC';
    case US_SD = 'US-SD';
    case US_TN = 'US-TN';
    case US_TX = 'US-TX';
    case US_UT = 'US-UT';
    case US_VT = 'US-VT';
    case US_VA = 'US-VA';
    case US_WA = 'US-WA';
    case US_WV = 'US-WV';
    case US_WI = 'US-WI';
    case US_WY = 'US-WY';


    public function getCountrySubdivisionData(): BearCountrySubdivisionData {
        return match ($this) {
            // GREAT BRITAIN
            self::GB_ENG => new BearCountrySubdivisionData(
                iso_3166: 'GB-ENG', country_cca2: BearCountryEnum::GB, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTRY,
                name: 'England', capital: 'London',
                area_km2: 130395, local_area_rank: 1, population: 56223000, local_population_rank: 1,
            ),
            self::GB_NIR => new BearCountrySubdivisionData(
                iso_3166: 'GB-NIR', country_cca2: BearCountryEnum::GB, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTRY,
                name: 'Northern Ireland', capital: 'Belfast',
                area_km2: 14330, local_area_rank: 4, population: 1910543, local_population_rank: 4,
            ),
            self::GB_SCT => new BearCountrySubdivisionData(
                iso_3166: 'GB-SCT', country_cca2: BearCountryEnum::GB, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTRY,
                name: 'Scotland', capital: 'Edinburgh',
                area_km2: 80231, local_area_rank: 2, population: 5463300, local_population_rank: 2,
            ),
            self::GB_WLS => new BearCountrySubdivisionData(
                iso_3166: 'GB-WLS', country_cca2: BearCountryEnum::GB, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTRY,
                name: 'Wales', capital: 'Cardiff',
                area_km2: 20779, local_area_rank: 3, population: 3139000, local_population_rank: 3,
            ),

            // THE UNITED STATES
            self::US_AL => new BearCountrySubdivisionData(
                iso_3166: 'US-AL', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Alabama', capital: 'Montgomery',
                area_km2: 135767, local_area_rank: 30, population: 4903185, local_population_rank: 24,
            ),
            self::US_AK => new BearCountrySubdivisionData(
                iso_3166: 'US-AK', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Alaska', capital: 'Juneau',
                area_km2: 1723337, local_area_rank: 1, population: 731545, local_population_rank: 48,
            ),
            self::US_AZ => new BearCountrySubdivisionData(
                iso_3166: 'US-AZ', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Arizona', capital: 'Phoenix',
                area_km2: 295234, local_area_rank: 6, population: 7278717, local_population_rank: 14,
            ),
            self::US_AR => new BearCountrySubdivisionData(
                iso_3166: 'US-AR', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Arkansas', capital: 'Little Rock',
                area_km2: 137732, local_area_rank: 29, population: 3017804, local_population_rank: 33,
            ),
            self::US_CA => new BearCountrySubdivisionData(
                iso_3166: 'US-CA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'California', capital: 'Sacramento',
                area_km2: 423967, local_area_rank: 3, population: 39538223, local_population_rank: 1,
            ),
            self::US_CO => new BearCountrySubdivisionData(
                iso_3166: 'US-CO', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Colorado', capital: 'Denver',
                area_km2: 269601, local_area_rank: 8, population: 5773714, local_population_rank: 21,
            ),
            self::US_CT => new BearCountrySubdivisionData(
                iso_3166: 'US-CT', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Connecticut', capital: 'Hartford',
                area_km2: 14357, local_area_rank: 48, population: 3605944, local_population_rank: 29,
            ),
            self::US_DE => new BearCountrySubdivisionData(
                iso_3166: 'US-DE', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Delaware', capital: 'Dover',
                area_km2: 6446, local_area_rank: 49, population: 982895, local_population_rank: 45,
            ),
            self::US_FL => new BearCountrySubdivisionData(
                iso_3166: 'US-FL', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Florida', capital: 'Tallahassee',
                area_km2: 170312, local_area_rank: 22, population: 21538187, local_population_rank: 3,
            ),
            self::US_GA => new BearCountrySubdivisionData(
                iso_3166: 'US-GA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Georgia', capital: 'Atlanta',
                area_km2: 153910, local_area_rank: 24, population: 10711908, local_population_rank: 8,
            ),
            self::US_HI => new BearCountrySubdivisionData(
                iso_3166: 'US-HI', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Hawaii', capital: 'Honolulu',
                area_km2: 28314, local_area_rank: 43, population: 1412687, local_population_rank: 40,
            ),
            self::US_ID => new BearCountrySubdivisionData(
                iso_3166: 'US-ID', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Idaho', capital: 'Boise',
                area_km2: 216443, local_area_rank: 14, population: 1826156, local_population_rank: 39,
            ),
            self::US_IL => new BearCountrySubdivisionData(
                iso_3166: 'US-IL', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Illinois', capital: 'Springfield',
                area_km2: 149995, local_area_rank: 25, population: 12671821, local_population_rank: 6,
            ),
            self::US_IN => new BearCountrySubdivisionData(
                iso_3166: 'US-IN', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Indiana', capital: 'Indianapolis',
                area_km2: 94327, local_area_rank: 38, population: 6745354, local_population_rank: 17,
            ),
            self::US_IA => new BearCountrySubdivisionData(
                iso_3166: 'US-IA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Iowa', capital: 'Des Moines',
                area_km2: 145746, local_area_rank: 26, population: 3179849, local_population_rank: 31,
            ),
            self::US_KS => new BearCountrySubdivisionData(
                iso_3166: 'US-KS', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Kansas', capital: 'Topeka',
                area_km2: 213099, local_area_rank: 15, population: 2913314, local_population_rank: 34,
            ),
            self::US_KY => new BearCountrySubdivisionData(
                iso_3166: 'US-KY', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Kentucky', capital: 'Frankfort',
                area_km2: 104656, local_area_rank: 37, population: 4499692, local_population_rank: 26,
            ),
            self::US_LA => new BearCountrySubdivisionData(
                iso_3166: 'US-LA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Louisiana', capital: 'Baton Rouge',
                area_km2: 135658, local_area_rank: 31, population: 4645184, local_population_rank: 25,
            ),
            self::US_ME => new BearCountrySubdivisionData(
                iso_3166: 'US-ME', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Maine', capital: 'Augusta',
                area_km2: 91633, local_area_rank: 41, population: 1344212, local_population_rank: 41,
            ),
            self::US_MD => new BearCountrySubdivisionData(
                iso_3166: 'US-MD', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Maryland', capital: 'Annapolis',
                area_km2: 32131, local_area_rank: 42, population: 6083116, local_population_rank: 19,
            ),
            self::US_MA => new BearCountrySubdivisionData(
                iso_3166: 'US-MA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Massachusetts', capital: 'Boston',
                area_km2: 27336, local_area_rank: 44, population: 6976597, local_population_rank: 15,
            ),
            self::US_MI => new BearCountrySubdivisionData(
                iso_3166: 'US-MI', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Michigan', capital: 'Lansing',
                area_km2: 250487, local_area_rank: 11, population: 10045029, local_population_rank: 10,
            ),
            self::US_MN => new BearCountrySubdivisionData(
                iso_3166: 'US-MN', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Minnesota', capital: 'St. Paul',
                area_km2: 225163, local_area_rank: 13, population: 5700671, local_population_rank: 22,
            ),
            self::US_MS => new BearCountrySubdivisionData(
                iso_3166: 'US-MS', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Mississippi', capital: 'Jackson',
                area_km2: 125438, local_area_rank: 32, population: 2961279, local_population_rank: 35,
            ),
            self::US_MO => new BearCountrySubdivisionData(
                iso_3166: 'US-MO', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Missouri', capital: 'Jefferson City',
                area_km2: 180540, local_area_rank: 20, population: 6169270, local_population_rank: 18,
            ),
            self::US_MT => new BearCountrySubdivisionData(
                iso_3166: 'US-MT', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Montana', capital: 'Helena',
                area_km2: 380832, local_area_rank: 4, population: 1085400, local_population_rank: 44,
            ),
            self::US_NE => new BearCountrySubdivisionData(
                iso_3166: 'US-NE', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Nebraska', capital: 'Lincoln',
                area_km2: 200330, local_area_rank: 16, population: 1952570, local_population_rank: 38,
            ),
            self::US_NV => new BearCountrySubdivisionData(
                iso_3166: 'US-NV', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Nevada', capital: 'Carson City',
                area_km2: 286380, local_area_rank: 7, population: 3139658, local_population_rank: 32,
            ),
            self::US_NH => new BearCountrySubdivisionData(
                iso_3166: 'US-NH', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'New Hampshire', capital: 'Concord',
                area_km2: 24214, local_area_rank: 47, population: 1371246, local_population_rank: 42,
            ),
            self::US_NJ => new BearCountrySubdivisionData(
                iso_3166: 'US-NJ', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'New Jersey', capital: 'Trenton',
                area_km2: 22591, local_area_rank: 46, population: 9288994, local_population_rank: 11,
            ),
            self::US_NM => new BearCountrySubdivisionData(
                iso_3166: 'US-NM', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'New Mexico', capital: 'Santa Fe',
                area_km2: 314917, local_area_rank: 5, population: 2117522, local_population_rank: 36,
            ),
            self::US_NY => new BearCountrySubdivisionData(
                iso_3166: 'US-NY', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'New York', capital: 'Albany',
                area_km2: 141297, local_area_rank: 28, population: 20201249, local_population_rank: 4,
            ),
            self::US_NC => new BearCountrySubdivisionData(
                iso_3166: 'US-NC', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'North Carolina', capital: 'Raleigh',
                area_km2: 139391, local_area_rank: 27, population: 10488084, local_population_rank: 9,
            ),
            self::US_ND => new BearCountrySubdivisionData(
                iso_3166: 'US-ND', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'North Dakota', capital: 'Bismarck',
                area_km2: 183107, local_area_rank: 21, population: 762062, local_population_rank: 47,
            ),
            self::US_OH => new BearCountrySubdivisionData(
                iso_3166: 'US-OH', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Ohio', capital: 'Columbus',
                area_km2: 116098, local_area_rank: 34, population: 11689100, local_population_rank: 7,
            ),
            self::US_OK => new BearCountrySubdivisionData(
                iso_3166: 'US-OK', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Oklahoma', capital: 'Oklahoma City',
                area_km2: 181037, local_area_rank: 19, population: 3956971, local_population_rank: 23,
            ),
            self::US_OR => new BearCountrySubdivisionData(
                iso_3166: 'US-OR', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Oregon', capital: 'Salem',
                area_km2: 254799, local_area_rank: 10, population: 4217737, local_population_rank: 27,
            ),
            self::US_PA => new BearCountrySubdivisionData(
                iso_3166: 'US-PA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Pennsylvania', capital: 'Harrisburg',
                area_km2: 119280, local_area_rank: 35, population: 12801989, local_population_rank: 5,
            ),
            self::US_RI => new BearCountrySubdivisionData(
                iso_3166: 'US-RI', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Rhode Island', capital: 'Providence',
                area_km2: 4001, local_area_rank: 50, population: 1059361, local_population_rank: 43,
            ),
            self::US_SC => new BearCountrySubdivisionData(
                iso_3166: 'US-SC', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'South Carolina', capital: 'Columbia',
                area_km2: 82933, local_area_rank: 40, population: 5210095, local_population_rank: 28,
            ),
            self::US_SD => new BearCountrySubdivisionData(
                iso_3166: 'US-SD', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'South Dakota', capital: 'Pierre',
                area_km2: 199729, local_area_rank: 17, population: 903027, local_population_rank: 46,
            ),
            self::US_TN => new BearCountrySubdivisionData(
                iso_3166: 'US-TN', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Tennessee', capital: 'Nashville',
                area_km2: 109153, local_area_rank: 36, population: 6897576, local_population_rank: 16,
            ),
            self::US_TX => new BearCountrySubdivisionData(
                iso_3166: 'US-TX', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Texas', capital: 'Austin',
                area_km2: 695662, local_area_rank: 2, population: 29472295, local_population_rank: 2,
            ),
            self::US_UT => new BearCountrySubdivisionData(
                iso_3166: 'US-UT', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Utah', capital: 'Salt Lake City',
                area_km2: 219882, local_area_rank: 12, population: 3282115, local_population_rank: 30,
            ),
            self::US_VT => new BearCountrySubdivisionData(
                iso_3166: 'US-VT', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Vermont', capital: 'Montpelier',
                area_km2: 24906, local_area_rank: 45, population: 623989, local_population_rank: 49,
            ),
            self::US_VA => new BearCountrySubdivisionData(
                iso_3166: 'US-VA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Virginia', capital: 'Richmond',
                area_km2: 110787, local_area_rank: 33, population: 8626207, local_population_rank: 12,
            ),
            self::US_WA => new BearCountrySubdivisionData(
                iso_3166: 'US-WA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Washington', capital: 'Olympia',
                area_km2: 184661, local_area_rank: 23, population: 7693612, local_population_rank: 20,
            ),
            self::US_WV => new BearCountrySubdivisionData(
                iso_3166: 'US-WV', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'West Virginia', capital: 'Charleston',
                area_km2: 62755, local_area_rank: 39, population: 1792147, local_population_rank: 37,
            ),
            self::US_WI => new BearCountrySubdivisionData(
                iso_3166: 'US-WI', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Wisconsin', capital: 'Madison',
                area_km2: 169634, local_area_rank: 21, population: 5893718, local_population_rank: 19,
            ),
            self::US_WY => new BearCountrySubdivisionData(
                iso_3166: 'US-WY', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Wyoming', capital: 'Cheyenne',
                area_km2: 253335, local_area_rank: 9, population: 576851, local_population_rank: 50,
            ),
        };
    }


    public static function syncToDatabase(): void {
        foreach (self::cases() as $case) {
            LarabearCountrySubdivisionCrud::syncToDatabase($case);
        }
    }
}
