<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Enum;

use GuardsmanPanda\Larabear\Infrastructure\App\Interface\BearDatabaseBackedEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Crud\BearCountryCrud;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Data\BearCountryData;

enum BearCountryEnum: string implements BearDatabaseBackedEnumInterface {
    case AD = 'AD';
    case AE = 'AE';
    case AF = 'AF';
    case AG = 'AG';
    case AI = 'AI';
    case AL = 'AL';
    case AM = 'AM';
    case AO = 'AO';
    case AQ = 'AQ';
    case AR = 'AR';
    case AT = 'AT';
    case AU = 'AU';
    case AW = 'AW';
    case AX = 'AX';
    case AZ = 'AZ';
    case BA = 'BA';
    case BB = 'BB';
    case BD = 'BD';
    case BE = 'BE';
    case BF = 'BF';
    case BG = 'BG';
    case BH = 'BH';
    case BI = 'BI';
    case BJ = 'BJ';
    case BL = 'BL';
    case BM = 'BM';
    case BN = 'BN';
    case BO = 'BO';
    case BR = 'BR';
    case BS = 'BS';
    case BT = 'BT';
    case BW = 'BW';
    case BY = 'BY';
    case BZ = 'BZ';
    case CA = 'CA';
    case CC = 'CC';
    case CD = 'CD';
    case CF = 'CF';
    case CG = 'CG';
    case CH = 'CH';
    case CI = 'CI';
    case CK = 'CK';
    case CL = 'CL';
    case CM = 'CM';
    case CN = 'CN';
    case CO = 'CO';
    case CR = 'CR';
    case CU = 'CU';
    case CV = 'CV';
    case CW = 'CW';
    case CX = 'CX';
    case CY = 'CY';
    case CZ = 'CZ';
    case DE = 'DE';
    case DJ = 'DJ';
    case DK = 'DK';
    case DM = 'DM';
    case DO = 'DO';
    case DZ = 'DZ';
    case EC = 'EC';
    case EE = 'EE';
    case EG = 'EG';
    case EH = 'EH';
    case ER = 'ER';
    case ES = 'ES';
    case ET = 'ET';
    case FI = 'FI';
    case FJ = 'FJ';
    case FK = 'FK';
    case FM = 'FM';
    case FO = 'FO';
    case FR = 'FR';
    case GA = 'GA';
    case GB = 'GB';
    case GD = 'GD';
    case GE = 'GE';
    case GF = 'GF';
    case GG = 'GG';
    case GH = 'GH';
    case GI = 'GI';
    case GL = 'GL';
    case GM = 'GM';
    case GN = 'GN';
    case GP = 'GP';
    case GQ = 'GQ';
    case GR = 'GR';
    case GT = 'GT';
    case GW = 'GW';
    case GY = 'GY';
    case HM = 'HM';
    case HN = 'HN';
    case HR = 'HR';
    case HT = 'HT';
    case HU = 'HU';
    case ID = 'ID';
    case IE = 'IE';
    case IL = 'IL';
    case IM = 'IM';
    case IN = 'IN';
    case IQ = 'IQ';
    case IR = 'IR';
    case IS = 'IS';
    case IT = 'IT';
    case JE = 'JE';
    case JM = 'JM';
    case JO = 'JO';
    case JP = 'JP';
    case KE = 'KE';
    case KG = 'KG';
    case KH = 'KH';
    case KI = 'KI';
    case KM = 'KM';
    case KN = 'KN';
    case KP = 'KP';
    case KR = 'KR';
    case KW = 'KW';
    case KY = 'KY';
    case KZ = 'KZ';
    case LA = 'LA';
    case LB = 'LB';
    case LC = 'LC';
    case LI = 'LI';
    case LK = 'LK';
    case LR = 'LR';
    case LS = 'LS';
    case LT = 'LT';
    case LU = 'LU';
    case LV = 'LV';
    case LY = 'LY';
    case MA = 'MA';
    case MC = 'MC';
    case MD = 'MD';
    case ME = 'ME';
    case MF = 'MF';
    case MG = 'MG';
    case MH = 'MH';
    case MK = 'MK';
    case ML = 'ML';
    case MM = 'MM';
    case MN = 'MN';
    case MQ = 'MQ';
    case MR = 'MR';
    case MS = 'MS';
    case MT = 'MT';
    case MU = 'MU';
    case MV = 'MV';
    case MW = 'MW';
    case MX = 'MX';
    case MY = 'MY';
    case MZ = 'MZ';
    case NA = 'NA';
    case NC = 'NC';
    case NE = 'NE';
    case NF = 'NF';
    case NG = 'NG';
    case NI = 'NI';
    case NL = 'NL';
    case NO = 'NO';
    case NP = 'NP';
    case NR = 'NR';
    case NU = 'NU';
    case NZ = 'NZ';
    case OM = 'OM';
    case PA = 'PA';
    case PE = 'PE';
    case PF = 'PF';
    case PG = 'PG';
    case PH = 'PH';
    case PK = 'PK';
    case PL = 'PL';
    case PM = 'PM';
    case PS = 'PS';
    case PT = 'PT';
    case PW = 'PW';
    case PY = 'PY';
    case QA = 'QA';
    case RE = 'RE';
    case RO = 'RO';
    case RS = 'RS';
    case RU = 'RU';
    case RW = 'RW';
    case SA = 'SA';
    case SB = 'SB';
    case SC = 'SC';
    case SD = 'SD';
    case SE = 'SE';
    case SG = 'SG';
    case SH = 'SH';
    case SI = 'SI';
    case SK = 'SK';
    case SL = 'SL';
    case SM = 'SM';
    case SN = 'SN';
    case SO = 'SO';
    case SR = 'SR';
    case SS = 'SS';
    case ST = 'ST';
    case SV = 'SV';
    case SX = 'SX';
    case SY = 'SY';
    case SZ = 'SZ';
    case TC = 'TC';
    case TD = 'TD';
    case TF = 'TF';
    case TG = 'TG';
    case TH = 'TH';
    case TJ = 'TJ';
    case TK = 'TK';
    case TL = 'TL';
    case TM = 'TM';
    case TN = 'TN';
    case TO = 'TO';
    case TR = 'TR';
    case TT = 'TT';
    case TV = 'TV';
    case TW = 'TW';
    case TZ = 'TZ';
    case UA = 'UA';
    case UG = 'UG';
    case US = 'US';
    case UY = 'UY';
    case UZ = 'UZ';
    case VA = 'VA';
    case VC = 'VC';
    case VE = 'VE';
    case VG = 'VG';
    case VN = 'VN';
    case VU = 'VU';
    case WF = 'WF';
    case WS = 'WS';
    case XK = 'XK';
    case XX = 'XX';
    case YE = 'YE';
    case ZA = 'ZA';
    case ZM = 'ZM';
    case ZW = 'ZW';

