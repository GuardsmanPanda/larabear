<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Enum;

use GuardsmanPanda\Larabear\Infrastructure\App\Interface\BearDatabaseBackedEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Crud\LarabearCountrySubdivisionCrud;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Data\BearCountrySubdivisionData;

enum BearCountrySubdivisionEnum: string implements BearDatabaseBackedEnumInterface {
    // ANDORRA
    case AD_02 = 'AD-02';
    case AD_03 = 'AD-03';
    case AD_04 = 'AD-04';
    case AD_05 = 'AD-05';
    case AD_06 = 'AD-06';
    case AD_07 = 'AD-07';
    case AD_08 = 'AD-08';


    // United Arab Emirates
    case AE_AJ = 'AE-AJ';
    case AE_AZ = 'AE-AZ';
    case AE_DU = 'AE-DU';
    case AE_FU = 'AE-FU';
    case AE_RK = 'AE-RK';
    case AE_SH = 'AE-SH';
    case AE_UQ = 'AE-UQ';


    // AFGHANISTAN
    case AF_BAL = 'AF-BAL';
    case AF_BAM = 'AF-BAM';
    case AF_BDG = 'AF-BDG';
    case AF_BDS = 'AF-BDS';
    case AF_BGL = 'AF-BGL';
    case AF_DAY = 'AF-DAY';
    case AF_FRA = 'AF-FRA';
    case AF_FYB = 'AF-FYB';
    case AF_GHA = 'AF-GHA';
    case AF_GHO = 'AF-GHO';
    case AF_HEL = 'AF-HEL';
    case AF_HER = 'AF-HER';
    case AF_JOW = 'AF-JOW';
    case AF_KAB = 'AF-KAB';
    case AF_KAN = 'AF-KAN';
    case AF_KAP = 'AF-KAP';
    case AF_KDZ = 'AF-KDZ';
    case AF_KHO = 'AF-KHO';
    case AF_KNR = 'AF-KNR';
    case AF_LAG = 'AF-LAG';
    case AF_LOG = 'AF-LOG';
    case AF_NAN = 'AF-NAN';
    case AF_NIM = 'AF-NIM';
    case AF_NUR = 'AF-NUR';
    case AF_PAN = 'AF-PAN';
    case AF_PAR = 'AF-PAR';
    case AF_PIA = 'AF-PIA';
    case AF_PKA = 'AF-PKA';
    case AF_SAM = 'AF-SAM';
    case AF_SAR = 'AF-SAR';
    case AF_TAK = 'AF-TAK';
    case AF_URU = 'AF-URU';
    case AF_WAR = 'AF-WAR';
    case AF_ZAB = 'AF-ZAB';


    // ANTIGUA AND BARBUDA
    case AG_03 = 'AG-03';
    case AG_04 = 'AG-04';
    case AG_05 = 'AG-05';
    case AG_06 = 'AG-06';
    case AG_07 = 'AG-07';
    case AG_08 = 'AG-08';
    case AG_10 = 'AG-10';
    case AG_11 = 'AG-11';


    // ALBANIA
    case AL_01 = 'AL-01';
    case AL_02 = 'AL-02';
    case AL_03 = 'AL-03';
    case AL_04 = 'AL-04';
    case AL_05 = 'AL-05';
    case AL_06 = 'AL-06';
    case AL_07 = 'AL-07';
    case AL_08 = 'AL-08';
    case AL_09 = 'AL-09';
    case AL_10 = 'AL-10';
    case AL_11 = 'AL-11';
    case AL_12 = 'AL-12';


    // ARMENIA
    case AM_AG = 'AM-AG';
    case AM_AR = 'AM-AR';
    case AM_AV = 'AM-AV';
    case AM_ER = 'AM-ER';
    case AM_GR = 'AM-GR';
    case AM_KT = 'AM-KT';
    case AM_LO = 'AM-LO';
    case AM_SH = 'AM-SH';
    case AM_SU = 'AM-SU';
    case AM_TV = 'AM-TV';
    case AM_VD = 'AM-VD';


    // ANGOLA
    case AO_BGO = 'AO-BGO';
    case AO_BGU = 'AO-BGU';
    case AO_BIE = 'AO-BIE';
    case AO_CAB = 'AO-CAB';
    case AO_CCU = 'AO-CCU';
    case AO_CNN = 'AO-CNN';
    case AO_CNO = 'AO-CNO';
    case AO_CUS = 'AO-CUS';
    case AO_HUA = 'AO-HUA';
    case AO_HUI = 'AO-HUI';
    case AO_LNO = 'AO-LNO';
    case AO_LSU = 'AO-LSU';
    case AO_LUA = 'AO-LUA';
    case AO_MAL = 'AO-MAL';
    case AO_MOX = 'AO-MOX';
    case AO_NAM = 'AO-NAM';
    case AO_UIG = 'AO-UIG';
    case AO_ZAI = 'AO-ZAI';


    // ARGENTINA
    case AR_A = 'AR-A';
    case AR_B = 'AR-B';
    case AR_C = 'AR-C';
    case AR_D = 'AR-D';
    case AR_E = 'AR-E';
    case AR_F = 'AR-F';
    case AR_G = 'AR-G';
    case AR_H = 'AR-H';
    case AR_J = 'AR-J';
    case AR_K = 'AR-K';
    case AR_L = 'AR-L';
    case AR_M = 'AR-M';
    case AR_N = 'AR-N';
    case AR_P = 'AR-P';
    case AR_Q = 'AR-Q';
    case AR_R = 'AR-R';
    case AR_S = 'AR-S';
    case AR_T = 'AR-T';
    case AR_U = 'AR-U';
    case AR_V = 'AR-V';
    case AR_W = 'AR-W';
    case AR_X = 'AR-X';
    case AR_Y = 'AR-Y';
    case AR_Z = 'AR-Z';


    // Austria
    case AT_1 = 'AT-1';
    case AT_2 = 'AT-2';
    case AT_3 = 'AT-3';
    case AT_4 = 'AT-4';
    case AT_5 = 'AT-5';
    case AT_6 = 'AT-6';
    case AT_7 = 'AT-7';
    case AT_8 = 'AT-8';
    case AT_9 = 'AT-9';


    // AUSTRALIA
    case AU_ACT = 'AU-ACT';
    case AU_NSW = 'AU-NSW';
    case AU_NT = 'AU-NT';
    case AU_QLD = 'AU-QLD';
    case AU_SA = 'AU-SA';
    case AU_TAS = 'AU-TAS';
    case AU_VIC = 'AU-VIC';
    case AU_WA = 'AU-WA';


    // BOSNIA AND HERZEGOVINA
    case BA_BIH = 'BA-BIH';
    case BA_BRC = 'BA-BRC';
    case BA_SRP = 'BA-SRP';


    // BARBADOS
    case BB_01 = 'BB-01';
    case BB_02 = 'BB-02';
    case BB_03 = 'BB-03';
    case BB_04 = 'BB-04';
    case BB_05 = 'BB-05';
    case BB_06 = 'BB-06';
    case BB_07 = 'BB-07';
    case BB_08 = 'BB-08';
    case BB_09 = 'BB-09';
    case BB_10 = 'BB-10';
    case BB_11 = 'BB-11';


    // BANGLADESH
    case BD_A = 'BD-A';
    case BD_B = 'BD-B';
    case BD_C = 'BD-C';
    case BD_D = 'BD-D';
    case BD_E = 'BD-E';
    case BD_F = 'BD-F';
    case BD_G = 'BD-G';
    case BD_H = 'BD-H';


    // BELGIUM
    case BE_BRU = 'BE-BRU';
    case BE_VLG = 'BE-VLG';
    case BE_WAL = 'BE-WAL';


    // BRAZIL
    case BR_AC = 'BR-AC';
    case BR_AL = 'BR-AL';
    case BR_AP = 'BR-AP';
    case BR_AM = 'BR-AM';
    case BR_BA = 'BR-BA';
    case BR_CE = 'BR-CE';
    case BR_DF = 'BR-DF';
    case BR_ES = 'BR-ES';
    case BR_GO = 'BR-GO';
    case BR_MA = 'BR-MA';
    case BR_MT = 'BR-MT';
    case BR_MS = 'BR-MS';
    case BR_MG = 'BR-MG';
    case BR_PA = 'BR-PA';
    case BR_PB = 'BR-PB';
    case BR_PR = 'BR-PR';
    case BR_PE = 'BR-PE';
    case BR_PI = 'BR-PI';
    case BR_RJ = 'BR-RJ';
    case BR_RN = 'BR-RN';
    case BR_RS = 'BR-RS';
    case BR_RO = 'BR-RO';
    case BR_RR = 'BR-RR';
    case BR_SC = 'BR-SC';
    case BR_SP = 'BR-SP';
    case BR_SE = 'BR-SE';
    case BR_TO = 'BR-TO';


    // BELARUS
    case BY_BR = 'BY-BR';
    case BY_HM = 'BY-HM';
    case BY_HO = 'BY-HO';
    case BY_HR = 'BY-HR';
    case BY_MA = 'BY-MA';
    case BY_MI = 'BY-MI';
    case BY_VI = 'BY-VI';


    // Canada
    case CA_AB = 'CA-AB';
    case CA_BC = 'CA-BC';
    case CA_MB = 'CA-MB';
    case CA_NB = 'CA-NB';
    case CA_NL = 'CA-NL';
    case CA_NS = 'CA-NS';
    case CA_NT = 'CA-NT';
    case CA_NU = 'CA-NU';
    case CA_ON = 'CA-ON';
    case CA_PE = 'CA-PE';
    case CA_QC = 'CA-QC';
    case CA_SK = 'CA-SK';
    case CA_YT = 'CA-YT';


