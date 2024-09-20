<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Enum;

use GuardsmanPanda\Larabear\Infrastructure\App\Interface\BearDatabaseBackedEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Crud\BearCountrySubdivisionCrud;
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
    case FR_976 = 'FR-976';
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
    case FR_WF = 'FR-WF';


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
    case NL_AW = 'NL-AW';
    case NL_BQ1 = 'NL-BQ1';
    case NL_BQ2 = 'NL-BQ2';
    case NL_BQ3 = 'NL-BQ3';
    case NL_CW = 'NL-CW';
    case NL_DR = 'NL-DR';
    case NL_FL = 'NL-FL';
    case NL_FR = 'NL-FR';
    case NL_GE = 'NL-GE';
    case NL_GR = 'NL-GR';
    case NL_LI = 'NL-LI';
    case NL_NB = 'NL-NB';
    case NL_NH = 'NL-NH';
    case NL_OV = 'NL-OV';
    case NL_SX = 'NL-SX';
    case NL_UT = 'NL-UT';
    case NL_ZE = 'NL-ZE';
    case NL_ZH = 'NL-ZH';


    // NORWAY
    case BVT = 'BVT';
    case NO_03 = 'NO-03';
    case NO_11 = 'NO-11';
    case NO_15 = 'NO-15';
    case NO_18 = 'NO-18';
    case NO_21 = 'NO-21';
    case NO_22 = 'NO-22';
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


    // NEW ZEALAND
    case NZ_AUK = 'NZ-AUK';
    case NZ_BOP = 'NZ-BOP';
    case NZ_CAN = 'NZ-CAN';
    case NZ_CIT = 'NZ-CIT';
    case NZ_GIS = 'NZ-GIS';
    case NZ_HKB = 'NZ-HKB';
    case NZ_MBH = 'NZ-MBH';
    case NZ_MWT = 'NZ-MWT';
    case NZ_NSN = 'NZ-NSN';
    case NZ_NTL = 'NZ-NTL';
    case NZ_OTA = 'NZ-OTA';
    case NZ_STL = 'NZ-STL';
    case NZ_TAS = 'NZ-TAS';
    case NZ_TKI = 'NZ-TKI';
    case NZ_WGN = 'NZ-WGN';
    case NZ_WKO = 'NZ-WKO';
    case NZ_WTC = 'NZ-WTC';


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
    case US_AS = 'US-AS';
    case US_GU = 'US-GU';
    case US_MP = 'US-MP';
    case US_PR = 'US-PR';
    case US_UM = 'US-UM';
    case US_VI = 'US-VI';


    // VIETNAM
    case VN_01 = 'VN-01';
    case VN_02 = 'VN-02';
    case VN_03 = 'VN-03';
    case VN_04 = 'VN-04';
    case VN_05 = 'VN-05';
    case VN_06 = 'VN-06';
    case VN_07 = 'VN-07';
    case VN_09 = 'VN-09';
    case VN_13 = 'VN-13';
    case VN_14 = 'VN-14';
    case VN_18 = 'VN-18';
    case VN_20 = 'VN-20';
    case VN_21 = 'VN-21';
    case VN_22 = 'VN-22';
    case VN_23 = 'VN-23';
    case VN_24 = 'VN-24';
    case VN_25 = 'VN-25';
    case VN_26 = 'VN-26';
    case VN_27 = 'VN-27';
    case VN_28 = 'VN-28';
    case VN_29 = 'VN-29';
    case VN_30 = 'VN-30';
    case VN_31 = 'VN-31';
    case VN_32 = 'VN-32';
    case VN_33 = 'VN-33';
    case VN_34 = 'VN-34';
    case VN_35 = 'VN-35';
    case VN_36 = 'VN-36';
    case VN_37 = 'VN-37';
    case VN_39 = 'VN-39';
    case VN_40 = 'VN-40';
    case VN_41 = 'VN-41';
    case VN_43 = 'VN-43';
    case VN_44 = 'VN-44';
    case VN_45 = 'VN-45';
    case VN_46 = 'VN-46';
    case VN_47 = 'VN-47';
    case VN_49 = 'VN-49';
    case VN_50 = 'VN-50';
    case VN_51 = 'VN-51';
    case VN_52 = 'VN-52';
    case VN_53 = 'VN-53';
    case VN_54 = 'VN-54';
    case VN_55 = 'VN-55';
    case VN_56 = 'VN-56';
    case VN_57 = 'VN-57';
    case VN_58 = 'VN-58';
    case VN_59 = 'VN-59';
    case VN_61 = 'VN-61';
    case VN_63 = 'VN-63';
    case VN_66 = 'VN-66';
    case VN_67 = 'VN-67';
    case VN_68 = 'VN-68';
    case VN_69 = 'VN-69';
    case VN_70 = 'VN-70';
    case VN_71 = 'VN-71';
    case VN_72 = 'VN-72';
    case VN_73 = 'VN-73';
    case VN_CT = 'VN-CT';
    case VN_DN = 'VN-DN';
    case VN_HN = 'VN-HN';
    case VN_HP = 'VN-HP';
    case VN_SG = 'VN-SG';


    // VANUATU
    case VU_MAP = 'VU-MAP';
    case VU_PAM = 'VU-PAM';
    case VU_SAM = 'VU-SAM';
    case VU_SEE = 'VU-SEE';
    case VU_TAE = 'VU-TAE';
    case VU_TOB = 'VU-TOB';


    // SAMOA
    case WS_AA = 'WS-AA';
    case WS_AL = 'WS-AL';
    case WS_AT = 'WS-AT';
    case WS_FA = 'WS-FA';
    case WS_GE = 'WS-GE';
    case WS_GI = 'WS-GI';
    case WS_PA = 'WS-PA';
    case WS_SA = 'WS-SA';
    case WS_TU = 'WS-TU';
    case WS_VF = 'WS-VF';
    case WS_VS = 'WS-VS';


    // YEMEN
    case YE_AB = 'YE-AB';
    case YE_AD = 'YE-AD';
    case YE_AM = 'YE-AM';
    case YE_BA = 'YE-BA';
    case YE_DA = 'YE-DA';
    case YE_DH = 'YE-DH';
    case YE_HD = 'YE-HD';
    case YE_HJ = 'YE-HJ';
    case YE_HU = 'YE-HU';
    case YE_IB = 'YE-IB';
    case YE_JA = 'YE-JA';
    case YE_LA = 'YE-LA';
    case YE_MA = 'YE-MA';
    case YE_MR = 'YE-MR';
    case YE_MW = 'YE-MW';
    case YE_RA = 'YE-RA';
    case YE_SA = 'YE-SA';
    case YE_SD = 'YE-SD';
    case YE_SH = 'YE-SH';
    case YE_SN = 'YE-SN';
    case YE_SU = 'YE-SU';
    case YE_TA = 'YE-TA';


    // SOUTH AFRICA
    case ZA_EC = 'ZA-EC';
    case ZA_FS = 'ZA-FS';
    case ZA_GP = 'ZA-GP';
    case ZA_KZN = 'ZA-KZN';
    case ZA_LP = 'ZA-LP';
    case ZA_MP = 'ZA-MP';
    case ZA_NC = 'ZA-NC';
    case ZA_NW = 'ZA-NW';
    case ZA_WC = 'ZA-WC';


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
            self::AD_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AD, name: 'Canillo', capital: 'Canillo', osm: 2804754, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AD_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AD, name: 'Encamp', capital: 'Encamp', osm: 2804755, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AD_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AD, name: 'La Massana', capital: 'La Massana', osm: 2804757, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AD_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AD, name: 'Ordino', capital: 'Ordino', osm: 2804758, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AD_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AD, name: 'Sant Julià de Lòria', capital: 'Sant Julià de Lòria', osm: 2804759, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AD_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AD, name: 'Andorra la Vella', capital: 'Andorra la Vella', osm: 2804753, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AD_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AD, name: 'Escaldes-Engordany', capital: 'Escaldes-Engordany', osm: 2804756, type: BearCountrySubdivisionTypeEnum::PARISH),


            // United Arab Emirates
            self::AE_AJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::AE, name: 'Ajman', capital: 'Ajman', osm: 3766482, type: BearCountrySubdivisionTypeEnum::EMIRATE),
            self::AE_AZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::AE, name: 'Abu Dhabi', capital: 'Abu Dhabi', osm: 3766481, type: BearCountrySubdivisionTypeEnum::EMIRATE),
            self::AE_DU => new BearCountrySubdivisionData(cca2: BearCountryEnum::AE, name: 'Dubai', capital: 'Dubai', osm: 3766483, type: BearCountrySubdivisionTypeEnum::EMIRATE),
            self::AE_FU => new BearCountrySubdivisionData(cca2: BearCountryEnum::AE, name: 'Fujairah', capital: 'Fujairah', osm: 3766484, type: BearCountrySubdivisionTypeEnum::EMIRATE),
            self::AE_RK => new BearCountrySubdivisionData(cca2: BearCountryEnum::AE, name: 'Ras Al Khaimah', capital: 'Ras Al Khaimah', osm: 3766485, type: BearCountrySubdivisionTypeEnum::EMIRATE),
            self::AE_SH => new BearCountrySubdivisionData(cca2: BearCountryEnum::AE, name: 'Sharjah', capital: 'Sharjah', osm: 3766486, type: BearCountrySubdivisionTypeEnum::EMIRATE),
            self::AE_UQ => new BearCountrySubdivisionData(cca2: BearCountryEnum::AE, name: 'Umm Al Quwain', capital: 'Umm Al Quwain', osm: 3766487, type: BearCountrySubdivisionTypeEnum::EMIRATE),


            // AFGHANISTAN
            self::AF_BAL => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Balkh', capital: 'Mazar-i-Sharif', osm: 1674795, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_BAM => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Bamyan', capital: 'Bamyan', osm: 1674849, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_BDG => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Badghis', capital: 'Qala i Naw', osm: 1674811, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_BDS => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Badakhshan', capital: 'Feyzabad', osm: 1674535, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_BGL => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Baghlan', capital: 'Puli Khumri', osm: 1674785, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_DAY => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Daykundi', capital: 'Nili', osm: 1674833, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_FRA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Farah', capital: 'Farah', osm: 1674802, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_FYB => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Faryab', capital: 'Maymana', osm: 1674814, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_GHA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Ghazni', capital: 'Ghazni', osm: 1675048, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_GHO => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Ghor', capital: 'Chaghcharan', osm: 1674816, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_HEL => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Helmand', capital: 'Lashkargah', osm: 1674573, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_HER => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Herat', capital: 'Herat', osm: 1674803, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_JOW => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Jowzjan', capital: 'Sheberghan', osm: 1674800, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_KAB => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Kabul', capital: 'Kabul', osm: 1674876, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_KAN => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Kandahar', capital: 'Kandahar', osm: 1674567, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_KAP => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Kapisa', capital: 'Mahmud-i-Raqi', osm: 1674767, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_KDZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Kunduz', capital: 'Kunduz', osm: 1674564, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_KHO => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Khost', capital: 'Khost', osm: 1674878, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_KNR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Kunar', capital: 'Asadabad', osm: 1674607, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_LAG => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Laghman', capital: 'Mehtar Lam', osm: 1674766, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_LOG => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Logar', capital: 'Puli Alam', osm: 1674874, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_NAN => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Nangarhar', capital: 'Jalalabad', osm: 1674770, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_NIM => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Nimroz', capital: 'Zaranj', osm: 1674664, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_NUR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Nuristan', capital: 'Parun', osm: 1674544, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_PAN => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Panjshir', capital: 'Bazarak', osm: 1675032, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_PAR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Parwan', capital: 'Charikar', osm: 1674782, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_PIA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Paktia', capital: 'Gardez', osm: 1674882, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_PKA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Paktika', capital: 'Sharana', osm: 1675047, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_SAM => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Samangan', capital: 'Aybak', osm: 1674791, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_SAR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Sar-e Pol', capital: 'Sar-e Pol', osm: 1674994, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_TAK => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Takhar', capital: 'Taloqan', osm: 1674541, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_URU => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Urozgan', capital: 'Tarin Kowt', osm: 1674993, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_WAR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Wardak', capital: 'Maidan Shahr', osm: 1759757, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_ZAB => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Zabul', capital: 'Qalat', osm: 1674841, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // ANTIGUA AND BARBUDA
            self::AG_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AG, name: 'Saint George', capital: 'Fitches Creek', osm: 9604933, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AG_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AG, name: 'Saint John', capital: 'St. John\'s', osm: 9604932, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AG_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AG, name: 'Saint Mary', capital: 'Old Road', osm: 9604457, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AG_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AG, name: 'Saint Paul', capital: 'Falmouth', osm: 9604629, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AG_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AG, name: 'Saint Peter', capital: 'Parham', osm: 9604794, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AG_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AG, name: 'Saint Philip', capital: 'St. Philip\'s', osm: 9604456, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AG_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AG, name: 'Barbuda', capital: 'Codrington', osm: 7742426, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::AG_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AG, name: 'Redonda', capital: '', osm: 7742427, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),


            // ALBANIA
            self::AL_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Berat', capital: 'Berat', osm: 1252289, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Durrës', capital: 'Durrës', osm: 1249872, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Elbasan', capital: 'Elbasan', osm: 1250609, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Fier', capital: 'Fier', osm: 1251469, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Gjirokastër', capital: 'Gjirokastër', osm: 1253915, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Korçë', capital: 'Korçë', osm: 1252589, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Kukës', capital: 'Kukës', osm: 1759889, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Lezhë', capital: 'Lezhë', osm: 1248935, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Dibër', capital: 'Dibër', osm: 1249567, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Shkodër', capital: 'Shkodër', osm: 1248293, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Tiranë', capital: 'Tiranë', osm: 1250098, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Vlorë', capital: 'Vlorë', osm: 1255521, type: BearCountrySubdivisionTypeEnum::COUNTY),


            // ARMENIA
            self::AM_AG => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Aragatsotn', capital: 'Ashtarak', osm: 3917110, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_AR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Ararat', capital: 'Artashat', osm: 364083, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_AV => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Armavir', capital: 'Armavir', osm: 364086, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_ER => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Yerevan', capital: 'Yerevan', osm: 364087, type: BearCountrySubdivisionTypeEnum::CITY),
            self::AM_GR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Gegharkunik', capital: 'Gavar', osm: 364080, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_KT => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Kotayk', capital: 'Hrazdan', osm: 364084, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_LO => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Lori', capital: 'Vanadzor', osm: 364078, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_SH => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Shirak', capital: 'Gyumri', osm: 364077, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_SU => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Syunik', capital: 'Kapan', osm: 364082, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_TV => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Tavush', capital: 'Ijevan', osm: 364079, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_VD => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Vayots Dzor', capital: 'Yeghegnadzor', osm: 364081, type: BearCountrySubdivisionTypeEnum::REGION),


            // ANGOLA
            self::AO_BGO => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Bengo', capital: 'Caxito', osm: 1802539, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_BGU => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Benguela', capital: 'Benguela', osm: 1802540, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_BIE => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Bié', capital: 'Kuito', osm: 1802541, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_CAB => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Cabinda', capital: 'Cabinda', osm: 422607, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_CCU => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Cuando Cubango', capital: 'Menongue', osm: 568485, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_CNN => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Cunene', capital: 'Ondjiva', osm: 422606, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_CNO => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'North Cuanza', capital: 'N\'dalatando', osm: 1802542, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_CUS => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'South Cuanza', capital: 'Sumbe', osm: 1802543, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_HUA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Huambo', capital: 'Huambo', osm: 1802544, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_HUI => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Huíla', capital: 'Lubango', osm: 1802545, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_LNO => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'North Lunda', capital: 'Dundo', osm: 1802547, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_LSU => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'South Lunda', capital: 'Saurimo', osm: 1802548, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_LUA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Luanda', capital: 'Luanda', osm: 1802546, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_MAL => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Malanje', capital: 'Malanje', osm: 422660, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_MOX => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Moxico', capital: 'Luena', osm: 1802549, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_NAM => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Namibe', capital: 'Moçâmedes', osm: 1802550, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_UIG => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Uíge', capital: 'Uíge', osm: 422659, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_ZAI => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Zaire', capital: 'M\'banza-Kongo', osm: 422608, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // ARGENTINA
            self::AR_A => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Salta', capital: 'Salta', osm: 2405230, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_B => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Buenos Aires', capital: 'La Plata', osm: 1632167, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Buenos Aires', capital: 'Buenos Aires', osm: 3082668, type: BearCountrySubdivisionTypeEnum::CITY),
            self::AR_D => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'San Luis', capital: 'San Luis', osm: 153538, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_E => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Entre Ríos', capital: 'Paraná', osm: 153551, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_F => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'La Rioja', capital: 'La Rioja', osm: 153536, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_G => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Santiago del Estero', capital: 'Santiago del Estero', osm: 153544, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_H => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Chaco', capital: 'Resistencia', osm: 153554, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_J => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'San Juan', capital: 'San Juan', osm: 153539, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_K => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Catamarca', capital: 'Catamarca', osm: 153545, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_L => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'La Pampa', capital: 'Santa Rosa', osm: 153541, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_M => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Mendoza', capital: 'Mendoza', osm: 153540, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_N => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Misiones', capital: 'Posadas', osm: 153553, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_P => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Formosa', capital: 'Formosa', osm: 2849847, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_Q => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Neuquén', capital: 'Neuquén', osm: 1606727, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_R => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Rio Nеgro', capital: 'Viedma', osm: 153547, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_S => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Santa Cruz', capital: 'Río Gallegos', osm: 153543, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_T => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Tucumán', capital: 'San Miguel de Tucumán', osm: 153558, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_U => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Chubut', capital: 'Rawson', osm: 153548, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_V => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Tierra del Fuego', capital: 'Ushuaia', osm: 153550, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_W => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Corrientes', capital: 'Corrientes', osm: 153552, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_X => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Córdoba', capital: 'Córdoba', osm: 3592494, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_Y => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Jujuy', capital: 'San Salvador de Jujuy', osm: 153556, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_Z => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Santa Fe', capital: 'Santa Fe', osm: 153549, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // Austria
            self::AT_1 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Burgenland', capital: 'Eisenstadt', osm: 76909, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AT_2 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Carinthia', capital: 'Klagenfurt', osm: 52345, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AT_3 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Lower Austria', capital: 'Sankt Pölten', osm: 77189, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AT_4 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Upper Austria', capital: 'Linz', osm: 102303, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AT_5 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Salzburg', capital: 'Salzburg', osm: 86539, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AT_6 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Styria', capital: 'Graz', osm: 35183, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AT_7 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Tyrol', capital: 'Innsbruck', osm: 52343, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AT_8 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Vorarlberg', capital: 'Bregenz', osm: 74942, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AT_9 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Vienna', capital: 'Vienna', osm: 109166, type: BearCountrySubdivisionTypeEnum::STATE),


            // AUSTRALIA
            self::AU_ACT => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'Australian Capital Territory', capital: 'Canberra', osm: 2354197, type: BearCountrySubdivisionTypeEnum::TERRITORY),
            self::AU_NSW => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'New South Wales', capital: 'Sydney', osm: 2316593, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AU_NT => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'Northern Territory', capital: 'Darwin', osm: 2316594, type: BearCountrySubdivisionTypeEnum::TERRITORY),
            self::AU_QLD => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'Queensland', capital: 'Brisbane', osm: 2316595, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AU_SA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'South Australia', capital: 'Adelaide', osm: 2316596, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AU_TAS => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'Tasmania', capital: 'Hobart', osm: 2369652, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AU_VIC => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'Victoria', capital: 'Melbourne', osm: 2316741, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AU_WA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'Western Australia', capital: 'Perth', osm: 2316598, type: BearCountrySubdivisionTypeEnum::STATE),


            // BOSNIA AND HERZEGOVINA
            self::BA_BRC => new BearCountrySubdivisionData(cca2: BearCountryEnum::BA, name: 'Brčko', capital: 'Brčko', osm: 2528143, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BA_BIH => new BearCountrySubdivisionData(cca2: BearCountryEnum::BA, name: 'Federation of Bosnia and Herzegovina', capital: 'Sarajevo', osm: 2528144, type: BearCountrySubdivisionTypeEnum::ENTITY),
            self::BA_SRP => new BearCountrySubdivisionData(cca2: BearCountryEnum::BA, name: 'Republika Srpska', capital: 'Banja Luka', osm: 2528145, type: BearCountrySubdivisionTypeEnum::ENTITY),


            // BARBADOS
            self::BB_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Christ Church', capital: 'Oistins', osm: 3961378, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint Andrew', capital: 'Greenland', osm: 3961379, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint George', capital: 'Bulkeley', osm: 3961988, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint James', capital: 'Holetown', osm: 3961380, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint John', capital: 'Four Roads', osm: 3961381, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint Joseph', capital: 'Bathsheba', osm: 3961382, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint Lucy', capital: 'Crab Hill', osm: 3961383, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint Michael', capital: 'Bridgetown', osm: 3961384, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint Peter', capital: 'Speightstown', osm: 3961385, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint Philip', capital: 'Six Roads', osm: 3961386, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint Thomas', capital: 'Hillaby', osm: 3961387, type: BearCountrySubdivisionTypeEnum::PARISH),


            // BANGLADESH
            self::BD_A => new BearCountrySubdivisionData(cca2: BearCountryEnum::BD, name: 'Barisal', capital: 'Barisal', osm: 3921298, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::BD_B => new BearCountrySubdivisionData(cca2: BearCountryEnum::BD, name: 'Chittagong', capital: 'Chittagong', osm: 3824588, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::BD_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::BD, name: 'Dhaka', capital: 'Dhaka', osm: 3921322, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::BD_D => new BearCountrySubdivisionData(cca2: BearCountryEnum::BD, name: 'Khulna', capital: 'Khulna', osm: 3825003, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::BD_E => new BearCountrySubdivisionData(cca2: BearCountryEnum::BD, name: 'Rajshahi', capital: 'Rajshahi', osm: 3859335, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::BD_F => new BearCountrySubdivisionData(cca2: BearCountryEnum::BD, name: 'Rangpur', capital: 'Rangpur', osm: 3921211, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::BD_G => new BearCountrySubdivisionData(cca2: BearCountryEnum::BD, name: 'Sylhet', capital: 'Sylhet', osm: 3921222, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::BD_H => new BearCountrySubdivisionData(cca2: BearCountryEnum::BD, name: 'Mymensingh', capital: 'Mymensingh', osm: 7318343, type: BearCountrySubdivisionTypeEnum::DIVISION),


            // BELGIUM
            self::BE_BRU => new BearCountrySubdivisionData(cca2: BearCountryEnum::BE, name: 'Brussels Capital Region', capital: 'Brussels', osm: 54094, type: BearCountrySubdivisionTypeEnum::REGION),
            self::BE_VLG => new BearCountrySubdivisionData(cca2: BearCountryEnum::BE, name: 'Flanders', capital: 'Brussels', osm: 53134, type: BearCountrySubdivisionTypeEnum::REGION),
            self::BE_WAL => new BearCountrySubdivisionData(cca2: BearCountryEnum::BE, name: 'Wallonia', capital: 'Namur', osm: 90348, type: BearCountrySubdivisionTypeEnum::REGION),


            // BRAZIL
            self::BR_AC => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Acre', capital: 'Rio Branco', osm: 326266, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_AL => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Alagoas', capital: 'Maceió', osm: 303781, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_AM => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Amazonas', capital: 'Manaus', osm: 332476, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_AP => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Amapá', capital: 'Macapá', osm: 331463, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_BA => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Bahia', capital: 'Salvador', osm: 362413, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_CE => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Ceará', capital: 'Fortaleza', osm: 302635, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_DF => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Federal District', capital: 'Brasília', osm: 421151, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BR_ES => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Espírito Santo', capital: 'Vitória', osm: 54882, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_GO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Goiás', capital: 'Goiânia', osm: 334443, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Maranhão', capital: 'São Luís', osm: 332924, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_MT => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Mato Grosso', capital: 'Cuiabá', osm: 333597, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_MS => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Mato Grosso do Sul', capital: 'Campo Grande', osm: 334051, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_MG => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Minas Gerais', capital: 'Belo Horizonte', osm: 315173, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_PA => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Pará', capital: 'Belém', osm: 185579, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_PB => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Paraíba', capital: 'João Pessoa', osm: 301464, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_PR => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Paraná', capital: 'Curitiba', osm: 297640, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_PE => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Pernambuco', capital: 'Recife', osm: 303702, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_PI => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Piauí', capital: 'Teresina', osm: 302819, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_RJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Rio de Janeiro', capital: 'Rio de Janeiro', osm: 57963, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_RN => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Rio Grande do Norte', capital: 'Natal', osm: 301079, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_RS => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Rio Grande do Sul', capital: 'Porto Alegre', osm: 242620, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_RO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Rondônia', capital: 'Porto Velho', osm: 325866, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_RR => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Roraima', capital: 'Boa Vista', osm: 326287, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_SC => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Santa Catarina', capital: 'Florianópolis', osm: 296584, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_SP => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'São Paulo', capital: 'São Paulo', osm: 298204, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_SE => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Sergipe', capital: 'Aracaju', osm: 303940, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_TO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Tocantins', capital: 'Palmas', osm: 336819, type: BearCountrySubdivisionTypeEnum::STATE),


            // BELARUS
            self::BY_BR => new BearCountrySubdivisionData(cca2: BearCountryEnum::BY, name: 'Brest', capital: 'Brest', osm: 59189, type: BearCountrySubdivisionTypeEnum::OBLAST),
            self::BY_HM => new BearCountrySubdivisionData(cca2: BearCountryEnum::BY, name: 'Minsk', capital: 'Minsk', osm: 59195, type: BearCountrySubdivisionTypeEnum::CITY),
            self::BY_HO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BY, name: 'Gomel', capital: 'Gomel', osm: 59161, type: BearCountrySubdivisionTypeEnum::OBLAST),
            self::BY_HR => new BearCountrySubdivisionData(cca2: BearCountryEnum::BY, name: 'Grodno', capital: 'Grodno', osm: 59275, type: BearCountrySubdivisionTypeEnum::OBLAST),
            self::BY_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::BY, name: 'Mogilev', capital: 'Mogilev', osm: 59162, type: BearCountrySubdivisionTypeEnum::OBLAST),
            self::BY_MI => new BearCountrySubdivisionData(cca2: BearCountryEnum::BY, name: 'Minsk', capital: 'Minsk', osm: 59752, type: BearCountrySubdivisionTypeEnum::OBLAST),
            self::BY_VI => new BearCountrySubdivisionData(cca2: BearCountryEnum::BY, name: 'Vitebsk', capital: 'Vitebsk', osm: 59506, type: BearCountrySubdivisionTypeEnum::OBLAST),


            // CANADA
            self::CA_AB => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Alberta', capital: 'Edmonton', osm: 391186, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_BC => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'British Columbia', capital: 'Victoria', osm: 390867, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_MB => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Manitoba', capital: 'Winnipeg', osm: 390841, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_NB => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'New Brunswick', capital: 'Fredericton', osm: 68942, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_NL => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Newfoundland and Labrador', capital: 'St. John\'s', osm: 391196, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_NS => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Nova Scotia', capital: 'Halifax', osm: 390558, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_NT => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Northwest Territories', capital: 'Yellowknife', osm: 391220, type: BearCountrySubdivisionTypeEnum::TERRITORY),
            self::CA_NU => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Nunavut', capital: 'Iqaluit', osm: 390840, type: BearCountrySubdivisionTypeEnum::TERRITORY),
            self::CA_ON => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Ontario', capital: 'Toronto', osm: 68841, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_PE => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Prince Edward Island', capital: 'Charlottetown', osm: 391115, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_QC => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Quebec', capital: 'Quebec City', osm: 61549, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_SK => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Saskatchewan', capital: 'Regina', osm: 391178, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_YT => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Yukon', capital: 'Whitehorse', osm: 391455, type: BearCountrySubdivisionTypeEnum::TERRITORY),


            // COSTA RICA
            self::CR_A => new BearCountrySubdivisionData(cca2: BearCountryEnum::CR, name: 'Alajuela', capital: 'Alajuela', osm: 3222933, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CR_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::CR, name: 'Cartago', capital: 'Cartago', osm: 3223054, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CR_G => new BearCountrySubdivisionData(cca2: BearCountryEnum::CR, name: 'Guanacaste', capital: 'Liberia', osm: 3222919, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CR_H => new BearCountrySubdivisionData(cca2: BearCountryEnum::CR, name: 'Heredia', capital: 'Heredia', osm: 3221947, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CR_L => new BearCountrySubdivisionData(cca2: BearCountryEnum::CR, name: 'Limón', capital: 'Limón', osm: 3223056, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CR_P => new BearCountrySubdivisionData(cca2: BearCountryEnum::CR, name: 'Puntarenas', capital: 'Puntarenas', osm: 3223028, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CR_SJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::CR, name: 'San José', capital: 'San José', osm: 3223004, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // CYPRUS
            self::CY_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CY, name: 'Nicosia', capital: 'Nicosia', osm: 3264382, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CY_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CY, name: 'Limassol', capital: 'Limassol', osm: 2087230, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CY_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CY, name: 'Larnaca', capital: 'Larnaca', osm: 2087229, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CY_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CY, name: 'Famagusta', capital: 'Famagusta', osm: 3264447, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CY_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CY, name: 'Paphos', capital: 'Paphos', osm: 3263729, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CY_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CY, name: 'Kyrenia', capital: 'Kyrenia', osm: 3264494, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // GERMANY
            self::DE_BW => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Baden-Württemberg', capital: 'Stuttgart', osm: 62611, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_BY => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Bavaria', capital: 'Munich', osm: 2145268, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_BE => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Berlin', capital: 'Berlin', osm: 62422, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_BB => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Brandenburg', capital: 'Potsdam', osm: 62504, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_HB => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Bremen', capital: 'Bremen', osm: 62718, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_HH => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Hamburg', capital: 'Hamburg', osm: 62782, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_HE => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Hesse', capital: 'Wiesbaden', osm: 62650, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_MV => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Mecklenburg-Vorpommern', capital: 'Schwerin', osm: 28322, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_NI => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Lower Saxony', capital: 'Hanover', osm: 62771, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_NW => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'North Rhine-Westphalia', capital: 'Düsseldorf', osm: 62761, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_RP => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Rhineland-Palatinate', capital: 'Mainz', osm: 62341, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_SL => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Saarland', capital: 'Saarbrücken', osm: 62372, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_SN => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Saxony', capital: 'Dresden', osm: 62467, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_ST => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Saxony-Anhalt', capital: 'Magdeburg', osm: 62607, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_SH => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Schleswig-Holstein', capital: 'Kiel', osm: 51529, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_TH => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Thuringia', capital: 'Erfurt', osm: 62366, type: BearCountrySubdivisionTypeEnum::STATE),


            // DENMARK
            self::DK_81 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DK, name: 'North Denmark', capital: 'Aalborg', osm: 1319936, type: BearCountrySubdivisionTypeEnum::REGION),
            self::DK_82 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DK, name: 'Central Denmark', capital: 'Viborg', osm: 1319935, type: BearCountrySubdivisionTypeEnum::REGION),
            self::DK_83 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DK, name: 'Southern Denmark', capital: 'Vejen', osm: 1319978, type: BearCountrySubdivisionTypeEnum::REGION),
            self::DK_84 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DK, name: 'Capital Region', capital: 'Hillerød', osm: 1320608, type: BearCountrySubdivisionTypeEnum::REGION),
            self::DK_85 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DK, name: 'Zealand', capital: 'Sorø', osm: 1320370, type: BearCountrySubdivisionTypeEnum::REGION),


            // SPAIN
            self::ES_AN => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Andalusia', capital: 'Seville', osm: 349044, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_AR => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Aragon', capital: 'Zaragoza', osm: 349045, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_AS => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Asturias', capital: 'Oviedo', osm: 349033, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_CB => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Cantabria', capital: 'Santander', osm: 349013, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_CE => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Ceuta', capital: 'Ceuta', osm: 1154756, type: BearCountrySubdivisionTypeEnum::CITY),
            self::ES_CL => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Castile and León', capital: 'Valladolid', osm: 349041, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_CM => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Castile-La Mancha', capital: 'Toledo', osm: 349052, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_CN => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Canary Islands', capital: 'Las Palmas', osm: 349048, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_CT => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Catalonia', capital: 'Barcelona', osm: 349053, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_EX => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Extremadura', capital: 'Mérida', osm: 349050, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_GA => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Galicia', capital: 'Santiago de Compostela', osm: 349036, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_IB => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Balearic Islands', capital: 'Palma', osm: 348981, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_MC => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Region of Murcia', capital: 'Murcia', osm: 349047, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_MD => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Madrid', capital: 'Madrid', osm: 349055, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_ML => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Melilla', capital: 'Melilla', osm: 1154757, type: BearCountrySubdivisionTypeEnum::CITY),
            self::ES_NC => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Navarre', capital: 'Pamplona', osm: 349027, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_PV => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Basque Country', capital: 'Vitoria-Gasteiz', osm: 349042, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_RI => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'La Rioja', capital: 'Logroño', osm: 348991, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_VC => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Valencia', capital: 'Valencia', osm: 349043, type: BearCountrySubdivisionTypeEnum::COMMUNITY),


            // FRANCE
            self::FR_976 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Mayotte', capital: 'Mamoudzou', osm: 1259885, type: BearCountrySubdivisionTypeEnum::COLLECTIVITY),
            self::FR_ARA => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Auvergne-Rhône-Alps', capital: 'Lyon', osm: 3792877, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_BFC => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Burgundy-Free-County', capital: 'Dijon', osm: 3792878, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_BRE => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Brittany', capital: 'Rennes', osm: 102740, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_CVL => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Central-Vale of the Loire', capital: 'Orléans', osm: 8640, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_COR => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Corsica', capital: 'Ajaccio', osm: 76910, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_GES => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Greater East', capital: 'Strasbourg', osm: 3792876, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_HDF => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Heights-of-France', capital: 'Lille', osm: 4217435, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_IDF => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Isle-of-France', capital: 'Paris', osm: 8649, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_NOR => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Normandy', capital: 'Rouen', osm: 3793170, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_NAQ => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'New Aquitaine', capital: 'Bordeaux', osm: 3792880, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_OCC => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Occitania', capital: 'Toulouse', osm: 3792883, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_PDL => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Lands of the Loire', capital: 'Nantes', osm: 8650, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_PAC => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Provence-Alps-Azure Coast', capital: 'Marseille', osm: 8654, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_CP => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Clipperton', capital: '', osm: 2573009, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::FR_WF => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Wallis and Futuna', capital: 'Mata-Utu', osm: 3412448, type: BearCountrySubdivisionTypeEnum::COLLECTIVITY),



            // THE UNITED KINGDOM
            self::GB_ENG => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'England', capital: 'London', osm: 58447, type: BearCountrySubdivisionTypeEnum::COUNTRY),
            self::GB_NIR => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'Northern Ireland', capital: 'Belfast', osm: 156393, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::GB_SCT => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'Scotland', capital: 'Edinburgh', osm: 58446, type: BearCountrySubdivisionTypeEnum::COUNTRY),
            self::GB_WLS => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'Wales', capital: 'Cardiff', osm: 58437, type: BearCountrySubdivisionTypeEnum::COUNTRY),


            // IRELAND
            self::IE_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::IE, name: 'Connacht', capital: 'Galway', osm: 278721, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IE_L => new BearCountrySubdivisionData(cca2: BearCountryEnum::IE, name: 'Leinster', capital: 'Dublin', osm: 278746, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IE_M => new BearCountrySubdivisionData(cca2: BearCountryEnum::IE, name: 'Munster', capital: 'Cork', osm: 278750, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IE_U => new BearCountrySubdivisionData(cca2: BearCountryEnum::IE, name: 'Ulster', capital: 'Belfast', osm: 278664, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // ITALY
            self::IT_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Piedmont', capital: 'Turin', osm: 44874, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_23 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Aosta Valley', capital: 'Aosta', osm: 45155, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_25 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Lombardy', capital: 'Milan', osm: 44879, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_32 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Trentino-South Tyrol', capital: 'Trento', osm: 45757, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_34 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Veneto', capital: 'Venice', osm: 43648, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_36 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Friuli-Venezia Giulia', capital: 'Trieste', osm: 179296, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_42 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Liguria', capital: 'Genoa', osm: 301482, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_45 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Emilia-Romagna', capital: 'Bologna', osm: 42611, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_52 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Tuscany', capital: 'Florence', osm: 41977, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_55 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Umbria', capital: 'Perugia', osm: 42004, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_57 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Marche', capital: 'Ancona', osm: 53060, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_62 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Lazio', capital: 'Rome', osm: 40784, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_65 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Abruzzo', capital: 'L\'Aquila', osm: 53937, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_67 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Molise', capital: 'Campobasso', osm: 41256, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_72 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Campania', capital: 'Naples', osm: 40218, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_75 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Apulia', capital: 'Bari', osm: 40095, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_77 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Basilicata', capital: 'Potenza', osm: 40137, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_78 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Calabria', capital: 'Catanzaro', osm: 1783980, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_82 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Sicily', capital: 'Palermo', osm: 39152, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_88 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Sardinia', capital: 'Cagliari', osm: 7361997, type: BearCountrySubdivisionTypeEnum::REGION),


            // NETHERLANDS
            self::NL_BQ1 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Bonaire', capital: 'Kralendijk', osm: 2324450, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::NL_BQ2 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Saba', capital: 'The Bottom', osm: 2324451, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::NL_BQ3 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Sint Eustatius', capital: 'Oranjestad', osm: 2324452, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::NL_DR => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Drenthe', capital: 'Assen', osm: 47540, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_FL => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Flevoland', capital: 'Lelystad', osm: 47407, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_FR => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Friesland', capital: 'Leeuwarden', osm: 47381, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_GE => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Gelderland', capital: 'Arnhem', osm: 47554, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_GR => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Groningen', capital: 'Groningen', osm: 47826, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_LI => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Limburg', capital: 'Maastricht', osm: 47793, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_NB => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'North Brabant', capital: 'Den Bosch', osm: 47696, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_NH => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'North Holland', capital: 'Haarlem', osm: 47654, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_OV => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Overijssel', capital: 'Zwolle', osm: 47608, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_UT => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Utrecht', capital: 'Utrecht', osm: 47667, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_ZE => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Zeeland', capital: 'Middelburg', osm: 47806, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_ZH => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'South Holland', capital: 'The Hague', osm: 47772, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // NORWAY
            self::BVT => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Bouvet Island', capital: '', osm: 2425963, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::NO_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Oslo', capital: 'Oslo', osm: 406091, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Rogaland', capital: 'Stavanger', osm: 405836, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Møre and Romsdal', capital: 'Molde', osm: 406868, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Northland', capital: 'Bodø', osm: 408105, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Svalbard', capital: 'Longyearbyen', osm: 1337397, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NO_22 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Jan Mayen', capital: 'Longyearbyen', osm: 1337126, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NO_31 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Østfold', capital: 'Sarpsborg', osm: 406060, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_32 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Akershus', capital: 'Oslo', osm: 406106, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_33 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Buskerud', capital: 'Drammen', osm: 412297, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_34 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Inland', capital: 'Hamar', osm: 10155527, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_39 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Vestfold', capital: 'Tønsberg', osm: 404589, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_40 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Telemark', capital: 'Skien', osm: 405156, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_42 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Agder', capital: 'Kristiansand', osm: 10155517, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_46 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Westland', capital: 'Bergen', osm: 10155543, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_50 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Trøndelag', capital: 'Steinkjer', osm: 406567, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_55 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Troms', capital: 'Tromsø', osm: 407717, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_56 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Finnmark', capital: 'Vadsø', osm: 406389, type: BearCountrySubdivisionTypeEnum::COUNTY),


            // NEPAL
            self::NP_P1 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NP, name: 'Koshi', capital: 'Biratnagar', osm: 10489132, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NP_P2 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NP, name: 'Madhesh', capital: 'Janakpur', osm: 10489318, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NP_P3 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NP, name: 'Bagmati', capital: 'Hetauda', osm: 10489317, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NP_P4 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NP, name: 'Gandaki', capital: 'Pokhara', osm: 10489605, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NP_P5 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NP, name: 'Lumbini', capital: 'Butwal', osm: 10493722, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NP_P6 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NP, name: 'Karnali', capital: 'Birendranagar', osm: 10493723, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NP_P7 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NP, name: 'Sudurpashchim', capital: 'Dhangadhi', osm: 10488187, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // NEW ZEALAND
            self::NZ_AUK => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Auckland', capital: 'Auckland', osm: 2094141, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_BOP => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Bay of Plenty', capital: 'Whakatāne', osm: 1790755, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_CAN => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Canterbury', capital: 'Christchurch', osm: 1640137, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_CIT => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Chatham Islands', capital: '', osm: 2647558, type: BearCountrySubdivisionTypeEnum::ISLAND),
            self::NZ_GIS => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Gisborne', capital: 'Gisborne', osm: 2643819, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_HKB => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Hawke\'s Bay', capital: 'Napier', osm: 1643811, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_MBH => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Marlborough', capital: 'Blenheim', osm: 4266977, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_MWT => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Manawatu-Wanganui', capital: 'Palmerston North', osm: 1638992, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_NSN => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Nelson', capital: 'Nelson', osm: 4266962, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_NTL => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Northland', capital: 'Whangārei', osm: 2133870, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_OTA => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Otago', capital: 'Dunedin', osm: 1640138, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_STL => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Southland', capital: 'Invercargill', osm: 1640159, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_TAS => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Tasman', capital: 'Richmond', osm: 4266979, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_TKI => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Taranaki', capital: 'Stratford', osm: 1643812, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_WGN => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Wellington', capital: 'Wellington', osm: 1638991, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_WKO => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Waikato', capital: 'Hamilton', osm: 2094142, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_WTC => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'West Coast', capital: 'Greymouth', osm: 1640136, type: BearCountrySubdivisionTypeEnum::REGION),


            // PORTUGAL
            self::PT_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Aveiro', capital: 'Aveiro', osm: 3920249, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Beja', capital: 'Beja', osm: 5134927, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Braga', capital: 'Braga', osm: 3738284, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Bragança', capital: 'Bragança', osm: 3905929, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Castelo Branco', capital: 'Castelo Branco', osm: 4104644, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Coimbra', capital: 'Coimbra', osm: 4875183, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Évora', capital: 'Évora', osm: 5130767, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Faro', capital: 'Faro', osm: 1278415, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Guarda', capital: 'Guarda', osm: 3905924, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Leiria', capital: 'Leiria', osm: 5011694, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Lisbon', capital: 'Lisbon', osm: 2897141, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Portalegre', capital: 'Portalegre', osm: 5123448, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Porto', capital: 'Porto', osm: 3459013, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Santarém', capital: 'Santarém', osm: 5122644, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Setúbal', capital: 'Setúbal', osm: 5143590, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Viana do Castelo', capital: 'Viana do Castelo', osm: 3898131, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Vila Real', capital: 'Vila Real', osm: 3967823, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Viseu', capital: 'Viseu', osm: 3920285, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Azores', capital: 'Ponta Delgada', osm: 1629146, type: BearCountrySubdivisionTypeEnum::REGION),
            self::PT_30 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Madeira', capital: 'Funchal', osm: 1629145, type: BearCountrySubdivisionTypeEnum::REGION),


            // QATAR
            self::QA_DA => new BearCountrySubdivisionData(cca2: BearCountryEnum::QA, name: 'Ad Dawhah', capital: 'Doha', osm: 27332, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::QA_KH => new BearCountrySubdivisionData(cca2: BearCountryEnum::QA, name: 'Al Khor', capital: 'Al Khor', osm: 27329, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::QA_MS => new BearCountrySubdivisionData(cca2: BearCountryEnum::QA, name: 'Al Shamal', capital: 'Madinat ash Shamal', osm: 27335, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::QA_RA => new BearCountrySubdivisionData(cca2: BearCountryEnum::QA, name: 'Al Rayyan', capital: 'Ar Rayyan', osm: 27331, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::QA_SH => new BearCountrySubdivisionData(cca2: BearCountryEnum::QA, name: 'Al-Shahaniya', capital: 'Al-Shahaniya', osm: 27330, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::QA_US => new BearCountrySubdivisionData(cca2: BearCountryEnum::QA, name: 'Umm Salal', capital: 'Umm Salal', osm: 27328, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::QA_WA => new BearCountrySubdivisionData(cca2: BearCountryEnum::QA, name: 'Al Wakrah', capital: 'Al Wakrah', osm: 27337, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::QA_ZA => new BearCountrySubdivisionData(cca2: BearCountryEnum::QA, name: 'Al Daayen', capital: 'Umm Qarn', osm: 11146904, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),


            // SAUDI ARABIA
            self::SA_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Riyadh', capital: 'Riyadh', osm: 3678409, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Makkah', capital: 'Makkah', osm: 3678639, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Medina', capital: 'Madinah', osm: 3679869, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Eastern', capital: 'Dammam', osm: 3667294, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Al-Qassim', capital: 'Buraidah', osm: 3679872, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Ha\'il', capital: 'Ha\'il', osm: 3676707, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Tabuk', capital: 'Tabuk', osm: 3679867, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Northern Borders', capital: 'Arar', osm: 3673927, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Jazan', capital: 'Jazan', osm: 3679903, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Najran', capital: 'Najran', osm: 3667317, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Al Bahah', capital: 'Al Bahah', osm: 3679888, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Al Jawf', capital: 'Sakaka', osm: 3842543, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Asir', capital: 'Abha', osm: 3678598, type: BearCountrySubdivisionTypeEnum::REGION),


            // SWEDEN
            self::SE_AB => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Stockholm', capital: 'Stockholm', osm: 54391, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_AC => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Västerbotten', capital: 'Umeå', osm: 52825, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_BD => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Norrbotten', capital: 'Luleå', osm: 52824, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Uppsala', capital: 'Uppsala', osm: 54220, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_D => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Södermanland', capital: 'Nyköping', osm: 54386, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_E => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Östergötland', capital: 'Linköping', osm: 940675, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_F => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Jönköping', capital: 'Jönköping', osm: 54374, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_G => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Kronoberg', capital: 'Växjö', osm: 54412, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_H => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Kalmar', capital: 'Kalmar', osm: 54417, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_I => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Gotland', capital: 'Visby', osm: 941530, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_K => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Blekinge', capital: 'Karlskrona', osm: 54413, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_M => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Skåne', capital: 'Malmö', osm: 54409, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_N => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Halland', capital: 'Halmstad', osm: 54403, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_O => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Västra Götaland', capital: 'Gothenburg', osm: 54367, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_S => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Värmland', capital: 'Karlstad', osm: 54223, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_T => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Örebro', capital: 'Örebro', osm: 54222, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_U => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Västmanland', capital: 'Västerås', osm: 54221, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_W => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Dalarna', capital: 'Falun', osm: 52834, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_X => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Gävleborg', capital: 'Gävle', osm: 52832, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_Y => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Västernorrland', capital: 'Härnösand', osm: 52827, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_Z => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Jämtland', capital: 'Östersund', osm: 52826, type: BearCountrySubdivisionTypeEnum::COUNTY),


            // SINGAPORE
            self::SG_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SG, name: 'Central Singapore', capital: 'Singapore', osm: 3831712, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::SG_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SG, name: 'North East', capital: 'Singapore', osm: 3831713, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::SG_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SG, name: 'North West', capital: 'Singapore', osm: 3831714, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::SG_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SG, name: 'South East', capital: 'Singapore', osm: 3831715, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::SG_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SG, name: 'South West', capital: 'Singapore', osm: 3831716, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // THE UNITED STATES
            self::US_AL => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Alabama', capital: 'Montgomery', osm: 161950, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_AK => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Alaska', capital: 'Juneau', osm: 1116270, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_AZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Arizona', capital: 'Phoenix', osm: 162018, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_AR => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Arkansas', capital: 'Little Rock', osm: 161646, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_CA => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'California', capital: 'Sacramento', osm: 165475, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_CO => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Colorado', capital: 'Denver', osm: 161961, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_CT => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Connecticut', capital: 'Hartford', osm: 165794, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_DE => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Delaware', capital: 'Dover', osm: 162110, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_FL => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Florida', capital: 'Tallahassee', osm: 162050, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_GA => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Georgia', capital: 'Atlanta', osm: 161957, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_HI => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Hawaii', capital: 'Honolulu', osm: 166563, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_ID => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Idaho', capital: 'Boise', osm: 162116, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_IL => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Illinois', capital: 'Springfield', osm: 122586, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_IN => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Indiana', capital: 'Indianapolis', osm: 161816, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_IA => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Iowa', capital: 'Des Moines', osm: 161650, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_KS => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Kansas', capital: 'Topeka', osm: 161644, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_KY => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Kentucky', capital: 'Frankfort', osm: 161655, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_LA => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Louisiana', capital: 'Baton Rouge', osm: 224922, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_ME => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Maine', capital: 'Augusta', osm: 63512, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_MD => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Maryland', capital: 'Annapolis', osm: 162112, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Massachusetts', capital: 'Boston', osm: 61315, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_MI => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Michigan', capital: 'Lansing', osm: 165789, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_MN => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Minnesota', capital: 'St. Paul', osm: 165471, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_MS => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Mississippi', capital: 'Jackson', osm: 161943, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_MO => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Missouri', capital: 'Jefferson City', osm: 161638, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_MT => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Montana', capital: 'Helena', osm: 162115, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_NE => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Nebraska', capital: 'Lincoln', osm: 161648, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_NV => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Nevada', capital: 'Carson City', osm: 165473, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_NH => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'New Hampshire', capital: 'Concord', osm: 67213, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_NJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'New Jersey', capital: 'Trenton', osm: 224951, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_NM => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'New Mexico', capital: 'Santa Fe', osm: 162014, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_NY => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'New York', capital: 'Albany', osm: 61320, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_NC => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'North Carolina', capital: 'Raleigh', osm: 224045, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_ND => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'North Dakota', capital: 'Bismarck', osm: 161653, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_OH => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Ohio', capital: 'Columbus', osm: 162061, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_OK => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Oklahoma', capital: 'Oklahoma City', osm: 161645, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_OR => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Oregon', capital: 'Salem', osm: 165476, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_PA => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Pennsylvania', capital: 'Harrisburg', osm: 162109, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_RI => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Rhode Island', capital: 'Providence', osm: 392915, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_SC => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'South Carolina', capital: 'Columbia', osm: 224040, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_SD => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'South Dakota', capital: 'Pierre', osm: 161652, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_TN => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Tennessee', capital: 'Nashville', osm: 161838, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_TX => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Texas', capital: 'Austin', osm: 114690, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_UT => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Utah', capital: 'Salt Lake City', osm: 161993, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_VT => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Vermont', capital: 'Montpelier', osm: 60759, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_VA => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Virginia', capital: 'Richmond', osm: 224042, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_WA => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Washington', capital: 'Olympia', osm: 165479, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_WV => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'West Virginia', capital: 'Charleston', osm: 162068, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_WI => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Wisconsin', capital: 'Madison', osm: 165466, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_WY => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Wyoming', capital: 'Cheyenne', osm: 161991, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_DC => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'District of Columbia', capital: 'Washington', osm: 162069, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::US_AS => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'American Samoa', capital: 'Pago Pago', osm: 2177187, type: BearCountrySubdivisionTypeEnum::OUTLYING_AREA),
            self::US_GU => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Guam', capital: 'Hagåtña', osm: 306001, type: BearCountrySubdivisionTypeEnum::OUTLYING_AREA),
            self::US_MP => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Northern Mariana Islands', capital: 'Saipan', osm: 306004, type: BearCountrySubdivisionTypeEnum::OUTLYING_AREA),
            self::US_PR => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Puerto Rico', capital: 'San Juan', osm: 4422604, type: BearCountrySubdivisionTypeEnum::OUTLYING_AREA),
            self::US_UM => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'United States Minor Outlying Islands', capital: '', osm: 2185386, type: BearCountrySubdivisionTypeEnum::OUTLYING_AREA),
            self::US_VI => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Virgin Islands', capital: 'Charlotte Amalie', osm: 286898, type: BearCountrySubdivisionTypeEnum::OUTLYING_AREA),



            // VIETNAM
            self::VN_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Lai Châu', capital: 'Lai Châu', osm: 1903322, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Lào Cai', capital: 'Lào Cai', osm: 1903400, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hà Giang', capital: 'Vị Thanh', osm: 1903478, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Cao Bằng', capital: 'Cao Bằng', osm: 1844412, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Sơn La', capital: 'Sơn La', osm: 1903291, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Yên Bái', capital: 'Yên Bái', osm: 1903199, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Tuyên Quang', capital: 'Tuyên Quang', osm: 1903418, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Lạng Sơn', capital: 'Lạng Sơn', osm: 5522596, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Quảng Ninh', capital: 'Hạ Long', osm: 1902947, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hòa Bình', capital: 'Hòa Bình', osm: 1902973, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Ninh Bình', capital: 'Ninh Bình', osm: 1900963, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Thái Bình', capital: 'Thái Bình', osm: 1901019, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Thanh Hóa', capital: 'Thanh Hóa', osm: 1898590, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_22 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Nghệ An', capital: 'Vinh', osm: 1898509, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_23 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hà Tĩnh', capital: 'Hà Tĩnh', osm: 1898458, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_24 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Quảng Bình', capital: 'Đồng Hới', osm: 1896050, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_25 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Quảng Trị', capital: 'Đông Hà', osm: 1895630, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_26 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Thừa Thiên-Huế', capital: 'Huế', osm: 1891483, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_27 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Quảng Nam', capital: 'Tam Kỳ', osm: 1891352, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_28 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Kon Tum', capital: 'Kon Tum', osm: 1879515, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_29 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Quảng Ngãi', capital: 'Quảng Ngãi', osm: 1890793, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_30 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Gia Lai', capital: 'Pleiku', osm: 1884018, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_31 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bình Định', capital: 'Quy Nhon', osm: 1889794, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_32 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Phú Yên', capital: 'Tuy Hòa', osm: 1889204, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_33 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Đắk Lắk', capital: 'Buôn Ma Thuột', osm: 1884034, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_34 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Khánh Hòa', capital: 'Nha Trang', osm: 1887959, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_35 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Lâm Đồng', capital: 'Đà Lạt', osm: 1885367, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_36 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Ninh Thuận', capital: 'Phan Rang–Tháp Chàm', osm: 1886159, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_37 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Tây Ninh', capital: 'Tây Ninh', osm: 1898961, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_39 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Đồng Nai', capital: 'Biên Hòa', osm: 1904421, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_40 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bình Thuận', capital: 'Phan Thiết', osm: 1904231, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_41 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Long An', capital: 'Tân An', osm: 1877236, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_43 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bà Rịa-Vũng Tàu', capital: 'Bà Rịa', osm: 1904296, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_44 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'An Giang', capital: 'An Giang', osm: 1875748, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_45 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Đồng Tháp', capital: 'Cao Lãnh', osm: 1875866, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_46 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Tiền Giang', capital: 'Mỹ Tho', osm: 1876011, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_47 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Kiên Giang', capital: 'Rạch Giá', osm: 1874471, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_49 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Vĩnh Long', capital: 'Vĩnh Long', osm: 1875887, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_50 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bến Tre', capital: 'Bến Tre', osm: 1875968, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_51 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Trà Vinh', capital: 'Trà Vinh', osm: 1873642, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_52 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Sóc Trăng', capital: 'Sóc Trăng', osm: 1873632, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_53 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bắc Kạn', capital: 'Bắc Kạn', osm: 1903471, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_54 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bắc Giang', capital: 'Bắc Giang', osm: 1902941, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_55 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bạc Liêu', capital: 'Bạc Liêu', osm: 1873533, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_56 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bắc Ninh', capital: 'Bắc Ninh', osm: 1902690, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_57 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bình Dương', capital: 'Thủ Dầu Một', osm: 1906037, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_58 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bình Phước', capital: 'Đồng Xoài', osm: 1898841, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_59 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Cà Mau', capital: 'Cà Mau', osm: 1873490, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_61 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hải Dương', capital: 'Hải Dương', osm: 1902686, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_63 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hà Nam', capital: 'Phủ Lý', osm: 1901010, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_66 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hưng Yên', capital: 'Hưng Yên', osm: 1901032, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_67 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Nam Định', capital: 'Nam Định', osm: 1901008, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_68 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Phú Thọ', capital: 'Việt Trì', osm: 1902930, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_69 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Thái Nguyên', capital: 'Thái Nguyên', osm: 1902967, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_70 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Vĩnh Phúc', capital: 'Vĩnh Yên', osm: 1902889, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_71 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Điện Biên', capital: 'Điện Biên Phủ', osm: 1903340, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_72 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Đắk Nông', capital: 'Gia Nghĩa', osm: 1884042, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_73 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hậu Giang', capital: 'Hậu Giang', osm: 1874249, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_CT => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Cần Thơ', capital: 'Cần Thơ', osm: 1874283, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::VN_DN => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Đà Nẵng', capital: 'Đà Nẵng', osm: 1891418, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::VN_HN => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hà Nội', capital: 'Hà Nội', osm: 1903516, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::VN_HP => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hải Phòng', capital: 'Hải Phòng', osm: 1902682, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::VN_SG => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hồ Chí Minh', capital: 'Hồ Chí Minh', osm: 1973756, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),


            // VANUATU
            self::VU_MAP => new BearCountrySubdivisionData(cca2: BearCountryEnum::VU, name: 'Malampa', capital: '3765629', osm: 13285810, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VU_PAM => new BearCountrySubdivisionData(cca2: BearCountryEnum::VU, name: 'Penama', capital: 'Saratamata', osm: 3765606, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VU_SAM => new BearCountrySubdivisionData(cca2: BearCountryEnum::VU, name: 'Sanma', capital: 'Luganville', osm: 3765591, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VU_SEE => new BearCountrySubdivisionData(cca2: BearCountryEnum::VU, name: 'Shefa', capital: 'Port Vila', osm: 3765630, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VU_TAE => new BearCountrySubdivisionData(cca2: BearCountryEnum::VU, name: 'Tafea', capital: 'Isangel', osm: 3765631, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VU_TOB => new BearCountrySubdivisionData(cca2: BearCountryEnum::VU, name: 'Torba', capital: 'Sola', osm: 3765596, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // SAMOA
            self::WS_AA => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'A\'ana', capital: 'Leulumoega', osm: 13285809, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_AL => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Aiga-i-le-Tai', capital: 'Mulifanua', osm: 13285778, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_AT => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Atua', capital: 'Lufilufi', osm: 13285780, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_FA => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Fa\'asaleleaga', capital: 'Safotulafai', osm: 13285392, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_GE => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Gaga\'emauga', capital: 'Saleaula', osm: 13285430, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_GI => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Gaga\'ifomauga', capital: 'Aopo', osm: 13285429, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_PA => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Palauli', capital: 'Vailoa', osm: 13285391, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_SA => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Satupa\'itea', capital: 'Satupa\'itea', osm: 13285390, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_TU => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Tuamasaga', capital: 'Afenga', osm: 13285808, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_VF => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Va\'a-o-Fonoti', capital: 'Samamea', osm: 13285779, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_VS => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Vaisigano', capital: 'Asau', osm: 13285389, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // YEMEN
            self::YE_AB => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Abyan', capital: 'Zinjibar', osm: 383898, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_AD => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Aden', capital: 'Aden', osm: 383893, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_AM => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Amran', capital: 'Amran', osm: 383907, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_BA => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Al Bayda', capital: 'Al Bayda', osm: 383901, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_DA => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Dhale', capital: 'Dhale', osm: 383902, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_DH => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Dhamar', capital: 'Dhamar', osm: 383906, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_HD => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Hadramaut', capital: 'Mukalla', osm: 383897, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_HJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Hajjah', capital: 'Hajjah', osm: 383905, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_HU => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Al Hudaydah', capital: 'Al Hudaydah', osm: 383894, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_IB => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Ibb', capital: 'Ibb', osm: 383900, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_JA => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Al Jawf', capital: 'Al Hazm', osm: 383899, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_LA => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Lahij', capital: 'Lahij', osm: 383892, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Marib', capital: 'Marib', osm: 383909, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_MR => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Al Mahrah', capital: 'Al Ghaydah', osm: 383908, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_MW => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Al Mahwit', capital: 'Al Mahwit', osm: 383903, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_RA => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Raymah', capital: 'Al-Jabin', osm: 383910, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_SA => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Sanaa', capital: 'Sanaa', osm: 8894341, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::YE_SD => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Shabwah', capital: 'Ataq', osm: 383904, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_SH => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Shabwah', capital: 'Ataq', osm: 383896, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_SN => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Sanaa', capital: 'Sanaa', osm: 383891, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_SU => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Socotra', capital: 'Hadibu', osm: 5486640, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_TA => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Taiz', capital: 'Taiz', osm: 383895, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),


            // SOUTH AFRICA
            self::ZA_EC => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'Eastern Cape', capital: 'Bisho', osm: 88574, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZA_FS => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'Free State', capital: 'Bloemfontein', osm: 92417, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZA_GP => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'Gauteng', capital: 'Johannesburg', osm: 349344, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZA_KZN => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'KwaZulu-Natal', capital: 'Pietermaritzburg', osm: 349390, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZA_LP => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'Limpopo', capital: 'Polokwane', osm: 349547, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZA_MP => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'Mpumalanga', capital: 'Mbombela', osm: 349556, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZA_NC => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'Northern Cape', capital: 'Kimberley', osm: 86720, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZA_NW => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'North West', capital: 'Mahikeng', osm: 349519, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZA_WC => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'Western Cape', capital: 'Cape Town', osm: 80501, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // ZAMBIA
            self::ZM_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Western', capital: 'Mongu', osm: 318852, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Central', capital: 'Kabwe', osm: 318861, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Eastern', capital: 'Chipata', osm: 318865, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Luapula', capital: 'Mansa', osm: 318866, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Northern', capital: 'Kasama', osm: 318862, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'North-Western', capital: 'Solwezi', osm: 318859, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Southern', capital: 'Choma', osm: 318863, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Copperbelt', capital: 'Ndola', osm: 318860, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Lusaka', capital: 'Lusaka', osm: 318864, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Muchinga', capital: 'Chinsali', osm: 3668334, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // ZIMBABWE
            self::ZW_BU => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Bulawayo', capital: 'Bulawayo', osm: 3337019, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_HA => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Harare', capital: 'Harare', osm: 318467, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Manicaland', capital: 'Mutare', osm: 3336975, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_MC => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Mashonaland Central', capital: 'Bindura', osm: 3336976, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_ME => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Mashonaland East', capital: 'Marondera', osm: 3336977, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_MI => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Midlands', capital: 'Gweru', osm: 3336982, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_MN => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Matabeleland North', capital: 'Lupane', osm: 3336980, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_MS => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Matabeleland South', capital: 'Gwanda', osm: 3336981, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_MV => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Masvingo', capital: 'Masvingo', osm: 3336979, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_MW => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Mashonaland West', capital: 'Chinhoyi', osm: 3336978, type: BearCountrySubdivisionTypeEnum::PROVINCE),
        };
    }


    public static function syncToDatabase(): void {
        foreach (self::cases() as $case) {
            BearCountrySubdivisionCrud::syncToDatabase($case);
        }
    }
}