    public function getCountryData(): BearCountryData {
        return match ($this) {
            self::AD => new BearCountryData(
                cca2: "AD", cca3: "AND", name: "Andorra", capital: "Andorra la Vella", tld: ".ad",
                area_km2: 468, area_rank: 200, population: 77265, population_rank: 204,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+376", is_driving_side_right: true, osm_relation_id: 9407,
                borders: ['FR', 'ES']
            ),
            self::AE => new BearCountryData(
                cca2: "AE", cca3: "ARE", name: "United Arab Emirates", capital: "Abu Dhabi", tld: ".ae",
                area_km2: 83600, area_rank: 117, population: 9890400, population_rank: 93,
                currency_code: "AED", currency_name: "United Arab Emirates dirham", currency_symbol: "د.إ",
                calling_code: "+971", is_driving_side_right: true, osm_relation_id: 307763,
                borders: ['OM', 'SA']
            ),
            self::AF => new BearCountryData(
                cca2: "AF", cca3: "AFG", name: "Afghanistan", capital: "Kabul", tld: ".af",
                area_km2: 652230, area_rank: 42, population: 40218234, population_rank: 37,
                currency_code: "AFN", currency_name: "Afghan afghani", currency_symbol: "؋",
                calling_code: "+93", is_driving_side_right: true, osm_relation_id: 303427,
                borders: ['IR', 'PK', 'TM', 'UZ', 'TJ', 'CN']
            ),
            self::AG => new BearCountryData(
                cca2: "AG", cca3: "ATG", name: "Antigua and Barbuda", capital: "Saint John's", tld: ".ag",
                area_km2: 442, area_rank: 205, population: 97928, population_rank: 202,
                currency_code: "XCD", currency_name: "Eastern Caribbean dollar", currency_symbol: "$",
                calling_code: "+1268", is_driving_side_right: false, osm_relation_id: 536900,
                borders: []
            ),
            self::AI => new BearCountryData(
                cca2: "AI", cca3: "AIA", name: "Anguilla", capital: "The Valley", tld: ".ai",
                area_km2: 91, area_rank: 230, population: 13452, population_rank: 228,
                currency_code: "XCD", currency_name: "Eastern Caribbean dollar", currency_symbol: "$",
                calling_code: "+1264", is_driving_side_right: false, osm_relation_id: 2177161,
                borders: []
            ),
            self::AL => new BearCountryData(
                cca2: "AL", cca3: "ALB", name: "Albania", capital: "Tirana", tld: ".al",
                area_km2: 28748, area_rank: 145, population: 2837743, population_rank: 140,
                currency_code: "ALL", currency_name: "Albanian lek", currency_symbol: "L",
                calling_code: "+355", is_driving_side_right: true, osm_relation_id: 53292,
                borders: ['ME', 'GR', 'MK', 'XK']
            ),
            self::AM => new BearCountryData(
                cca2: "AM", cca3: "ARM", name: "Armenia", capital: "Yerevan", tld: ".am",
                area_km2: 29743, area_rank: 143, population: 2963234, population_rank: 137,
                currency_code: "AMD", currency_name: "Armenian dram", currency_symbol: "֏",
                calling_code: "+374", is_driving_side_right: true, osm_relation_id: 364066,
                borders: ['AZ', 'GE', 'IR', 'TR']
            ),
            self::AO => new BearCountryData(
                cca2: "AO", cca3: "AGO", name: "Angola", capital: "Luanda", tld: ".ao",
                area_km2: 1246700, area_rank: 24, population: 32866268, population_rank: 44,
                currency_code: "AOA", currency_name: "Angolan kwanza", currency_symbol: "Kz",
                calling_code: "+244", is_driving_side_right: true, osm_relation_id: 195267,
                borders: ['CG', 'CD', 'ZM', 'NA']
            ),
            self::AQ => new BearCountryData(
                cca2: "AQ", cca3: "ATA", name: "Antarctica", capital: "", tld: ".aq",
                area_km2: 14000000, area_rank: 2, population: 1000, population_rank: 242,
                currency_code: "", currency_name: "", currency_symbol: "",
                calling_code: "undefined", is_driving_side_right: true, osm_relation_id: 2186646,
                borders: []
            ),
            self::AR => new BearCountryData(
                cca2: "AR", cca3: "ARG", name: "Argentina", capital: "Buenos Aires", tld: ".ar",
                area_km2: 2780400, area_rank: 9, population: 45376763, population_rank: 32,
                currency_code: "ARS", currency_name: "Argentine peso", currency_symbol: "$",
                calling_code: "+54", is_driving_side_right: true, osm_relation_id: 286393,
                borders: ['BO', 'BR', 'CL', 'PY', 'UY']
            ),
            self::AT => new BearCountryData(
                cca2: "AT", cca3: "AUT", name: "Austria", capital: "Vienna", tld: ".at",
                area_km2: 83871, area_rank: 116, population: 8917205, population_rank: 99,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+43", is_driving_side_right: true, osm_relation_id: 16239,
                borders: ['CZ', 'DE', 'HU', 'IT', 'LI', 'SK', 'SI', 'CH']
            ),
            self::AU => new BearCountryData(
                cca2: "AU", cca3: "AUS", name: "Australia", capital: "Canberra", tld: ".au",
                area_km2: 7692024, area_rank: 7, population: 25687041, population_rank: 55,
                currency_code: "AUD", currency_name: "Australian dollar", currency_symbol: "$",
                calling_code: "+61", is_driving_side_right: false, osm_relation_id: 80500,
                borders: []
            ),
            self::AW => new BearCountryData(
                cca2: "AW", cca3: "ABW", name: "Aruba", capital: "Oranjestad", tld: ".aw",
                area_km2: 180, area_rank: 223, population: 106766, population_rank: 197,
                currency_code: "AWG", currency_name: "Aruban florin", currency_symbol: "ƒ",
                calling_code: "+297", is_driving_side_right: true, osm_relation_id: 1231749,
                borders: []
            ),
            self::AX => new BearCountryData(
                cca2: "AX", cca3: "ALA", name: "Åland Islands", capital: "Mariehamn", tld: ".ax",
                area_km2: 1580, area_rank: 185, population: 29458, population_rank: 224,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+35818", is_driving_side_right: true, osm_relation_id: 1650407,
                borders: []
            ),
            self::AZ => new BearCountryData(
                cca2: "AZ", cca3: "AZE", name: "Azerbaijan", capital: "Baku", tld: ".az",
                area_km2: 86600, area_rank: 115, population: 10110116, population_rank: 91,
                currency_code: "AZN", currency_name: "Azerbaijani manat", currency_symbol: "₼",
                calling_code: "+994", is_driving_side_right: true, osm_relation_id: 364110,
                borders: ['AM', 'GE', 'IR', 'RU', 'TR']
            ),
            self::BA => new BearCountryData(
                cca2: "BA", cca3: "BIH", name: "Bosnia and Herzegovina", capital: "Sarajevo", tld: ".ba",
                area_km2: 51209, area_rank: 129, population: 3280815, population_rank: 134,
                currency_code: "BAM", currency_name: "Bosnia and Herzegovina convertible mark", currency_symbol: "",
                calling_code: "+387", is_driving_side_right: true, osm_relation_id: 2528142,
                borders: ['HR', 'ME', 'RS']
            ),
            self::BB => new BearCountryData(
                cca2: "BB", cca3: "BRB", name: "Barbados", capital: "Bridgetown", tld: ".bb",
                area_km2: 430, area_rank: 206, population: 287371, population_rank: 183,
                currency_code: "BBD", currency_name: "Barbadian dollar", currency_symbol: "$",
                calling_code: "+1246", is_driving_side_right: false, osm_relation_id: 547511,
                borders: []
            ),
            self::BD => new BearCountryData(
                cca2: "BD", cca3: "BGD", name: "Bangladesh", capital: "Dhaka", tld: ".bd",
                area_km2: 147570, area_rank: 95, population: 164689383, population_rank: 8,
                currency_code: "BDT", currency_name: "Bangladeshi taka", currency_symbol: "৳",
                calling_code: "+880", is_driving_side_right: false, osm_relation_id: 184640,
                borders: ['MM', 'IN']
            ),
            self::BE => new BearCountryData(
                cca2: "BE", cca3: "BEL", name: "Belgium", capital: "Brussels", tld: ".be",
                area_km2: 30528, area_rank: 141, population: 11555997, population_rank: 81,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+32", is_driving_side_right: true, osm_relation_id: 52411,
                borders: ['FR', 'DE', 'LU', 'NL']
            ),
            self::BF => new BearCountryData(
                cca2: "BF", cca3: "BFA", name: "Burkina Faso", capital: "Ouagadougou", tld: ".bf",
                area_km2: 272967, area_rank: 76, population: 20903278, population_rank: 59,
                currency_code: "XOF", currency_name: "West African CFA franc", currency_symbol: "Fr",
                calling_code: "+226", is_driving_side_right: true, osm_relation_id: 192783,
                borders: ['BJ', 'CI', 'GH', 'ML', 'NE', 'TG']
            ),
            self::BG => new BearCountryData(
                cca2: "BG", cca3: "BGR", name: "Bulgaria", capital: "Sofia", tld: ".bg",
                area_km2: 110879, area_rank: 106, population: 6927288, population_rank: 106,
                currency_code: "BGN", currency_name: "Bulgarian lev", currency_symbol: "лв",
                calling_code: "+359", is_driving_side_right: true, osm_relation_id: 186382,
                borders: ['GR', 'MK', 'RO', 'RS', 'TR']
            ),
            self::BH => new BearCountryData(
                cca2: "BH", cca3: "BHR", name: "Bahrain", capital: "Manama", tld: ".bh",
                area_km2: 765, area_rank: 192, population: 1701583, population_rank: 153,
                currency_code: "BHD", currency_name: "Bahraini dinar", currency_symbol: ".د.ب",
                calling_code: "+973", is_driving_side_right: true, osm_relation_id: 378734,
                borders: []
            ),
            self::BI => new BearCountryData(
                cca2: "BI", cca3: "BDI", name: "Burundi", capital: "Gitega", tld: ".bi",
                area_km2: 27834, area_rank: 147, population: 11890781, population_rank: 78,
                currency_code: "BIF", currency_name: "Burundian franc", currency_symbol: "Fr",
                calling_code: "+257", is_driving_side_right: true, osm_relation_id: 195269,
                borders: ['CD', 'RW', 'TZ']
            ),
            self::BJ => new BearCountryData(
                cca2: "BJ", cca3: "BEN", name: "Benin", capital: "Porto-Novo", tld: ".bj",
                area_km2: 112622, area_rank: 103, population: 12123198, population_rank: 77,
                currency_code: "XOF", currency_name: "West African CFA franc", currency_symbol: "Fr",
                calling_code: "+229", is_driving_side_right: true, osm_relation_id: 192784,
                borders: ['BF', 'NE', 'NG', 'TG']
            ),
            self::BL => new BearCountryData(
                cca2: "BL", cca3: "BLM", name: "Saint Barthélemy", capital: "Gustavia", tld: ".bl",
                area_km2: 21, area_rank: 244, population: 4255, population_rank: 234,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+590", is_driving_side_right: true, osm_relation_id: 537967,
                borders: []
            ),
            self::BM => new BearCountryData(
                cca2: "BM", cca3: "BMU", name: "Bermuda", capital: "Hamilton", tld: ".bm",
                area_km2: 54, area_rank: 234, population: 63903, population_rank: 207,
                currency_code: "BMD", currency_name: "Bermudian dollar", currency_symbol: "$",
                calling_code: "+1441", is_driving_side_right: false, osm_relation_id: 1993208,
                borders: []
            ),
            self::BN => new BearCountryData(
                cca2: "BN", cca3: "BRN", name: "Brunei", capital: "Bandar Seri Begawan", tld: ".bn",
                area_km2: 5765, area_rank: 174, population: 437483, population_rank: 176,
                currency_code: "BND", currency_name: "Brunei dollar", currency_symbol: "$",
                calling_code: "+673", is_driving_side_right: false, osm_relation_id: 2103120,
                borders: ['MY']
            ),
            self::BO => new BearCountryData(
                cca2: "BO", cca3: "BOL", name: "Bolivia", capital: "Sucre", tld: ".bo",
                area_km2: 1098581, area_rank: 29, population: 11673029, population_rank: 80,
                currency_code: "BOB", currency_name: "Bolivian boliviano", currency_symbol: "Bs.",
                calling_code: "+591", is_driving_side_right: true, osm_relation_id: 252645,
                borders: ['AR', 'BR', 'CL', 'PY', 'PE']
            ),
            self::BR => new BearCountryData(
                cca2: "BR", cca3: "BRA", name: "Brazil", capital: "Brasília", tld: ".br",
                area_km2: 8515767, area_rank: 6, population: 212559409, population_rank: 6,
                currency_code: "BRL", currency_name: "Brazilian real", currency_symbol: "R$",
                calling_code: "+55", is_driving_side_right: true, osm_relation_id: 59470,
                borders: ['AR', 'BO', 'CO', 'GF', 'GY', 'PY', 'PE', 'SR', 'UY', 'VE']
            ),
            self::BS => new BearCountryData(
                cca2: "BS", cca3: "BHS", name: "Bahamas", capital: "Nassau", tld: ".bs",
                area_km2: 13943, area_rank: 161, population: 393248, population_rank: 179,
                currency_code: "BSD", currency_name: "Bahamian dollar", currency_symbol: "$",
                calling_code: "+1242", is_driving_side_right: false, osm_relation_id: 547469,
                borders: []
            ),
            self::BT => new BearCountryData(
                cca2: "BT", cca3: "BTN", name: "Bhutan", capital: "Thimphu", tld: ".bt",
                area_km2: 38394, area_rank: 137, population: 771612, population_rank: 166,
                currency_code: "BTN", currency_name: "Bhutanese ngultrum", currency_symbol: "Nu.",
                calling_code: "+975", is_driving_side_right: false, osm_relation_id: 184629,
                borders: ['CN', 'IN']
            ),
            self::BW => new BearCountryData(
                cca2: "BW", cca3: "BWA", name: "Botswana", capital: "Gaborone", tld: ".bw",
                area_km2: 582000, area_rank: 48, population: 2351625, population_rank: 145,
                currency_code: "BWP", currency_name: "Botswana pula", currency_symbol: "P",
                calling_code: "+267", is_driving_side_right: false, osm_relation_id: 1889339,
                borders: ['NA', 'ZA', 'ZM', 'ZW']
            ),
            self::BY => new BearCountryData(
                cca2: "BY", cca3: "BLR", name: "Belarus", capital: "Minsk", tld: ".by",
                area_km2: 207600, area_rank: 87, population: 9398861, population_rank: 96,
                currency_code: "BYN", currency_name: "Belarusian ruble", currency_symbol: "Br",
                calling_code: "+375", is_driving_side_right: true, osm_relation_id: 59065,
                borders: ['LV', 'LT', 'PL', 'RU', 'UA']
            ),
            self::BZ => new BearCountryData(
                cca2: "BZ", cca3: "BLZ", name: "Belize", capital: "Belmopan", tld: ".bz",
                area_km2: 22966, area_rank: 152, population: 397621, population_rank: 178,
                currency_code: "BZD", currency_name: "Belize dollar", currency_symbol: "$",
                calling_code: "+501", is_driving_side_right: true, osm_relation_id: 287827,
                borders: ['GT', 'MX']
            ),
            self::CA => new BearCountryData(
                cca2: "CA", cca3: "CAN", name: "Canada", capital: "Ottawa", tld: ".ca",
                area_km2: 9984670, area_rank: 3, population: 38005238, population_rank: 38,
                currency_code: "CAD", currency_name: "Canadian dollar", currency_symbol: "$",
                calling_code: "+1", is_driving_side_right: true, osm_relation_id: 1428125,
                borders: ['US']
            ),
            self::CC => new BearCountryData(
                cca2: "CC", cca3: "CCK", name: "Cocos (Keeling) Islands", capital: "West Island", tld: ".cc",
                area_km2: 14, area_rank: 245, population: 544, population_rank: 243,
                currency_code: "AUD", currency_name: "Australian dollar", currency_symbol: "$",
                calling_code: "+61", is_driving_side_right: false, osm_relation_id: 82636,
                borders: []
            ),
            self::CD => new BearCountryData(
                cca2: "CD", cca3: "COD", name: "DR Congo", capital: "Kinshasa", tld: ".cd",
                area_km2: 2344858, area_rank: 12, population: 108407721, population_rank: 14,
                currency_code: "CDF", currency_name: "Congolese franc", currency_symbol: "FC",
                calling_code: "+243", is_driving_side_right: true, osm_relation_id: 192795,
                borders: ['AO', 'BI', 'CF', 'CG', 'RW', 'SS', 'TZ', 'UG', 'ZM']
            ),
            self::CF => new BearCountryData(
                cca2: "CF", cca3: "CAF", name: "Central African Republic", capital: "Bangui", tld: ".cf",
                area_km2: 622984, area_rank: 44, population: 4829764, population_rank: 126,
                currency_code: "XAF", currency_name: "Central African CFA franc", currency_symbol: "Fr",
                calling_code: "+236", is_driving_side_right: true, osm_relation_id: 192790,
                borders: ['CM', 'TD', 'CD', 'CG', 'SS', 'SD']
            ),
            self::CG => new BearCountryData(
                cca2: "CG", cca3: "COG", name: "Republic of the Congo", capital: "Brazzaville", tld: ".cg",
                area_km2: 342000, area_rank: 66, population: 5657000, population_rank: 116,
                currency_code: "XAF", currency_name: "Central African CFA franc", currency_symbol: "Fr",
                calling_code: "+242", is_driving_side_right: true, osm_relation_id: 192794,
                borders: ['AO', 'CM', 'CF', 'CD', 'GA']
            ),
            self::CH => new BearCountryData(
                cca2: "CH", cca3: "CHE", name: "Switzerland", capital: "Bern", tld: ".ch",
                area_km2: 41284, area_rank: 136, population: 8654622, population_rank: 100,
                currency_code: "CHF", currency_name: "Swiss franc", currency_symbol: "Fr.",
                calling_code: "+41", is_driving_side_right: true, osm_relation_id: 51701,
                borders: ['AT', 'FR', 'IT', 'LI', 'DE']
            ),
            self::CI => new BearCountryData(
                cca2: "CI", cca3: "CIV", name: "Ivory Coast", capital: "Yamoussoukro", tld: ".ci",
                area_km2: 322463, area_rank: 71, population: 26378275, population_rank: 53,
                currency_code: "XOF", currency_name: "West African CFA franc", currency_symbol: "Fr",
                calling_code: "+225", is_driving_side_right: true, osm_relation_id: 192779,
                borders: ['BF', 'GH', 'GN', 'LR', 'ML']
            ),
            self::CK => new BearCountryData(
                cca2: "CK", cca3: "COK", name: "Cook Islands", capital: "Avarua", tld: ".ck",
                area_km2: 236, area_rank: 220, population: 18100, population_rank: 226,
                currency_code: "CKD", currency_name: "Cook Islands dollar", currency_symbol: "$",
                calling_code: "+682", is_driving_side_right: false, osm_relation_id: 2184233,
                borders: []
            ),
            self::CL => new BearCountryData(
                cca2: "CL", cca3: "CHL", name: "Chile", capital: "Santiago", tld: ".cl",
                area_km2: 756102, area_rank: 39, population: 19116209, population_rank: 63,
                currency_code: "CLP", currency_name: "Chilean peso", currency_symbol: "$",
                calling_code: "+56", is_driving_side_right: true, osm_relation_id: 167454,
                borders: ['AR', 'BO', 'PE']
            ),
            self::CM => new BearCountryData(
                cca2: "CM", cca3: "CMR", name: "Cameroon", capital: "Yaoundé", tld: ".cm",
                area_km2: 475442, area_rank: 55, population: 26545864, population_rank: 52,
                currency_code: "XAF", currency_name: "Central African CFA franc", currency_symbol: "Fr",
                calling_code: "+237", is_driving_side_right: true, osm_relation_id: 192830,
                borders: ['CF', 'TD', 'CG', 'GQ', 'GA', 'NG']
            ),
            self::CN => new BearCountryData(
                cca2: "CN", cca3: "CHN", name: "China", capital: "Beijing", tld: ".cn",
                area_km2: 9706961, area_rank: 4, population: 1402112000, population_rank: 1,
                currency_code: "CNY", currency_name: "Chinese yuan", currency_symbol: "¥",
                calling_code: "+86", is_driving_side_right: true, osm_relation_id: 270056,
                borders: ['AF', 'BT', 'MM', 'IN', 'KZ', 'NP', 'KP', 'KG', 'LA', 'MN', 'PK', 'RU', 'TJ', 'VN']
            ),
            self::CO => new BearCountryData(
                cca2: "CO", cca3: "COL", name: "Colombia", capital: "Bogotá", tld: ".co",
                area_km2: 1141748, area_rank: 27, population: 50882884, population_rank: 29,
                currency_code: "COP", currency_name: "Colombian peso", currency_symbol: "$",
                calling_code: "+57", is_driving_side_right: true, osm_relation_id: 120027,
                borders: ['BR', 'EC', 'PA', 'PE', 'VE']
            ),
            self::CR => new BearCountryData(
                cca2: "CR", cca3: "CRI", name: "Costa Rica", capital: "San José", tld: ".cr",
                area_km2: 51100, area_rank: 130, population: 5094114, population_rank: 122,
                currency_code: "CRC", currency_name: "Costa Rican colón", currency_symbol: "₡",
                calling_code: "+506", is_driving_side_right: true, osm_relation_id: 287667,
                borders: ['NI', 'PA']
            ),
            self::CU => new BearCountryData(
                cca2: "CU", cca3: "CUB", name: "Cuba", capital: "Havana", tld: ".cu",
                area_km2: 109884, area_rank: 107, population: 11326616, population_rank: 83,
                currency_code: "CUC", currency_name: "Cuban convertible peso", currency_symbol: "$",
                calling_code: "+53", is_driving_side_right: true, osm_relation_id: 307833,
                borders: []
            ),
            self::CV => new BearCountryData(
                cca2: "CV", cca3: "CPV", name: "Cape Verde", capital: "Praia", tld: ".cv",
                area_km2: 4033, area_rank: 177, population: 555988, population_rank: 172,
                currency_code: "CVE", currency_name: "Cape Verdean escudo", currency_symbol: "Esc",
                calling_code: "+238", is_driving_side_right: true, osm_relation_id: 535774,
                borders: []
            ),
            self::CW => new BearCountryData(
                cca2: "CW", cca3: "CUW", name: "Curaçao", capital: "Willemstad", tld: ".cw",
                area_km2: 444, area_rank: 204, population: 155014, population_rank: 192,
                currency_code: "ANG", currency_name: "Netherlands Antillean guilder", currency_symbol: "ƒ",
                calling_code: "+599", is_driving_side_right: true, osm_relation_id: 1216719,
                borders: []
            ),
            self::CX => new BearCountryData(
                cca2: "CX", cca3: "CXR", name: "Christmas Island", capital: "Flying Fish Cove", tld: ".cx",
                area_km2: 135, area_rank: 227, population: 2072, population_rank: 239,
                currency_code: "AUD", currency_name: "Australian dollar", currency_symbol: "$",
                calling_code: "+61", is_driving_side_right: false, osm_relation_id: 2177207,
                borders: []
            ),
            self::CY => new BearCountryData(
                cca2: "CY", cca3: "CYP", name: "Cyprus", capital: "Nicosia", tld: ".cy",
                area_km2: 9251, area_rank: 170, population: 1207361, population_rank: 159,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+357", is_driving_side_right: false, osm_relation_id: 307787,
                borders: []
            ),
            self::CZ => new BearCountryData(
                cca2: "CZ", cca3: "CZE", name: "Czechia", capital: "Prague", tld: ".cz",
                area_km2: 78865, area_rank: 119, population: 10698896, population_rank: 87,
                currency_code: "CZK", currency_name: "Czech koruna", currency_symbol: "Kč",
                calling_code: "+420", is_driving_side_right: true, osm_relation_id: 51684,
                borders: ['AT', 'DE', 'PL', 'SK']
            ),
            self::DE => new BearCountryData(
                cca2: "DE", cca3: "DEU", name: "Germany", capital: "Berlin", tld: ".de",
                area_km2: 357114, area_rank: 64, population: 83240525, population_rank: 19,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+49", is_driving_side_right: true, osm_relation_id: 51477,
                borders: ['AT', 'BE', 'CZ', 'DK', 'FR', 'LU', 'NL', 'PL', 'CH']
            ),
            self::DJ => new BearCountryData(
                cca2: "DJ", cca3: "DJI", name: "Djibouti", capital: "Djibouti", tld: ".dj",
                area_km2: 23200, area_rank: 151, population: 988002, population_rank: 161,
                currency_code: "DJF", currency_name: "Djiboutian franc", currency_symbol: "Fr",
                calling_code: "+253", is_driving_side_right: true, osm_relation_id: 192801,
                borders: ['ER', 'ET', 'SO']
            ),
            self::DK => new BearCountryData(
                cca2: "DK", cca3: "DNK", name: "Denmark", capital: "Copenhagen", tld: ".dk",
                area_km2: 43094, area_rank: 134, population: 5831404, population_rank: 114,
                currency_code: "DKK", currency_name: "Danish krone", currency_symbol: "kr",
                calling_code: "+45", is_driving_side_right: true, osm_relation_id: 50046,
                borders: ['DE']
            ),
            self::DM => new BearCountryData(
                cca2: "DM", cca3: "DMA", name: "Dominica", capital: "Roseau", tld: ".dm",
                area_km2: 751, area_rank: 193, population: 71991, population_rank: 205,
                currency_code: "XCD", currency_name: "Eastern Caribbean dollar", currency_symbol: "$",
                calling_code: "+1767", is_driving_side_right: false, osm_relation_id: 307823,
                borders: []
            ),
            self::DO => new BearCountryData(
                cca2: "DO", cca3: "DOM", name: "Dominican Republic", capital: "Santo Domingo", tld: ".do",
                area_km2: 48671, area_rank: 132, population: 10847904, population_rank: 85,
                currency_code: "DOP", currency_name: "Dominican peso", currency_symbol: "$",
                calling_code: "+1809", is_driving_side_right: true, osm_relation_id: 307828,
                borders: ['HT']
            ),
            self::DZ => new BearCountryData(
                cca2: "DZ", cca3: "DZA", name: "Algeria", capital: "Algiers", tld: ".dz",
                area_km2: 2381741, area_rank: 11, population: 44700000, population_rank: 33,
                currency_code: "DZD", currency_name: "Algerian dinar", currency_symbol: "د.ج",
                calling_code: "+213", is_driving_side_right: true, osm_relation_id: 192756,
                borders: ['TN', 'LY', 'NE', 'EH', 'MR', 'ML', 'MA']
            ),
            self::EC => new BearCountryData(
                cca2: "EC", cca3: "ECU", name: "Ecuador", capital: "Quito", tld: ".ec",
                area_km2: 276841, area_rank: 75, population: 17643060, population_rank: 66,
                currency_code: "USD", currency_name: "United States dollar", currency_symbol: "$",
                calling_code: "+593", is_driving_side_right: true, osm_relation_id: 108089,
                borders: ['CO', 'PE']
            ),
            self::EE => new BearCountryData(
                cca2: "EE", cca3: "EST", name: "Estonia", capital: "Tallinn", tld: ".ee",
                area_km2: 45227, area_rank: 133, population: 1331057, population_rank: 156,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+372", is_driving_side_right: true, osm_relation_id: 79510,
                borders: ['LV', 'RU']
            ),
            self::EG => new BearCountryData(
                cca2: "EG", cca3: "EGY", name: "Egypt", capital: "Cairo", tld: ".eg",
                area_km2: 1002450, area_rank: 31, population: 102334403, population_rank: 15,
                currency_code: "EGP", currency_name: "Egyptian pound", currency_symbol: "£",
                calling_code: "+20", is_driving_side_right: true, osm_relation_id: 1473947,
                borders: ['IL', 'LY', 'PS', 'SD']
            ),
            self::EH => new BearCountryData(
                cca2: "EH", cca3: "ESH", name: "Western Sahara", capital: "El Aaiún", tld: ".eh",
                area_km2: 266000, area_rank: 79, population: 510713, population_rank: 175,
                currency_code: "DZD", currency_name: "Algerian dinar", currency_symbol: "دج",
                calling_code: "+2125288", is_driving_side_right: true, osm_relation_id: 2559126,
                borders: ['DZ', 'MR', 'MA']
            ),
            self::ER => new BearCountryData(
                cca2: "ER", cca3: "ERI", name: "Eritrea", capital: "Asmara", tld: ".er",
                area_km2: 117600, area_rank: 102, population: 5352000, population_rank: 120,
                currency_code: "ERN", currency_name: "Eritrean nakfa", currency_symbol: "Nfk",
                calling_code: "+291", is_driving_side_right: true, osm_relation_id: 296961,
                borders: ['DJ', 'ET', 'SD']
            ),
            self::ES => new BearCountryData(
                cca2: "ES", cca3: "ESP", name: "Spain", capital: "Madrid", tld: ".es",
                area_km2: 505992, area_rank: 53, population: 47351567, population_rank: 30,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+34", is_driving_side_right: true, osm_relation_id: 1311341,
                borders: ['AD', 'FR', 'GI', 'PT', 'MA']
            ),
            self::ET => new BearCountryData(
                cca2: "ET", cca3: "ETH", name: "Ethiopia", capital: "Addis Ababa", tld: ".et",
                area_km2: 1104300, area_rank: 28, population: 114963583, population_rank: 12,
                currency_code: "ETB", currency_name: "Ethiopian birr", currency_symbol: "Br",
                calling_code: "+251", is_driving_side_right: true, osm_relation_id: 192800,
                borders: ['DJ', 'ER', 'KE', 'SO', 'SS', 'SD']
            ),
            self::FI => new BearCountryData(
                cca2: "FI", cca3: "FIN", name: "Finland", capital: "Helsinki", tld: ".fi",
                area_km2: 338424, area_rank: 67, population: 5530719, population_rank: 117,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+358", is_driving_side_right: true, osm_relation_id: 54224,
                borders: ['NO', 'SE', 'RU']
            ),
            self::FJ => new BearCountryData(
                cca2: "FJ", cca3: "FJI", name: "Fiji", capital: "Suva", tld: ".fj",
                area_km2: 18272, area_rank: 157, population: 896444, population_rank: 162,
                currency_code: "FJD", currency_name: "Fijian dollar", currency_symbol: "$",
                calling_code: "+679", is_driving_side_right: false, osm_relation_id: 571747,
                borders: []
            ),
            self::FK => new BearCountryData(
                cca2: "FK", cca3: "FLK", name: "Falkland Islands", capital: "Stanley", tld: ".fk",
                area_km2: 12173, area_rank: 164, population: 2563, population_rank: 236,
                currency_code: "FKP", currency_name: "Falkland Islands pound", currency_symbol: "£",
                calling_code: "+500", is_driving_side_right: false, osm_relation_id: 2185374,
                borders: []
            ),
            self::FM => new BearCountryData(
                cca2: "FM", cca3: "FSM", name: "Micronesia", capital: "Palikir", tld: ".fm",
                area_km2: 702, area_rank: 196, population: 115021, population_rank: 194,
                currency_code: "USD", currency_name: "United States dollar", currency_symbol: "$",
                calling_code: "+691", is_driving_side_right: true, osm_relation_id: 571802,
                borders: []
            ),
            self::FO => new BearCountryData(
                cca2: "FO", cca3: "FRO", name: "Faroe Islands", capital: "Tórshavn", tld: ".fo",
                area_km2: 1393, area_rank: 186, population: 48865, population_rank: 215,
                currency_code: "DKK", currency_name: "Danish krone", currency_symbol: "kr",
                calling_code: "+298", is_driving_side_right: true, osm_relation_id: 52939,
                borders: []
            ),
            self::FR => new BearCountryData(
                cca2: "FR", cca3: "FRA", name: "France", capital: "Paris", tld: ".fr",
                area_km2: 551695, area_rank: 50, population: 67391582, population_rank: 21,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+33", is_driving_side_right: true, osm_relation_id: 2202162,
                borders: ['AD', 'BE', 'DE', 'IT', 'LU', 'MC', 'ES', 'CH']
            ),
            self::GA => new BearCountryData(
                cca2: "GA", cca3: "GAB", name: "Gabon", capital: "Libreville", tld: ".ga",
                area_km2: 267668, area_rank: 78, population: 2225728, population_rank: 146,
                currency_code: "XAF", currency_name: "Central African CFA franc", currency_symbol: "Fr",
                calling_code: "+241", is_driving_side_right: true, osm_relation_id: 192793,
                borders: ['CM', 'CG', 'GQ']
            ),
            self::GB => new BearCountryData(
                cca2: "GB", cca3: "GBR", name: "United Kingdom", capital: "London", tld: ".uk",
                area_km2: 242900, area_rank: 81, population: 67215293, population_rank: 22,
                currency_code: "GBP", currency_name: "British pound", currency_symbol: "£",
                calling_code: "+44", is_driving_side_right: false, osm_relation_id: 62149,
                borders: ['IE']
            ),
            self::GD => new BearCountryData(
                cca2: "GD", cca3: "GRD", name: "Grenada", capital: "St. George's", tld: ".gd",
                area_km2: 344, area_rank: 212, population: 112519, population_rank: 195,
                currency_code: "XCD", currency_name: "Eastern Caribbean dollar", currency_symbol: "$",
                calling_code: "+1473", is_driving_side_right: false, osm_relation_id: 550727,
                borders: []
            ),
            self::GE => new BearCountryData(
                cca2: "GE", cca3: "GEO", name: "Georgia", capital: "Tbilisi", tld: ".ge",
                area_km2: 69700, area_rank: 123, population: 3714000, population_rank: 132,
                currency_code: "GEL", currency_name: "lari", currency_symbol: "₾",
                calling_code: "+995", is_driving_side_right: true, osm_relation_id: 28699,
                borders: ['AM', 'AZ', 'RU', 'TR']
            ),
            self::GF => new BearCountryData(
                cca2: "GF", cca3: "GUF", name: "French Guiana", capital: "Cayenne", tld: ".gf",
                area_km2: 83534, area_rank: 118, population: 254541, population_rank: 186,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+594", is_driving_side_right: true, osm_relation_id: 1260551,
                borders: ['BR', 'SR']
            ),
            self::GG => new BearCountryData(
                cca2: "GG", cca3: "GGY", name: "Guernsey", capital: "St. Peter Port", tld: ".gg",
                area_km2: 78, area_rank: 231, population: 62999, population_rank: 208,
                currency_code: "GBP", currency_name: "British pound", currency_symbol: "£",
                calling_code: "+44", is_driving_side_right: false, osm_relation_id: 270009,
                borders: []
            ),
            self::GH => new BearCountryData(
                cca2: "GH", cca3: "GHA", name: "Ghana", capital: "Accra", tld: ".gh",
                area_km2: 238533, area_rank: 83, population: 31072945, population_rank: 47,
                currency_code: "GHS", currency_name: "Ghanaian cedi", currency_symbol: "₵",
                calling_code: "+233", is_driving_side_right: true, osm_relation_id: 192781,
                borders: ['BF', 'CI', 'TG']
            ),
            self::GI => new BearCountryData(
                cca2: "GI", cca3: "GIB", name: "Gibraltar", capital: "Gibraltar", tld: ".gi",
                area_km2: 6, area_rank: 247, population: 33691, population_rank: 222,
                currency_code: "GIP", currency_name: "Gibraltar pound", currency_symbol: "£",
                calling_code: "+350", is_driving_side_right: true, osm_relation_id: 1278736,
                borders: ['ES']
            ),
            self::GL => new BearCountryData(
                cca2: "GL", cca3: "GRL", name: "Greenland", capital: "Nuuk", tld: ".gl",
                area_km2: 2166086, area_rank: 13, population: 56367, population_rank: 211,
                currency_code: "DKK", currency_name: "krone", currency_symbol: "kr.",
                calling_code: "+299", is_driving_side_right: true, osm_relation_id: 2184073,
                borders: []
            ),
            self::GM => new BearCountryData(
                cca2: "GM", cca3: "GMB", name: "Gambia", capital: "Banjul", tld: ".gm",
                area_km2: 10689, area_rank: 168, population: 2416664, population_rank: 144,
                currency_code: "GMD", currency_name: "dalasi", currency_symbol: "D",
                calling_code: "+220", is_driving_side_right: true, osm_relation_id: 192774,
                borders: ['SN']
            ),
            self::GN => new BearCountryData(
                cca2: "GN", cca3: "GIN", name: "Guinea", capital: "Conakry", tld: ".gn",
                area_km2: 245857, area_rank: 80, population: 13132792, population_rank: 75,
                currency_code: "GNF", currency_name: "Guinean franc", currency_symbol: "Fr",
                calling_code: "+224", is_driving_side_right: true, osm_relation_id: 192778,
                borders: ['CI', 'GW', 'LR', 'ML', 'SN', 'SL']
            ),
            self::GP => new BearCountryData(
                cca2: "GP", cca3: "GLP", name: "Guadeloupe", capital: "Basse-Terre", tld: ".gp",
                area_km2: 1628, area_rank: 184, population: 400132, population_rank: 177,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+590", is_driving_side_right: true, osm_relation_id: 1401835,
                borders: []
            ),
            self::GQ => new BearCountryData(
                cca2: "GQ", cca3: "GNQ", name: "Equatorial Guinea", capital: "Malabo", tld: ".gq",
                area_km2: 28051, area_rank: 146, population: 1402985, population_rank: 154,
                currency_code: "XAF", currency_name: "Central African CFA franc", currency_symbol: "Fr",
                calling_code: "+240", is_driving_side_right: true, osm_relation_id: 192791,
                borders: ['CM', 'GA']
            ),
            self::GR => new BearCountryData(
                cca2: "GR", cca3: "GRC", name: "Greece", capital: "Athens", tld: ".gr",
                area_km2: 131990, area_rank: 98, population: 10715549, population_rank: 86,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+30", is_driving_side_right: true, osm_relation_id: 192307,
                borders: ['AL', 'BG', 'TR', 'MK']
            ),
            self::GT => new BearCountryData(
                cca2: "GT", cca3: "GTM", name: "Guatemala", capital: "Guatemala City", tld: ".gt",
                area_km2: 108889, area_rank: 108, population: 16858333, population_rank: 68,
                currency_code: "GTQ", currency_name: "Guatemalan quetzal", currency_symbol: "Q",
                calling_code: "+502", is_driving_side_right: true, osm_relation_id: 1521463,
                borders: ['BZ', 'SV', 'HN', 'MX']
            ),
            self::GW => new BearCountryData(
                cca2: "GW", cca3: "GNB", name: "Guinea-Bissau", capital: "Bissau", tld: ".gw",
                area_km2: 36125, area_rank: 139, population: 1967998, population_rank: 150,
                currency_code: "XOF", currency_name: "West African CFA franc", currency_symbol: "Fr",
                calling_code: "+245", is_driving_side_right: true, osm_relation_id: 192776,
                borders: ['GN', 'SN']
            ),
            self::GY => new BearCountryData(
                cca2: "GY", cca3: "GUY", name: "Guyana", capital: "Georgetown", tld: ".gy",
                area_km2: 214969, area_rank: 86, population: 786559, population_rank: 165,
                currency_code: "GYD", currency_name: "Guyanese dollar", currency_symbol: "$",
                calling_code: "+592", is_driving_side_right: false, osm_relation_id: 287083,
                borders: ['BR', 'SR', 'VE']
            ),
            self::HM => new BearCountryData(
                cca2: "HM", cca3: "HMD", name: "Heard Island and McDonald Islands", capital: "", tld: ".hm",
                area_km2: 412, area_rank: 207, population: 0, population_rank: 250,
                currency_code: "", currency_name: "", currency_symbol: "",
                calling_code: "undefined", is_driving_side_right: true, osm_relation_id: 2177227,
                borders: []
            ),
            self::HN => new BearCountryData(
                cca2: "HN", cca3: "HND", name: "Honduras", capital: "Tegucigalpa", tld: ".hn",
                area_km2: 112492, area_rank: 104, population: 9904608, population_rank: 92,
                currency_code: "HNL", currency_name: "Honduran lempira", currency_symbol: "L",
                calling_code: "+504", is_driving_side_right: true, osm_relation_id: 287670,
                borders: ['GT', 'SV', 'NI']
            ),
            self::HR => new BearCountryData(
                cca2: "HR", cca3: "HRV", name: "Croatia", capital: "Zagreb", tld: ".hr",
                area_km2: 56594, area_rank: 128, population: 4047200, population_rank: 131,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+385", is_driving_side_right: true, osm_relation_id: 214885,
                borders: ['BA', 'HU', 'ME', 'RS', 'SI']
            ),
            self::HT => new BearCountryData(
                cca2: "HT", cca3: "HTI", name: "Haiti", capital: "Port-au-Prince", tld: ".ht",
                area_km2: 27750, area_rank: 148, population: 11402533, population_rank: 82,
                currency_code: "HTG", currency_name: "Haitian gourde", currency_symbol: "G",
                calling_code: "+509", is_driving_side_right: true, osm_relation_id: 307829,
                borders: ['DO']
            ),
            self::HU => new BearCountryData(
                cca2: "HU", cca3: "HUN", name: "Hungary", capital: "Budapest", tld: ".hu",
                area_km2: 93028, area_rank: 111, population: 9749763, population_rank: 94,
                currency_code: "HUF", currency_name: "Hungarian forint", currency_symbol: "Ft",
                calling_code: "+36", is_driving_side_right: true, osm_relation_id: 21335,
                borders: ['AT', 'HR', 'RO', 'RS', 'SK', 'SI', 'UA']
            ),
            self::ID => new BearCountryData(
                cca2: "ID", cca3: "IDN", name: "Indonesia", capital: "Jakarta", tld: ".id",
                area_km2: 1904569, area_rank: 16, population: 273523621, population_rank: 4,
                currency_code: "IDR", currency_name: "Indonesian rupiah", currency_symbol: "Rp",
                calling_code: "+62", is_driving_side_right: false, osm_relation_id: 304751,
                borders: ['TL', 'MY', 'PG']
            ),
            self::IE => new BearCountryData(
                cca2: "IE", cca3: "IRL", name: "Ireland", capital: "Dublin", tld: ".ie",
                area_km2: 70273, area_rank: 122, population: 4994724, population_rank: 125,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+353", is_driving_side_right: false, osm_relation_id: 62273,
                borders: ['GB']
            ),
            self::IL => new BearCountryData(
                cca2: "IL", cca3: "ISR", name: "Israel", capital: "Jerusalem", tld: ".il",
                area_km2: 20770, area_rank: 154, population: 9216900, population_rank: 97,
                currency_code: "ILS", currency_name: "Israeli new shekel", currency_symbol: "₪",
                calling_code: "+972", is_driving_side_right: true, osm_relation_id: 1473946,
                borders: ['EG', 'JO', 'LB', 'PS', 'SY']
            ),
            self::IM => new BearCountryData(
                cca2: "IM", cca3: "IMN", name: "Isle of Man", capital: "Douglas", tld: ".im",
                area_km2: 572, area_rank: 198, population: 85032, population_rank: 203,
                currency_code: "GBP", currency_name: "British pound", currency_symbol: "£",
                calling_code: "+44", is_driving_side_right: false, osm_relation_id: 62269,
                borders: []
            ),
            self::IN => new BearCountryData(
                cca2: "IN", cca3: "IND", name: "India", capital: "New Delhi", tld: ".in",
                area_km2: 3287590, area_rank: 8, population: 1380004385, population_rank: 2,
                currency_code: "INR", currency_name: "Indian rupee", currency_symbol: "₹",
                calling_code: "+91", is_driving_side_right: false, osm_relation_id: 304716,
                borders: ['BD', 'BT', 'MM', 'CN', 'NP', 'PK']
            ),
            self::IQ => new BearCountryData(
                cca2: "IQ", cca3: "IRQ", name: "Iraq", capital: "Baghdad", tld: ".iq",
                area_km2: 438317, area_rank: 60, population: 40222503, population_rank: 36,
                currency_code: "IQD", currency_name: "Iraqi dinar", currency_symbol: "ع.د",
                calling_code: "+964", is_driving_side_right: true, osm_relation_id: 304934,
                borders: ['IR', 'JO', 'KW', 'SA', 'SY', 'TR']
            ),
            self::IR => new BearCountryData(
                cca2: "IR", cca3: "IRN", name: "Iran", capital: "Tehran", tld: ".ir",
                area_km2: 1648195, area_rank: 19, population: 83992953, population_rank: 18,
                currency_code: "IRR", currency_name: "Iranian rial", currency_symbol: "﷼",
                calling_code: "+98", is_driving_side_right: true, osm_relation_id: 304938,
                borders: ['AF', 'AM', 'AZ', 'IQ', 'PK', 'TR', 'TM']
            ),
            self::IS => new BearCountryData(
                cca2: "IS", cca3: "ISL", name: "Iceland", capital: "Reykjavik", tld: ".is",
                area_km2: 103000, area_rank: 109, population: 366425, population_rank: 181,
                currency_code: "ISK", currency_name: "Icelandic króna", currency_symbol: "kr",
                calling_code: "+354", is_driving_side_right: true, osm_relation_id: 299133,
                borders: []
            ),
            self::IT => new BearCountryData(
                cca2: "IT", cca3: "ITA", name: "Italy", capital: "Rome", tld: ".it",
                area_km2: 301336, area_rank: 74, population: 59554023, population_rank: 24,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+39", is_driving_side_right: true, osm_relation_id: 365331,
                borders: ['AT', 'FR', 'SM', 'SI', 'CH', 'VA']
            ),
            self::JE => new BearCountryData(
                cca2: "JE", cca3: "JEY", name: "Jersey", capital: "Saint Helier", tld: ".je",
                area_km2: 116, area_rank: 228, population: 100800, population_rank: 200,
                currency_code: "GBP", currency_name: "British pound", currency_symbol: "£",
                calling_code: "+44", is_driving_side_right: false, osm_relation_id: 367988,
                borders: []
            ),
            self::JM => new BearCountryData(
                cca2: "JM", cca3: "JAM", name: "Jamaica", capital: "Kingston", tld: ".jm",
                area_km2: 10991, area_rank: 166, population: 2961161, population_rank: 138,
                currency_code: "JMD", currency_name: "Jamaican dollar", currency_symbol: "$",
                calling_code: "+1876", is_driving_side_right: false, osm_relation_id: 555017,
                borders: []
            ),
            self::JO => new BearCountryData(
                cca2: "JO", cca3: "JOR", name: "Jordan", capital: "Amman", tld: ".jo",
                area_km2: 89342, area_rank: 113, population: 10203140, population_rank: 90,
                currency_code: "JOD", currency_name: "Jordanian dinar", currency_symbol: "د.ا",
                calling_code: "+962", is_driving_side_right: true, osm_relation_id: 184818,
                borders: ['IQ', 'IL', 'PS', 'SA', 'SY']
            ),
            self::JP => new BearCountryData(
                cca2: "JP", cca3: "JPN", name: "Japan", capital: "Tokyo", tld: ".jp",
                area_km2: 377930, area_rank: 63, population: 125836021, population_rank: 11,
                currency_code: "JPY", currency_name: "Japanese yen", currency_symbol: "¥",
                calling_code: "+81", is_driving_side_right: false, osm_relation_id: 382313,
                borders: []
            ),
            self::KE => new BearCountryData(
                cca2: "KE", cca3: "KEN", name: "Kenya", capital: "Nairobi", tld: ".ke",
                area_km2: 580367, area_rank: 49, population: 53771300, population_rank: 27,
                currency_code: "KES", currency_name: "Kenyan shilling", currency_symbol: "Sh",
                calling_code: "+254", is_driving_side_right: false, osm_relation_id: 192798,
                borders: ['ET', 'SO', 'SS', 'TZ', 'UG']
            ),
            self::KG => new BearCountryData(
                cca2: "KG", cca3: "KGZ", name: "Kyrgyzstan", capital: "Bishkek", tld: ".kg",
                area_km2: 199951, area_rank: 88, population: 6591600, population_rank: 111,
                currency_code: "KGS", currency_name: "Kyrgyzstani som", currency_symbol: "с",
                calling_code: "+996", is_driving_side_right: true, osm_relation_id: 178009,
                borders: ['CN', 'KZ', 'TJ', 'UZ']
            ),
            self::KH => new BearCountryData(
                cca2: "KH", cca3: "KHM", name: "Cambodia", capital: "Phnom Penh", tld: ".kh",
                area_km2: 181035, area_rank: 91, population: 16718971, population_rank: 70,
                currency_code: "KHR", currency_name: "Cambodian riel", currency_symbol: "៛",
                calling_code: "+855", is_driving_side_right: true, osm_relation_id: 49898,
                borders: ['LA', 'TH', 'VN']
            ),
            self::KI => new BearCountryData(
                cca2: "KI", cca3: "KIR", name: "Kiribati", capital: "South Tarawa", tld: ".ki",
                area_km2: 811, area_rank: 191, population: 119446, population_rank: 193,
                currency_code: "AUD", currency_name: "Australian dollar", currency_symbol: "$",
                calling_code: "+686", is_driving_side_right: false, osm_relation_id: 571178,
                borders: []
            ),
            self::KM => new BearCountryData(
                cca2: "KM", cca3: "COM", name: "Comoros", capital: "Moroni", tld: ".km",
                area_km2: 1862, area_rank: 183, population: 869595, population_rank: 163,
                currency_code: "KMF", currency_name: "Comorian franc", currency_symbol: "Fr",
                calling_code: "+269", is_driving_side_right: true, osm_relation_id: 535790,
                borders: []
            ),
            self::KN => new BearCountryData(
                cca2: "KN", cca3: "KNA", name: "Saint Kitts and Nevis", capital: "Basseterre", tld: ".kn",
                area_km2: 261, area_rank: 217, population: 53192, population_rank: 214,
                currency_code: "XCD", currency_name: "Eastern Caribbean dollar", currency_symbol: "$",
                calling_code: "+1869", is_driving_side_right: false, osm_relation_id: 536899,
                borders: []
            ),
            self::KP => new BearCountryData(
                cca2: "KP", cca3: "PRK", name: "North Korea", capital: "Pyongyang", tld: ".kp",
                area_km2: 120538, area_rank: 100, population: 25778815, population_rank: 54,
                currency_code: "KPW", currency_name: "North Korean won", currency_symbol: "₩",
                calling_code: "+850", is_driving_side_right: true, osm_relation_id: 192734,
                borders: ['CN', 'KR', 'RU']
            ),
            self::KR => new BearCountryData(
                cca2: "KR", cca3: "KOR", name: "South Korea", capital: "Seoul", tld: ".kr",
                area_km2: 100210, area_rank: 110, population: 51780579, population_rank: 28,
                currency_code: "KRW", currency_name: "South Korean won", currency_symbol: "₩",
                calling_code: "+82", is_driving_side_right: true, osm_relation_id: 307756,
                borders: ['KP']
            ),
            self::KW => new BearCountryData(
                cca2: "KW", cca3: "KWT", name: "Kuwait", capital: "Kuwait City", tld: ".kw",
                area_km2: 17818, area_rank: 158, population: 4270563, population_rank: 130,
                currency_code: "KWD", currency_name: "Kuwaiti dinar", currency_symbol: "د.ك",
                calling_code: "+965", is_driving_side_right: true, osm_relation_id: 305099,
                borders: ['IQ', 'SA']
            ),
            self::KY => new BearCountryData(
                cca2: "KY", cca3: "CYM", name: "Cayman Islands", capital: "George Town", tld: ".ky",
                area_km2: 264, area_rank: 216, population: 65720, population_rank: 206,
                currency_code: "KYD", currency_name: "Cayman Islands dollar", currency_symbol: "$",
                calling_code: "+1345", is_driving_side_right: false, osm_relation_id: 2185366,
                borders: []
            ),
            self::KZ => new BearCountryData(
                cca2: "KZ", cca3: "KAZ", name: "Kazakhstan", capital: "Nur-Sultan", tld: ".kz",
                area_km2: 2724900, area_rank: 10, population: 18754440, population_rank: 64,
                currency_code: "KZT", currency_name: "Kazakhstani tenge", currency_symbol: "₸",
                calling_code: "+76", is_driving_side_right: true, osm_relation_id: 214665,
                borders: ['CN', 'KG', 'RU', 'TM', 'UZ']
            ),
            self::LA => new BearCountryData(
                cca2: "LA", cca3: "LAO", name: "Laos", capital: "Vientiane", tld: ".la",
                area_km2: 236800, area_rank: 85, population: 7275556, population_rank: 104,
                currency_code: "LAK", currency_name: "Lao kip", currency_symbol: "₭",
                calling_code: "+856", is_driving_side_right: true, osm_relation_id: 49903,
                borders: ['MM', 'KH', 'CN', 'TH', 'VN']
            ),
            self::LB => new BearCountryData(
                cca2: "LB", cca3: "LBN", name: "Lebanon", capital: "Beirut", tld: ".lb",
                area_km2: 10452, area_rank: 169, population: 6825442, population_rank: 109,
                currency_code: "LBP", currency_name: "Lebanese pound", currency_symbol: "ل.ل",
                calling_code: "+961", is_driving_side_right: true, osm_relation_id: 184843,
                borders: ['IL', 'SY']
            ),
            self::LC => new BearCountryData(
                cca2: "LC", cca3: "LCA", name: "Saint Lucia", capital: "Castries", tld: ".lc",
                area_km2: 616, area_rank: 197, population: 183629, population_rank: 190,
                currency_code: "XCD", currency_name: "Eastern Caribbean dollar", currency_symbol: "$",
                calling_code: "+1758", is_driving_side_right: false, osm_relation_id: 550728,
                borders: []
            ),
            self::LI => new BearCountryData(
                cca2: "LI", cca3: "LIE", name: "Liechtenstein", capital: "Vaduz", tld: ".li",
                area_km2: 160, area_rank: 224, population: 38137, population_rank: 220,
                currency_code: "CHF", currency_name: "Swiss franc", currency_symbol: "Fr",
                calling_code: "+423", is_driving_side_right: true, osm_relation_id: 1155955,
                borders: ['AT', 'CH']
            ),
            self::LK => new BearCountryData(
                cca2: "LK", cca3: "LKA", name: "Sri Lanka", capital: "Sri Jayawardenepura Kotte", tld: ".lk",
                area_km2: 65610, area_rank: 124, population: 21919000, population_rank: 58,
                currency_code: "LKR", currency_name: "Sri Lankan rupee", currency_symbol: "Rs  රු",
                calling_code: "+94", is_driving_side_right: false, osm_relation_id: 536807,
                borders: ['IN']
            ),
            self::LR => new BearCountryData(
                cca2: "LR", cca3: "LBR", name: "Liberia", capital: "Monrovia", tld: ".lr",
                area_km2: 111369, area_rank: 105, population: 5057677, population_rank: 124,
                currency_code: "LRD", currency_name: "Liberian dollar", currency_symbol: "$",
                calling_code: "+231", is_driving_side_right: true, osm_relation_id: 192780,
                borders: ['GN', 'CI', 'SL']
            ),
            self::LS => new BearCountryData(
                cca2: "LS", cca3: "LSO", name: "Lesotho", capital: "Maseru", tld: ".ls",
                area_km2: 30355, area_rank: 142, population: 2142252, population_rank: 147,
                currency_code: "LSL", currency_name: "Lesotho loti", currency_symbol: "L",
                calling_code: "+266", is_driving_side_right: false, osm_relation_id: 2093234,
                borders: ['ZA']
            ),
            self::LT => new BearCountryData(
                cca2: "LT", cca3: "LTU", name: "Lithuania", capital: "Vilnius", tld: ".lt",
                area_km2: 65300, area_rank: 125, population: 2794700, population_rank: 141,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+370", is_driving_side_right: true, osm_relation_id: 72596,
                borders: ['BY', 'LV', 'PL', 'RU']
            ),
            self::LU => new BearCountryData(
                cca2: "LU", cca3: "LUX", name: "Luxembourg", capital: "Luxembourg", tld: ".lu",
                area_km2: 2586, area_rank: 180, population: 632275, population_rank: 169,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+352", is_driving_side_right: true, osm_relation_id: 2171347,
                borders: ['BE', 'FR', 'DE']
            ),
            self::LV => new BearCountryData(
                cca2: "LV", cca3: "LVA", name: "Latvia", capital: "Riga", tld: ".lv",
                area_km2: 64559, area_rank: 126, population: 1901548, population_rank: 151,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+371", is_driving_side_right: true, osm_relation_id: 72594,
                borders: ['BY', 'EE', 'LT', 'RU']
            ),
            self::LY => new BearCountryData(
                cca2: "LY", cca3: "LBY", name: "Libya", capital: "Tripoli", tld: ".ly",
                area_km2: 1759540, area_rank: 18, population: 6871287, population_rank: 108,
                currency_code: "LYD", currency_name: "Libyan dinar", currency_symbol: "ل.د",
                calling_code: "+218", is_driving_side_right: true, osm_relation_id: 192758,
                borders: ['DZ', 'TD', 'EG', 'NE', 'SD', 'TN']
            ),
            self::MA => new BearCountryData(
                cca2: "MA", cca3: "MAR", name: "Morocco", capital: "Rabat", tld: ".ma",
                area_km2: 446550, area_rank: 59, population: 36910558, population_rank: 40,
                currency_code: "MAD", currency_name: "Moroccan dirham", currency_symbol: "د.م.",
                calling_code: "+212", is_driving_side_right: true, osm_relation_id: 3630439,
                borders: ['DZ', 'EH', 'ES']
            ),
            self::MC => new BearCountryData(
                cca2: "MC", cca3: "MCO", name: "Monaco", capital: "Monaco", tld: ".mc",
                area_km2: 2, area_rank: 248, population: 39244, population_rank: 217,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+377", is_driving_side_right: true, osm_relation_id: 1124039,
                borders: ['FR']
            ),
            self::MD => new BearCountryData(
                cca2: "MD", cca3: "MDA", name: "Moldova", capital: "Chișinău", tld: ".md",
                area_km2: 33846, area_rank: 140, population: 2617820, population_rank: 142,
                currency_code: "MDL", currency_name: "Moldovan leu", currency_symbol: "L",
                calling_code: "+373", is_driving_side_right: true, osm_relation_id: 58974,
                borders: ['RO', 'UA']
            ),
            self::ME => new BearCountryData(
                cca2: "ME", cca3: "MNE", name: "Montenegro", capital: "Podgorica", tld: ".me",
                area_km2: 13812, area_rank: 162, population: 621718, population_rank: 170,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+382", is_driving_side_right: true, osm_relation_id: 53296,
                borders: ['AL', 'BA', 'HR', 'XK', 'RS']
            ),
            self::MF => new BearCountryData(
                cca2: "MF", cca3: "MAF", name: "Saint Martin", capital: "Marigot", tld: ".fr",
                area_km2: 53, area_rank: 235, population: 38659, population_rank: 219,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+590", is_driving_side_right: true, osm_relation_id: 1891583,
                borders: ['SX']
            ),
            self::MG => new BearCountryData(
                cca2: "MG", cca3: "MDG", name: "Madagascar", capital: "Antananarivo", tld: ".mg",
                area_km2: 587041, area_rank: 47, population: 27691019, population_rank: 51,
                currency_code: "MGA", currency_name: "Malagasy ariary", currency_symbol: "Ar",
                calling_code: "+261", is_driving_side_right: true, osm_relation_id: 447325,
                borders: []
            ),
            self::MH => new BearCountryData(
                cca2: "MH", cca3: "MHL", name: "Marshall Islands", capital: "Majuro", tld: ".mh",
                area_km2: 181, area_rank: 222, population: 59194, population_rank: 209,
                currency_code: "USD", currency_name: "United States dollar", currency_symbol: "$",
                calling_code: "+692", is_driving_side_right: true, osm_relation_id: 571771,
                borders: []
            ),
            self::MK => new BearCountryData(
                cca2: "MK", cca3: "MKD", name: "North Macedonia", capital: "Skopje", tld: ".mk",
                area_km2: 25713, area_rank: 150, population: 2077132, population_rank: 149,
                currency_code: "MKD", currency_name: "denar", currency_symbol: "den",
                calling_code: "+389", is_driving_side_right: true, osm_relation_id: 53293,
                borders: ['AL', 'BG', 'GR', 'XK', 'RS']
            ),
            self::ML => new BearCountryData(
                cca2: "ML", cca3: "MLI", name: "Mali", capital: "Bamako", tld: ".ml",
                area_km2: 1240192, area_rank: 25, population: 20250834, population_rank: 60,
                currency_code: "XOF", currency_name: "West African CFA franc", currency_symbol: "Fr",
                calling_code: "+223", is_driving_side_right: true, osm_relation_id: 192785,
                borders: ['DZ', 'BF', 'GN', 'CI', 'MR', 'NE', 'SN']
            ),
            self::MM => new BearCountryData(
                cca2: "MM", cca3: "MMR", name: "Myanmar", capital: "Naypyidaw", tld: ".mm",
                area_km2: 676578, area_rank: 41, population: 54409794, population_rank: 26,
                currency_code: "MMK", currency_name: "Burmese kyat", currency_symbol: "Ks",
                calling_code: "+95", is_driving_side_right: true, osm_relation_id: 50371,
                borders: ['BD', 'CN', 'IN', 'LA', 'TH']
            ),
            self::MN => new BearCountryData(
                cca2: "MN", cca3: "MNG", name: "Mongolia", capital: "Ulan Bator", tld: ".mn",
                area_km2: 1564110, area_rank: 20, population: 3278292, population_rank: 135,
                currency_code: "MNT", currency_name: "Mongolian tögrög", currency_symbol: "₮",
                calling_code: "+976", is_driving_side_right: true, osm_relation_id: 161033,
                borders: ['CN', 'RU']
            ),
            self::MQ => new BearCountryData(
                cca2: "MQ", cca3: "MTQ", name: "Martinique", capital: "Fort-de-France", tld: ".mq",
                area_km2: 1128, area_rank: 187, population: 378243, population_rank: 180,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+596", is_driving_side_right: true, osm_relation_id: 1891495,
                borders: []
            ),
            self::MR => new BearCountryData(
                cca2: "MR", cca3: "MRT", name: "Mauritania", capital: "Nouakchott", tld: ".mr",
                area_km2: 1030700, area_rank: 30, population: 4649660, population_rank: 128,
                currency_code: "MRU", currency_name: "Mauritanian ouguiya", currency_symbol: "UM",
                calling_code: "+222", is_driving_side_right: true, osm_relation_id: 192763,
                borders: ['DZ', 'ML', 'SN', 'EH']
            ),
            self::MS => new BearCountryData(
                cca2: "MS", cca3: "MSR", name: "Montserrat", capital: "Plymouth", tld: ".ms",
                area_km2: 102, area_rank: 229, population: 4922, population_rank: 233,
                currency_code: "XCD", currency_name: "Eastern Caribbean dollar", currency_symbol: "$",
                calling_code: "+1664", is_driving_side_right: false, osm_relation_id: 537257,
                borders: []
            ),
            self::MT => new BearCountryData(
                cca2: "MT", cca3: "MLT", name: "Malta", capital: "Valletta", tld: ".mt",
                area_km2: 316, area_rank: 214, population: 525285, population_rank: 174,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+356", is_driving_side_right: false, osm_relation_id: 365307,
                borders: []
            ),
            self::MU => new BearCountryData(
                cca2: "MU", cca3: "MUS", name: "Mauritius", capital: "Port Louis", tld: ".mu",
                area_km2: 2040, area_rank: 182, population: 1265740, population_rank: 158,
                currency_code: "MUR", currency_name: "Mauritian rupee", currency_symbol: "₨",
                calling_code: "+230", is_driving_side_right: false, osm_relation_id: 535828,
                borders: []
            ),
            self::MV => new BearCountryData(
                cca2: "MV", cca3: "MDV", name: "Maldives", capital: "Malé", tld: ".mv",
                area_km2: 300, area_rank: 215, population: 540542, population_rank: 173,
                currency_code: "MVR", currency_name: "Maldivian rufiyaa", currency_symbol: ".ރ",
                calling_code: "+960", is_driving_side_right: false, osm_relation_id: 536773,
                borders: []
            ),
            self::MW => new BearCountryData(
                cca2: "MW", cca3: "MWI", name: "Malawi", capital: "Lilongwe", tld: ".mw",
                area_km2: 118484, area_rank: 101, population: 19129955, population_rank: 62,
                currency_code: "MWK", currency_name: "Malawian kwacha", currency_symbol: "MK",
                calling_code: "+265", is_driving_side_right: false, osm_relation_id: 195290,
                borders: ['MZ', 'TZ', 'ZM']
            ),
            self::MX => new BearCountryData(
                cca2: "MX", cca3: "MEX", name: "Mexico", capital: "Mexico City", tld: ".mx",
                area_km2: 1964375, area_rank: 15, population: 128932753, population_rank: 10,
                currency_code: "MXN", currency_name: "Mexican peso", currency_symbol: "$",
                calling_code: "+52", is_driving_side_right: true, osm_relation_id: 114686,
                borders: ['BZ', 'GT', 'US']
            ),
            self::MY => new BearCountryData(
                cca2: "MY", cca3: "MYS", name: "Malaysia", capital: "Kuala Lumpur", tld: ".my",
                area_km2: 330803, area_rank: 69, population: 32365998, population_rank: 45,
                currency_code: "MYR", currency_name: "Malaysian ringgit", currency_symbol: "RM",
                calling_code: "+60", is_driving_side_right: false, osm_relation_id: 2108121,
                borders: ['BN', 'ID', 'TH']
            ),
            self::MZ => new BearCountryData(
                cca2: "MZ", cca3: "MOZ", name: "Mozambique", capital: "Maputo", tld: ".mz",
                area_km2: 801590, area_rank: 37, population: 31255435, population_rank: 46,
                currency_code: "MZN", currency_name: "Mozambican metical", currency_symbol: "MT",
                calling_code: "+258", is_driving_side_right: false, osm_relation_id: 195273,
                borders: ['MW', 'ZA', 'SZ', 'TZ', 'ZM', 'ZW']
            ),
            self::NA => new BearCountryData(
                cca2: "NA", cca3: "NAM", name: "Namibia", capital: "Windhoek", tld: ".na",
                area_km2: 825615, area_rank: 36, population: 2540916, population_rank: 143,
                currency_code: "NAD", currency_name: "Namibian dollar", currency_symbol: "$",
                calling_code: "+264", is_driving_side_right: false, osm_relation_id: 195266,
                borders: ['AO', 'BW', 'ZA', 'ZM']
            ),
            self::NC => new BearCountryData(
                cca2: "NC", cca3: "NCL", name: "New Caledonia", capital: "Nouméa", tld: ".nc",
                area_km2: 18575, area_rank: 156, population: 271960, population_rank: 185,
                currency_code: "XPF", currency_name: "CFP franc", currency_symbol: "₣",
                calling_code: "+687", is_driving_side_right: true, osm_relation_id: 3407643,
                borders: []
            ),
            self::NE => new BearCountryData(
                cca2: "NE", cca3: "NER", name: "Niger", capital: "Niamey", tld: ".ne",
                area_km2: 1267000, area_rank: 23, population: 24206636, population_rank: 56,
                currency_code: "XOF", currency_name: "West African CFA franc", currency_symbol: "Fr",
                calling_code: "+227", is_driving_side_right: true, osm_relation_id: 192786,
                borders: ['DZ', 'BJ', 'BF', 'TD', 'LY', 'ML', 'NG']
            ),
            self::NF => new BearCountryData(
                cca2: "NF", cca3: "NFK", name: "Norfolk Island", capital: "Kingston", tld: ".nf",
                area_km2: 36, area_rank: 238, population: 2302, population_rank: 238,
                currency_code: "AUD", currency_name: "Australian dollar", currency_symbol: "$",
                calling_code: "+672", is_driving_side_right: false, osm_relation_id: 2574988,
                borders: []
            ),
            self::NG => new BearCountryData(
                cca2: "NG", cca3: "NGA", name: "Nigeria", capital: "Abuja", tld: ".ng",
                area_km2: 923768, area_rank: 33, population: 206139587, population_rank: 7,
                currency_code: "NGN", currency_name: "Nigerian naira", currency_symbol: "₦",
                calling_code: "+234", is_driving_side_right: true, osm_relation_id: 192787,
                borders: ['BJ', 'CM', 'TD', 'NE']
            ),
            self::NI => new BearCountryData(
                cca2: "NI", cca3: "NIC", name: "Nicaragua", capital: "Managua", tld: ".ni",
                area_km2: 130373, area_rank: 99, population: 6624554, population_rank: 110,
                currency_code: "NIO", currency_name: "Nicaraguan córdoba", currency_symbol: "C$",
                calling_code: "+505", is_driving_side_right: true, osm_relation_id: 287666,
                borders: ['CR', 'HN']
            ),
            self::NL => new BearCountryData(
                cca2: "NL", cca3: "NLD", name: "Netherlands", capital: "Amsterdam", tld: ".nl",
                area_km2: 41850, area_rank: 135, population: 16655799, population_rank: 71,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+31", is_driving_side_right: true, osm_relation_id: 2323309,
                borders: ['BE', 'DE']
            ),
            self::NO => new BearCountryData(
                cca2: "NO", cca3: "NOR", name: "Norway", capital: "Oslo", tld: ".no",
                area_km2: 323802, area_rank: 70, population: 5379475, population_rank: 119,
                currency_code: "NOK", currency_name: "Norwegian krone", currency_symbol: "kr",
                calling_code: "+47", is_driving_side_right: true, osm_relation_id: 2978650,
                borders: ['FI', 'SE', 'RU']
            ),
            self::NP => new BearCountryData(
                cca2: "NP", cca3: "NPL", name: "Nepal", capital: "Kathmandu", tld: ".np",
                area_km2: 147181, area_rank: 96, population: 29136808, population_rank: 49,
                currency_code: "NPR", currency_name: "Nepalese rupee", currency_symbol: "₨",
                calling_code: "+977", is_driving_side_right: false, osm_relation_id: 184633,
                borders: ['CN', 'IN']
            ),
            self::NR => new BearCountryData(
                cca2: "NR", cca3: "NRU", name: "Nauru", capital: "Yaren", tld: ".nr",
                area_km2: 21, area_rank: 243, population: 10834, population_rank: 231,
                currency_code: "AUD", currency_name: "Australian dollar", currency_symbol: "$",
                calling_code: "+674", is_driving_side_right: false, osm_relation_id: 571804,
                borders: []
            ),
            self::NU => new BearCountryData(
                cca2: "NU", cca3: "NIU", name: "Niue", capital: "Alofi", tld: ".nu",
                area_km2: 260, area_rank: 218, population: 1470, population_rank: 240,
                currency_code: "NZD", currency_name: "New Zealand dollar", currency_symbol: "$",
                calling_code: "+683", is_driving_side_right: false, osm_relation_id: 1558556,
                borders: []
            ),
            self::NZ => new BearCountryData(
                cca2: "NZ", cca3: "NZL", name: "New Zealand", capital: "Wellington", tld: ".nz",
                area_km2: 270467, area_rank: 77, population: 5084300, population_rank: 123,
                currency_code: "NZD", currency_name: "New Zealand dollar", currency_symbol: "$",
                calling_code: "+64", is_driving_side_right: false, osm_relation_id: 556706,
                borders: []
            ),
            self::OM => new BearCountryData(
                cca2: "OM", cca3: "OMN", name: "Oman", capital: "Muscat", tld: ".om",
                area_km2: 309500, area_rank: 73, population: 5106622, population_rank: 121,
                currency_code: "OMR", currency_name: "Omani rial", currency_symbol: "ر.ع.",
                calling_code: "+968", is_driving_side_right: true, osm_relation_id: 305138,
                borders: ['SA', 'AE', 'YE']
            ),
            self::PA => new BearCountryData(
                cca2: "PA", cca3: "PAN", name: "Panama", capital: "Panama City", tld: ".pa",
                area_km2: 75417, area_rank: 120, population: 4314768, population_rank: 129,
                currency_code: "PAB", currency_name: "Panamanian balboa", currency_symbol: "B/.",
                calling_code: "+507", is_driving_side_right: true, osm_relation_id: 287668,
                borders: ['CO', 'CR']
            ),
            self::PE => new BearCountryData(
                cca2: "PE", cca3: "PER", name: "Peru", capital: "Lima", tld: ".pe",
                area_km2: 1285216, area_rank: 21, population: 32971846, population_rank: 43,
                currency_code: "PEN", currency_name: "Peruvian sol", currency_symbol: "S/ ",
                calling_code: "+51", is_driving_side_right: true, osm_relation_id: 288247,
                borders: ['BO', 'BR', 'CL', 'CO', 'EC']
            ),
            self::PF => new BearCountryData(
                cca2: "PF", cca3: "PYF", name: "French Polynesia", capital: "Papeetē", tld: ".pf",
                area_km2: 4167, area_rank: 176, population: 280904, population_rank: 184,
                currency_code: "XPF", currency_name: "CFP franc", currency_symbol: "₣",
                calling_code: "+689", is_driving_side_right: true, osm_relation_id: 3412620,
                borders: []
            ),
            self::PG => new BearCountryData(
                cca2: "PG", cca3: "PNG", name: "Papua New Guinea", capital: "Port Moresby", tld: ".pg",
                area_km2: 462840, area_rank: 56, population: 8947027, population_rank: 98,
                currency_code: "PGK", currency_name: "Papua New Guinean kina", currency_symbol: "K",
                calling_code: "+675", is_driving_side_right: false, osm_relation_id: 307866,
                borders: ['ID']
            ),
            self::PH => new BearCountryData(
                cca2: "PH", cca3: "PHL", name: "Philippines", capital: "Manila", tld: ".ph",
                area_km2: 342353, area_rank: 65, population: 109581085, population_rank: 13,
                currency_code: "PHP", currency_name: "Philippine peso", currency_symbol: "₱",
                calling_code: "+63", is_driving_side_right: true, osm_relation_id: 443174,
                borders: []
            ),
            self::PK => new BearCountryData(
                cca2: "PK", cca3: "PAK", name: "Pakistan", capital: "Islamabad", tld: ".pk",
                area_km2: 881912, area_rank: 35, population: 220892331, population_rank: 5,
                currency_code: "PKR", currency_name: "Pakistani rupee", currency_symbol: "₨",
                calling_code: "+92", is_driving_side_right: false, osm_relation_id: 307573,
                borders: ['AF', 'CN', 'IN', 'IR']
            ),
            self::PL => new BearCountryData(
                cca2: "PL", cca3: "POL", name: "Poland", capital: "Warsaw", tld: ".pl",
                area_km2: 312679, area_rank: 72, population: 37950802, population_rank: 39,
                currency_code: "PLN", currency_name: "Polish złoty", currency_symbol: "zł",
                calling_code: "+48", is_driving_side_right: true, osm_relation_id: 49715,
                borders: ['BY', 'CZ', 'DE', 'LT', 'RU', 'SK', 'UA']
            ),
            self::PM => new BearCountryData(
                cca2: "PM", cca3: "SPM", name: "Saint Pierre and Miquelon", capital: "Saint-Pierre", tld: ".pm",
                area_km2: 242, area_rank: 219, population: 6069, population_rank: 232,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+508", is_driving_side_right: true, osm_relation_id: 3406826,
                borders: []
            ),
            self::PS => new BearCountryData(
                cca2: "PS", cca3: "PSE", name: "Palestine", capital: "Ramallah / Jerusalem", tld: ".ps",
                area_km2: 6220, area_rank: 173, population: 4803269, population_rank: 127,
                currency_code: "EGP", currency_name: "Egyptian pound", currency_symbol: "E£",
                calling_code: "+970", is_driving_side_right: true, osm_relation_id: 1703814,
                borders: ['IL', 'EG', 'JO']
            ),
            self::PT => new BearCountryData(
                cca2: "PT", cca3: "PRT", name: "Portugal", capital: "Lisbon", tld: ".pt",
                area_km2: 92090, area_rank: 112, population: 10305564, population_rank: 89,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+351", is_driving_side_right: true, osm_relation_id: 295480,
                borders: ['ES']
            ),
            self::PW => new BearCountryData(
                cca2: "PW", cca3: "PLW", name: "Palau", capital: "Ngerulmud", tld: ".pw",
                area_km2: 459, area_rank: 202, population: 18092, population_rank: 227,
                currency_code: "USD", currency_name: "United States dollar", currency_symbol: "$",
                calling_code: "+680", is_driving_side_right: true, osm_relation_id: 571805,
                borders: []
            ),
            self::PY => new BearCountryData(
                cca2: "PY", cca3: "PRY", name: "Paraguay", capital: "Asunción", tld: ".py",
                area_km2: 406752, area_rank: 61, population: 7132530, population_rank: 105,
                currency_code: "PYG", currency_name: "Paraguayan guaraní", currency_symbol: "₲",
                calling_code: "+595", is_driving_side_right: true, osm_relation_id: 287077,
                borders: ['AR', 'BO', 'BR']
            ),
            self::QA => new BearCountryData(
                cca2: "QA", cca3: "QAT", name: "Qatar", capital: "Doha", tld: ".qa",
                area_km2: 11586, area_rank: 165, population: 2881060, population_rank: 139,
                currency_code: "QAR", currency_name: "Qatari riyal", currency_symbol: "ر.ق",
                calling_code: "+974", is_driving_side_right: true, osm_relation_id: 305095,
                borders: ['SA']
            ),
            self::RE => new BearCountryData(
                cca2: "RE", cca3: "REU", name: "Réunion", capital: "Saint-Denis", tld: ".re",
                area_km2: 2511, area_rank: 181, population: 840974, population_rank: 164,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+262", is_driving_side_right: true, osm_relation_id: 1785276,
                borders: []
            ),
            self::RO => new BearCountryData(
                cca2: "RO", cca3: "ROU", name: "Romania", capital: "Bucharest", tld: ".ro",
                area_km2: 238391, area_rank: 84, population: 19286123, population_rank: 61,
                currency_code: "RON", currency_name: "Romanian leu", currency_symbol: "lei",
                calling_code: "+40", is_driving_side_right: true, osm_relation_id: 90689,
                borders: ['BG', 'HU', 'MD', 'RS', 'UA']
            ),
            self::RS => new BearCountryData(
                cca2: "RS", cca3: "SRB", name: "Serbia", capital: "Belgrade", tld: ".rs",
                area_km2: 88361, area_rank: 114, population: 6908224, population_rank: 107,
                currency_code: "RSD", currency_name: "Serbian dinar", currency_symbol: "дин.",
                calling_code: "+381", is_driving_side_right: true, osm_relation_id: 1741311,
                borders: ['BA', 'BG', 'HR', 'HU', 'XK', 'MK', 'ME', 'RO']
            ),
            self::RU => new BearCountryData(
                cca2: "RU", cca3: "RUS", name: "Russia", capital: "Moscow", tld: ".ru",
                area_km2: 17098242, area_rank: 1, population: 144104080, population_rank: 9,
                currency_code: "RUB", currency_name: "Russian ruble", currency_symbol: "₽",
                calling_code: "+73", is_driving_side_right: true, osm_relation_id: 60189,
                borders: ['AZ', 'BY', 'CN', 'EE', 'FI', 'GE', 'KZ', 'KP', 'LV', 'LT', 'MN', 'NO', 'PL', 'UA']
            ),
            self::RW => new BearCountryData(
                cca2: "RW", cca3: "RWA", name: "Rwanda", capital: "Kigali", tld: ".rw",
                area_km2: 26338, area_rank: 149, population: 12952209, population_rank: 76,
                currency_code: "RWF", currency_name: "Rwandan franc", currency_symbol: "Fr",
                calling_code: "+250", is_driving_side_right: true, osm_relation_id: 171496,
                borders: ['BI', 'CD', 'TZ', 'UG']
            ),
            self::SA => new BearCountryData(
                cca2: "SA", cca3: "SAU", name: "Saudi Arabia", capital: "Riyadh", tld: ".sa",
                area_km2: 2149690, area_rank: 14, population: 34813867, population_rank: 41,
                currency_code: "SAR", currency_name: "Saudi riyal", currency_symbol: "ر.س",
                calling_code: "+966", is_driving_side_right: true, osm_relation_id: 307584,
                borders: ['IQ', 'JO', 'KW', 'OM', 'QA', 'AE', 'YE']
            ),
            self::SB => new BearCountryData(
                cca2: "SB", cca3: "SLB", name: "Solomon Islands", capital: "Honiara", tld: ".sb",
                area_km2: 28896, area_rank: 144, population: 686878, population_rank: 167,
                currency_code: "SBD", currency_name: "Solomon Islands dollar", currency_symbol: "$",
                calling_code: "+677", is_driving_side_right: false, osm_relation_id: 1857436,
                borders: []
            ),
            self::SC => new BearCountryData(
                cca2: "SC", cca3: "SYC", name: "Seychelles", capital: "Victoria", tld: ".sc",
                area_km2: 452, area_rank: 203, population: 98462, population_rank: 201,
                currency_code: "SCR", currency_name: "Seychellois rupee", currency_symbol: "₨",
                calling_code: "+248", is_driving_side_right: false, osm_relation_id: 536765,
                borders: []
            ),
            self::SD => new BearCountryData(
                cca2: "SD", cca3: "SDN", name: "Sudan", capital: "Khartoum", tld: ".sd",
                area_km2: 1886068, area_rank: 17, population: 43849269, population_rank: 35,
                currency_code: "SDG", currency_name: "Sudanese pound", currency_symbol: "",
                calling_code: "+249", is_driving_side_right: true, osm_relation_id: 192789,
                borders: ['CF', 'TD', 'EG', 'ER', 'ET', 'LY', 'SS']
            ),
            self::SE => new BearCountryData(
                cca2: "SE", cca3: "SWE", name: "Sweden", capital: "Stockholm", tld: ".se",
                area_km2: 450295, area_rank: 57, population: 10353442, population_rank: 88,
                currency_code: "SEK", currency_name: "Swedish krona", currency_symbol: "kr",
                calling_code: "+46", is_driving_side_right: true, osm_relation_id: 52822,
                borders: ['FI', 'NO']
            ),
            self::SG => new BearCountryData(
                cca2: "SG", cca3: "SGP", name: "Singapore", capital: "Singapore", tld: ".sg",
                area_km2: 710, area_rank: 195, population: 5685807, population_rank: 115,
                currency_code: "SGD", currency_name: "Singapore dollar", currency_symbol: "$",
                calling_code: "+65", is_driving_side_right: false, osm_relation_id: 536780,
                borders: []
            ),
            self::SH => new BearCountryData(
                cca2: "SH", cca3: "SHN", name: "Saint Helena, Ascension and Tristan da Cunha", capital: "Jamestown", tld: ".sh",
                area_km2: 394, area_rank: 208, population: 53192, population_rank: 213,
                currency_code: "GBP", currency_name: "Pound sterling", currency_symbol: "£",
                calling_code: "+290", is_driving_side_right: false, osm_relation_id: 1964272,
                borders: []
            ),
            self::SI => new BearCountryData(
                cca2: "SI", cca3: "SVN", name: "Slovenia", capital: "Ljubljana", tld: ".si",
                area_km2: 20273, area_rank: 155, population: 2100126, population_rank: 148,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+386", is_driving_side_right: true, osm_relation_id: 218657,
                borders: ['AT', 'HR', 'IT', 'HU']
            ),
            self::SK => new BearCountryData(
                cca2: "SK", cca3: "SVK", name: "Slovakia", capital: "Bratislava", tld: ".sk",
                area_km2: 49037, area_rank: 131, population: 5458827, population_rank: 118,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+421", is_driving_side_right: true, osm_relation_id: 14296,
                borders: ['AT', 'CZ', 'HU', 'PL', 'UA']
            ),
            self::SL => new BearCountryData(
                cca2: "SL", cca3: "SLE", name: "Sierra Leone", capital: "Freetown", tld: ".sl",
                area_km2: 71740, area_rank: 121, population: 7976985, population_rank: 102,
                currency_code: "SLL", currency_name: "Sierra Leonean leone", currency_symbol: "Le",
                calling_code: "+232", is_driving_side_right: true, osm_relation_id: 192777,
                borders: ['GN', 'LR']
            ),
            self::SM => new BearCountryData(
                cca2: "SM", cca3: "SMR", name: "San Marino", capital: "City of San Marino", tld: ".sm",
                area_km2: 61, area_rank: 232, population: 33938, population_rank: 221,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+378", is_driving_side_right: true, osm_relation_id: 54624,
                borders: ['IT']
            ),
            self::SN => new BearCountryData(
                cca2: "SN", cca3: "SEN", name: "Senegal", capital: "Dakar", tld: ".sn",
                area_km2: 196722, area_rank: 89, population: 16743930, population_rank: 69,
                currency_code: "XOF", currency_name: "West African CFA franc", currency_symbol: "Fr",
                calling_code: "+221", is_driving_side_right: true, osm_relation_id: 192775,
                borders: ['GM', 'GN', 'GW', 'ML', 'MR']
            ),
            self::SO => new BearCountryData(
                cca2: "SO", cca3: "SOM", name: "Somalia", capital: "Mogadishu", tld: ".so",
                area_km2: 637657, area_rank: 43, population: 15893219, population_rank: 73,
                currency_code: "SOS", currency_name: "Somali shilling", currency_symbol: "Sh",
                calling_code: "+252", is_driving_side_right: true, osm_relation_id: 192799,
                borders: ['DJ', 'ET', 'KE']
            ),
            self::SR => new BearCountryData(
                cca2: "SR", cca3: "SUR", name: "Suriname", capital: "Paramaribo", tld: ".sr",
                area_km2: 163820, area_rank: 93, population: 586634, population_rank: 171,
                currency_code: "SRD", currency_name: "Surinamese dollar", currency_symbol: "$",
                calling_code: "+597", is_driving_side_right: false, osm_relation_id: 287082,
                borders: ['BR', 'GF', 'GY']
            ),
            self::SS => new BearCountryData(
                cca2: "SS", cca3: "SSD", name: "South Sudan", capital: "Juba", tld: ".ss",
                area_km2: 619745, area_rank: 45, population: 11193729, population_rank: 84,
                currency_code: "SSP", currency_name: "South Sudanese pound", currency_symbol: "£",
                calling_code: "+211", is_driving_side_right: true, osm_relation_id: 1656678,
                borders: ['CF', 'CD', 'ET', 'KE', 'SD', 'UG']
            ),
            self::ST => new BearCountryData(
                cca2: "ST", cca3: "STP", name: "São Tomé and Príncipe", capital: "São Tomé", tld: ".st",
                area_km2: 964, area_rank: 189, population: 219161, population_rank: 188,
                currency_code: "STN", currency_name: "São Tomé and Príncipe dobra", currency_symbol: "Db",
                calling_code: "+239", is_driving_side_right: true, osm_relation_id: 535880,
                borders: []
            ),
            self::SV => new BearCountryData(
                cca2: "SV", cca3: "SLV", name: "El Salvador", capital: "San Salvador", tld: ".sv",
                area_km2: 21041, area_rank: 153, population: 6486201, population_rank: 112,
                currency_code: "USD", currency_name: "United States dollar", currency_symbol: "$",
                calling_code: "+503", is_driving_side_right: true, osm_relation_id: 1520612,
                borders: ['GT', 'HN']
            ),
            self::SX => new BearCountryData(
                cca2: "SX", cca3: "SXM", name: "Sint Maarten", capital: "Philipsburg", tld: ".sx",
                area_km2: 34, area_rank: 239, population: 40812, population_rank: 216,
                currency_code: "ANG", currency_name: "Netherlands Antillean guilder", currency_symbol: "ƒ",
                calling_code: "+1721", is_driving_side_right: true, osm_relation_id: 1231790,
                borders: ['MF']
            ),
            self::SY => new BearCountryData(
                cca2: "SY", cca3: "SYR", name: "Syria", capital: "Damascus", tld: ".sy",
                area_km2: 185180, area_rank: 90, population: 17500657, population_rank: 67,
                currency_code: "SYP", currency_name: "Syrian pound", currency_symbol: "£",
                calling_code: "+963", is_driving_side_right: true, osm_relation_id: 184840,
                borders: ['IQ', 'IL', 'JO', 'LB', 'TR']
            ),
            self::SZ => new BearCountryData(
                cca2: "SZ", cca3: "SWZ", name: "Eswatini", capital: "Mbabane", tld: ".sz",
                area_km2: 17364, area_rank: 159, population: 1160164, population_rank: 160,
                currency_code: "SZL", currency_name: "Swazi lilangeni", currency_symbol: "L",
                calling_code: "+268", is_driving_side_right: false, osm_relation_id: 88210,
                borders: ['MZ', 'ZA']
            ),
            self::TC => new BearCountryData(
                cca2: "TC", cca3: "TCA", name: "Turks and Caicos Islands", capital: "Cockburn Town", tld: ".tc",
                area_km2: 948, area_rank: 190, population: 38718, population_rank: 218,
                currency_code: "USD", currency_name: "United States dollar", currency_symbol: "$",
                calling_code: "+1649", is_driving_side_right: false, osm_relation_id: 547479,
                borders: []
            ),
            self::TD => new BearCountryData(
                cca2: "TD", cca3: "TCD", name: "Chad", capital: "N'Djamena", tld: ".td",
                area_km2: 1284000, area_rank: 22, population: 16425859, population_rank: 72,
                currency_code: "XAF", currency_name: "Central African CFA franc", currency_symbol: "Fr",
                calling_code: "+235", is_driving_side_right: true, osm_relation_id: 2361304,
                borders: ['CM', 'CF', 'LY', 'NE', 'NG', 'SD']
            ),
            self::TF => new BearCountryData(
                cca2: "TF", cca3: "ATF", name: "French Southern and Antarctic Lands", capital: "Port-aux-Français", tld: ".tf",
                area_km2: 7747, area_rank: 172, population: 400, population_rank: 245,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+262", is_driving_side_right: true, osm_relation_id: 2186658,
                borders: []
            ),
            self::TG => new BearCountryData(
                cca2: "TG", cca3: "TGO", name: "Togo", capital: "Lomé", tld: ".tg",
                area_km2: 56785, area_rank: 127, population: 8278737, population_rank: 101,
                currency_code: "XOF", currency_name: "West African CFA franc", currency_symbol: "Fr",
                calling_code: "+228", is_driving_side_right: true, osm_relation_id: 192782,
                borders: ['BJ', 'BF', 'GH']
            ),
            self::TH => new BearCountryData(
                cca2: "TH", cca3: "THA", name: "Thailand", capital: "Bangkok", tld: ".th",
                area_km2: 513120, area_rank: 52, population: 69799978, population_rank: 20,
                currency_code: "THB", currency_name: "Thai baht", currency_symbol: "฿",
                calling_code: "+66", is_driving_side_right: false, osm_relation_id: 2067731,
                borders: ['MM', 'KH', 'LA', 'MY']
            ),
            self::TJ => new BearCountryData(
                cca2: "TJ", cca3: "TJK", name: "Tajikistan", capital: "Dushanbe", tld: ".tj",
                area_km2: 143100, area_rank: 97, population: 9537642, population_rank: 95,
                currency_code: "TJS", currency_name: "Tajikistani somoni", currency_symbol: "ЅМ",
                calling_code: "+992", is_driving_side_right: true, osm_relation_id: 214626,
                borders: ['AF', 'CN', 'KG', 'UZ']
            ),
            self::TK => new BearCountryData(
                cca2: "TK", cca3: "TKL", name: "Tokelau", capital: "Fakaofo", tld: ".tk",
                area_km2: 12, area_rank: 246, population: 1411, population_rank: 241,
                currency_code: "NZD", currency_name: "New Zealand dollar", currency_symbol: "$",
                calling_code: "+690", is_driving_side_right: false, osm_relation_id: 2186600,
                borders: []
            ),
            self::TL => new BearCountryData(
                cca2: "TL", cca3: "TLS", name: "Timor-Leste", capital: "Dili", tld: ".tl",
                area_km2: 14874, area_rank: 160, population: 1318442, population_rank: 157,
                currency_code: "USD", currency_name: "United States dollar", currency_symbol: "$",
                calling_code: "+670", is_driving_side_right: false, osm_relation_id: 305142,
                borders: ['ID']
            ),
            self::TM => new BearCountryData(
                cca2: "TM", cca3: "TKM", name: "Turkmenistan", capital: "Ashgabat", tld: ".tm",
                area_km2: 488100, area_rank: 54, population: 6031187, population_rank: 113,
                currency_code: "TMT", currency_name: "Turkmenistan manat", currency_symbol: "m",
                calling_code: "+993", is_driving_side_right: true, osm_relation_id: 223026,
                borders: ['AF', 'IR', 'KZ', 'UZ']
            ),
            self::TN => new BearCountryData(
                cca2: "TN", cca3: "TUN", name: "Tunisia", capital: "Tunis", tld: ".tn",
                area_km2: 163610, area_rank: 94, population: 11818618, population_rank: 79,
                currency_code: "TND", currency_name: "Tunisian dinar", currency_symbol: "د.ت",
                calling_code: "+216", is_driving_side_right: true, osm_relation_id: 192757,
                borders: ['DZ', 'LY']
            ),
            self::TO => new BearCountryData(
                cca2: "TO", cca3: "TON", name: "Tonga", capital: "Nuku'alofa", tld: ".to",
                area_km2: 747, area_rank: 194, population: 105697, population_rank: 199,
                currency_code: "TOP", currency_name: "Tongan paʻanga", currency_symbol: "T$",
                calling_code: "+676", is_driving_side_right: false, osm_relation_id: 2186665,
                borders: []
            ),
            self::TR => new BearCountryData(
                cca2: "TR", cca3: "TUR", name: "Turkey", capital: "Ankara", tld: ".tr",
                area_km2: 783562, area_rank: 38, population: 84339067, population_rank: 17,
                currency_code: "TRY", currency_name: "Turkish lira", currency_symbol: "₺",
                calling_code: "+90", is_driving_side_right: true, osm_relation_id: 174737,
                borders: ['AM', 'AZ', 'BG', 'GE', 'GR', 'IR', 'IQ', 'SY']
            ),
            self::TT => new BearCountryData(
                cca2: "TT", cca3: "TTO", name: "Trinidad and Tobago", capital: "Port of Spain", tld: ".tt",
                area_km2: 5130, area_rank: 175, population: 1399491, population_rank: 155,
                currency_code: "TTD", currency_name: "Trinidad and Tobago dollar", currency_symbol: "$",
                calling_code: "+1868", is_driving_side_right: false, osm_relation_id: 555717,
                borders: []
            ),
            self::TV => new BearCountryData(
                cca2: "TV", cca3: "TUV", name: "Tuvalu", capital: "Funafuti", tld: ".tv",
                area_km2: 26, area_rank: 242, population: 11792, population_rank: 229,
                currency_code: "AUD", currency_name: "Australian dollar", currency_symbol: "$",
                calling_code: "+688", is_driving_side_right: false, osm_relation_id: 2177266,
                borders: []
            ),
            self::TW => new BearCountryData(
                cca2: "TW", cca3: "TWN", name: "Taiwan", capital: "Taipei", tld: ".tw",
                area_km2: 36193, area_rank: 138, population: 23503349, population_rank: 57,
                currency_code: "TWD", currency_name: "New Taiwan dollar", currency_symbol: "$",
                calling_code: "+886", is_driving_side_right: true, osm_relation_id: 449220,
                borders: []
            ),
            self::TZ => new BearCountryData(
                cca2: "TZ", cca3: "TZA", name: "Tanzania", capital: "Dodoma", tld: ".tz",
                area_km2: 945087, area_rank: 32, population: 59734213, population_rank: 23,
                currency_code: "TZS", currency_name: "Tanzanian shilling", currency_symbol: "Sh",
                calling_code: "+255", is_driving_side_right: false, osm_relation_id: 195270,
                borders: ['BI', 'CD', 'KE', 'MW', 'MZ', 'RW', 'UG', 'ZM']
            ),
            self::UA => new BearCountryData(
                cca2: "UA", cca3: "UKR", name: "Ukraine", capital: "Kyiv", tld: ".ua",
                area_km2: 603500, area_rank: 46, population: 44134693, population_rank: 34,
                currency_code: "UAH", currency_name: "Ukrainian hryvnia", currency_symbol: "₴",
                calling_code: "+380", is_driving_side_right: true, osm_relation_id: 60199,
                borders: ['BY', 'HU', 'MD', 'PL', 'RO', 'RU', 'SK']
            ),
            self::UG => new BearCountryData(
                cca2: "UG", cca3: "UGA", name: "Uganda", capital: "Kampala", tld: ".ug",
                area_km2: 241550, area_rank: 82, population: 45741000, population_rank: 31,
                currency_code: "UGX", currency_name: "Ugandan shilling", currency_symbol: "Sh",
                calling_code: "+256", is_driving_side_right: false, osm_relation_id: 192796,
                borders: ['CD', 'KE', 'RW', 'SS', 'TZ']
            ),
            self::US => new BearCountryData(
                cca2: "US", cca3: "USA", name: "United States", capital: "Washington, D.C.", tld: ".us",
                area_km2: 9372610, area_rank: 5, population: 329484123, population_rank: 3,
                currency_code: "USD", currency_name: "United States dollar", currency_symbol: "$",
                calling_code: "+1201", is_driving_side_right: true, osm_relation_id: 148838,
                borders: ['CA', 'MX']
            ),
            self::UY => new BearCountryData(
                cca2: "UY", cca3: "URY", name: "Uruguay", capital: "Montevideo", tld: ".uy",
                area_km2: 181034, area_rank: 92, population: 3473727, population_rank: 133,
                currency_code: "UYU", currency_name: "Uruguayan peso", currency_symbol: "$",
                calling_code: "+598", is_driving_side_right: true, osm_relation_id: 287072,
                borders: ['AR', 'BR']
            ),
            self::UZ => new BearCountryData(
                cca2: "UZ", cca3: "UZB", name: "Uzbekistan", capital: "Tashkent", tld: ".uz",
                area_km2: 447400, area_rank: 58, population: 34232050, population_rank: 42,
                currency_code: "UZS", currency_name: "Uzbekistani soʻm", currency_symbol: "so'm",
                calling_code: "+998", is_driving_side_right: true, osm_relation_id: 196240,
                borders: ['AF', 'KZ', 'KG', 'TJ', 'TM']
            ),
            self::VA => new BearCountryData(
                cca2: "VA", cca3: "VAT", name: "Vatican City", capital: "Vatican City", tld: ".va",
                area_km2: 0, area_rank: 249, population: 451, population_rank: 244,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+3906698", is_driving_side_right: true, osm_relation_id: 36989,
                borders: ['IT']
            ),
            self::VC => new BearCountryData(
                cca2: "VC", cca3: "VCT", name: "Saint Vincent and the Grenadines", capital: "Kingstown", tld: ".vc",
                area_km2: 389, area_rank: 209, population: 110947, population_rank: 196,
                currency_code: "XCD", currency_name: "Eastern Caribbean dollar", currency_symbol: "$",
                calling_code: "+1784", is_driving_side_right: false, osm_relation_id: 550725,
                borders: []
            ),
            self::VE => new BearCountryData(
                cca2: "VE", cca3: "VEN", name: "Venezuela", capital: "Caracas", tld: ".ve",
                area_km2: 916445, area_rank: 34, population: 28435943, population_rank: 50,
                currency_code: "VES", currency_name: "Venezuelan bolívar soberano", currency_symbol: "Bs.S.",
                calling_code: "+58", is_driving_side_right: true, osm_relation_id: 272644,
                borders: ['BR', 'CO', 'GY']
            ),
            self::VG => new BearCountryData(
                cca2: "VG", cca3: "VGB", name: "British Virgin Islands", capital: "Road Town", tld: ".vg",
                area_km2: 151, area_rank: 225, population: 30237, population_rank: 223,
                currency_code: "USD", currency_name: "United States dollar", currency_symbol: "$",
                calling_code: "+1284", is_driving_side_right: false, osm_relation_id: 285454,
                borders: []
            ),
            self::VN => new BearCountryData(
                cca2: "VN", cca3: "VNM", name: "Vietnam", capital: "Hanoi", tld: ".vn",
                area_km2: 331212, area_rank: 68, population: 97338583, population_rank: 16,
                currency_code: "VND", currency_name: "Vietnamese đồng", currency_symbol: "₫",
                calling_code: "+84", is_driving_side_right: true, osm_relation_id: 49915,
                borders: ['KH', 'CN', 'LA']
            ),
            self::VU => new BearCountryData(
                cca2: "VU", cca3: "VUT", name: "Vanuatu", capital: "Port Vila", tld: ".vu",
                area_km2: 12189, area_rank: 163, population: 307150, population_rank: 182,
                currency_code: "VUV", currency_name: "Vanuatu vatu", currency_symbol: "Vt",
                calling_code: "+678", is_driving_side_right: true, osm_relation_id: 2177246,
                borders: []
            ),
            self::WF => new BearCountryData(
                cca2: "WF", cca3: "WLF", name: "Wallis and Futuna", capital: "Mata-Utu", tld: ".wf",
                area_km2: 142, area_rank: 226, population: 11750, population_rank: 230,
                currency_code: "XPF", currency_name: "CFP franc", currency_symbol: "₣",
                calling_code: "+681", is_driving_side_right: true, osm_relation_id: 3412448,
                borders: []
            ),
            self::WS => new BearCountryData(
                cca2: "WS", cca3: "WSM", name: "Samoa", capital: "Apia", tld: ".ws",
                area_km2: 2842, area_rank: 179, population: 198410, population_rank: 189,
                currency_code: "WST", currency_name: "Samoan tālā", currency_symbol: "T",
                calling_code: "+685", is_driving_side_right: false, osm_relation_id: 1872673,
                borders: []
            ),
            self::XK => new BearCountryData(
                cca2: "XK", cca3: "UNK", name: "Kosovo", capital: "Pristina", tld: "",
                area_km2: 10908, area_rank: 167, population: 1775378, population_rank: 152,
                currency_code: "EUR", currency_name: "Euro", currency_symbol: "€",
                calling_code: "+383", is_driving_side_right: true, osm_relation_id: 2088990,
                borders: ['AL', 'MK', 'ME', 'RS']
            ),
            self::XX => new BearCountryData(
                cca2: "XX", cca3: "XXX", name: "Unknown", capital: "", tld: "",
                area_km2: 0, area_rank: 0, population: 0, population_rank: 0,
                currency_code: "", currency_name: "", currency_symbol: "",
                calling_code: "", is_driving_side_right: true, osm_relation_id: null,
                borders: []
            ),
            self::YE => new BearCountryData(
                cca2: "YE", cca3: "YEM", name: "Yemen", capital: "Sana'a", tld: ".ye",
                area_km2: 527968, area_rank: 51, population: 29825968, population_rank: 48,
                currency_code: "YER", currency_name: "Yemeni rial", currency_symbol: "﷼",
                calling_code: "+967", is_driving_side_right: true, osm_relation_id: 305092,
                borders: ['OM', 'SA']
            ),
            self::ZA => new BearCountryData(
                cca2: "ZA", cca3: "ZAF", name: "South Africa", capital: "Pretoria / Bloemfontein / Cape Town", tld: ".za",
                area_km2: 1221037, area_rank: 26, population: 59308690, population_rank: 25,
                currency_code: "ZAR", currency_name: "South African rand", currency_symbol: "R",
                calling_code: "+27", is_driving_side_right: false, osm_relation_id: 87565,
                borders: ['BW', 'LS', 'MZ', 'NA', 'SZ', 'ZW']
            ),
            self::ZM => new BearCountryData(
                cca2: "ZM", cca3: "ZMB", name: "Zambia", capital: "Lusaka", tld: ".zm",
                area_km2: 752612, area_rank: 40, population: 18383956, population_rank: 65,
                currency_code: "ZMW", currency_name: "Zambian kwacha", currency_symbol: "ZK",
                calling_code: "+260", is_driving_side_right: false, osm_relation_id: 195271,
                borders: ['AO', 'BW', 'CD', 'MW', 'MZ', 'NA', 'TZ', 'ZW']
            ),
            self::ZW => new BearCountryData(
                cca2: "ZW", cca3: "ZWE", name: "Zimbabwe", capital: "Harare", tld: ".zw",
                area_km2: 390757, area_rank: 62, population: 14862927, population_rank: 74,
                currency_code: "ZWL", currency_name: "Zimbabwean dollar", currency_symbol: "$",
                calling_code: "+263", is_driving_side_right: false, osm_relation_id: 195272,
                borders: ['BW', 'MZ', 'ZA', 'ZM']
            ),
        };
    }

    public static function syncToDatabase(): void {
        foreach (self::cases() as $countryEnum) {
            BearCountryCrud::syncToDatabase(enum: $countryEnum);
        }
    }
}