    // COSTA RICA
    case CR_A = 'CR-A';
    case CR_C = 'CR-C';
    case CR_G = 'CR-G';
    case CR_H = 'CR-H';
    case CR_L = 'CR-L';
    case CR_P = 'CR-P';
    case CR_SJ = 'CR-SJ';


    // CYPRUS
    case CY_01 = 'CY-01';
    case CY_02 = 'CY-02';
    case CY_03 = 'CY-03';
    case CY_04 = 'CY-04';
    case CY_05 = 'CY-05';
    case CY_06 = 'CY-06';


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


    // DENMARK
    case DK_81 = 'DK-81';
    case DK_82 = 'DK-82';
    case DK_83 = 'DK-83';
    case DK_84 = 'DK-84';
    case DK_85 = 'DK-85';


    // SPAIN
    case ES_AN = 'ES-AN';
    case ES_AR = 'ES-AR';
    case ES_AS = 'ES-AS';
    case ES_CB = 'ES-CB';
    case ES_CE = 'ES-CE';
    case ES_CL = 'ES-CL';
    case ES_CM = 'ES-CM';
    case ES_CN = 'ES-CN';
    case ES_CT = 'ES-CT';
    case ES_EX = 'ES-EX';
    case ES_GA = 'ES-GA';
    case ES_IB = 'ES-IB';
    case ES_MC = 'ES-MC';
    case ES_MD = 'ES-MD';
    case ES_ML = 'ES-ML';
    case ES_NC = 'ES-NC';
    case ES_PV = 'ES-PV';
    case ES_RI = 'ES-RI';
    case ES_VC = 'ES-VC';


    // FRANCE
    case FR_ARA = 'FR-ARA';
    case FR_BFC = 'FR-BFC';
    case FR_BRE = 'FR-BRE';
    case FR_CVL = 'FR-CVL';
    case FR_COR = 'FR-COR';
    case FR_GES = 'FR-GES';
    case FR_HDF = 'FR-HDF';
    case FR_IDF = 'FR-IDF';
    case FR_NOR = 'FR-NOR';
    case FR_NAQ = 'FR-NAQ';
    case FR_OCC = 'FR-OCC';
    case FR_PDL = 'FR-PDL';
    case FR_PAC = 'FR-PAC';
    case FR_CP = 'FR-CP';


    // THE UNITED KINGDOM
    case GB_ENG = 'GB-ENG';
    case GB_NIR = 'GB-NIR';
    case GB_SCT = 'GB-SCT';
    case GB_WLS = 'GB-WLS';


    // IRELAND
    case IE_C = 'IE-C';
    case IE_L = 'IE-L';
    case IE_M = 'IE-M';
    case IE_U = 'IE-U';


    // ITALY
    case IT_21 = 'IT-21';
    case IT_23 = 'IT-23';
    case IT_25 = 'IT-25';
    case IT_32 = 'IT-32';
    case IT_34 = 'IT-34';
    case IT_36 = 'IT-36';
    case IT_42 = 'IT-42';
    case IT_45 = 'IT-45';
    case IT_52 = 'IT-52';
    case IT_55 = 'IT-55';
    case IT_57 = 'IT-57';
    case IT_62 = 'IT-62';
    case IT_65 = 'IT-65';
    case IT_67 = 'IT-67';
    case IT_72 = 'IT-72';
    case IT_75 = 'IT-75';
    case IT_77 = 'IT-77';
    case IT_78 = 'IT-78';
    case IT_82 = 'IT-82';
    case IT_88 = 'IT-88';


    // The Netherlands
    case NL_DR = 'NL-DR';
    case NL_FL = 'NL-FL';
    case NL_FR = 'NL-FR';
    case NL_GE = 'NL-GE';
    case NL_GR = 'NL-GR';
    case NL_LI = 'NL-LI';
    case NL_NB = 'NL-NB';
    case NL_NH = 'NL-NH';
    case NL_OV = 'NL-OV';
    case NL_UT = 'NL-UT';
    case NL_ZE = 'NL-ZE';
    case NL_ZH = 'NL-ZH';


    // NORWAY
    case NO_03 = 'NO-03';
    case NO_11 = 'NO-11';
    case NO_15 = 'NO-15';
    case NO_18 = 'NO-18';
    case NO_31 = 'NO-31';
    case NO_32 = 'NO-32';
    case NO_33 = 'NO-33';
    case NO_34 = 'NO-34';
    case NO_39 = 'NO-39';
    case NO_40 = 'NO-40';
    case NO_42 = 'NO-42';
    case NO_46 = 'NO-46';
    case NO_50 = 'NO-50';
    case NO_55 = 'NO-55';
    case NO_56 = 'NO-56';


    // NEPAL
    case NP_P1 = 'NP-P1';
    case NP_P2 = 'NP-P2';
    case NP_P3 = 'NP-P3';
    case NP_P4 = 'NP-P4';
    case NP_P5 = 'NP-P5';
    case NP_P6 = 'NP-P6';
    case NP_P7 = 'NP-P7';


    // PORTUGAL
    case PT_01 = 'PT-01';
    case PT_02 = 'PT-02';
    case PT_03 = 'PT-03';
    case PT_04 = 'PT-04';
    case PT_05 = 'PT-05';
    case PT_06 = 'PT-06';
    case PT_07 = 'PT-07';
    case PT_08 = 'PT-08';
    case PT_09 = 'PT-09';
    case PT_10 = 'PT-10';
    case PT_11 = 'PT-11';
    case PT_12 = 'PT-12';
    case PT_13 = 'PT-13';
    case PT_14 = 'PT-14';
    case PT_15 = 'PT-15';
    case PT_16 = 'PT-16';
    case PT_17 = 'PT-17';
    case PT_18 = 'PT-18';
    case PT_20 = 'PT-20';
    case PT_30 = 'PT-30';


    // QATAR
    case QA_DA = 'QA-DA';
    case QA_KH = 'QA-KH';
    case QA_MS = 'QA-MS';
    case QA_RA = 'QA-RA';
    case QA_SH = 'QA-SH';
    case QA_US = 'QA-US';
    case QA_WA = 'QA-WA';
    case QA_ZA = 'QA-ZA';


    // SAUDI ARABIA
    case SA_01 = 'SA-01';
    case SA_02 = 'SA-02';
    case SA_03 = 'SA-03';
    case SA_04 = 'SA-04';
    case SA_05 = 'SA-05';
    case SA_06 = 'SA-06';
    case SA_07 = 'SA-07';
    case SA_08 = 'SA-08';
    case SA_09 = 'SA-09';
    case SA_10 = 'SA-10';
    case SA_11 = 'SA-11';
    case SA_12 = 'SA-12';
    case SA_14 = 'SA-14';


    // SWEDEN
    case SE_AB = 'SE-AB';
    case SE_AC = 'SE-AC';
    case SE_BD = 'SE-BD';
    case SE_C = 'SE-C';
    case SE_D = 'SE-D';
    case SE_E = 'SE-E';
    case SE_F = 'SE-F';
    case SE_G = 'SE-G';
    case SE_H = 'SE-H';
    case SE_I = 'SE-I';
    case SE_K = 'SE-K';
    case SE_M = 'SE-M';
    case SE_N = 'SE-N';
    case SE_O = 'SE-O';
    case SE_S = 'SE-S';
    case SE_T = 'SE-T';
    case SE_U = 'SE-U';
    case SE_W = 'SE-W';
    case SE_X = 'SE-X';
    case SE_Y = 'SE-Y';
    case SE_Z = 'SE-Z';


    // SINGAPORE
    case SG_01 = 'SG-01';
    case SG_02 = 'SG-02';
    case SG_03 = 'SG-03';
    case SG_04 = 'SG-04';
    case SG_05 = 'SG-05';


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


    // ZAMBIA
    case ZM_01 = 'ZM-01';
    case ZM_02 = 'ZM-02';
    case ZM_03 = 'ZM-03';
    case ZM_04 = 'ZM-04';
    case ZM_05 = 'ZM-05';
    case ZM_06 = 'ZM-06';
    case ZM_07 = 'ZM-07';
    case ZM_08 = 'ZM-08';
    case ZM_09 = 'ZM-09';
    case ZM_10 = 'ZM-10';


    // ZIMBABWE
    case ZW_BU = 'ZW-BU';
    case ZW_HA = 'ZW-HA';
    case ZW_MA = 'ZW-MA';
    case ZW_MC = 'ZW-MC';
    case ZW_ME = 'ZW-ME';
    case ZW_MI = 'ZW-MI';
    case ZW_MN = 'ZW-MN';
    case ZW_MS = 'ZW-MS';
    case ZW_MV = 'ZW-MV';
    case ZW_MW = 'ZW-MW';


