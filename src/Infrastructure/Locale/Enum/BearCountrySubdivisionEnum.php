<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Enum;

use GuardsmanPanda\Larabear\Infrastructure\App\Interface\BearDatabaseBackedEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Crud\LarabearCountrySubdivisionCrud;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Data\BearCountrySubdivisionData;

enum BearCountrySubdivisionEnum: string implements BearDatabaseBackedEnumInterface {
    // GERMANY
    case DE_BW = 'DE-BW';
    case DE_BY = 'DE-BY';
    case DE_BE = 'DE-BE';
    case DE_BB = 'DE-BB';
    case DE_HB = 'DE-HB';
    case DE_HH = 'DE-HH';
    case DE_HE = 'DE-HE';
    case DE_MV = 'DE-MV';
    case DE_NI = 'DE-NI';
    case DE_NW = 'DE-NW';
    case DE_RP = 'DE-RP';
    case DE_SL = 'DE-SL';
    case DE_SN = 'DE-SN';
    case DE_ST = 'DE-ST';
    case DE_SH = 'DE-SH';
    case DE_TH = 'DE-TH';

    // THE UNITED KINGDOM
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
    case US_DC = 'US-DC';


    public function getCountrySubdivisionData(): BearCountrySubdivisionData {
        return match ($this) {
            // GERMANY
            self::DE_BW => new BearCountrySubdivisionData(
                iso_3166: 'DE-BW', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Baden-Württemberg', capital: 'Stuttgart', osm_relation_id: 62611,
            ),
            self::DE_BY => new BearCountrySubdivisionData(
                iso_3166: 'DE-BY', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Bavaria', capital: 'Munich', osm_relation_id: 2145268,
            ),
            self::DE_BE => new BearCountrySubdivisionData(
                iso_3166: 'DE-BE', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Berlin', capital: 'Berlin', osm_relation_id: 62422,
            ),
            self::DE_BB => new BearCountrySubdivisionData(
                iso_3166: 'DE-BB', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Brandenburg', capital: 'Potsdam', osm_relation_id: 62504,
            ),
            self::DE_HB => new BearCountrySubdivisionData(
                iso_3166: 'DE-HB', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Bremen', capital: 'Bremen', osm_relation_id: 62718,
            ),
            self::DE_HH => new BearCountrySubdivisionData(
                iso_3166: 'DE-HH', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Hamburg', capital: 'Hamburg', osm_relation_id: 62782,
            ),
            self::DE_HE => new BearCountrySubdivisionData(
                iso_3166: 'DE-HE', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Hesse', capital: 'Wiesbaden', osm_relation_id: 62650,
            ),
            self::DE_MV => new BearCountrySubdivisionData(
                iso_3166: 'DE-MV', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Mecklenburg-Vorpommern', capital: 'Schwerin', osm_relation_id: 28322,
            ),
            self::DE_NI => new BearCountrySubdivisionData(
                iso_3166: 'DE-NI', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Lower Saxony', capital: 'Hanover', osm_relation_id: 62771,
            ),
            self::DE_NW => new BearCountrySubdivisionData(
                iso_3166: 'DE-NW', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'North Rhine-Westphalia', capital: 'Düsseldorf', osm_relation_id: 62761,
            ),
            self::DE_RP => new BearCountrySubdivisionData(
                iso_3166: 'DE-RP', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Rhineland-Palatinate', capital: 'Mainz', osm_relation_id: 62341,
            ),
            self::DE_SL => new BearCountrySubdivisionData(
                iso_3166: 'DE-SL', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Saarland', capital: 'Saarbrücken', osm_relation_id: 62372,
            ),
            self::DE_SN => new BearCountrySubdivisionData(
                iso_3166: 'DE-SN', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Saxony', capital: 'Dresden', osm_relation_id: 62467,
            ),
            self::DE_ST => new BearCountrySubdivisionData(
                iso_3166: 'DE-ST', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Saxony-Anhalt', capital: 'Magdeburg', osm_relation_id: 62607,
            ),
            self::DE_SH => new BearCountrySubdivisionData(
                iso_3166: 'DE-SH', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Schleswig-Holstein', capital: 'Kiel', osm_relation_id: 51529,
            ),
            self::DE_TH => new BearCountrySubdivisionData(
                iso_3166: 'DE-TH', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Thuringia', capital: 'Erfurt', osm_relation_id: 62366,
            ),


            // THE UNITED KINGDOM
            self::GB_ENG => new BearCountrySubdivisionData(
                iso_3166: 'GB-ENG', country_cca2: BearCountryEnum::GB, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTRY,
                name: 'England', capital: 'London', osm_relation_id: 58447,
            ),
            self::GB_NIR => new BearCountrySubdivisionData(
                iso_3166: 'GB-NIR', country_cca2: BearCountryEnum::GB, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                name: 'Northern Ireland', capital: 'Belfast', osm_relation_id: 156393,
            ),
            self::GB_SCT => new BearCountrySubdivisionData(
                iso_3166: 'GB-SCT', country_cca2: BearCountryEnum::GB, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTRY,
                name: 'Scotland', capital: 'Edinburgh', osm_relation_id: 58446,
            ),
            self::GB_WLS => new BearCountrySubdivisionData(
                iso_3166: 'GB-WLS', country_cca2: BearCountryEnum::GB, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTRY,
                name: 'Wales', capital: 'Cardiff', osm_relation_id: 58437,
            ),


            // THE UNITED STATES
            self::US_AL => new BearCountrySubdivisionData(
                iso_3166: 'US-AL', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Alabama', capital: 'Montgomery', osm_relation_id: 161950,
            ),
            self::US_AK => new BearCountrySubdivisionData(
                iso_3166: 'US-AK', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Alaska', capital: 'Juneau', osm_relation_id: 1116270,
            ),
            self::US_AZ => new BearCountrySubdivisionData(
                iso_3166: 'US-AZ', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Arizona', capital: 'Phoenix', osm_relation_id: 162018,
            ),
            self::US_AR => new BearCountrySubdivisionData(
                iso_3166: 'US-AR', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Arkansas', capital: 'Little Rock', osm_relation_id: 161646,
            ),
            self::US_CA => new BearCountrySubdivisionData(
                iso_3166: 'US-CA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'California', capital: 'Sacramento', osm_relation_id: 165475,
            ),
            self::US_CO => new BearCountrySubdivisionData(
                iso_3166: 'US-CO', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Colorado', capital: 'Denver', osm_relation_id: 161961,
            ),
            self::US_CT => new BearCountrySubdivisionData(
                iso_3166: 'US-CT', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Connecticut', capital: 'Hartford', osm_relation_id: 165794,
            ),
            self::US_DE => new BearCountrySubdivisionData(
                iso_3166: 'US-DE', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Delaware', capital: 'Dover', osm_relation_id: 162110,
            ),
            self::US_FL => new BearCountrySubdivisionData(
                iso_3166: 'US-FL', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Florida', capital: 'Tallahassee', osm_relation_id: 162050,
            ),
            self::US_GA => new BearCountrySubdivisionData(
                iso_3166: 'US-GA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Georgia', capital: 'Atlanta', osm_relation_id: 161957,
            ),
            self::US_HI => new BearCountrySubdivisionData(
                iso_3166: 'US-HI', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Hawaii', capital: 'Honolulu', osm_relation_id: 166563,
            ),
            self::US_ID => new BearCountrySubdivisionData(
                iso_3166: 'US-ID', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Idaho', capital: 'Boise', osm_relation_id: 162116,
            ),
            self::US_IL => new BearCountrySubdivisionData(
                iso_3166: 'US-IL', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Illinois', capital: 'Springfield', osm_relation_id: 122586,
            ),
            self::US_IN => new BearCountrySubdivisionData(
                iso_3166: 'US-IN', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Indiana', capital: 'Indianapolis', osm_relation_id: 161816,
            ),
            self::US_IA => new BearCountrySubdivisionData(
                iso_3166: 'US-IA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Iowa', capital: 'Des Moines', osm_relation_id: 161650,
            ),
            self::US_KS => new BearCountrySubdivisionData(
                iso_3166: 'US-KS', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Kansas', capital: 'Topeka', osm_relation_id: 161644,
            ),
            self::US_KY => new BearCountrySubdivisionData(
                iso_3166: 'US-KY', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Kentucky', capital: 'Frankfort', osm_relation_id: 161655,
            ),
            self::US_LA => new BearCountrySubdivisionData(
                iso_3166: 'US-LA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Louisiana', capital: 'Baton Rouge', osm_relation_id: 224922,
            ),
            self::US_ME => new BearCountrySubdivisionData(
                iso_3166: 'US-ME', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Maine', capital: 'Augusta', osm_relation_id: 63512,
            ),
            self::US_MD => new BearCountrySubdivisionData(
                iso_3166: 'US-MD', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Maryland', capital: 'Annapolis', osm_relation_id: 162112,
            ),
            self::US_MA => new BearCountrySubdivisionData(
                iso_3166: 'US-MA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Massachusetts', capital: 'Boston', osm_relation_id: 61315,
            ),
            self::US_MI => new BearCountrySubdivisionData(
                iso_3166: 'US-MI', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Michigan', capital: 'Lansing', osm_relation_id: 165789,
            ),
            self::US_MN => new BearCountrySubdivisionData(
                iso_3166: 'US-MN', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Minnesota', capital: 'St. Paul', osm_relation_id: 165471,
            ),
            self::US_MS => new BearCountrySubdivisionData(
                iso_3166: 'US-MS', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Mississippi', capital: 'Jackson', osm_relation_id: 161943,
            ),
            self::US_MO => new BearCountrySubdivisionData(
                iso_3166: 'US-MO', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Missouri', capital: 'Jefferson City', osm_relation_id: 161638,
            ),
            self::US_MT => new BearCountrySubdivisionData(
                iso_3166: 'US-MT', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Montana', capital: 'Helena', osm_relation_id: 162115,
            ),
            self::US_NE => new BearCountrySubdivisionData(
                iso_3166: 'US-NE', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Nebraska', capital: 'Lincoln', osm_relation_id: 161648,
            ),
            self::US_NV => new BearCountrySubdivisionData(
                iso_3166: 'US-NV', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Nevada', capital: 'Carson City', osm_relation_id: 165473,
            ),
            self::US_NH => new BearCountrySubdivisionData(
                iso_3166: 'US-NH', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'New Hampshire', capital: 'Concord', osm_relation_id: 67213,
            ),
            self::US_NJ => new BearCountrySubdivisionData(
                iso_3166: 'US-NJ', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'New Jersey', capital: 'Trenton', osm_relation_id: 224951,
            ),
            self::US_NM => new BearCountrySubdivisionData(
                iso_3166: 'US-NM', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'New Mexico', capital: 'Santa Fe', osm_relation_id: 162014,
            ),
            self::US_NY => new BearCountrySubdivisionData(
                iso_3166: 'US-NY', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'New York', capital: 'Albany', osm_relation_id: 61320,
            ),
            self::US_NC => new BearCountrySubdivisionData(
                iso_3166: 'US-NC', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'North Carolina', capital: 'Raleigh', osm_relation_id: 224045,
            ),
            self::US_ND => new BearCountrySubdivisionData(
                iso_3166: 'US-ND', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'North Dakota', capital: 'Bismarck', osm_relation_id: 161653,
            ),
            self::US_OH => new BearCountrySubdivisionData(
                iso_3166: 'US-OH', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Ohio', capital: 'Columbus', osm_relation_id: 162061,
            ),
            self::US_OK => new BearCountrySubdivisionData(
                iso_3166: 'US-OK', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Oklahoma', capital: 'Oklahoma City', osm_relation_id: 161645,
            ),
            self::US_OR => new BearCountrySubdivisionData(
                iso_3166: 'US-OR', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Oregon', capital: 'Salem', osm_relation_id: 165476,
            ),
            self::US_PA => new BearCountrySubdivisionData(
                iso_3166: 'US-PA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Pennsylvania', capital: 'Harrisburg', osm_relation_id: 162109,
            ),
            self::US_RI => new BearCountrySubdivisionData(
                iso_3166: 'US-RI', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Rhode Island', capital: 'Providence', osm_relation_id: 392915,
            ),
            self::US_SC => new BearCountrySubdivisionData(
                iso_3166: 'US-SC', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'South Carolina', capital: 'Columbia', osm_relation_id: 224040,
            ),
            self::US_SD => new BearCountrySubdivisionData(
                iso_3166: 'US-SD', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'South Dakota', capital: 'Pierre', osm_relation_id: 161652,
            ),
            self::US_TN => new BearCountrySubdivisionData(
                iso_3166: 'US-TN', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Tennessee', capital: 'Nashville', osm_relation_id: 161838,
            ),
            self::US_TX => new BearCountrySubdivisionData(
                iso_3166: 'US-TX', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Texas', capital: 'Austin', osm_relation_id: 114690,
            ),
            self::US_UT => new BearCountrySubdivisionData(
                iso_3166: 'US-UT', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Utah', capital: 'Salt Lake City', osm_relation_id: 161993,
            ),
            self::US_VT => new BearCountrySubdivisionData(
                iso_3166: 'US-VT', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Vermont', capital: 'Montpelier', osm_relation_id: 60759,
            ),
            self::US_VA => new BearCountrySubdivisionData(
                iso_3166: 'US-VA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Virginia', capital: 'Richmond', osm_relation_id: 224042,
            ),
            self::US_WA => new BearCountrySubdivisionData(
                iso_3166: 'US-WA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Washington', capital: 'Olympia', osm_relation_id: 165479,
            ),
            self::US_WV => new BearCountrySubdivisionData(
                iso_3166: 'US-WV', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'West Virginia', capital: 'Charleston', osm_relation_id: 162068,
            ),
            self::US_WI => new BearCountrySubdivisionData(
                iso_3166: 'US-WI', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Wisconsin', capital: 'Madison', osm_relation_id: 165466,
            ),
            self::US_WY => new BearCountrySubdivisionData(
                iso_3166: 'US-WY', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                name: 'Wyoming', capital: 'Cheyenne', osm_relation_id: 161991,
            ),
            self::US_DC => new BearCountrySubdivisionData(
                iso_3166: 'US-DC', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                name: 'District of Columbia', capital: 'Washington', osm_relation_id: 162069,
            ),
        };
    }


    public static function syncToDatabase(): void {
        foreach (self::cases() as $case) {
            LarabearCountrySubdivisionCrud::syncToDatabase($case);
        }
    }
}
