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
                iso_3166: 'AD-02', country_cca2: BearCountryEnum::AD, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
                english_name: 'Canillo', capital: 'Canillo', osm_relation_id: 2804754,
            ),
            self::AD_03 => new BearCountrySubdivisionData(
                iso_3166: 'AD-03', country_cca2: BearCountryEnum::AD, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
                english_name: 'Encamp', capital: 'Encamp', osm_relation_id: 2804755,
            ),
            self::AD_04 => new BearCountrySubdivisionData(
                iso_3166: 'AD-04', country_cca2: BearCountryEnum::AD, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
                english_name: 'La Massana', capital: 'La Massana', osm_relation_id: 2804757,
            ),
            self::AD_05 => new BearCountrySubdivisionData(
                iso_3166: 'AD-05', country_cca2: BearCountryEnum::AD, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
                english_name: 'Ordino', capital: 'Ordino', osm_relation_id: 2804758,
            ),
            self::AD_06 => new BearCountrySubdivisionData(
                iso_3166: 'AD-06', country_cca2: BearCountryEnum::AD, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
                english_name: 'Sant Julià de Lòria', capital: 'Sant Julià de Lòria', osm_relation_id: 2804759,
            ),
            self::AD_07 => new BearCountrySubdivisionData(
                iso_3166: 'AD-07', country_cca2: BearCountryEnum::AD, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
                english_name: 'Andorra la Vella', capital: 'Andorra la Vella', osm_relation_id: 2804753,
            ),
            self::AD_08 => new BearCountrySubdivisionData(
                iso_3166: 'AD-08', country_cca2: BearCountryEnum::AD, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
                english_name: 'Escaldes-Engordany', capital: 'Escaldes-Engordany', osm_relation_id: 2804756,
            ),

            
            // United Arab Emirates
            self::AE_AJ => new BearCountrySubdivisionData(
                iso_3166: 'AE-AJ', country_cca2: BearCountryEnum::AE, subdivision_type: BearCountrySubdivisionTypeEnum::EMIRATE,
                english_name: 'Ajman', capital: 'Ajman', osm_relation_id: 3766482,
            ),
            self::AE_AZ => new BearCountrySubdivisionData(
                iso_3166: 'AE-AZ', country_cca2: BearCountryEnum::AE, subdivision_type: BearCountrySubdivisionTypeEnum::EMIRATE,
                english_name: 'Abu Dhabi', capital: 'Abu Dhabi', osm_relation_id: 3766481,
            ),
            self::AE_DU => new BearCountrySubdivisionData(
                iso_3166: 'AE-DU', country_cca2: BearCountryEnum::AE, subdivision_type: BearCountrySubdivisionTypeEnum::EMIRATE,
                english_name: 'Dubai', capital: 'Dubai', osm_relation_id: 3766483,
            ),
            self::AE_FU => new BearCountrySubdivisionData(
                iso_3166: 'AE-FU', country_cca2: BearCountryEnum::AE, subdivision_type: BearCountrySubdivisionTypeEnum::EMIRATE,
                english_name: 'Fujairah', capital: 'Fujairah', osm_relation_id: 3766484,
            ),
            self::AE_RK => new BearCountrySubdivisionData(
                iso_3166: 'AE-RK', country_cca2: BearCountryEnum::AE, subdivision_type: BearCountrySubdivisionTypeEnum::EMIRATE,
                english_name: 'Ras Al Khaimah', capital: 'Ras Al Khaimah', osm_relation_id: 3766485,
            ),
            self::AE_SH => new BearCountrySubdivisionData(
                iso_3166: 'AE-SH', country_cca2: BearCountryEnum::AE, subdivision_type: BearCountrySubdivisionTypeEnum::EMIRATE,
                english_name: 'Sharjah', capital: 'Sharjah', osm_relation_id: 3766486,
            ),
            self::AE_UQ => new BearCountrySubdivisionData(
                iso_3166: 'AE-UQ', country_cca2: BearCountryEnum::AE, subdivision_type: BearCountrySubdivisionTypeEnum::EMIRATE,
                english_name: 'Umm Al Quwain', capital: 'Umm Al Quwain', osm_relation_id: 3766487,
            ),


            // AFGHANISTAN
            self::AF_BAL => new BearCountrySubdivisionData(
                iso_3166: 'AF-BAL', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Balkh', capital: 'Mazar-i-Sharif', osm_relation_id: 1674795,
            ),
            self::AF_BAM => new BearCountrySubdivisionData(
                iso_3166: 'AF-BAM', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Bamyan', capital: 'Bamyan', osm_relation_id: 1674849,
            ),
            self::AF_BDG => new BearCountrySubdivisionData(
                iso_3166: 'AF-BDG', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Badghis', capital: 'Qala i Naw', osm_relation_id: 1674811,
            ),
            self::AF_BDS => new BearCountrySubdivisionData(
                iso_3166: 'AF-BDS', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Badakhshan', capital: 'Feyzabad', osm_relation_id: 1674535,
            ),
            self::AF_BGL => new BearCountrySubdivisionData(
                iso_3166: 'AF-BGL', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Baghlan', capital: 'Puli Khumri', osm_relation_id: 1674785,
            ),
            self::AF_DAY => new BearCountrySubdivisionData(
                iso_3166: 'AF-DAY', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Daykundi', capital: 'Nili', osm_relation_id: 1674833,
            ),
            self::AF_FRA => new BearCountrySubdivisionData(
                iso_3166: 'AF-FRA', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Farah', capital: 'Farah', osm_relation_id: 1674802,
            ),
            self::AF_FYB => new BearCountrySubdivisionData(
                iso_3166: 'AF-FYB', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Faryab', capital: 'Maymana', osm_relation_id: 1674814,
            ),
            self::AF_GHA => new BearCountrySubdivisionData(
                iso_3166: 'AF-GHA', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Ghazni', capital: 'Ghazni', osm_relation_id: 1675048,
            ),
            self::AF_GHO => new BearCountrySubdivisionData(
                iso_3166: 'AF-GHO', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Ghor', capital: 'Chaghcharan', osm_relation_id: 1674816,
            ),
            self::AF_HEL => new BearCountrySubdivisionData(
                iso_3166: 'AF-HEL', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Helmand', capital: 'Lashkargah', osm_relation_id: 1674573,
            ),
            self::AF_HER => new BearCountrySubdivisionData(
                iso_3166: 'AF-HER', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Herat', capital: 'Herat', osm_relation_id: 1674803,
            ),
            self::AF_JOW => new BearCountrySubdivisionData(
                iso_3166: 'AF-JOW', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Jowzjan', capital: 'Sheberghan', osm_relation_id: 1674800,
            ),
            self::AF_KAB => new BearCountrySubdivisionData(
                iso_3166: 'AF-KAB', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Kabul', capital: 'Kabul', osm_relation_id: 1674876,
            ),
            self::AF_KAN => new BearCountrySubdivisionData(
                iso_3166: 'AF-KAN', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Kandahar', capital: 'Kandahar', osm_relation_id: 1674567,
            ),
            self::AF_KAP => new BearCountrySubdivisionData(
                iso_3166: 'AF-KAP', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Kapisa', capital: 'Mahmud-i-Raqi', osm_relation_id: 1674767,
            ),
            self::AF_KDZ => new BearCountrySubdivisionData(
                iso_3166: 'AF-KDZ', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Kunduz', capital: 'Kunduz', osm_relation_id: 1674564,
            ),
            self::AF_KHO => new BearCountrySubdivisionData(
                iso_3166: 'AF-KHO', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Khost', capital: 'Khost', osm_relation_id: 1674878,
            ),
            self::AF_KNR => new BearCountrySubdivisionData(
                iso_3166: 'AF-KNR', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Kunar', capital: 'Asadabad', osm_relation_id: 1674607,
            ),
            self::AF_LAG => new BearCountrySubdivisionData(
                iso_3166: 'AF-LAG', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Laghman', capital: 'Mehtar Lam', osm_relation_id: 1674766,
            ),
            self::AF_LOG => new BearCountrySubdivisionData(
                iso_3166: 'AF-LOG', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Logar', capital: 'Puli Alam', osm_relation_id: 1674874,
            ),
            self::AF_NAN => new BearCountrySubdivisionData(
                iso_3166: 'AF-NAN', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Nangarhar', capital: 'Jalalabad', osm_relation_id: 1674770,
            ),
            self::AF_NIM => new BearCountrySubdivisionData(
                iso_3166: 'AF-NIM', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Nimroz', capital: 'Zaranj', osm_relation_id: 1674664,
            ),
            self::AF_NUR => new BearCountrySubdivisionData(
                iso_3166: 'AF-NUR', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Nuristan', capital: 'Parun', osm_relation_id: 1674544,
            ),
            self::AF_PAN => new BearCountrySubdivisionData(
                iso_3166: 'AF-PAN', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Panjshir', capital: 'Bazarak', osm_relation_id: 1675032,
            ),
            self::AF_PAR => new BearCountrySubdivisionData(
                iso_3166: 'AF-PAR', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Parwan', capital: 'Charikar', osm_relation_id: 1674782,
            ),
            self::AF_PIA => new BearCountrySubdivisionData(
                iso_3166: 'AF-PIA', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Paktia', capital: 'Gardez', osm_relation_id: 1674882,
            ),
            self::AF_PKA => new BearCountrySubdivisionData(
                iso_3166: 'AF-PKA', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Paktika', capital: 'Sharana', osm_relation_id: 1675047,
            ),
            self::AF_SAM => new BearCountrySubdivisionData(
                iso_3166: 'AF-SAM', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Samangan', capital: 'Aybak', osm_relation_id: 1674791,
            ),
            self::AF_SAR => new BearCountrySubdivisionData(
                iso_3166: 'AF-SAR', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Sar-e Pol', capital: 'Sar-e Pol', osm_relation_id: 1674994,
            ),
            self::AF_TAK => new BearCountrySubdivisionData(
                iso_3166: 'AF-TAK', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Takhar', capital: 'Taloqan', osm_relation_id: 1674541,
            ),
            self::AF_URU => new BearCountrySubdivisionData(
                iso_3166: 'AF-URU', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Urozgan', capital: 'Tarin Kowt', osm_relation_id: 1674993,
            ),
            self::AF_WAR => new BearCountrySubdivisionData(
                iso_3166: 'AF-WAR', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Wardak', capital: 'Maidan Shahr', osm_relation_id: 1759757,
            ),
            self::AF_ZAB => new BearCountrySubdivisionData(
                iso_3166: 'AF-ZAB', country_cca2: BearCountryEnum::AF, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Zabul', capital: 'Qalat', osm_relation_id: 1674841,
            ),


            // ANTIGUA AND BARBUDA
            self::AG_03 => new BearCountrySubdivisionData(
                iso_3166: 'AG-03', country_cca2: BearCountryEnum::AG, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
                english_name: 'Saint George', capital: 'Fitches Creek', osm_relation_id: 9604933,
            ),
            self::AG_04 => new BearCountrySubdivisionData(
                iso_3166: 'AG-04', country_cca2: BearCountryEnum::AG, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
                english_name: 'Saint John', capital: 'St. John\'s', osm_relation_id: 9604932,
            ),
            self::AG_05 => new BearCountrySubdivisionData(
                iso_3166: 'AG-05', country_cca2: BearCountryEnum::AG, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
                english_name: 'Saint Mary', capital: 'Old Road', osm_relation_id: 9604457,
            ),
            self::AG_06 => new BearCountrySubdivisionData(
                iso_3166: 'AG-06', country_cca2: BearCountryEnum::AG, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
                english_name: 'Saint Paul', capital: 'Falmouth', osm_relation_id: 9604629,
            ),
            self::AG_07 => new BearCountrySubdivisionData(
                iso_3166: 'AG-07', country_cca2: BearCountryEnum::AG, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
                english_name: 'Saint Peter', capital: 'Parham', osm_relation_id: 9604794,
            ),
            self::AG_08 => new BearCountrySubdivisionData(
                iso_3166: 'AG-08', country_cca2: BearCountryEnum::AG, subdivision_type: BearCountrySubdivisionTypeEnum::PARISH,
                english_name: 'Saint Philip', capital: 'St. Philip\'s', osm_relation_id: 9604456,
            ),
            self::AG_10 => new BearCountrySubdivisionData(
                iso_3166: 'AG-10', country_cca2: BearCountryEnum::AG, subdivision_type: BearCountrySubdivisionTypeEnum::DEPENDENCY,
                english_name: 'Barbuda', capital: 'Codrington', osm_relation_id: 7742426,
            ),
            self::AG_11 => new BearCountrySubdivisionData(
                iso_3166: 'AG-11', country_cca2: BearCountryEnum::AG, subdivision_type: BearCountrySubdivisionTypeEnum::DEPENDENCY,
                english_name: 'Redonda', capital: '', osm_relation_id: 7742427,
            ),


            // ALBANIA
            self::AL_01 => new BearCountrySubdivisionData(
                iso_3166: 'AL-01', country_cca2: BearCountryEnum::AL, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Berat', capital: 'Berat', osm_relation_id: 1252289,
            ),
            self::AL_02 => new BearCountrySubdivisionData(
                iso_3166: 'AL-02', country_cca2: BearCountryEnum::AL, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Durrës', capital: 'Durrës', osm_relation_id: 1249872,
            ),
            self::AL_03 => new BearCountrySubdivisionData(
                iso_3166: 'AL-03', country_cca2: BearCountryEnum::AL, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Elbasan', capital: 'Elbasan', osm_relation_id: 1250609,
            ),
            self::AL_04 => new BearCountrySubdivisionData(
                iso_3166: 'AL-04', country_cca2: BearCountryEnum::AL, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Fier', capital: 'Fier', osm_relation_id: 1251469,
            ),
            self::AL_05 => new BearCountrySubdivisionData(
                iso_3166: 'AL-05', country_cca2: BearCountryEnum::AL, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Gjirokastër', capital: 'Gjirokastër', osm_relation_id: 1253915,
            ),
            self::AL_06 => new BearCountrySubdivisionData(
                iso_3166: 'AL-06', country_cca2: BearCountryEnum::AL, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Korçë', capital: 'Korçë', osm_relation_id: 1252589,
            ),
            self::AL_07 => new BearCountrySubdivisionData(
                iso_3166: 'AL-07', country_cca2: BearCountryEnum::AL, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Kukës', capital: 'Kukës', osm_relation_id: 1759889,
            ),
            self::AL_08 => new BearCountrySubdivisionData(
                iso_3166: 'AL-08', country_cca2: BearCountryEnum::AL, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Lezhë', capital: 'Lezhë', osm_relation_id: 1248935,
            ),
            self::AL_09 => new BearCountrySubdivisionData(
                iso_3166: 'AL-09', country_cca2: BearCountryEnum::AL, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Dibër', capital: 'Dibër', osm_relation_id: 1249567,
            ),
            self::AL_10 => new BearCountrySubdivisionData(
                iso_3166: 'AL-10', country_cca2: BearCountryEnum::AL, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Shkodër', capital: 'Shkodër', osm_relation_id: 1248293,
            ),
            self::AL_11 => new BearCountrySubdivisionData(
                iso_3166: 'AL-11', country_cca2: BearCountryEnum::AL, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Tiranë', capital: 'Tiranë', osm_relation_id: 1250098,
            ),
            self::AL_12 => new BearCountrySubdivisionData(
                iso_3166: 'AL-12', country_cca2: BearCountryEnum::AL, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Vlorë', capital: 'Vlorë', osm_relation_id: 1255521,
            ),


            // ARMENIA
            self::AM_AG => new BearCountrySubdivisionData(
                iso_3166: 'AM-AG', country_cca2: BearCountryEnum::AM, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Aragatsotn', capital: 'Ashtarak', osm_relation_id: 3917110,
            ),
            self::AM_AR => new BearCountrySubdivisionData(
                iso_3166: 'AM-AR', country_cca2: BearCountryEnum::AM, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Ararat', capital: 'Artashat', osm_relation_id: 364083,
            ),
            self::AM_AV => new BearCountrySubdivisionData(
                iso_3166: 'AM-AV', country_cca2: BearCountryEnum::AM, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Armavir', capital: 'Armavir', osm_relation_id: 364086,
            ),
            self::AM_ER => new BearCountrySubdivisionData(
                iso_3166: 'AM-ER', country_cca2: BearCountryEnum::AM, subdivision_type: BearCountrySubdivisionTypeEnum::CITY,
                english_name: 'Yerevan', capital: 'Yerevan', osm_relation_id: 364087,
            ),
            self::AM_GR => new BearCountrySubdivisionData(
                iso_3166: 'AM-GR', country_cca2: BearCountryEnum::AM, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Gegharkunik', capital: 'Gavar', osm_relation_id: 364080,
            ),
            self::AM_KT => new BearCountrySubdivisionData(
                iso_3166: 'AM-KT', country_cca2: BearCountryEnum::AM, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Kotayk', capital: 'Hrazdan', osm_relation_id: 364084,
            ),
            self::AM_LO => new BearCountrySubdivisionData(
                iso_3166: 'AM-LO', country_cca2: BearCountryEnum::AM, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Lori', capital: 'Vanadzor', osm_relation_id: 364078,
            ),
            self::AM_SH => new BearCountrySubdivisionData(
                iso_3166: 'AM-SH', country_cca2: BearCountryEnum::AM, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Shirak', capital: 'Gyumri', osm_relation_id: 364077,
            ),
            self::AM_SU => new BearCountrySubdivisionData(
                iso_3166: 'AM-SU', country_cca2: BearCountryEnum::AM, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Syunik', capital: 'Kapan', osm_relation_id: 364082,
            ),
            self::AM_TV => new BearCountrySubdivisionData(
                iso_3166: 'AM-TV', country_cca2: BearCountryEnum::AM, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Tavush', capital: 'Ijevan', osm_relation_id: 364079,
            ),
            self::AM_VD => new BearCountrySubdivisionData(
                iso_3166: 'AM-VD', country_cca2: BearCountryEnum::AM, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Vayots Dzor', capital: 'Yeghegnadzor', osm_relation_id: 364081,
            ),


            // Austria
            self::AT_1 => new BearCountrySubdivisionData(
                iso_3166: 'AT-1', country_cca2: BearCountryEnum::AT, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Burgenland', capital: 'Eisenstadt', osm_relation_id: 76909,
            ),
            self::AT_2 => new BearCountrySubdivisionData(
                iso_3166: 'AT-2', country_cca2: BearCountryEnum::AT, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Carinthia', capital: 'Klagenfurt', osm_relation_id: 52345,
            ),
            self::AT_3 => new BearCountrySubdivisionData(
                iso_3166: 'AT-3', country_cca2: BearCountryEnum::AT, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Lower Austria', capital: 'Sankt Pölten', osm_relation_id: 77189,
            ),
            self::AT_4 => new BearCountrySubdivisionData(
                iso_3166: 'AT-4', country_cca2: BearCountryEnum::AT, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Upper Austria', capital: 'Linz', osm_relation_id: 102303,
            ),
            self::AT_5 => new BearCountrySubdivisionData(
                iso_3166: 'AT-5', country_cca2: BearCountryEnum::AT, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Salzburg', capital: 'Salzburg', osm_relation_id: 86539,
            ),
            self::AT_6 => new BearCountrySubdivisionData(
                iso_3166: 'AT-6', country_cca2: BearCountryEnum::AT, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Styria', capital: 'Graz', osm_relation_id: 35183,
            ),
            self::AT_7 => new BearCountrySubdivisionData(
                iso_3166: 'AT-7', country_cca2: BearCountryEnum::AT, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Tyrol', capital: 'Innsbruck', osm_relation_id: 52343,
            ),
            self::AT_8 => new BearCountrySubdivisionData(
                iso_3166: 'AT-8', country_cca2: BearCountryEnum::AT, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Vorarlberg', capital: 'Bregenz', osm_relation_id: 74942,
            ),
            self::AT_9 => new BearCountrySubdivisionData(
                iso_3166: 'AT-9', country_cca2: BearCountryEnum::AT, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Vienna', capital: 'Vienna', osm_relation_id: 109166,
            ),


            // AUSTRALIA
            self::AU_ACT => new BearCountrySubdivisionData(
                iso_3166: 'AU-ACT', country_cca2: BearCountryEnum::AU, subdivision_type: BearCountrySubdivisionTypeEnum::TERRITORY,
                english_name: 'Australian Capital Territory', capital: 'Canberra', osm_relation_id: 2354197,
            ),
            self::AU_NSW => new BearCountrySubdivisionData(
                iso_3166: 'AU-NSW', country_cca2: BearCountryEnum::AU, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'New South Wales', capital: 'Sydney', osm_relation_id: 2316593,
            ),
            self::AU_NT => new BearCountrySubdivisionData(
                iso_3166: 'AU-NT', country_cca2: BearCountryEnum::AU, subdivision_type: BearCountrySubdivisionTypeEnum::TERRITORY,
                english_name: 'Northern Territory', capital: 'Darwin', osm_relation_id: 2316594,
            ),
            self::AU_QLD => new BearCountrySubdivisionData(
                iso_3166: 'AU-QLD', country_cca2: BearCountryEnum::AU, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Queensland', capital: 'Brisbane', osm_relation_id: 2316595,
            ),
            self::AU_SA => new BearCountrySubdivisionData(
                iso_3166: 'AU-SA', country_cca2: BearCountryEnum::AU, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'South Australia', capital: 'Adelaide', osm_relation_id: 2316596,
            ),
            self::AU_TAS => new BearCountrySubdivisionData(
                iso_3166: 'AU-TAS', country_cca2: BearCountryEnum::AU, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Tasmania', capital: 'Hobart', osm_relation_id: 2369652,
            ),
            self::AU_VIC => new BearCountrySubdivisionData(
                iso_3166: 'AU-VIC', country_cca2: BearCountryEnum::AU, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Victoria', capital: 'Melbourne', osm_relation_id: 2316741,
            ),
            self::AU_WA => new BearCountrySubdivisionData(
                iso_3166: 'AU-WA', country_cca2: BearCountryEnum::AU, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Western Australia', capital: 'Perth', osm_relation_id: 2316598,
            ),


            // BELGIUM
            self::BE_BRU => new BearCountrySubdivisionData(
                iso_3166: 'BE-BRU', country_cca2: BearCountryEnum::BE, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Brussels Capital Region', capital: 'Brussels', osm_relation_id: 54094,
            ),
            self::BE_VLG => new BearCountrySubdivisionData(
                iso_3166: 'BE-VLG', country_cca2: BearCountryEnum::BE, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Flanders', capital: 'Brussels', osm_relation_id: 53134,
            ),
            self::BE_WAL => new BearCountrySubdivisionData(
                iso_3166: 'BE-WAL', country_cca2: BearCountryEnum::BE, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Wallonia', capital: 'Namur', osm_relation_id: 90348,
            ),


            // BRAZIL
            self::BR_AC => new BearCountrySubdivisionData(
                iso_3166: 'BR-AC', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Acre', capital: 'Rio Branco', osm_relation_id: 326266,
            ),
            self::BR_AL => new BearCountrySubdivisionData(
                iso_3166: 'BR-AL', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Alagoas', capital: 'Maceió', osm_relation_id: 303781,
            ),
            self::BR_AM => new BearCountrySubdivisionData(
                iso_3166: 'BR-AM', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Amazonas', capital: 'Manaus', osm_relation_id: 332476,
            ),
            self::BR_AP => new BearCountrySubdivisionData(
                iso_3166: 'BR-AP', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Amapá', capital: 'Macapá', osm_relation_id: 331463,
            ),
            self::BR_BA => new BearCountrySubdivisionData(
                iso_3166: 'BR-BA', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Bahia', capital: 'Salvador', osm_relation_id: 362413,
            ),
            self::BR_CE => new BearCountrySubdivisionData(
                iso_3166: 'BR-CE', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Ceará', capital: 'Fortaleza', osm_relation_id: 302635,
            ),
            self::BR_DF => new BearCountrySubdivisionData(
                iso_3166: 'BR-DF', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Federal District', capital: 'Brasília', osm_relation_id: 421151,
            ),
            self::BR_ES => new BearCountrySubdivisionData(
                iso_3166: 'BR-ES', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Espírito Santo', capital: 'Vitória', osm_relation_id: 54882,
            ),
            self::BR_GO => new BearCountrySubdivisionData(
                iso_3166: 'BR-GO', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Goiás', capital: 'Goiânia', osm_relation_id: 334443,
            ),
            self::BR_MA => new BearCountrySubdivisionData(
                iso_3166: 'BR-MA', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Maranhão', capital: 'São Luís', osm_relation_id: 332924,
            ),
            self::BR_MT => new BearCountrySubdivisionData(
                iso_3166: 'BR-MT', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Mato Grosso', capital: 'Cuiabá', osm_relation_id: 333597,
            ),
            self::BR_MS => new BearCountrySubdivisionData(
                iso_3166: 'BR-MS', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Mato Grosso do Sul', capital: 'Campo Grande', osm_relation_id: 334051,
            ),
            self::BR_MG => new BearCountrySubdivisionData(
                iso_3166: 'BR-MG', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Minas Gerais', capital: 'Belo Horizonte', osm_relation_id: 315173,
            ),
            self::BR_PA => new BearCountrySubdivisionData(
                iso_3166: 'BR-PA', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Pará', capital: 'Belém', osm_relation_id: 185579,
            ),
            self::BR_PB => new BearCountrySubdivisionData(
                iso_3166: 'BR-PB', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Paraíba', capital: 'João Pessoa', osm_relation_id: 301464,
            ),
            self::BR_PR => new BearCountrySubdivisionData(
                iso_3166: 'BR-PR', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Paraná', capital: 'Curitiba', osm_relation_id: 297640,
            ),
            self::BR_PE => new BearCountrySubdivisionData(
                iso_3166: 'BR-PE', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Pernambuco', capital: 'Recife', osm_relation_id: 303702,
            ),
            self::BR_PI => new BearCountrySubdivisionData(
                iso_3166: 'BR-PI', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Piauí', capital: 'Teresina', osm_relation_id: 302819,
            ),
            self::BR_RJ => new BearCountrySubdivisionData(
                iso_3166: 'BR-RJ', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Rio de Janeiro', capital: 'Rio de Janeiro', osm_relation_id: 57963,
            ),
            self::BR_RN => new BearCountrySubdivisionData(
                iso_3166: 'BR-RN', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Rio Grande do Norte', capital: 'Natal', osm_relation_id: 301079,
            ),
            self::BR_RS => new BearCountrySubdivisionData(
                iso_3166: 'BR-RS', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Rio Grande do Sul', capital: 'Porto Alegre', osm_relation_id: 242620,
            ),
            self::BR_RO => new BearCountrySubdivisionData(
                iso_3166: 'BR-RO', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Rondônia', capital: 'Porto Velho', osm_relation_id: 325866,
            ),
            self::BR_RR => new BearCountrySubdivisionData(
                iso_3166: 'BR-RR', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Roraima', capital: 'Boa Vista', osm_relation_id: 326287,
            ),
            self::BR_SC => new BearCountrySubdivisionData(
                iso_3166: 'BR-SC', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Santa Catarina', capital: 'Florianópolis', osm_relation_id: 296584,
            ),
            self::BR_SP => new BearCountrySubdivisionData(
                iso_3166: 'BR-SP', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'São Paulo', capital: 'São Paulo', osm_relation_id: 298204,
            ),
            self::BR_SE => new BearCountrySubdivisionData(
                iso_3166: 'BR-SE', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Sergipe', capital: 'Aracaju', osm_relation_id: 303940,
            ),
            self::BR_TO => new BearCountrySubdivisionData(
                iso_3166: 'BR-TO', country_cca2: BearCountryEnum::BR, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Tocantins', capital: 'Palmas', osm_relation_id: 336819,
            ),


            // BELARUS
            self::BY_BR => new BearCountrySubdivisionData(
                iso_3166: 'BY-BR', country_cca2: BearCountryEnum::BY, subdivision_type: BearCountrySubdivisionTypeEnum::OBLAST,
                english_name: 'Brest', capital: 'Brest', osm_relation_id: 59189,
            ),
            self::BY_HM => new BearCountrySubdivisionData(
                iso_3166: 'BY-HM', country_cca2: BearCountryEnum::BY, subdivision_type: BearCountrySubdivisionTypeEnum::CITY,
                english_name: 'Minsk', capital: 'Minsk', osm_relation_id: 59195,
            ),
            self::BY_HO => new BearCountrySubdivisionData(
                iso_3166: 'BY-HO', country_cca2: BearCountryEnum::BY, subdivision_type: BearCountrySubdivisionTypeEnum::OBLAST,
                english_name: 'Gomel', capital: 'Gomel', osm_relation_id: 59161,
            ),
            self::BY_HR => new BearCountrySubdivisionData(
                iso_3166: 'BY-HR', country_cca2: BearCountryEnum::BY, subdivision_type: BearCountrySubdivisionTypeEnum::OBLAST,
                english_name: 'Grodno', capital: 'Grodno', osm_relation_id: 59275,
            ),
            self::BY_MA => new BearCountrySubdivisionData(
                iso_3166: 'BY-MA', country_cca2: BearCountryEnum::BY, subdivision_type: BearCountrySubdivisionTypeEnum::OBLAST,
                english_name: 'Mogilev', capital: 'Mogilev', osm_relation_id: 59162,
            ),
            self::BY_MI => new BearCountrySubdivisionData(
                iso_3166: 'BY-MI', country_cca2: BearCountryEnum::BY, subdivision_type: BearCountrySubdivisionTypeEnum::OBLAST,
                english_name: 'Minsk', capital: 'Minsk', osm_relation_id: 59752,
            ),
            self::BY_VI => new BearCountrySubdivisionData(
                iso_3166: 'BY-VI', country_cca2: BearCountryEnum::BY, subdivision_type: BearCountrySubdivisionTypeEnum::OBLAST,
                english_name: 'Vitebsk', capital: 'Vitebsk', osm_relation_id: 59506,
            ),


            // CANADA
            self::CA_AB => new BearCountrySubdivisionData(
                iso_3166: 'CA-AB', country_cca2: BearCountryEnum::CA, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Alberta', capital: 'Edmonton', osm_relation_id: 391186,
            ),
            self::CA_BC => new BearCountrySubdivisionData(
                iso_3166: 'CA-BC', country_cca2: BearCountryEnum::CA, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'British Columbia', capital: 'Victoria', osm_relation_id: 390867,
            ),
            self::CA_MB => new BearCountrySubdivisionData(
                iso_3166: 'CA-MB', country_cca2: BearCountryEnum::CA, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Manitoba', capital: 'Winnipeg', osm_relation_id: 390841,
            ),
            self::CA_NB => new BearCountrySubdivisionData(
                iso_3166: 'CA-NB', country_cca2: BearCountryEnum::CA, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'New Brunswick', capital: 'Fredericton', osm_relation_id: 68942,
            ),
            self::CA_NL => new BearCountrySubdivisionData(
                iso_3166: 'CA-NL', country_cca2: BearCountryEnum::CA, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Newfoundland and Labrador', capital: 'St. John\'s', osm_relation_id: 391196,
            ),
            self::CA_NS => new BearCountrySubdivisionData(
                iso_3166: 'CA-NS', country_cca2: BearCountryEnum::CA, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Nova Scotia', capital: 'Halifax', osm_relation_id: 390558,
            ),
            self::CA_NT => new BearCountrySubdivisionData(
                iso_3166: 'CA-NT', country_cca2: BearCountryEnum::CA, subdivision_type: BearCountrySubdivisionTypeEnum::TERRITORY,
                english_name: 'Northwest Territories', capital: 'Yellowknife', osm_relation_id: 391220,
            ),
            self::CA_NU => new BearCountrySubdivisionData(
                iso_3166: 'CA-NU', country_cca2: BearCountryEnum::CA, subdivision_type: BearCountrySubdivisionTypeEnum::TERRITORY,
                english_name: 'Nunavut', capital: 'Iqaluit', osm_relation_id: 390840,
            ),
            self::CA_ON => new BearCountrySubdivisionData(
                iso_3166: 'CA-ON', country_cca2: BearCountryEnum::CA, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Ontario', capital: 'Toronto', osm_relation_id: 68841,
            ),
            self::CA_PE => new BearCountrySubdivisionData(
                iso_3166: 'CA-PE', country_cca2: BearCountryEnum::CA, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Prince Edward Island', capital: 'Charlottetown', osm_relation_id: 391115,
            ),
            self::CA_QC => new BearCountrySubdivisionData(
                iso_3166: 'CA-QC', country_cca2: BearCountryEnum::CA, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Quebec', capital: 'Quebec City', osm_relation_id: 61549,
            ),
            self::CA_SK => new BearCountrySubdivisionData(
                iso_3166: 'CA-SK', country_cca2: BearCountryEnum::CA, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Saskatchewan', capital: 'Regina', osm_relation_id: 391178,
            ),
            self::CA_YT => new BearCountrySubdivisionData(
                iso_3166: 'CA-YT', country_cca2: BearCountryEnum::CA, subdivision_type: BearCountrySubdivisionTypeEnum::TERRITORY,
                english_name: 'Yukon', capital: 'Whitehorse', osm_relation_id: 391455,
            ),


            // COSTA RICA
            self::CR_A => new BearCountrySubdivisionData(
                iso_3166: 'CR-A', country_cca2: BearCountryEnum::CR, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Alajuela', capital: 'Alajuela', osm_relation_id: 3222933,
            ),
            self::CR_C => new BearCountrySubdivisionData(
                iso_3166: 'CR-C', country_cca2: BearCountryEnum::CR, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Cartago', capital: 'Cartago', osm_relation_id: 3223054,
            ),
            self::CR_G => new BearCountrySubdivisionData(
                iso_3166: 'CR-G', country_cca2: BearCountryEnum::CR, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Guanacaste', capital: 'Liberia', osm_relation_id: 3222919,
            ),
            self::CR_H => new BearCountrySubdivisionData(
                iso_3166: 'CR-H', country_cca2: BearCountryEnum::CR, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Heredia', capital: 'Heredia', osm_relation_id: 3221947,
            ),
            self::CR_L => new BearCountrySubdivisionData(
                iso_3166: 'CR-L', country_cca2: BearCountryEnum::CR, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Limón', capital: 'Limón', osm_relation_id: 3223056,
            ),
            self::CR_P => new BearCountrySubdivisionData(
                iso_3166: 'CR-P', country_cca2: BearCountryEnum::CR, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Puntarenas', capital: 'Puntarenas', osm_relation_id: 3223028,
            ),
            self::CR_SJ => new BearCountrySubdivisionData(
                iso_3166: 'CR-SJ', country_cca2: BearCountryEnum::CR, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'San José', capital: 'San José', osm_relation_id: 3223004,
            ),


            // CYPRUS
            self::CY_01 => new BearCountrySubdivisionData(
                iso_3166: 'CY-01', country_cca2: BearCountryEnum::CY, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Nicosia', capital: 'Nicosia', osm_relation_id: 3264382,
            ),
            self::CY_02 => new BearCountrySubdivisionData(
                iso_3166: 'CY-02', country_cca2: BearCountryEnum::CY, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Limassol', capital: 'Limassol', osm_relation_id: 2087230,
            ),
            self::CY_03 => new BearCountrySubdivisionData(
                iso_3166: 'CY-03', country_cca2: BearCountryEnum::CY, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Larnaca', capital: 'Larnaca', osm_relation_id: 2087229,
            ),
            self::CY_04 => new BearCountrySubdivisionData(
                iso_3166: 'CY-04', country_cca2: BearCountryEnum::CY, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Famagusta', capital: 'Famagusta', osm_relation_id: 3264447,
            ),
            self::CY_05 => new BearCountrySubdivisionData(
                iso_3166: 'CY-05', country_cca2: BearCountryEnum::CY, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Paphos', capital: 'Paphos', osm_relation_id: 3263729,
            ),
            self::CY_06 => new BearCountrySubdivisionData(
                iso_3166: 'CY-06', country_cca2: BearCountryEnum::CY, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Kyrenia', capital: 'Kyrenia', osm_relation_id: 3264494,
            ),


            // GERMANY
            self::DE_BW => new BearCountrySubdivisionData(
                iso_3166: 'DE-BW', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Baden-Württemberg', capital: 'Stuttgart', osm_relation_id: 62611,
            ),
            self::DE_BY => new BearCountrySubdivisionData(
                iso_3166: 'DE-BY', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Bavaria', capital: 'Munich', osm_relation_id: 2145268,
            ),
            self::DE_BE => new BearCountrySubdivisionData(
                iso_3166: 'DE-BE', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Berlin', capital: 'Berlin', osm_relation_id: 62422,
            ),
            self::DE_BB => new BearCountrySubdivisionData(
                iso_3166: 'DE-BB', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Brandenburg', capital: 'Potsdam', osm_relation_id: 62504,
            ),
            self::DE_HB => new BearCountrySubdivisionData(
                iso_3166: 'DE-HB', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Bremen', capital: 'Bremen', osm_relation_id: 62718,
            ),
            self::DE_HH => new BearCountrySubdivisionData(
                iso_3166: 'DE-HH', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Hamburg', capital: 'Hamburg', osm_relation_id: 62782,
            ),
            self::DE_HE => new BearCountrySubdivisionData(
                iso_3166: 'DE-HE', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Hesse', capital: 'Wiesbaden', osm_relation_id: 62650,
            ),
            self::DE_MV => new BearCountrySubdivisionData(
                iso_3166: 'DE-MV', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Mecklenburg-Vorpommern', capital: 'Schwerin', osm_relation_id: 28322,
            ),
            self::DE_NI => new BearCountrySubdivisionData(
                iso_3166: 'DE-NI', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Lower Saxony', capital: 'Hanover', osm_relation_id: 62771,
            ),
            self::DE_NW => new BearCountrySubdivisionData(
                iso_3166: 'DE-NW', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'North Rhine-Westphalia', capital: 'Düsseldorf', osm_relation_id: 62761,
            ),
            self::DE_RP => new BearCountrySubdivisionData(
                iso_3166: 'DE-RP', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Rhineland-Palatinate', capital: 'Mainz', osm_relation_id: 62341,
            ),
            self::DE_SL => new BearCountrySubdivisionData(
                iso_3166: 'DE-SL', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Saarland', capital: 'Saarbrücken', osm_relation_id: 62372,
            ),
            self::DE_SN => new BearCountrySubdivisionData(
                iso_3166: 'DE-SN', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Saxony', capital: 'Dresden', osm_relation_id: 62467,
            ),
            self::DE_ST => new BearCountrySubdivisionData(
                iso_3166: 'DE-ST', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Saxony-Anhalt', capital: 'Magdeburg', osm_relation_id: 62607,
            ),
            self::DE_SH => new BearCountrySubdivisionData(
                iso_3166: 'DE-SH', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Schleswig-Holstein', capital: 'Kiel', osm_relation_id: 51529,
            ),
            self::DE_TH => new BearCountrySubdivisionData(
                iso_3166: 'DE-TH', country_cca2: BearCountryEnum::DE, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Thuringia', capital: 'Erfurt', osm_relation_id: 62366,
            ),


            // DENMARK
            self::DK_81 => new BearCountrySubdivisionData(
                iso_3166: 'DK-81', country_cca2: BearCountryEnum::DK, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'North Denmark', capital: 'Aalborg', osm_relation_id: 1319936,
            ),
            self::DK_82 => new BearCountrySubdivisionData(
                iso_3166: 'DK-82', country_cca2: BearCountryEnum::DK, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Central Denmark', capital: 'Viborg', osm_relation_id: 1319935,
            ),
            self::DK_83 => new BearCountrySubdivisionData(
                iso_3166: 'DK-83', country_cca2: BearCountryEnum::DK, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Southern Denmark', capital: 'Vejen', osm_relation_id: 1319978,
            ),
            self::DK_84 => new BearCountrySubdivisionData(
                iso_3166: 'DK-84', country_cca2: BearCountryEnum::DK, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Capital Region', capital: 'Hillerød', osm_relation_id: 1320608,
            ),
            self::DK_85 => new BearCountrySubdivisionData(
                iso_3166: 'DK-85', country_cca2: BearCountryEnum::DK, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Zealand', capital: 'Sorø', osm_relation_id: 1320370,
            ),


            // SPAIN
            self::ES_AN => new BearCountrySubdivisionData(
                iso_3166: 'ES-AN', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'Andalusia', capital: 'Seville', osm_relation_id: 349044,
            ),
            self::ES_AR => new BearCountrySubdivisionData(
                iso_3166: 'ES-AR', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'Aragon', capital: 'Zaragoza', osm_relation_id: 349045,
            ),
            self::ES_AS => new BearCountrySubdivisionData(
                iso_3166: 'ES-AS', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'Asturias', capital: 'Oviedo', osm_relation_id: 349033,
            ),
            self::ES_CB => new BearCountrySubdivisionData(
                iso_3166: 'ES-CB', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'Cantabria', capital: 'Santander', osm_relation_id: 349013,
            ),
            self::ES_CE => new BearCountrySubdivisionData(
                iso_3166: 'ES-CE', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::CITY,
                english_name: 'Ceuta', capital: 'Ceuta', osm_relation_id: 1154756,
            ),
            self::ES_CL => new BearCountrySubdivisionData(
                iso_3166: 'ES-CL', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'Castile and León', capital: 'Valladolid', osm_relation_id: 349041,
            ),
            self::ES_CM => new BearCountrySubdivisionData(
                iso_3166: 'ES-CM', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'Castile-La Mancha', capital: 'Toledo', osm_relation_id: 349052,
            ),
            self::ES_CN => new BearCountrySubdivisionData(
                iso_3166: 'ES-CN', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'Canary Islands', capital: 'Las Palmas', osm_relation_id: 349048,
            ),
            self::ES_CT => new BearCountrySubdivisionData(
                iso_3166: 'ES-CT', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'Catalonia', capital: 'Barcelona', osm_relation_id: 349053,
            ),
            self::ES_EX => new BearCountrySubdivisionData(
                iso_3166: 'ES-EX', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'Extremadura', capital: 'Mérida', osm_relation_id: 349050,
            ),
            self::ES_GA => new BearCountrySubdivisionData(
                iso_3166: 'ES-GA', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'Galicia', capital: 'Santiago de Compostela', osm_relation_id: 349036,
            ),
            self::ES_IB => new BearCountrySubdivisionData(
                iso_3166: 'ES-IB', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'Balearic Islands', capital: 'Palma', osm_relation_id: 348981,
            ),
            self::ES_MC => new BearCountrySubdivisionData(
                iso_3166: 'ES-MC', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'Region of Murcia', capital: 'Murcia', osm_relation_id: 349047,
            ),
            self::ES_MD => new BearCountrySubdivisionData(
                iso_3166: 'ES-MD', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'Madrid', capital: 'Madrid', osm_relation_id: 349055,
            ),
            self::ES_ML => new BearCountrySubdivisionData(
                iso_3166: 'ES-ML', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::CITY,
                english_name: 'Melilla', capital: 'Melilla', osm_relation_id: 1154757,
            ),
            self::ES_NC => new BearCountrySubdivisionData(
                iso_3166: 'ES-NC', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'Navarre', capital: 'Pamplona', osm_relation_id: 349027,
            ),
            self::ES_PV => new BearCountrySubdivisionData(
                iso_3166: 'ES-PV', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'Basque Country', capital: 'Vitoria-Gasteiz', osm_relation_id: 349042,
            ),
            self::ES_RI => new BearCountrySubdivisionData(
                iso_3166: 'ES-RI', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'La Rioja', capital: 'Logroño', osm_relation_id: 348991,
            ),
            self::ES_VC => new BearCountrySubdivisionData(
                iso_3166: 'ES-VC', country_cca2: BearCountryEnum::ES, subdivision_type: BearCountrySubdivisionTypeEnum::COMMUNITY,
                english_name: 'Valencia', capital: 'Valencia', osm_relation_id: 349043,
            ),


            // FRANCE
            self::FR_ARA => new BearCountrySubdivisionData(
                iso_3166: 'FR-ARA', country_cca2: BearCountryEnum::FR, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Auvergne-Rhône-Alps', capital: 'Lyon', osm_relation_id: 3792877,
            ),
            self::FR_BFC => new BearCountrySubdivisionData(
                iso_3166: 'FR-BFC', country_cca2: BearCountryEnum::FR, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Burgundy-Free-County', capital: 'Dijon', osm_relation_id: 3792878,
            ),
            self::FR_BRE => new BearCountrySubdivisionData(
                iso_3166: 'FR-BRE', country_cca2: BearCountryEnum::FR, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Brittany', capital: 'Rennes', osm_relation_id: 102740,
            ),
            self::FR_CVL => new BearCountrySubdivisionData(
                iso_3166: 'FR-CVL', country_cca2: BearCountryEnum::FR, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Central-Vale of the Loire', capital: 'Orléans', osm_relation_id: 8640,
            ),
            self::FR_COR => new BearCountrySubdivisionData(
                iso_3166: 'FR-COR', country_cca2: BearCountryEnum::FR, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Corsica', capital: 'Ajaccio', osm_relation_id: 76910,
            ),
            self::FR_GES => new BearCountrySubdivisionData(
                iso_3166: 'FR-GES', country_cca2: BearCountryEnum::FR, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Greater East', capital: 'Strasbourg', osm_relation_id: 3792876,
            ),
            self::FR_HDF => new BearCountrySubdivisionData(
                iso_3166: 'FR-HDF', country_cca2: BearCountryEnum::FR, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Heights-of-France', capital: 'Lille', osm_relation_id: 4217435,
            ),
            self::FR_IDF => new BearCountrySubdivisionData(
                iso_3166: 'FR-IDF', country_cca2: BearCountryEnum::FR, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Isle-of-France', capital: 'Paris', osm_relation_id: 8649,
            ),
            self::FR_NOR => new BearCountrySubdivisionData(
                iso_3166: 'FR-NOR', country_cca2: BearCountryEnum::FR, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Normandy', capital: 'Rouen', osm_relation_id: 3793170,
            ),
            self::FR_NAQ => new BearCountrySubdivisionData(
                iso_3166: 'FR-NAQ', country_cca2: BearCountryEnum::FR, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'New Aquitaine', capital: 'Bordeaux', osm_relation_id: 3792880,
            ),
            self::FR_OCC => new BearCountrySubdivisionData(
                iso_3166: 'FR-OCC', country_cca2: BearCountryEnum::FR, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Occitania', capital: 'Toulouse', osm_relation_id: 3792883,
            ),
            self::FR_PDL => new BearCountrySubdivisionData(
                iso_3166: 'FR-PDL', country_cca2: BearCountryEnum::FR, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Lands of the Loire', capital: 'Nantes', osm_relation_id: 8650,
            ),
            self::FR_PAC => new BearCountrySubdivisionData(
                iso_3166: 'FR-PAC', country_cca2: BearCountryEnum::FR, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Provence-Alps-Azure Coast', capital: 'Marseille', osm_relation_id: 8654,
            ),


            // THE UNITED KINGDOM
            self::GB_ENG => new BearCountrySubdivisionData(
                iso_3166: 'GB-ENG', country_cca2: BearCountryEnum::GB, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTRY,
                english_name: 'England', capital: 'London', osm_relation_id: 58447,
            ),
            self::GB_NIR => new BearCountrySubdivisionData(
                iso_3166: 'GB-NIR', country_cca2: BearCountryEnum::GB, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Northern Ireland', capital: 'Belfast', osm_relation_id: 156393,
            ),
            self::GB_SCT => new BearCountrySubdivisionData(
                iso_3166: 'GB-SCT', country_cca2: BearCountryEnum::GB, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTRY,
                english_name: 'Scotland', capital: 'Edinburgh', osm_relation_id: 58446,
            ),
            self::GB_WLS => new BearCountrySubdivisionData(
                iso_3166: 'GB-WLS', country_cca2: BearCountryEnum::GB, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTRY,
                english_name: 'Wales', capital: 'Cardiff', osm_relation_id: 58437,
            ),


            // IRELAND
            self::IE_C => new BearCountrySubdivisionData(
                iso_3166: 'IE-C', country_cca2: BearCountryEnum::IE, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Connacht', capital: 'Galway', osm_relation_id: 278721,
            ),
            self::IE_L => new BearCountrySubdivisionData(
                iso_3166: 'IE-L', country_cca2: BearCountryEnum::IE, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Leinster', capital: 'Dublin', osm_relation_id: 278746,
            ),
            self::IE_M => new BearCountrySubdivisionData(
                iso_3166: 'IE-M', country_cca2: BearCountryEnum::IE, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Munster', capital: 'Cork', osm_relation_id: 278750,
            ),
            self::IE_U => new BearCountrySubdivisionData(
                iso_3166: 'IE-U', country_cca2: BearCountryEnum::IE, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Ulster', capital: 'Belfast', osm_relation_id: 278664,
            ),


            // ITALY
            self::IT_21 => new BearCountrySubdivisionData(
                iso_3166: 'IT-21', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Piedmont', capital: 'Turin', osm_relation_id: 44874,
            ),
            self::IT_23 => new BearCountrySubdivisionData(
                iso_3166: 'IT-23', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Aosta Valley', capital: 'Aosta', osm_relation_id: 45155,
            ),
            self::IT_25 => new BearCountrySubdivisionData(
                iso_3166: 'IT-25', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Lombardy', capital: 'Milan', osm_relation_id: 44879,
            ),
            self::IT_32 => new BearCountrySubdivisionData(
                iso_3166: 'IT-32', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Trentino-South Tyrol', capital: 'Trento', osm_relation_id: 45757,
            ),
            self::IT_34 => new BearCountrySubdivisionData(
                iso_3166: 'IT-34', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Veneto', capital: 'Venice', osm_relation_id: 43648,
            ),
            self::IT_36 => new BearCountrySubdivisionData(
                iso_3166: 'IT-36', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Friuli-Venezia Giulia', capital: 'Trieste', osm_relation_id: 179296,
            ),
            self::IT_42 => new BearCountrySubdivisionData(
                iso_3166: 'IT-42', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Liguria', capital: 'Genoa', osm_relation_id: 301482,
            ),
            self::IT_45 => new BearCountrySubdivisionData(
                iso_3166: 'IT-45', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Emilia-Romagna', capital: 'Bologna', osm_relation_id: 42611,
            ),
            self::IT_52 => new BearCountrySubdivisionData(
                iso_3166: 'IT-52', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Tuscany', capital: 'Florence', osm_relation_id: 41977,
            ),
            self::IT_55 => new BearCountrySubdivisionData(
                iso_3166: 'IT-55', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Umbria', capital: 'Perugia', osm_relation_id: 42004,
            ),
            self::IT_57 => new BearCountrySubdivisionData(
                iso_3166: 'IT-57', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Marche', capital: 'Ancona', osm_relation_id: 53060,
            ),
            self::IT_62 => new BearCountrySubdivisionData(
                iso_3166: 'IT-62', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Lazio', capital: 'Rome', osm_relation_id: 40784,
            ),
            self::IT_65 => new BearCountrySubdivisionData(
                iso_3166: 'IT-65', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Abruzzo', capital: 'L\'Aquila', osm_relation_id: 53937,
            ),
            self::IT_67 => new BearCountrySubdivisionData(
                iso_3166: 'IT-67', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Molise', capital: 'Campobasso', osm_relation_id: 41256,
            ),
            self::IT_72 => new BearCountrySubdivisionData(
                iso_3166: 'IT-72', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Campania', capital: 'Naples', osm_relation_id: 40218,
            ),
            self::IT_75 => new BearCountrySubdivisionData(
                iso_3166: 'IT-75', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Apulia', capital: 'Bari', osm_relation_id: 40095,
            ),
            self::IT_77 => new BearCountrySubdivisionData(
                iso_3166: 'IT-77', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Basilicata', capital: 'Potenza', osm_relation_id: 40137,
            ),
            self::IT_78 => new BearCountrySubdivisionData(
                iso_3166: 'IT-78', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Calabria', capital: 'Catanzaro', osm_relation_id: 1783980,
            ),
            self::IT_82 => new BearCountrySubdivisionData(
                iso_3166: 'IT-82', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Sicily', capital: 'Palermo', osm_relation_id: 39152,
            ),
            self::IT_88 => new BearCountrySubdivisionData(
                iso_3166: 'IT-88', country_cca2: BearCountryEnum::IT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Sardinia', capital: 'Cagliari', osm_relation_id: 7361997,
            ),


            // NETHERLANDS
            self::NL_DR => new BearCountrySubdivisionData(
                iso_3166: 'NL-DR', country_cca2: BearCountryEnum::NL, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Drenthe', capital: 'Assen', osm_relation_id: 47540,
            ),
            self::NL_FL => new BearCountrySubdivisionData(
                iso_3166: 'NL-FL', country_cca2: BearCountryEnum::NL, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Flevoland', capital: 'Lelystad', osm_relation_id: 47407,
            ),
            self::NL_FR => new BearCountrySubdivisionData(
                iso_3166: 'NL-FR', country_cca2: BearCountryEnum::NL, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Friesland', capital: 'Leeuwarden', osm_relation_id: 47381,
            ),
            self::NL_GE => new BearCountrySubdivisionData(
                iso_3166: 'NL-GE', country_cca2: BearCountryEnum::NL, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Gelderland', capital: 'Arnhem', osm_relation_id: 47554,
            ),
            self::NL_GR => new BearCountrySubdivisionData(
                iso_3166: 'NL-GR', country_cca2: BearCountryEnum::NL, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Groningen', capital: 'Groningen', osm_relation_id: 47826,
            ),
            self::NL_LI => new BearCountrySubdivisionData(
                iso_3166: 'NL-LI', country_cca2: BearCountryEnum::NL, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Limburg', capital: 'Maastricht', osm_relation_id: 47793,
            ),
            self::NL_NB => new BearCountrySubdivisionData(
                iso_3166: 'NL-NB', country_cca2: BearCountryEnum::NL, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'North Brabant', capital: 'Den Bosch', osm_relation_id: 47696,
            ),
            self::NL_NH => new BearCountrySubdivisionData(
                iso_3166: 'NL-NH', country_cca2: BearCountryEnum::NL, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'North Holland', capital: 'Haarlem', osm_relation_id: 47654,
            ),
            self::NL_OV => new BearCountrySubdivisionData(
                iso_3166: 'NL-OV', country_cca2: BearCountryEnum::NL, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Overijssel', capital: 'Zwolle', osm_relation_id: 47608,
            ),
            self::NL_UT => new BearCountrySubdivisionData(
                iso_3166: 'NL-UT', country_cca2: BearCountryEnum::NL, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Utrecht', capital: 'Utrecht', osm_relation_id: 47667,
            ),
            self::NL_ZE => new BearCountrySubdivisionData(
                iso_3166: 'NL-ZE', country_cca2: BearCountryEnum::NL, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Zeeland', capital: 'Middelburg', osm_relation_id: 47806,
            ),
            self::NL_ZH => new BearCountrySubdivisionData(
                iso_3166: 'NL-ZH', country_cca2: BearCountryEnum::NL, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'South Holland', capital: 'The Hague', osm_relation_id: 47772,
            ),


            // NORWAY
            self::NO_03 => new BearCountrySubdivisionData(
                iso_3166: 'NO-03', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Oslo', capital: 'Oslo', osm_relation_id: 406091,
            ),
            self::NO_11 => new BearCountrySubdivisionData(
                iso_3166: 'NO-11', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Rogaland', capital: 'Stavanger', osm_relation_id: 405836,
            ),
            self::NO_15 => new BearCountrySubdivisionData(
                iso_3166: 'NO-15', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Møre and Romsdal', capital: 'Molde', osm_relation_id: 406868,
            ),
            self::NO_18 => new BearCountrySubdivisionData(
                iso_3166: 'NO-18', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Northland', capital: 'Bodø', osm_relation_id: 408105,
            ),
            self::NO_31 => new BearCountrySubdivisionData(
                iso_3166: 'NO-31', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Østfold', capital: 'Sarpsborg', osm_relation_id: 406060,
            ),
            self::NO_32 => new BearCountrySubdivisionData(
                iso_3166: 'NO-32', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Akershus', capital: 'Oslo', osm_relation_id: 406106,
            ),
            self::NO_33 => new BearCountrySubdivisionData(
                iso_3166: 'NO-33', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Buskerud', capital: 'Drammen', osm_relation_id: 412297,
            ),
            self::NO_34 => new BearCountrySubdivisionData(
                iso_3166: 'NO-34', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Inland', capital: 'Hamar', osm_relation_id: 10155527,
            ),
            self::NO_39 => new BearCountrySubdivisionData(
                iso_3166: 'NO-39', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Vestfold', capital: 'Tønsberg', osm_relation_id: 404589,
            ),
            self::NO_40 => new BearCountrySubdivisionData(
                iso_3166: 'NO-40', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Telemark', capital: 'Skien', osm_relation_id: 405156,
            ),
            self::NO_42 => new BearCountrySubdivisionData(
                iso_3166: 'NO-42', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Agder', capital: 'Kristiansand', osm_relation_id: 10155517,
            ),
            self::NO_46 => new BearCountrySubdivisionData(
                iso_3166: 'NO-46', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Westland', capital: 'Bergen', osm_relation_id: 10155543,
            ),
            self::NO_50 => new BearCountrySubdivisionData(
                iso_3166: 'NO-50', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Trøndelag', capital: 'Steinkjer', osm_relation_id: 406567,
            ),
            self::NO_55 => new BearCountrySubdivisionData(
                iso_3166: 'NO-55', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Troms', capital: 'Tromsø', osm_relation_id: 407717,
            ),
            self::NO_56 => new BearCountrySubdivisionData(
                iso_3166: 'NO-56', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Finnmark', capital: 'Vadsø', osm_relation_id: 406389,
            ),


            // NEPAL
            self::NP_P1 => new BearCountrySubdivisionData(
                iso_3166: 'NP-P1', country_cca2: BearCountryEnum::NP, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Koshi', capital: 'Biratnagar', osm_relation_id: 10489132,
            ),
            self::NP_P2 => new BearCountrySubdivisionData(
                iso_3166: 'NP-P2', country_cca2: BearCountryEnum::NP, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Madhesh', capital: 'Janakpur', osm_relation_id: 10489318,
            ),
            self::NP_P3 => new BearCountrySubdivisionData(
                iso_3166: 'NP-P3', country_cca2: BearCountryEnum::NP, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Bagmati', capital: 'Hetauda', osm_relation_id: 10489317,
            ),
            self::NP_P4 => new BearCountrySubdivisionData(
                iso_3166: 'NP-P4', country_cca2: BearCountryEnum::NP, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Gandaki', capital: 'Pokhara', osm_relation_id: 10489605,
            ),
            self::NP_P5 => new BearCountrySubdivisionData(
                iso_3166: 'NP-P5', country_cca2: BearCountryEnum::NP, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Lumbini', capital: 'Butwal', osm_relation_id: 10493722,
            ),
            self::NP_P6 => new BearCountrySubdivisionData(
                iso_3166: 'NP-P6', country_cca2: BearCountryEnum::NP, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Karnali', capital: 'Birendranagar', osm_relation_id: 10493723,
            ),
            self::NP_P7 => new BearCountrySubdivisionData(
                iso_3166: 'NP-P7', country_cca2: BearCountryEnum::NP, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Sudurpashchim', capital: 'Dhangadhi', osm_relation_id: 10488187,
            ),


            // PORTUGAL
            self::PT_01 => new BearCountrySubdivisionData(
                iso_3166: 'PT-01', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Aveiro', capital: 'Aveiro', osm_relation_id: 3920249,
            ),
            self::PT_02 => new BearCountrySubdivisionData(
                iso_3166: 'PT-02', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Beja', capital: 'Beja', osm_relation_id: 5134927,
            ),
            self::PT_03 => new BearCountrySubdivisionData(
                iso_3166: 'PT-03', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Braga', capital: 'Braga', osm_relation_id: 3738284,
            ),
            self::PT_04 => new BearCountrySubdivisionData(
                iso_3166: 'PT-04', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Bragança', capital: 'Bragança', osm_relation_id: 3905929,
            ),
            self::PT_05 => new BearCountrySubdivisionData(
                iso_3166: 'PT-05', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Castelo Branco', capital: 'Castelo Branco', osm_relation_id: 4104644,
            ),
            self::PT_06 => new BearCountrySubdivisionData(
                iso_3166: 'PT-06', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Coimbra', capital: 'Coimbra', osm_relation_id: 4875183,
            ),
            self::PT_07 => new BearCountrySubdivisionData(
                iso_3166: 'PT-07', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Évora', capital: 'Évora', osm_relation_id: 5130767,
            ),
            self::PT_08 => new BearCountrySubdivisionData(
                iso_3166: 'PT-08', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Faro', capital: 'Faro', osm_relation_id: 1278415,
            ),
            self::PT_09 => new BearCountrySubdivisionData(
                iso_3166: 'PT-09', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Guarda', capital: 'Guarda', osm_relation_id: 3905924,
            ),
            self::PT_10 => new BearCountrySubdivisionData(
                iso_3166: 'PT-10', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Leiria', capital: 'Leiria', osm_relation_id: 5011694,
            ),
            self::PT_11 => new BearCountrySubdivisionData(
                iso_3166: 'PT-11', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Lisbon', capital: 'Lisbon', osm_relation_id: 2897141,
            ),
            self::PT_12 => new BearCountrySubdivisionData(
                iso_3166: 'PT-12', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Portalegre', capital: 'Portalegre', osm_relation_id: 5123448,
            ),
            self::PT_13 => new BearCountrySubdivisionData(
                iso_3166: 'PT-13', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Porto', capital: 'Porto', osm_relation_id: 3459013,
            ),
            self::PT_14 => new BearCountrySubdivisionData(
                iso_3166: 'PT-14', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Santarém', capital: 'Santarém', osm_relation_id: 5122644,
            ),
            self::PT_15 => new BearCountrySubdivisionData(
                iso_3166: 'PT-15', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Setúbal', capital: 'Setúbal', osm_relation_id: 5143590,
            ),
            self::PT_16 => new BearCountrySubdivisionData(
                iso_3166: 'PT-16', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Viana do Castelo', capital: 'Viana do Castelo', osm_relation_id: 3898131,
            ),
            self::PT_17 => new BearCountrySubdivisionData(
                iso_3166: 'PT-17', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Vila Real', capital: 'Vila Real', osm_relation_id: 3967823,
            ),
            self::PT_18 => new BearCountrySubdivisionData(
                iso_3166: 'PT-18', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Viseu', capital: 'Viseu', osm_relation_id: 3920285,
            ),
            self::PT_20 => new BearCountrySubdivisionData(
                iso_3166: 'PT-20', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Azores', capital: 'Ponta Delgada', osm_relation_id: 1629146,
            ),
            self::PT_30 => new BearCountrySubdivisionData(
                iso_3166: 'PT-30', country_cca2: BearCountryEnum::PT, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Madeira', capital: 'Funchal', osm_relation_id: 1629145,
            ),


            // QATAR
            self::QA_DA => new BearCountrySubdivisionData(
                iso_3166: 'QA-DA', country_cca2: BearCountryEnum::QA, subdivision_type: BearCountrySubdivisionTypeEnum::MUNICIPALITY,
                english_name: 'Ad Dawhah', capital: 'Doha', osm_relation_id: 27332,
            ),
            self::QA_KH => new BearCountrySubdivisionData(
                iso_3166: 'QA-KH', country_cca2: BearCountryEnum::QA, subdivision_type: BearCountrySubdivisionTypeEnum::MUNICIPALITY,
                english_name: 'Al Khor', capital: 'Al Khor', osm_relation_id: 27329,
            ),
            self::QA_MS => new BearCountrySubdivisionData(
                iso_3166: 'QA-MS', country_cca2: BearCountryEnum::QA, subdivision_type: BearCountrySubdivisionTypeEnum::MUNICIPALITY,
                english_name: 'Al Shamal', capital: 'Madinat ash Shamal', osm_relation_id: 27335,
            ),
            self::QA_RA => new BearCountrySubdivisionData(
                iso_3166: 'QA-RA', country_cca2: BearCountryEnum::QA, subdivision_type: BearCountrySubdivisionTypeEnum::MUNICIPALITY,
                english_name: 'Al Rayyan', capital: 'Ar Rayyan', osm_relation_id: 27331,
            ),
            self::QA_SH => new BearCountrySubdivisionData(
                iso_3166: 'QA-SH', country_cca2: BearCountryEnum::QA, subdivision_type: BearCountrySubdivisionTypeEnum::MUNICIPALITY,
                english_name: 'Al-Shahaniya', capital: 'Al-Shahaniya', osm_relation_id: 27330,
            ),
            self::QA_US => new BearCountrySubdivisionData(
                iso_3166: 'QA-US', country_cca2: BearCountryEnum::QA, subdivision_type: BearCountrySubdivisionTypeEnum::MUNICIPALITY,
                english_name: 'Umm Salal', capital: 'Umm Salal', osm_relation_id: 27328,
            ),
            self::QA_WA => new BearCountrySubdivisionData(
                iso_3166: 'QA-WA', country_cca2: BearCountryEnum::QA, subdivision_type: BearCountrySubdivisionTypeEnum::MUNICIPALITY,
                english_name: 'Al Wakrah', capital: 'Al Wakrah', osm_relation_id: 27337,
            ),
            self::QA_ZA => new BearCountrySubdivisionData(
                iso_3166: 'QA-ZA', country_cca2: BearCountryEnum::QA, subdivision_type: BearCountrySubdivisionTypeEnum::MUNICIPALITY,
                english_name: 'Al Daayen', capital: 'Umm Qarn', osm_relation_id: 11146904,
            ),


            // SAUDI ARABIA
            self::SA_01 => new BearCountrySubdivisionData(
                iso_3166: 'SA-01', country_cca2: BearCountryEnum::SA, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Riyadh', capital: 'Riyadh', osm_relation_id: 3678409,
            ),
            self::SA_02 => new BearCountrySubdivisionData(
                iso_3166: 'SA-02', country_cca2: BearCountryEnum::SA, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Makkah', capital: 'Makkah', osm_relation_id: 3678639,
            ),
            self::SA_03 => new BearCountrySubdivisionData(
                iso_3166: 'SA-03', country_cca2: BearCountryEnum::SA, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Medina', capital: 'Madinah', osm_relation_id: 3679869,
            ),
            self::SA_04 => new BearCountrySubdivisionData(
                iso_3166: 'SA-04', country_cca2: BearCountryEnum::SA, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Eastern', capital: 'Dammam', osm_relation_id: 3667294,
            ),
            self::SA_05 => new BearCountrySubdivisionData(
                iso_3166: 'SA-05', country_cca2: BearCountryEnum::SA, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Al-Qassim', capital: 'Buraidah', osm_relation_id: 3679872,
            ),
            self::SA_06 => new BearCountrySubdivisionData(
                iso_3166: 'SA-06', country_cca2: BearCountryEnum::SA, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Ha\'il', capital: 'Ha\'il', osm_relation_id: 3676707,
            ),
            self::SA_07 => new BearCountrySubdivisionData(
                iso_3166: 'SA-07', country_cca2: BearCountryEnum::SA, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Tabuk', capital: 'Tabuk', osm_relation_id: 3679867,
            ),
            self::SA_08 => new BearCountrySubdivisionData(
                iso_3166: 'SA-08', country_cca2: BearCountryEnum::SA, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Northern Borders', capital: 'Arar', osm_relation_id: 3673927,
            ),
            self::SA_09 => new BearCountrySubdivisionData(
                iso_3166: 'SA-09', country_cca2: BearCountryEnum::SA, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Jazan', capital: 'Jazan', osm_relation_id: 3679903,
            ),
            self::SA_10 => new BearCountrySubdivisionData(
                iso_3166: 'SA-10', country_cca2: BearCountryEnum::SA, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Najran', capital: 'Najran', osm_relation_id: 3667317,
            ),
            self::SA_11 => new BearCountrySubdivisionData(
                iso_3166: 'SA-11', country_cca2: BearCountryEnum::SA, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Al Bahah', capital: 'Al Bahah', osm_relation_id: 3679888,
            ),
            self::SA_12 => new BearCountrySubdivisionData(
                iso_3166: 'SA-12', country_cca2: BearCountryEnum::SA, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Al Jawf', capital: 'Sakaka', osm_relation_id: 3842543,
            ),
            self::SA_14 => new BearCountrySubdivisionData(
                iso_3166: 'SA-14', country_cca2: BearCountryEnum::SA, subdivision_type: BearCountrySubdivisionTypeEnum::REGION,
                english_name: 'Asir', capital: 'Abha', osm_relation_id: 3678598,
            ),


            // SWEDEN
            self::SE_AB => new BearCountrySubdivisionData(
                iso_3166: 'SE-AB', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Stockholm', capital: 'Stockholm', osm_relation_id: 54391,
            ),
            self::SE_AC => new BearCountrySubdivisionData(
                iso_3166: 'SE-AC', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Västerbotten', capital: 'Umeå', osm_relation_id: 52825,
            ),
            self::SE_BD => new BearCountrySubdivisionData(
                iso_3166: 'SE-BD', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Norrbotten', capital: 'Luleå', osm_relation_id: 52824,
            ),
            self::SE_C => new BearCountrySubdivisionData(
                iso_3166: 'SE-C', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Uppsala', capital: 'Uppsala', osm_relation_id: 54220,
            ),
            self::SE_D => new BearCountrySubdivisionData(
                iso_3166: 'SE-D', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Södermanland', capital: 'Nyköping', osm_relation_id: 54386,
            ),
            self::SE_E => new BearCountrySubdivisionData(
                iso_3166: 'SE-E', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Östergötland', capital: 'Linköping', osm_relation_id: 940675,
            ),
            self::SE_F => new BearCountrySubdivisionData(
                iso_3166: 'SE-F', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Jönköping', capital: 'Jönköping', osm_relation_id: 54374,
            ),
            self::SE_G => new BearCountrySubdivisionData(
                iso_3166: 'SE-G', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Kronoberg', capital: 'Växjö', osm_relation_id: 54412,
            ),
            self::SE_H => new BearCountrySubdivisionData(
                iso_3166: 'SE-H', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Kalmar', capital: 'Kalmar', osm_relation_id: 54417,
            ),
            self::SE_I => new BearCountrySubdivisionData(
                iso_3166: 'SE-I', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Gotland', capital: 'Visby', osm_relation_id: 941530,
            ),
            self::SE_K => new BearCountrySubdivisionData(
                iso_3166: 'SE-K', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Blekinge', capital: 'Karlskrona', osm_relation_id: 54413,
            ),
            self::SE_M => new BearCountrySubdivisionData(
                iso_3166: 'SE-M', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Skåne', capital: 'Malmö', osm_relation_id: 54409,
            ),
            self::SE_N => new BearCountrySubdivisionData(
                iso_3166: 'SE-N', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Halland', capital: 'Halmstad', osm_relation_id: 54403,
            ),
            self::SE_O => new BearCountrySubdivisionData(
                iso_3166: 'SE-O', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Västra Götaland', capital: 'Gothenburg', osm_relation_id: 54367,
            ),
            self::SE_S => new BearCountrySubdivisionData(
                iso_3166: 'SE-S', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Värmland', capital: 'Karlstad', osm_relation_id: 54223,
            ),
            self::SE_T => new BearCountrySubdivisionData(
                iso_3166: 'SE-T', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Örebro', capital: 'Örebro', osm_relation_id: 54222,
            ),
            self::SE_U => new BearCountrySubdivisionData(
                iso_3166: 'SE-U', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Västmanland', capital: 'Västerås', osm_relation_id: 54221,
            ),
            self::SE_W => new BearCountrySubdivisionData(
                iso_3166: 'SE-W', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Dalarna', capital: 'Falun', osm_relation_id: 52834,
            ),
            self::SE_X => new BearCountrySubdivisionData(
                iso_3166: 'SE-X', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Gävleborg', capital: 'Gävle', osm_relation_id: 52832,
            ),
            self::SE_Y => new BearCountrySubdivisionData(
                iso_3166: 'SE-Y', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Västernorrland', capital: 'Härnösand', osm_relation_id: 52827,
            ),
            self::SE_Z => new BearCountrySubdivisionData(
                iso_3166: 'SE-Z', country_cca2: BearCountryEnum::SE, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Jämtland', capital: 'Östersund', osm_relation_id: 52826,
            ),


            // SINGAPORE
            self::SG_01 => new BearCountrySubdivisionData(
                iso_3166: 'SG-01', country_cca2: BearCountryEnum::SG, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'Central Singapore', capital: 'Singapore', osm_relation_id: 3831712,
            ),
            self::SG_02 => new BearCountrySubdivisionData(
                iso_3166: 'SG-02', country_cca2: BearCountryEnum::SG, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'North East', capital: 'Singapore', osm_relation_id: 3831713,
            ),
            self::SG_03 => new BearCountrySubdivisionData(
                iso_3166: 'SG-03', country_cca2: BearCountryEnum::SG, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'North West', capital: 'Singapore', osm_relation_id: 3831714,
            ),
            self::SG_04 => new BearCountrySubdivisionData(
                iso_3166: 'SG-04', country_cca2: BearCountryEnum::SG, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'South East', capital: 'Singapore', osm_relation_id: 3831715,
            ),
            self::SG_05 => new BearCountrySubdivisionData(
                iso_3166: 'SG-05', country_cca2: BearCountryEnum::SG, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'South West', capital: 'Singapore', osm_relation_id: 3831716,
            ),


            // THE UNITED STATES
            self::US_AL => new BearCountrySubdivisionData(
                iso_3166: 'US-AL', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Alabama', capital: 'Montgomery', osm_relation_id: 161950,
            ),
            self::US_AK => new BearCountrySubdivisionData(
                iso_3166: 'US-AK', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Alaska', capital: 'Juneau', osm_relation_id: 1116270,
            ),
            self::US_AZ => new BearCountrySubdivisionData(
                iso_3166: 'US-AZ', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Arizona', capital: 'Phoenix', osm_relation_id: 162018,
            ),
            self::US_AR => new BearCountrySubdivisionData(
                iso_3166: 'US-AR', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Arkansas', capital: 'Little Rock', osm_relation_id: 161646,
            ),
            self::US_CA => new BearCountrySubdivisionData(
                iso_3166: 'US-CA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'California', capital: 'Sacramento', osm_relation_id: 165475,
            ),
            self::US_CO => new BearCountrySubdivisionData(
                iso_3166: 'US-CO', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Colorado', capital: 'Denver', osm_relation_id: 161961,
            ),
            self::US_CT => new BearCountrySubdivisionData(
                iso_3166: 'US-CT', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Connecticut', capital: 'Hartford', osm_relation_id: 165794,
            ),
            self::US_DE => new BearCountrySubdivisionData(
                iso_3166: 'US-DE', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Delaware', capital: 'Dover', osm_relation_id: 162110,
            ),
            self::US_FL => new BearCountrySubdivisionData(
                iso_3166: 'US-FL', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Florida', capital: 'Tallahassee', osm_relation_id: 162050,
            ),
            self::US_GA => new BearCountrySubdivisionData(
                iso_3166: 'US-GA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Georgia', capital: 'Atlanta', osm_relation_id: 161957,
            ),
            self::US_HI => new BearCountrySubdivisionData(
                iso_3166: 'US-HI', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Hawaii', capital: 'Honolulu', osm_relation_id: 166563,
            ),
            self::US_ID => new BearCountrySubdivisionData(
                iso_3166: 'US-ID', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Idaho', capital: 'Boise', osm_relation_id: 162116,
            ),
            self::US_IL => new BearCountrySubdivisionData(
                iso_3166: 'US-IL', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Illinois', capital: 'Springfield', osm_relation_id: 122586,
            ),
            self::US_IN => new BearCountrySubdivisionData(
                iso_3166: 'US-IN', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Indiana', capital: 'Indianapolis', osm_relation_id: 161816,
            ),
            self::US_IA => new BearCountrySubdivisionData(
                iso_3166: 'US-IA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Iowa', capital: 'Des Moines', osm_relation_id: 161650,
            ),
            self::US_KS => new BearCountrySubdivisionData(
                iso_3166: 'US-KS', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Kansas', capital: 'Topeka', osm_relation_id: 161644,
            ),
            self::US_KY => new BearCountrySubdivisionData(
                iso_3166: 'US-KY', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Kentucky', capital: 'Frankfort', osm_relation_id: 161655,
            ),
            self::US_LA => new BearCountrySubdivisionData(
                iso_3166: 'US-LA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Louisiana', capital: 'Baton Rouge', osm_relation_id: 224922,
            ),
            self::US_ME => new BearCountrySubdivisionData(
                iso_3166: 'US-ME', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Maine', capital: 'Augusta', osm_relation_id: 63512,
            ),
            self::US_MD => new BearCountrySubdivisionData(
                iso_3166: 'US-MD', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Maryland', capital: 'Annapolis', osm_relation_id: 162112,
            ),
            self::US_MA => new BearCountrySubdivisionData(
                iso_3166: 'US-MA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Massachusetts', capital: 'Boston', osm_relation_id: 61315,
            ),
            self::US_MI => new BearCountrySubdivisionData(
                iso_3166: 'US-MI', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Michigan', capital: 'Lansing', osm_relation_id: 165789,
            ),
            self::US_MN => new BearCountrySubdivisionData(
                iso_3166: 'US-MN', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Minnesota', capital: 'St. Paul', osm_relation_id: 165471,
            ),
            self::US_MS => new BearCountrySubdivisionData(
                iso_3166: 'US-MS', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Mississippi', capital: 'Jackson', osm_relation_id: 161943,
            ),
            self::US_MO => new BearCountrySubdivisionData(
                iso_3166: 'US-MO', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Missouri', capital: 'Jefferson City', osm_relation_id: 161638,
            ),
            self::US_MT => new BearCountrySubdivisionData(
                iso_3166: 'US-MT', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Montana', capital: 'Helena', osm_relation_id: 162115,
            ),
            self::US_NE => new BearCountrySubdivisionData(
                iso_3166: 'US-NE', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Nebraska', capital: 'Lincoln', osm_relation_id: 161648,
            ),
            self::US_NV => new BearCountrySubdivisionData(
                iso_3166: 'US-NV', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Nevada', capital: 'Carson City', osm_relation_id: 165473,
            ),
            self::US_NH => new BearCountrySubdivisionData(
                iso_3166: 'US-NH', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'New Hampshire', capital: 'Concord', osm_relation_id: 67213,
            ),
            self::US_NJ => new BearCountrySubdivisionData(
                iso_3166: 'US-NJ', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'New Jersey', capital: 'Trenton', osm_relation_id: 224951,
            ),
            self::US_NM => new BearCountrySubdivisionData(
                iso_3166: 'US-NM', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'New Mexico', capital: 'Santa Fe', osm_relation_id: 162014,
            ),
            self::US_NY => new BearCountrySubdivisionData(
                iso_3166: 'US-NY', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'New York', capital: 'Albany', osm_relation_id: 61320,
            ),
            self::US_NC => new BearCountrySubdivisionData(
                iso_3166: 'US-NC', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'North Carolina', capital: 'Raleigh', osm_relation_id: 224045,
            ),
            self::US_ND => new BearCountrySubdivisionData(
                iso_3166: 'US-ND', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'North Dakota', capital: 'Bismarck', osm_relation_id: 161653,
            ),
            self::US_OH => new BearCountrySubdivisionData(
                iso_3166: 'US-OH', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Ohio', capital: 'Columbus', osm_relation_id: 162061,
            ),
            self::US_OK => new BearCountrySubdivisionData(
                iso_3166: 'US-OK', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Oklahoma', capital: 'Oklahoma City', osm_relation_id: 161645,
            ),
            self::US_OR => new BearCountrySubdivisionData(
                iso_3166: 'US-OR', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Oregon', capital: 'Salem', osm_relation_id: 165476,
            ),
            self::US_PA => new BearCountrySubdivisionData(
                iso_3166: 'US-PA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Pennsylvania', capital: 'Harrisburg', osm_relation_id: 162109,
            ),
            self::US_RI => new BearCountrySubdivisionData(
                iso_3166: 'US-RI', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Rhode Island', capital: 'Providence', osm_relation_id: 392915,
            ),
            self::US_SC => new BearCountrySubdivisionData(
                iso_3166: 'US-SC', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'South Carolina', capital: 'Columbia', osm_relation_id: 224040,
            ),
            self::US_SD => new BearCountrySubdivisionData(
                iso_3166: 'US-SD', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'South Dakota', capital: 'Pierre', osm_relation_id: 161652,
            ),
            self::US_TN => new BearCountrySubdivisionData(
                iso_3166: 'US-TN', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Tennessee', capital: 'Nashville', osm_relation_id: 161838,
            ),
            self::US_TX => new BearCountrySubdivisionData(
                iso_3166: 'US-TX', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Texas', capital: 'Austin', osm_relation_id: 114690,
            ),
            self::US_UT => new BearCountrySubdivisionData(
                iso_3166: 'US-UT', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Utah', capital: 'Salt Lake City', osm_relation_id: 161993,
            ),
            self::US_VT => new BearCountrySubdivisionData(
                iso_3166: 'US-VT', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Vermont', capital: 'Montpelier', osm_relation_id: 60759,
            ),
            self::US_VA => new BearCountrySubdivisionData(
                iso_3166: 'US-VA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Virginia', capital: 'Richmond', osm_relation_id: 224042,
            ),
            self::US_WA => new BearCountrySubdivisionData(
                iso_3166: 'US-WA', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Washington', capital: 'Olympia', osm_relation_id: 165479,
            ),
            self::US_WV => new BearCountrySubdivisionData(
                iso_3166: 'US-WV', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'West Virginia', capital: 'Charleston', osm_relation_id: 162068,
            ),
            self::US_WI => new BearCountrySubdivisionData(
                iso_3166: 'US-WI', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Wisconsin', capital: 'Madison', osm_relation_id: 165466,
            ),
            self::US_WY => new BearCountrySubdivisionData(
                iso_3166: 'US-WY', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::STATE,
                english_name: 'Wyoming', capital: 'Cheyenne', osm_relation_id: 161991,
            ),
            self::US_DC => new BearCountrySubdivisionData(
                iso_3166: 'US-DC', country_cca2: BearCountryEnum::US, subdivision_type: BearCountrySubdivisionTypeEnum::DISTRICT,
                english_name: 'District of Columbia', capital: 'Washington', osm_relation_id: 162069,
            ),


            // ZAMBIA
            self::ZM_01 => new BearCountrySubdivisionData(
                iso_3166: 'ZM-01', country_cca2: BearCountryEnum::ZM, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Western', capital: 'Mongu', osm_relation_id: 318852,
            ),
            self::ZM_02 => new BearCountrySubdivisionData(
                iso_3166: 'ZM-02', country_cca2: BearCountryEnum::ZM, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Central', capital: 'Kabwe', osm_relation_id: 318861,
            ),
            self::ZM_03 => new BearCountrySubdivisionData(
                iso_3166: 'ZM-03', country_cca2: BearCountryEnum::ZM, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Eastern', capital: 'Chipata', osm_relation_id: 318865,
            ),
            self::ZM_04 => new BearCountrySubdivisionData(
                iso_3166: 'ZM-04', country_cca2: BearCountryEnum::ZM, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Luapula', capital: 'Mansa', osm_relation_id: 318866,
            ),
            self::ZM_05 => new BearCountrySubdivisionData(
                iso_3166: 'ZM-05', country_cca2: BearCountryEnum::ZM, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Northern', capital: 'Kasama', osm_relation_id: 318862,
            ),
            self::ZM_06 => new BearCountrySubdivisionData(
                iso_3166: 'ZM-06', country_cca2: BearCountryEnum::ZM, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'North-Western', capital: 'Solwezi', osm_relation_id: 318859,
            ),
            self::ZM_07 => new BearCountrySubdivisionData(
                iso_3166: 'ZM-07', country_cca2: BearCountryEnum::ZM, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Southern', capital: 'Choma', osm_relation_id: 318863,
            ),
            self::ZM_08 => new BearCountrySubdivisionData(
                iso_3166: 'ZM-08', country_cca2: BearCountryEnum::ZM, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Copperbelt', capital: 'Ndola', osm_relation_id: 318860,
            ),
            self::ZM_09 => new BearCountrySubdivisionData(
                iso_3166: 'ZM-09', country_cca2: BearCountryEnum::ZM, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Lusaka', capital: 'Lusaka', osm_relation_id: 318864,
            ),
            self::ZM_10 => new BearCountrySubdivisionData(
                iso_3166: 'ZM-10', country_cca2: BearCountryEnum::ZM, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Muchinga', capital: 'Chinsali', osm_relation_id: 3668334,
            ),


            // ZIMBABWE
            self::ZW_BU => new BearCountrySubdivisionData(
                iso_3166: 'ZW-BU', country_cca2: BearCountryEnum::ZW, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Bulawayo', capital: 'Bulawayo', osm_relation_id: 3337019,
            ),
            self::ZW_HA => new BearCountrySubdivisionData(
                iso_3166: 'ZW-HA', country_cca2: BearCountryEnum::ZW, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Harare', capital: 'Harare', osm_relation_id: 318467,
            ),
            self::ZW_MA => new BearCountrySubdivisionData(
                iso_3166: 'ZW-MA', country_cca2: BearCountryEnum::ZW, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Manicaland', capital: 'Mutare', osm_relation_id: 3336975,
            ),
            self::ZW_MC => new BearCountrySubdivisionData(
                iso_3166: 'ZW-MC', country_cca2: BearCountryEnum::ZW, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Mashonaland Central', capital: 'Bindura', osm_relation_id: 3336976,
            ),
            self::ZW_ME => new BearCountrySubdivisionData(
                iso_3166: 'ZW-ME', country_cca2: BearCountryEnum::ZW, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Mashonaland East', capital: 'Marondera', osm_relation_id: 3336977,
            ),
            self::ZW_MI => new BearCountrySubdivisionData(
                iso_3166: 'ZW-MI', country_cca2: BearCountryEnum::ZW, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Midlands', capital: 'Gweru', osm_relation_id: 3336982,
            ),
            self::ZW_MN => new BearCountrySubdivisionData(
                iso_3166: 'ZW-MN', country_cca2: BearCountryEnum::ZW, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Matabeleland North', capital: 'Lupane', osm_relation_id: 3336980,
            ),
            self::ZW_MS => new BearCountrySubdivisionData(
                iso_3166: 'ZW-MS', country_cca2: BearCountryEnum::ZW, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Matabeleland South', capital: 'Gwanda', osm_relation_id: 3336981,
            ),
            self::ZW_MV => new BearCountrySubdivisionData(
                iso_3166: 'ZW-MV', country_cca2: BearCountryEnum::ZW, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Masvingo', capital: 'Masvingo', osm_relation_id: 3336979,
            ),
            self::ZW_MW => new BearCountrySubdivisionData(
                iso_3166: 'ZW-MW', country_cca2: BearCountryEnum::ZW, subdivision_type: BearCountrySubdivisionTypeEnum::PROVINCE,
                english_name: 'Mashonaland West', capital: 'Chinhoyi', osm_relation_id: 3336978,
            ),
        };
    }


    public static function syncToDatabase(): void {
        foreach (self::cases() as $case) {
            LarabearCountrySubdivisionCrud::syncToDatabase($case);
        }
    }
}