    public function getCountrySubdivisionData(): BearCountrySubdivisionData {
        return match ($this) {
            // ANDORRA
            self::AD_02 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AD, english_name: 'Canillo', capital: 'Canillo', osm_relation_id: 2804754, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::AD_03 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AD, english_name: 'Encamp', capital: 'Encamp', osm_relation_id: 2804755, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::AD_04 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AD, english_name: 'La Massana', capital: 'La Massana', osm_relation_id: 2804757, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::AD_05 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AD, english_name: 'Ordino', capital: 'Ordino', osm_relation_id: 2804758, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::AD_06 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AD, english_name: 'Sant Julià de Lòria', capital: 'Sant Julià de Lòria', osm_relation_id: 2804759, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::AD_07 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AD, english_name: 'Andorra la Vella', capital: 'Andorra la Vella', osm_relation_id: 2804753, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::AD_08 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AD, english_name: 'Escaldes-Engordany', capital: 'Escaldes-Engordany', osm_relation_id: 2804756, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),


            // United Arab Emirates
            self::AE_AJ => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AE, english_name: 'Ajman',
                capital: 'Ajman', osm_relation_id: 3766482, subdivision_type: BearCountrySubdivisionTypeEnum::EMIRATE,
            ),
            self::AE_AZ => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AE, english_name: 'Abu Dhabi',
                capital: 'Abu Dhabi', osm_relation_id: 3766481, subdivision_type: BearCountrySubdivisionTypeEnum::EMIRATE,
            ),
            self::AE_DU => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AE, english_name: 'Dubai',
                capital: 'Dubai', osm_relation_id: 3766483, subdivision_type: BearCountrySubdivisionTypeEnum::EMIRATE,
            ),
            self::AE_FU => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AE, english_name: 'Fujairah',
                capital: 'Fujairah', osm_relation_id: 3766484, subdivision_type: BearCountrySubdivisionTypeEnum::EMIRATE,
            ),
            self::AE_RK => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AE, english_name: 'Ras Al Khaimah',
                capital: 'Ras Al Khaimah', osm_relation_id: 3766485, subdivision_type: BearCountrySubdivisionTypeEnum::EMIRATE,
            ),
            self::AE_SH => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AE, english_name: 'Sharjah',
                capital: 'Sharjah', osm_relation_id: 3766486, subdivision_type: BearCountrySubdivisionTypeEnum::EMIRATE,
            ),
            self::AE_UQ => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AE, english_name: 'Umm Al Quwain',
                capital: 'Umm Al Quwain', osm_relation_id: 3766487, subdivision_type: BearCountrySubdivisionTypeEnum::EMIRATE,
            ),


            // AFGHANISTAN
            self::AF_BAL => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Balkh',
                capital: 'Mazar-i-Sharif', osm_relation_id: 1674795, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_BAM => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Bamyan',
                capital: 'Bamyan', osm_relation_id: 1674849, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_BDG => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Badghis',
                capital: 'Qala i Naw', osm_relation_id: 1674811, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_BDS => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Badakhshan',
                capital: 'Feyzabad', osm_relation_id: 1674535, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_BGL => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Baghlan',
                capital: 'Puli Khumri', osm_relation_id: 1674785, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_DAY => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Daykundi',
                capital: 'Nili', osm_relation_id: 1674833, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_FRA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Farah',
                capital: 'Farah', osm_relation_id: 1674802, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_FYB => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Faryab',
                capital: 'Maymana', osm_relation_id: 1674814, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_GHA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Ghazni',
                capital: 'Ghazni', osm_relation_id: 1675048, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_GHO => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Ghor',
                capital: 'Chaghcharan', osm_relation_id: 1674816, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_HEL => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Helmand',
                capital: 'Lashkargah', osm_relation_id: 1674573, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_HER => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Herat',
                capital: 'Herat', osm_relation_id: 1674803, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_JOW => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Jowzjan',
                capital: 'Sheberghan', osm_relation_id: 1674800, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_KAB => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Kabul',
                capital: 'Kabul', osm_relation_id: 1674876, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_KAN => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Kandahar',
                capital: 'Kandahar', osm_relation_id: 1674567, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_KAP => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Kapisa',
                capital: 'Mahmud-i-Raqi', osm_relation_id: 1674767, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_KDZ => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Kunduz',
                capital: 'Kunduz', osm_relation_id: 1674564, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_KHO => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Khost',
                capital: 'Khost', osm_relation_id: 1674878, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_KNR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Kunar',
                capital: 'Asadabad', osm_relation_id: 1674607, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_LAG => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Laghman',
                capital: 'Mehtar Lam', osm_relation_id: 1674766, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_LOG => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Logar',
                capital: 'Puli Alam', osm_relation_id: 1674874, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_NAN => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Nangarhar',
                capital: 'Jalalabad', osm_relation_id: 1674770, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_NIM => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Nimroz',
                capital: 'Zaranj', osm_relation_id: 1674664, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_NUR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Nuristan',
                capital: 'Parun', osm_relation_id: 1674544, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_PAN => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Panjshir',
                capital: 'Bazarak', osm_relation_id: 1675032, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_PAR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Parwan',
                capital: 'Charikar', osm_relation_id: 1674782, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_PIA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Paktia',
                capital: 'Gardez', osm_relation_id: 1674882, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_PKA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Paktika',
                capital: 'Sharana', osm_relation_id: 1675047, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_SAM => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Samangan',
                capital: 'Aybak', osm_relation_id: 1674791, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_SAR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Sar-e Pol',
                capital: 'Sar-e Pol', osm_relation_id: 1674994, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_TAK => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Takhar',
                capital: 'Taloqan', osm_relation_id: 1674541, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_URU => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Urozgan',
                capital: 'Tarin Kowt', osm_relation_id: 1674993, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_WAR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Wardak',
                capital: 'Maidan Shahr', osm_relation_id: 1759757, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AF_ZAB => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AF, english_name: 'Zabul',
                capital: 'Qalat', osm_relation_id: 1674841, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),


            // ANTIGUA AND BARBUDA
            self::AG_03 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AG, english_name: 'Saint George',
                capital: 'Fitches Creek', osm_relation_id: 9604933, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::AG_04 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AG, english_name: 'Saint John',
                capital: 'St. John\'s', osm_relation_id: 9604932, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::AG_05 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AG, english_name: 'Saint Mary',
                capital: 'Old Road', osm_relation_id: 9604457, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::AG_06 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AG, english_name: 'Saint Paul',
                capital: 'Falmouth', osm_relation_id: 9604629, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::AG_07 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AG, english_name: 'Saint Peter',
                capital: 'Parham', osm_relation_id: 9604794, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::AG_08 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AG, english_name: 'Saint Philip',
                capital: 'St. Philip\'s', osm_relation_id: 9604456, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::AG_10 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AG, english_name: 'Barbuda',
                capital: 'Codrington', osm_relation_id: 7742426, subdivision_type: BearCountrySubdivisionTypeEnum::DEPENDENCY,
            ),
            self::AG_11 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AG, english_name: 'Redonda',
                capital: '', osm_relation_id: 7742427, subdivision_type: BearCountrySubdivisionTypeEnum::DEPENDENCY,
            ),


            // ALBANIA
            self::AL_01 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AL, english_name: 'Berat',
                capital: 'Berat', osm_relation_id: 1252289, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::AL_02 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AL, english_name: 'Durrës',
                capital: 'Durrës', osm_relation_id: 1249872, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::AL_03 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AL, english_name: 'Elbasan',
                capital: 'Elbasan', osm_relation_id: 1250609, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::AL_04 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AL, english_name: 'Fier',
                capital: 'Fier', osm_relation_id: 1251469, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::AL_05 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AL, english_name: 'Gjirokastër',
                capital: 'Gjirokastër', osm_relation_id: 1253915, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::AL_06 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AL, english_name: 'Korçë',
                capital: 'Korçë', osm_relation_id: 1252589, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::AL_07 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AL, english_name: 'Kukës',
                capital: 'Kukës', osm_relation_id: 1759889, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::AL_08 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AL, english_name: 'Lezhë',
                capital: 'Lezhë', osm_relation_id: 1248935, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::AL_09 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AL, english_name: 'Dibër',
                capital: 'Dibër', osm_relation_id: 1249567, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::AL_10 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AL, english_name: 'Shkodër',
                capital: 'Shkodër', osm_relation_id: 1248293, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::AL_11 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AL, english_name: 'Tiranë',
                capital: 'Tiranë', osm_relation_id: 1250098, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::AL_12 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AL, english_name: 'Vlorë',
                capital: 'Vlorë', osm_relation_id: 1255521, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),


            // ARMENIA
            self::AM_AG => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AM, english_name: 'Aragatsotn',
                capital: 'Ashtarak', osm_relation_id: 3917110, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::AM_AR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AM, english_name: 'Ararat',
                capital: 'Artashat', osm_relation_id: 364083, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::AM_AV => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AM, english_name: 'Armavir',
                capital: 'Armavir', osm_relation_id: 364086, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::AM_ER => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AM, english_name: 'Yerevan',
                capital: 'Yerevan', osm_relation_id: 364087, subdivision_type: BearCountrySubdivisionTypeEnum::CITY,
            ),
            self::AM_GR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AM, english_name: 'Gegharkunik',
                capital: 'Gavar', osm_relation_id: 364080, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::AM_KT => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AM, english_name: 'Kotayk',
                capital: 'Hrazdan', osm_relation_id: 364084, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::AM_LO => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AM, english_name: 'Lori',
                capital: 'Vanadzor', osm_relation_id: 364078, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::AM_SH => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AM, english_name: 'Shirak',
                capital: 'Gyumri', osm_relation_id: 364077, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::AM_SU => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AM, english_name: 'Syunik',
                capital: 'Kapan', osm_relation_id: 364082, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::AM_TV => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AM, english_name: 'Tavush',
                capital: 'Ijevan', osm_relation_id: 364079, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::AM_VD => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AM, english_name: 'Vayots Dzor',
                capital: 'Yeghegnadzor', osm_relation_id: 364081, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),


            // ANGOLA
            self::AO_BGO => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'Bengo',
                capital: 'Caxito', osm_relation_id: 1802539, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_BGU => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'Benguela',
                capital: 'Benguela', osm_relation_id: 1802540, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_BIE => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'Bié',
                capital: 'Kuito', osm_relation_id: 1802541, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_CAB => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'Cabinda',
                capital: 'Cabinda', osm_relation_id: 422607, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_CCU => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'Cuando Cubango',
                capital: 'Menongue', osm_relation_id: 568485, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_CNN => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'Cunene',
                capital: 'Ondjiva', osm_relation_id: 422606, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_CNO => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'North Cuanza',
                capital: 'N\'dalatando', osm_relation_id: 1802542, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_CUS => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'South Cuanza',
                capital: 'Sumbe', osm_relation_id: 1802543, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_HUA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'Huambo',
                capital: 'Huambo', osm_relation_id: 1802544, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_HUI => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'Huíla',
                capital: 'Lubango', osm_relation_id: 1802545, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_LNO => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'North Lunda',
                capital: 'Dundo', osm_relation_id: 1802547, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_LSU => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'South Lunda',
                capital: 'Saurimo', osm_relation_id: 1802548, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_LUA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'Luanda',
                capital: 'Luanda', osm_relation_id: 1802546, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_MAL => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'Malanje',
                capital: 'Malanje', osm_relation_id: 422660, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_MOX => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'Moxico',
                capital: 'Luena', osm_relation_id: 1802549, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_NAM => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'Namibe',
                capital: 'Moçâmedes', osm_relation_id: 1802550, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_UIG => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'Uíge',
                capital: 'Uíge', osm_relation_id: 422659, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AO_ZAI => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AO, english_name: 'Zaire',
                capital: 'M\'banza-Kongo', osm_relation_id: 422608, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),


            // ARGENTINA
            self::AR_A => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Salta',
                capital: 'Salta', osm_relation_id: 2405230, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_B => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Buenos Aires',
                capital: 'La Plata', osm_relation_id: 1632167, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_C => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Buenos Aires',
                capital: 'Buenos Aires', osm_relation_id: 3082668, subdivision_type: BearCountrySubdivisionTypeEnum::CITY,
            ),
            self::AR_D => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'San Luis',
                capital: 'San Luis', osm_relation_id: 153538, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_E => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Entre Ríos',
                capital: 'Paraná', osm_relation_id: 153551, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_F => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'La Rioja',
                capital: 'La Rioja', osm_relation_id: 153536, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_G => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Santiago del Estero',
                capital: 'Santiago del Estero', osm_relation_id: 153544, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_H => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Chaco',
                capital: 'Resistencia', osm_relation_id: 153554, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_J => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'San Juan',
                capital: 'San Juan', osm_relation_id: 153539, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_K => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Catamarca',
                capital: 'Catamarca', osm_relation_id: 153545, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_L => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'La Pampa',
                capital: 'Santa Rosa', osm_relation_id: 153541, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_M => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Mendoza',
                capital: 'Mendoza', osm_relation_id: 153540, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_N => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Misiones',
                capital: 'Posadas', osm_relation_id: 153553, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_P => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Formosa',
                capital: 'Formosa', osm_relation_id: 2849847, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_Q => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Neuquén',
                capital: 'Neuquén', osm_relation_id: 1606727, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_R => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Rio Nеgro',
                capital: 'Viedma', osm_relation_id: 153547, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_S => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Santa Cruz',
                capital: 'Río Gallegos', osm_relation_id: 153543, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_T => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Tucumán',
                capital: 'San Miguel de Tucumán', osm_relation_id: 153558, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_U => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Chubut',
                capital: 'Rawson', osm_relation_id: 153548, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_V => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Tierra del Fuego',
                capital: 'Ushuaia', osm_relation_id: 153550, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_W => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Corrientes',
                capital: 'Corrientes', osm_relation_id: 153552, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_X => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Córdoba',
                capital: 'Córdoba', osm_relation_id: 3592494, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_Y => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Jujuy',
                capital: 'San Salvador de Jujuy', osm_relation_id: 153556, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::AR_Z => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AR, english_name: 'Santa Fe',
                capital: 'Santa Fe', osm_relation_id: 153549, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),


            // Austria
            self::AT_1 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AT, english_name: 'Burgenland',
                capital: 'Eisenstadt', osm_relation_id: 76909, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::AT_2 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AT, english_name: 'Carinthia',
                capital: 'Klagenfurt', osm_relation_id: 52345, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::AT_3 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AT, english_name: 'Lower Austria',
                capital: 'Sankt Pölten', osm_relation_id: 77189, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::AT_4 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AT, english_name: 'Upper Austria',
                capital: 'Linz', osm_relation_id: 102303, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::AT_5 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AT, english_name: 'Salzburg',
                capital: 'Salzburg', osm_relation_id: 86539, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::AT_6 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AT, english_name: 'Styria',
                capital: 'Graz', osm_relation_id: 35183, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::AT_7 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AT, english_name: 'Tyrol',
                capital: 'Innsbruck', osm_relation_id: 52343, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::AT_8 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AT, english_name: 'Vorarlberg',
                capital: 'Bregenz', osm_relation_id: 74942, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::AT_9 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AT, english_name: 'Vienna',
                capital: 'Vienna', osm_relation_id: 109166, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),


            // AUSTRALIA
            self::AU_ACT => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AU, english_name: 'Australian Capital Territory',
                capital: 'Canberra', osm_relation_id: 2354197, subdivision_type: BearCountrySubdivisionTypeEnum::TERRITORY,
            ),
            self::AU_NSW => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AU, english_name: 'New South Wales',
                capital: 'Sydney', osm_relation_id: 2316593, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::AU_NT => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AU, english_name: 'Northern Territory',
                capital: 'Darwin', osm_relation_id: 2316594, subdivision_type: BearCountrySubdivisionTypeEnum::TERRITORY,
            ),
            self::AU_QLD => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AU, english_name: 'Queensland',
                capital: 'Brisbane', osm_relation_id: 2316595, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::AU_SA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AU, english_name: 'South Australia',
                capital: 'Adelaide', osm_relation_id: 2316596, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::AU_TAS => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AU, english_name: 'Tasmania',
                capital: 'Hobart', osm_relation_id: 2369652, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::AU_VIC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AU, english_name: 'Victoria',
                capital: 'Melbourne', osm_relation_id: 2316741, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::AU_WA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::AU, english_name: 'Western Australia',
                capital: 'Perth', osm_relation_id: 2316598, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),


            // BOSNIA AND HERZEGOVINA
            self::BA_BRC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BA, english_name: 'Brčko',
                capital: 'Brčko', osm_relation_id: 2528143, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::BA_BIH => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BA, english_name: 'Federation of Bosnia and Herzegovina',
                capital: 'Sarajevo', osm_relation_id: 2528144, subdivision_type: BearCountrySubdivisionTypeEnum::ENTITY,
            ),
            self::BA_SRP => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BA, english_name: 'Republika Srpska',
                capital: 'Banja Luka', osm_relation_id: 2528145, subdivision_type: BearCountrySubdivisionTypeEnum::ENTITY,
            ),


            // BARBADOS
            self::BB_01 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BB, english_name: 'Christ Church',
                capital: 'Oistins', osm_relation_id: 3961378, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::BB_02 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BB, english_name: 'Saint Andrew',
                capital: 'Greenland', osm_relation_id: 3961379, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::BB_03 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BB, english_name: 'Saint George',
                capital: 'Bulkeley', osm_relation_id: 3961988, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::BB_04 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BB, english_name: 'Saint James',
                capital: 'Holetown', osm_relation_id: 3961380, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::BB_05 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BB, english_name: 'Saint John',
                capital: 'Four Roads', osm_relation_id: 3961381, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::BB_06 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BB, english_name: 'Saint Joseph',
                capital: 'Bathsheba', osm_relation_id: 3961382, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::BB_07 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BB, english_name: 'Saint Lucy',
                capital: 'Crab Hill', osm_relation_id: 3961383, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::BB_08 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BB, english_name: 'Saint Michael',
                capital: 'Bridgetown', osm_relation_id: 3961384, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::BB_09 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BB, english_name: 'Saint Peter',
                capital: 'Speightstown', osm_relation_id: 3961385, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::BB_10 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BB, english_name: 'Saint Philip',
                capital: 'Six Roads', osm_relation_id: 3961386, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),
            self::BB_11 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BB, english_name: 'Saint Thomas',
                capital: 'Hillaby', osm_relation_id: 3961387, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
            ),


            // BANGLADESH
            self::BD_A => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BD, english_name: 'Barisal',
                capital: 'Barisal', osm_relation_id: 3921298, subdivision_type: BearCountrySubdivisionTypeEnum::DIVISION,
            ),
            self::BD_B => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BD, english_name: 'Chittagong',
                capital: 'Chittagong', osm_relation_id: 3824588, subdivision_type: BearCountrySubdivisionTypeEnum::DIVISION,
            ),
            self::BD_C => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BD, english_name: 'Dhaka',
                capital: 'Dhaka', osm_relation_id: 3921322, subdivision_type: BearCountrySubdivisionTypeEnum::DIVISION,
            ),
            self::BD_D => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BD, english_name: 'Khulna',
                capital: 'Khulna', osm_relation_id: 3825003, subdivision_type: BearCountrySubdivisionTypeEnum::DIVISION,
            ),
            self::BD_E => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BD, english_name: 'Rajshahi',
                capital: 'Rajshahi', osm_relation_id: 3859335, subdivision_type: BearCountrySubdivisionTypeEnum::DIVISION,
            ),
            self::BD_F => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BD, english_name: 'Rangpur',
                capital: 'Rangpur', osm_relation_id: 3921211, subdivision_type: BearCountrySubdivisionTypeEnum::DIVISION,
            ),
            self::BD_G => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BD, english_name: 'Sylhet',
                capital: 'Sylhet', osm_relation_id: 3921222, subdivision_type: BearCountrySubdivisionTypeEnum::DIVISION,
            ),
            self::BD_H => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BD, english_name: 'Mymensingh',
                capital: 'Mymensingh', osm_relation_id: 7318343, subdivision_type: BearCountrySubdivisionTypeEnum::DIVISION,
            ),


            // BELGIUM
            self::BE_BRU => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BE, english_name: 'Brussels Capital Region',
                capital: 'Brussels', osm_relation_id: 54094, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::BE_VLG => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BE, english_name: 'Flanders',
                capital: 'Brussels', osm_relation_id: 53134, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::BE_WAL => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BE, english_name: 'Wallonia',
                capital: 'Namur', osm_relation_id: 90348, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),


            // BRAZIL
            self::BR_AC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Acre',
                capital: 'Rio Branco', osm_relation_id: 326266, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_AL => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Alagoas',
                capital: 'Maceió', osm_relation_id: 303781, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_AM => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Amazonas',
                capital: 'Manaus', osm_relation_id: 332476, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_AP => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Amapá',
                capital: 'Macapá', osm_relation_id: 331463, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_BA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Bahia',
                capital: 'Salvador', osm_relation_id: 362413, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_CE => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Ceará',
                capital: 'Fortaleza', osm_relation_id: 302635, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_DF => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Federal District',
                capital: 'Brasília', osm_relation_id: 421151, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::BR_ES => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Espírito Santo',
                capital: 'Vitória', osm_relation_id: 54882, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_GO => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Goiás',
                capital: 'Goiânia', osm_relation_id: 334443, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_MA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Maranhão',
                capital: 'São Luís', osm_relation_id: 332924, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_MT => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Mato Grosso',
                capital: 'Cuiabá', osm_relation_id: 333597, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_MS => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Mato Grosso do Sul',
                capital: 'Campo Grande', osm_relation_id: 334051, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_MG => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Minas Gerais',
                capital: 'Belo Horizonte', osm_relation_id: 315173, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_PA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Pará',
                capital: 'Belém', osm_relation_id: 185579, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_PB => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Paraíba',
                capital: 'João Pessoa', osm_relation_id: 301464, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_PR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Paraná',
                capital: 'Curitiba', osm_relation_id: 297640, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_PE => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Pernambuco',
                capital: 'Recife', osm_relation_id: 303702, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_PI => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Piauí',
                capital: 'Teresina', osm_relation_id: 302819, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_RJ => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Rio de Janeiro',
                capital: 'Rio de Janeiro', osm_relation_id: 57963, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_RN => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Rio Grande do Norte',
                capital: 'Natal', osm_relation_id: 301079, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_RS => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Rio Grande do Sul',
                capital: 'Porto Alegre', osm_relation_id: 242620, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_RO => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Rondônia',
                capital: 'Porto Velho', osm_relation_id: 325866, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_RR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Roraima',
                capital: 'Boa Vista', osm_relation_id: 326287, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_SC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Santa Catarina',
                capital: 'Florianópolis', osm_relation_id: 296584, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_SP => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'São Paulo',
                capital: 'São Paulo', osm_relation_id: 298204, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_SE => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Sergipe',
                capital: 'Aracaju', osm_relation_id: 303940, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::BR_TO => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BR, english_name: 'Tocantins',
                capital: 'Palmas', osm_relation_id: 336819, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),


            // BELARUS
            self::BY_BR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BY, english_name: 'Brest',
                capital: 'Brest', osm_relation_id: 59189, subdivision_type: BearCountrySubdivisionTypeEnum::OBLAST,
            ),
            self::BY_HM => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BY, english_name: 'Minsk',
                capital: 'Minsk', osm_relation_id: 59195, subdivision_type: BearCountrySubdivisionTypeEnum::CITY,
            ),
            self::BY_HO => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BY, english_name: 'Gomel',
                capital: 'Gomel', osm_relation_id: 59161, subdivision_type: BearCountrySubdivisionTypeEnum::OBLAST,
            ),
            self::BY_HR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BY, english_name: 'Grodno',
                capital: 'Grodno', osm_relation_id: 59275, subdivision_type: BearCountrySubdivisionTypeEnum::OBLAST,
            ),
            self::BY_MA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BY, english_name: 'Mogilev',
                capital: 'Mogilev', osm_relation_id: 59162, subdivision_type: BearCountrySubdivisionTypeEnum::OBLAST,
            ),
            self::BY_MI => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BY, english_name: 'Minsk',
                capital: 'Minsk', osm_relation_id: 59752, subdivision_type: BearCountrySubdivisionTypeEnum::OBLAST,
            ),
            self::BY_VI => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::BY, english_name: 'Vitebsk',
                capital: 'Vitebsk', osm_relation_id: 59506, subdivision_type: BearCountrySubdivisionTypeEnum::OBLAST,
            ),


            // CANADA
            self::CA_AB => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CA, english_name: 'Alberta',
                capital: 'Edmonton', osm_relation_id: 391186, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::CA_BC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CA, english_name: 'British Columbia',
                capital: 'Victoria', osm_relation_id: 390867, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::CA_MB => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CA, english_name: 'Manitoba',
                capital: 'Winnipeg', osm_relation_id: 390841, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::CA_NB => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CA, english_name: 'New Brunswick',
                capital: 'Fredericton', osm_relation_id: 68942, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::CA_NL => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CA, english_name: 'Newfoundland and Labrador',
                capital: 'St. John\'s', osm_relation_id: 391196, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::CA_NS => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CA, english_name: 'Nova Scotia',
                capital: 'Halifax', osm_relation_id: 390558, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::CA_NT => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CA, english_name: 'Northwest Territories',
                capital: 'Yellowknife', osm_relation_id: 391220, subdivision_type: BearCountrySubdivisionTypeEnum::TERRITORY,
            ),
            self::CA_NU => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CA, english_name: 'Nunavut',
                capital: 'Iqaluit', osm_relation_id: 390840, subdivision_type: BearCountrySubdivisionTypeEnum::TERRITORY,
            ),
            self::CA_ON => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CA, english_name: 'Ontario',
                capital: 'Toronto', osm_relation_id: 68841, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::CA_PE => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CA, english_name: 'Prince Edward Island',
                capital: 'Charlottetown', osm_relation_id: 391115, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::CA_QC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CA, english_name: 'Quebec',
                capital: 'Quebec City', osm_relation_id: 61549, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::CA_SK => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CA, english_name: 'Saskatchewan',
                capital: 'Regina', osm_relation_id: 391178, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::CA_YT => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CA, english_name: 'Yukon',
                capital: 'Whitehorse', osm_relation_id: 391455, subdivision_type: BearCountrySubdivisionTypeEnum::TERRITORY,
            ),


            // COSTA RICA
            self::CR_A => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CR, english_name: 'Alajuela',
                capital: 'Alajuela', osm_relation_id: 3222933, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::CR_C => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CR, english_name: 'Cartago',
                capital: 'Cartago', osm_relation_id: 3223054, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::CR_G => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CR, english_name: 'Guanacaste',
                capital: 'Liberia', osm_relation_id: 3222919, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::CR_H => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CR, english_name: 'Heredia',
                capital: 'Heredia', osm_relation_id: 3221947, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::CR_L => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CR, english_name: 'Limón',
                capital: 'Limón', osm_relation_id: 3223056, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::CR_P => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CR, english_name: 'Puntarenas',
                capital: 'Puntarenas', osm_relation_id: 3223028, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::CR_SJ => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CR, english_name: 'San José', capital: 'San José', osm_relation_id: 3223004, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),


            // CYPRUS
            self::CY_01 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CY, english_name: 'Nicosia', capital: 'Nicosia', osm_relation_id: 3264382, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::CY_02 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CY, english_name: 'Limassol', capital: 'Limassol', osm_relation_id: 2087230, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::CY_03 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CY, english_name: 'Larnaca', capital: 'Larnaca', osm_relation_id: 2087229, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::CY_04 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CY, english_name: 'Famagusta', capital: 'Famagusta', osm_relation_id: 3264447, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::CY_05 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CY, english_name: 'Paphos', capital: 'Paphos', osm_relation_id: 3263729, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::CY_06 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::CY, english_name: 'Kyrenia', capital: 'Kyrenia', osm_relation_id: 3264494, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),


            // GERMANY
            self::DE_BW => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DE, english_name: 'Baden-Württemberg', capital: 'Stuttgart', osm_relation_id: 62611, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::DE_BY => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DE, english_name: 'Bavaria', capital: 'Munich', osm_relation_id: 2145268, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::DE_BE => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DE, english_name: 'Berlin', capital: 'Berlin', osm_relation_id: 62422, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::DE_BB => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DE, english_name: 'Brandenburg', capital: 'Potsdam', osm_relation_id: 62504, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::DE_HB => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DE, english_name: 'Bremen', capital: 'Bremen', osm_relation_id: 62718, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::DE_HH => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DE, english_name: 'Hamburg', capital: 'Hamburg', osm_relation_id: 62782, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::DE_HE => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DE, english_name: 'Hesse', capital: 'Wiesbaden', osm_relation_id: 62650, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::DE_MV => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DE, english_name: 'Mecklenburg-Vorpommern', capital: 'Schwerin', osm_relation_id: 28322, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::DE_NI => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DE, english_name: 'Lower Saxony', capital: 'Hanover', osm_relation_id: 62771, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::DE_NW => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DE, english_name: 'North Rhine-Westphalia', capital: 'Düsseldorf', osm_relation_id: 62761, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::DE_RP => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DE, english_name: 'Rhineland-Palatinate', capital: 'Mainz', osm_relation_id: 62341, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::DE_SL => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DE, english_name: 'Saarland', capital: 'Saarbrücken', osm_relation_id: 62372, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::DE_SN => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DE, english_name: 'Saxony', capital: 'Dresden', osm_relation_id: 62467, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::DE_ST => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DE, english_name: 'Saxony-Anhalt', capital: 'Magdeburg', osm_relation_id: 62607, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::DE_SH => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DE, english_name: 'Schleswig-Holstein', capital: 'Kiel', osm_relation_id: 51529, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::DE_TH => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DE, english_name: 'Thuringia', capital: 'Erfurt', osm_relation_id: 62366, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),


            // DENMARK
            self::DK_81 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DK, english_name: 'North Denmark',
                capital: 'Aalborg', osm_relation_id: 1319936, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::DK_82 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DK, english_name: 'Central Denmark',
                capital: 'Viborg', osm_relation_id: 1319935, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::DK_83 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DK, english_name: 'Southern Denmark',
                capital: 'Vejen', osm_relation_id: 1319978, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::DK_84 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DK, english_name: 'Capital Region',
                capital: 'Hillerød', osm_relation_id: 1320608, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::DK_85 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::DK, english_name: 'Zealand',
                capital: 'Sorø', osm_relation_id: 1320370, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),


            // SPAIN
            self::ES_AN => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Andalusia',
                capital: 'Seville', osm_relation_id: 349044, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),
            self::ES_AR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Aragon',
                capital: 'Zaragoza', osm_relation_id: 349045, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),
            self::ES_AS => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Asturias',
                capital: 'Oviedo', osm_relation_id: 349033, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),
            self::ES_CB => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Cantabria',
                capital: 'Santander', osm_relation_id: 349013, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),
            self::ES_CE => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Ceuta',
                capital: 'Ceuta', osm_relation_id: 1154756, subdivision_type: BearCountrySubdivisionTypeEnum::CITY,
            ),
            self::ES_CL => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Castile and León',
                capital: 'Valladolid', osm_relation_id: 349041, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),
            self::ES_CM => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Castile-La Mancha',
                capital: 'Toledo', osm_relation_id: 349052, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),
            self::ES_CN => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Canary Islands',
                capital: 'Las Palmas', osm_relation_id: 349048, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),
            self::ES_CT => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Catalonia',
                capital: 'Barcelona', osm_relation_id: 349053, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),
            self::ES_EX => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Extremadura',
                capital: 'Mérida', osm_relation_id: 349050, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),
            self::ES_GA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Galicia',
                capital: 'Santiago de Compostela', osm_relation_id: 349036, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),
            self::ES_IB => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Balearic Islands',
                capital: 'Palma', osm_relation_id: 348981, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),
            self::ES_MC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Region of Murcia',
                capital: 'Murcia', osm_relation_id: 349047, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),
            self::ES_MD => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Madrid',
                capital: 'Madrid', osm_relation_id: 349055, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),
            self::ES_ML => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Melilla',
                capital: 'Melilla', osm_relation_id: 1154757, subdivision_type: BearCountrySubdivisionTypeEnum::CITY,
            ),
            self::ES_NC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Navarre',
                capital: 'Pamplona', osm_relation_id: 349027, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),
            self::ES_PV => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Basque Country',
                capital: 'Vitoria-Gasteiz', osm_relation_id: 349042, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),
            self::ES_RI => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'La Rioja',
                capital: 'Logroño', osm_relation_id: 348991, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),
            self::ES_VC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ES, english_name: 'Valencia',
                capital: 'Valencia', osm_relation_id: 349043, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
            ),


            // FRANCE
            self::FR_ARA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::FR, english_name: 'Auvergne-Rhône-Alps',
                capital: 'Lyon', osm_relation_id: 3792877, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::FR_BFC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::FR, english_name: 'Burgundy-Free-County',
                capital: 'Dijon', osm_relation_id: 3792878, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::FR_BRE => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::FR, english_name: 'Brittany',
                capital: 'Rennes', osm_relation_id: 102740, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::FR_CVL => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::FR, english_name: 'Central-Vale of the Loire',
                capital: 'Orléans', osm_relation_id: 8640, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::FR_COR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::FR, english_name: 'Corsica',
                capital: 'Ajaccio', osm_relation_id: 76910, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::FR_GES => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::FR, english_name: 'Greater East',
                capital: 'Strasbourg', osm_relation_id: 3792876, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::FR_HDF => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::FR, english_name: 'Heights-of-France',
                capital: 'Lille', osm_relation_id: 4217435, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::FR_IDF => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::FR, english_name: 'Isle-of-France',
                capital: 'Paris', osm_relation_id: 8649, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::FR_NOR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::FR, english_name: 'Normandy',
                capital: 'Rouen', osm_relation_id: 3793170, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::FR_NAQ => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::FR, english_name: 'New Aquitaine',
                capital: 'Bordeaux', osm_relation_id: 3792880, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::FR_OCC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::FR, english_name: 'Occitania',
                capital: 'Toulouse', osm_relation_id: 3792883, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::FR_PDL => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::FR, english_name: 'Lands of the Loire',
                capital: 'Nantes', osm_relation_id: 8650, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::FR_PAC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::FR, english_name: 'Provence-Alps-Azure Coast',
                capital: 'Marseille', osm_relation_id: 8654, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::FR_CP => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::FR, english_name: 'Clipperton', capital: '', osm_relation_id: 2573009, subdivision_type: BearCountrySubdivisionTypeEnum::DEPENDENCY,
            ),


            // THE UNITED KINGDOM
            self::GB_ENG => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::GB, english_name: 'England',
                capital: 'London', osm_relation_id: 58447, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTRY,
            ),
            self::GB_NIR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::GB, english_name: 'Northern Ireland',
                capital: 'Belfast', osm_relation_id: 156393, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::GB_SCT => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::GB, english_name: 'Scotland',
                capital: 'Edinburgh', osm_relation_id: 58446, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTRY,
            ),
            self::GB_WLS => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::GB, english_name: 'Wales',
                capital: 'Cardiff', osm_relation_id: 58437, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTRY,
            ),


            // IRELAND
            self::IE_C => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IE, english_name: 'Connacht',
                capital: 'Galway', osm_relation_id: 278721, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::IE_L => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IE, english_name: 'Leinster',
                capital: 'Dublin', osm_relation_id: 278746, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::IE_M => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IE, english_name: 'Munster',
                capital: 'Cork', osm_relation_id: 278750, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::IE_U => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IE, english_name: 'Ulster',
                capital: 'Belfast', osm_relation_id: 278664, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),


            // ITALY
            self::IT_21 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Piedmont',
                capital: 'Turin', osm_relation_id: 44874, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_23 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Aosta Valley',
                capital: 'Aosta', osm_relation_id: 45155, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_25 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Lombardy',
                capital: 'Milan', osm_relation_id: 44879, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_32 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Trentino-South Tyrol',
                capital: 'Trento', osm_relation_id: 45757, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_34 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Veneto',
                capital: 'Venice', osm_relation_id: 43648, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_36 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Friuli-Venezia Giulia',
                capital: 'Trieste', osm_relation_id: 179296, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_42 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Liguria',
                capital: 'Genoa', osm_relation_id: 301482, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_45 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Emilia-Romagna',
                capital: 'Bologna', osm_relation_id: 42611, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_52 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Tuscany',
                capital: 'Florence', osm_relation_id: 41977, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_55 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Umbria',
                capital: 'Perugia', osm_relation_id: 42004, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_57 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Marche',
                capital: 'Ancona', osm_relation_id: 53060, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_62 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Lazio',
                capital: 'Rome', osm_relation_id: 40784, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_65 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Abruzzo',
                capital: 'L\'Aquila', osm_relation_id: 53937, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_67 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Molise',
                capital: 'Campobasso', osm_relation_id: 41256, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_72 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Campania',
                capital: 'Naples', osm_relation_id: 40218, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_75 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Apulia',
                capital: 'Bari', osm_relation_id: 40095, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_77 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Basilicata',
                capital: 'Potenza', osm_relation_id: 40137, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_78 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Calabria',
                capital: 'Catanzaro', osm_relation_id: 1783980, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_82 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Sicily',
                capital: 'Palermo', osm_relation_id: 39152, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::IT_88 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::IT, english_name: 'Sardinia',
                capital: 'Cagliari', osm_relation_id: 7361997, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),


            // NETHERLANDS
            self::NL_DR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NL, english_name: 'Drenthe', capital: 'Assen', osm_relation_id: 47540, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NL_FL => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NL, english_name: 'Flevoland', capital: 'Lelystad', osm_relation_id: 47407, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NL_FR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NL, english_name: 'Friesland', capital: 'Leeuwarden', osm_relation_id: 47381, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NL_GE => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NL, english_name: 'Gelderland', capital: 'Arnhem', osm_relation_id: 47554, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NL_GR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NL, english_name: 'Groningen', capital: 'Groningen', osm_relation_id: 47826, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NL_LI => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NL, english_name: 'Limburg', capital: 'Maastricht', osm_relation_id: 47793, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NL_NB => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NL, english_name: 'North Brabant', capital: 'Den Bosch', osm_relation_id: 47696, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NL_NH => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NL, english_name: 'North Holland', capital: 'Haarlem', osm_relation_id: 47654, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NL_OV => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NL, english_name: 'Overijssel', capital: 'Zwolle', osm_relation_id: 47608, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NL_UT => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NL, english_name: 'Utrecht', capital: 'Utrecht', osm_relation_id: 47667, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NL_ZE => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NL, english_name: 'Zeeland', capital: 'Middelburg', osm_relation_id: 47806, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NL_ZH => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NL, english_name: 'South Holland', capital: 'The Hague', osm_relation_id: 47772, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),


            // NORWAY
            self::NO_03 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NO, english_name: 'Oslo', capital: 'Oslo', osm_relation_id: 406091, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::NO_11 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NO, english_name: 'Rogaland', capital: 'Stavanger', osm_relation_id: 405836, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::NO_15 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NO, english_name: 'Møre and Romsdal', capital: 'Molde', osm_relation_id: 406868, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::NO_18 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NO, english_name: 'Northland', capital: 'Bodø', osm_relation_id: 408105, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::NO_31 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NO, english_name: 'Østfold', capital: 'Sarpsborg', osm_relation_id: 406060, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::NO_32 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NO, english_name: 'Akershus', capital: 'Oslo', osm_relation_id: 406106, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::NO_33 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NO, english_name: 'Buskerud', capital: 'Drammen', osm_relation_id: 412297, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::NO_34 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NO, english_name: 'Inland', capital: 'Hamar', osm_relation_id: 10155527, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::NO_39 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NO, english_name: 'Vestfold', capital: 'Tønsberg', osm_relation_id: 404589, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::NO_40 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NO, english_name: 'Telemark', capital: 'Skien', osm_relation_id: 405156, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::NO_42 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NO, english_name: 'Agder', capital: 'Kristiansand', osm_relation_id: 10155517, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::NO_46 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NO, english_name: 'Westland', capital: 'Bergen', osm_relation_id: 10155543, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::NO_50 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NO, english_name: 'Trøndelag', capital: 'Steinkjer', osm_relation_id: 406567, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::NO_55 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NO, english_name: 'Troms', capital: 'Tromsø', osm_relation_id: 407717, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::NO_56 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NO, english_name: 'Finnmark', capital: 'Vadsø', osm_relation_id: 406389, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),


            // NEPAL
            self::NP_P1 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NP, english_name: 'Koshi', capital: 'Biratnagar', osm_relation_id: 10489132, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NP_P2 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NP, english_name: 'Madhesh', capital: 'Janakpur', osm_relation_id: 10489318, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NP_P3 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NP, english_name: 'Bagmati', capital: 'Hetauda', osm_relation_id: 10489317, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NP_P4 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NP, english_name: 'Gandaki', capital: 'Pokhara', osm_relation_id: 10489605, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NP_P5 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NP, english_name: 'Lumbini', capital: 'Butwal', osm_relation_id: 10493722, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NP_P6 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NP, english_name: 'Karnali', capital: 'Birendranagar', osm_relation_id: 10493723, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::NP_P7 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::NP, english_name: 'Sudurpashchim', capital: 'Dhangadhi', osm_relation_id: 10488187, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),


            // PORTUGAL
            self::PT_01 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Aveiro', capital: 'Aveiro', osm_relation_id: 3920249, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_02 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Beja', capital: 'Beja', osm_relation_id: 5134927, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_03 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Braga', capital: 'Braga', osm_relation_id: 3738284, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_04 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Bragança', capital: 'Bragança', osm_relation_id: 3905929, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_05 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Castelo Branco', capital: 'Castelo Branco', osm_relation_id: 4104644, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_06 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Coimbra', capital: 'Coimbra', osm_relation_id: 4875183, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_07 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Évora', capital: 'Évora', osm_relation_id: 5130767, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_08 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Faro', capital: 'Faro', osm_relation_id: 1278415, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_09 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Guarda', capital: 'Guarda', osm_relation_id: 3905924, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_10 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Leiria', capital: 'Leiria', osm_relation_id: 5011694, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_11 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Lisbon', capital: 'Lisbon', osm_relation_id: 2897141, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_12 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Portalegre', capital: 'Portalegre', osm_relation_id: 5123448, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_13 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Porto', capital: 'Porto', osm_relation_id: 3459013, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_14 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Santarém', capital: 'Santarém', osm_relation_id: 5122644, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_15 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Setúbal', capital: 'Setúbal', osm_relation_id: 5143590, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_16 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Viana do Castelo', capital: 'Viana do Castelo', osm_relation_id: 3898131, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_17 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Vila Real', capital: 'Vila Real', osm_relation_id: 3967823, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_18 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Viseu', capital: 'Viseu', osm_relation_id: 3920285, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::PT_20 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Azores', capital: 'Ponta Delgada', osm_relation_id: 1629146, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::PT_30 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::PT, english_name: 'Madeira', capital: 'Funchal', osm_relation_id: 1629145, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),


            // QATAR
            self::QA_DA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::QA, english_name: 'Ad Dawhah', capital: 'Doha', osm_relation_id: 27332, subdivision_type: BearCountrySubdivisionTypeEnum::MUNICIPALITY,
            ),
            self::QA_KH => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::QA, english_name: 'Al Khor', capital: 'Al Khor', osm_relation_id: 27329, subdivision_type: BearCountrySubdivisionTypeEnum::MUNICIPALITY,
            ),
            self::QA_MS => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::QA, english_name: 'Al Shamal', capital: 'Madinat ash Shamal', osm_relation_id: 27335, subdivision_type: BearCountrySubdivisionTypeEnum::MUNICIPALITY,
            ),
            self::QA_RA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::QA, english_name: 'Al Rayyan', capital: 'Ar Rayyan', osm_relation_id: 27331, subdivision_type: BearCountrySubdivisionTypeEnum::MUNICIPALITY,
            ),
            self::QA_SH => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::QA, english_name: 'Al-Shahaniya', capital: 'Al-Shahaniya', osm_relation_id: 27330, subdivision_type: BearCountrySubdivisionTypeEnum::MUNICIPALITY,
            ),
            self::QA_US => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::QA, english_name: 'Umm Salal', capital: 'Umm Salal', osm_relation_id: 27328, subdivision_type: BearCountrySubdivisionTypeEnum::MUNICIPALITY,
            ),
            self::QA_WA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::QA, english_name: 'Al Wakrah', capital: 'Al Wakrah', osm_relation_id: 27337, subdivision_type: BearCountrySubdivisionTypeEnum::MUNICIPALITY,
            ),
            self::QA_ZA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::QA, english_name: 'Al Daayen', capital: 'Umm Qarn', osm_relation_id: 11146904, subdivision_type: BearCountrySubdivisionTypeEnum::MUNICIPALITY,
            ),


            // SAUDI ARABIA
            self::SA_01 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SA, english_name: 'Riyadh', capital: 'Riyadh', osm_relation_id: 3678409, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::SA_02 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SA, english_name: 'Makkah', capital: 'Makkah', osm_relation_id: 3678639, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::SA_03 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SA, english_name: 'Medina', capital: 'Madinah', osm_relation_id: 3679869, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::SA_04 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SA, english_name: 'Eastern', capital: 'Dammam', osm_relation_id: 3667294, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::SA_05 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SA, english_name: 'Al-Qassim', capital: 'Buraidah', osm_relation_id: 3679872, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::SA_06 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SA, english_name: 'Ha\'il', capital: 'Ha\'il', osm_relation_id: 3676707, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::SA_07 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SA, english_name: 'Tabuk', capital: 'Tabuk', osm_relation_id: 3679867, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::SA_08 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SA, english_name: 'Northern Borders', capital: 'Arar', osm_relation_id: 3673927, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::SA_09 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SA, english_name: 'Jazan', capital: 'Jazan', osm_relation_id: 3679903, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::SA_10 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SA, english_name: 'Najran', capital: 'Najran', osm_relation_id: 3667317, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::SA_11 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SA, english_name: 'Al Bahah', capital: 'Al Bahah', osm_relation_id: 3679888, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::SA_12 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SA, english_name: 'Al Jawf', capital: 'Sakaka', osm_relation_id: 3842543, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),
            self::SA_14 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SA, english_name: 'Asir', capital: 'Abha', osm_relation_id: 3678598, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
            ),


            // SWEDEN
            self::SE_AB => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Stockholm', capital: 'Stockholm', osm_relation_id: 54391, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_AC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Västerbotten', capital: 'Umeå', osm_relation_id: 52825, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_BD => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Norrbotten', capital: 'Luleå', osm_relation_id: 52824, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_C => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Uppsala', capital: 'Uppsala', osm_relation_id: 54220, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_D => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Södermanland', capital: 'Nyköping', osm_relation_id: 54386, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_E => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Östergötland', capital: 'Linköping', osm_relation_id: 940675, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_F => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Jönköping', capital: 'Jönköping', osm_relation_id: 54374, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_G => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Kronoberg', capital: 'Växjö', osm_relation_id: 54412, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_H => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Kalmar', capital: 'Kalmar', osm_relation_id: 54417, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_I => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Gotland', capital: 'Visby', osm_relation_id: 941530, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_K => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Blekinge', capital: 'Karlskrona', osm_relation_id: 54413, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_M => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Skåne', capital: 'Malmö', osm_relation_id: 54409, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_N => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Halland', capital: 'Halmstad', osm_relation_id: 54403, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_O => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Västra Götaland', capital: 'Gothenburg', osm_relation_id: 54367, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_S => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Värmland', capital: 'Karlstad', osm_relation_id: 54223, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_T => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Örebro', capital: 'Örebro', osm_relation_id: 54222, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_U => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Västmanland', capital: 'Västerås', osm_relation_id: 54221, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_W => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Dalarna', capital: 'Falun', osm_relation_id: 52834, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_X => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Gävleborg', capital: 'Gävle', osm_relation_id: 52832, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_Y => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Västernorrland', capital: 'Härnösand', osm_relation_id: 52827, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),
            self::SE_Z => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SE, english_name: 'Jämtland', capital: 'Östersund', osm_relation_id: 52826, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
            ),


            // SINGAPORE
            self::SG_01 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SG, english_name: 'Central Singapore', capital: 'Singapore', osm_relation_id: 3831712, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::SG_02 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SG, english_name: 'North East', capital: 'Singapore', osm_relation_id: 3831713, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::SG_03 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SG, english_name: 'North West', capital: 'Singapore', osm_relation_id: 3831714, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::SG_04 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SG, english_name: 'South East', capital: 'Singapore', osm_relation_id: 3831715, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),
            self::SG_05 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::SG, english_name: 'South West', capital: 'Singapore', osm_relation_id: 3831716, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),


            // THE UNITED STATES
            self::US_AL => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Alabama', capital: 'Montgomery', osm_relation_id: 161950, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_AK => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Alaska', capital: 'Juneau', osm_relation_id: 1116270, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_AZ => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Arizona', capital: 'Phoenix', osm_relation_id: 162018, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_AR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Arkansas', capital: 'Little Rock', osm_relation_id: 161646, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_CA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'California', capital: 'Sacramento', osm_relation_id: 165475, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_CO => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Colorado', capital: 'Denver', osm_relation_id: 161961, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_CT => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Connecticut', capital: 'Hartford', osm_relation_id: 165794, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_DE => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Delaware', capital: 'Dover', osm_relation_id: 162110, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_FL => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Florida', capital: 'Tallahassee', osm_relation_id: 162050, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_GA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Georgia', capital: 'Atlanta', osm_relation_id: 161957, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_HI => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Hawaii', capital: 'Honolulu', osm_relation_id: 166563, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_ID => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Idaho', capital: 'Boise', osm_relation_id: 162116, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_IL => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Illinois', capital: 'Springfield', osm_relation_id: 122586, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_IN => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Indiana', capital: 'Indianapolis', osm_relation_id: 161816, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_IA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Iowa', capital: 'Des Moines', osm_relation_id: 161650, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_KS => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Kansas', capital: 'Topeka', osm_relation_id: 161644, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_KY => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Kentucky', capital: 'Frankfort', osm_relation_id: 161655, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_LA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Louisiana', capital: 'Baton Rouge', osm_relation_id: 224922, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_ME => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Maine', capital: 'Augusta', osm_relation_id: 63512, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_MD => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Maryland', capital: 'Annapolis', osm_relation_id: 162112, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_MA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Massachusetts', capital: 'Boston', osm_relation_id: 61315, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_MI => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Michigan', capital: 'Lansing', osm_relation_id: 165789, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_MN => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Minnesota', capital: 'St. Paul', osm_relation_id: 165471, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_MS => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Mississippi', capital: 'Jackson', osm_relation_id: 161943, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_MO => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Missouri', capital: 'Jefferson City', osm_relation_id: 161638, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_MT => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Montana', capital: 'Helena', osm_relation_id: 162115, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_NE => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Nebraska', capital: 'Lincoln', osm_relation_id: 161648, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_NV => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Nevada', capital: 'Carson City', osm_relation_id: 165473, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_NH => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'New Hampshire', capital: 'Concord', osm_relation_id: 67213, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_NJ => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'New Jersey', capital: 'Trenton', osm_relation_id: 224951, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_NM => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'New Mexico', capital: 'Santa Fe', osm_relation_id: 162014, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_NY => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'New York', capital: 'Albany', osm_relation_id: 61320, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_NC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'North Carolina', capital: 'Raleigh', osm_relation_id: 224045, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_ND => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'North Dakota', capital: 'Bismarck', osm_relation_id: 161653, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_OH => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Ohio', capital: 'Columbus', osm_relation_id: 162061, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_OK => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Oklahoma', capital: 'Oklahoma City', osm_relation_id: 161645, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_OR => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Oregon', capital: 'Salem', osm_relation_id: 165476, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_PA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Pennsylvania', capital: 'Harrisburg', osm_relation_id: 162109, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_RI => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Rhode Island', capital: 'Providence', osm_relation_id: 392915, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_SC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'South Carolina', capital: 'Columbia', osm_relation_id: 224040, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_SD => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'South Dakota', capital: 'Pierre', osm_relation_id: 161652, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_TN => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Tennessee', capital: 'Nashville', osm_relation_id: 161838, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_TX => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Texas', capital: 'Austin', osm_relation_id: 114690, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_UT => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Utah', capital: 'Salt Lake City', osm_relation_id: 161993, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_VT => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Vermont', capital: 'Montpelier', osm_relation_id: 60759, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_VA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Virginia', capital: 'Richmond', osm_relation_id: 224042, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_WA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Washington', capital: 'Olympia', osm_relation_id: 165479, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_WV => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'West Virginia', capital: 'Charleston', osm_relation_id: 162068, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_WI => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Wisconsin', capital: 'Madison', osm_relation_id: 165466, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_WY => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'Wyoming', capital: 'Cheyenne', osm_relation_id: 161991, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
            ),
            self::US_DC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::US, english_name: 'District of Columbia', capital: 'Washington', osm_relation_id: 162069, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
            ),


            // ZAMBIA
            self::ZM_01 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZM, english_name: 'Western', capital: 'Mongu', osm_relation_id: 318852, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZM_02 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZM, english_name: 'Central', capital: 'Kabwe', osm_relation_id: 318861, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZM_03 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZM, english_name: 'Eastern', capital: 'Chipata', osm_relation_id: 318865, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZM_04 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZM, english_name: 'Luapula', capital: 'Mansa', osm_relation_id: 318866, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZM_05 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZM, english_name: 'Northern', capital: 'Kasama', osm_relation_id: 318862, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZM_06 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZM, english_name: 'North-Western', capital: 'Solwezi', osm_relation_id: 318859, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZM_07 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZM, english_name: 'Southern', capital: 'Choma', osm_relation_id: 318863, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZM_08 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZM, english_name: 'Copperbelt', capital: 'Ndola', osm_relation_id: 318860, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZM_09 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZM, english_name: 'Lusaka', capital: 'Lusaka', osm_relation_id: 318864, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZM_10 => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZM, english_name: 'Muchinga', capital: 'Chinsali', osm_relation_id: 3668334, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),


            // ZIMBABWE
            self::ZW_BU => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZW, english_name: 'Bulawayo', capital: 'Bulawayo', osm_relation_id: 3337019, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZW_HA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZW, english_name: 'Harare', capital: 'Harare', osm_relation_id: 318467, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZW_MA => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZW, english_name: 'Manicaland', capital: 'Mutare', osm_relation_id: 3336975, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZW_MC => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZW, english_name: 'Mashonaland Central', capital: 'Bindura', osm_relation_id: 3336976, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZW_ME => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZW, english_name: 'Mashonaland East', capital: 'Marondera', osm_relation_id: 3336977, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZW_MI => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZW, english_name: 'Midlands', capital: 'Gweru', osm_relation_id: 3336982, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZW_MN => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZW, english_name: 'Matabeleland North', capital: 'Lupane', osm_relation_id: 3336980, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZW_MS => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZW, english_name: 'Matabeleland South', capital: 'Gwanda', osm_relation_id: 3336981, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZW_MV => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZW, english_name: 'Masvingo', capital: 'Masvingo', osm_relation_id: 3336979, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
            self::ZW_MW => new BearCountrySubdivisionData(
                country_cca2: BearCountryEnum::ZW, english_name: 'Mashonaland West', capital: 'Chinhoyi', osm_relation_id: 3336978, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
            ),
        };
    }


    public static function syncToDatabase(): void {
        foreach (self::cases() as $case) {
            LarabearCountrySubdivisionCrud::syncToDatabase($case);
        }
    }
}
