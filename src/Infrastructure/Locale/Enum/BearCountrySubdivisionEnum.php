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
    case CCK = 'CCK';
    case CXR = 'CXR';
    case HMD = 'HMD';
    case NFK = 'NFK';


    // AZERBAIJAN
    case AZ_ABS = 'AZ-ABS';
    case AZ_AGA = 'AZ-AGA';
    case AZ_AGC = 'AZ-AGC';
    case AZ_AGM = 'AZ-AGM';
    case AZ_AGS = 'AZ-AGS';
    case AZ_AGU = 'AZ-AGU';
    case AZ_AST = 'AZ-AST';
    case AZ_BA = 'AZ-BA';
    case AZ_BAB = 'AZ-BAB';
    case AZ_BAL = 'AZ-BAL';
    case AZ_BAR = 'AZ-BAR';
    case AZ_BEY = 'AZ-BEY';
    case AZ_BIL = 'AZ-BIL';
    case AZ_CAB = 'AZ-CAB';
    case AZ_CAL = 'AZ-CAL';
    case AZ_CUL = 'AZ-CUL';
    case AZ_DAS = 'AZ-DAS';
    case AZ_FUZ = 'AZ-FUZ';
    case AZ_GA = 'AZ-GA';
    case AZ_GAD = 'AZ-GAD';
    case AZ_GOR = 'AZ-GOR';
    case AZ_GOY = 'AZ-GOY';
    case AZ_GYG = 'AZ-GYG';
    case AZ_HAC = 'AZ-HAC';
    case AZ_IMI = 'AZ-IMI';
    case AZ_ISM = 'AZ-ISM';
    case AZ_KAL = 'AZ-KAL';
    case AZ_KAN = 'AZ-KAN';
    case AZ_KUR = 'AZ-KUR';
    case AZ_LA = 'AZ-LA';
    case AZ_LAC = 'AZ-LAC';
    case AZ_LAN = 'AZ-LAN';
    case AZ_LER = 'AZ-LER';
    case AZ_MAS = 'AZ-MAS';
    case AZ_MI = 'AZ-MI';
    case AZ_NA = 'AZ-NA';
    case AZ_NEF = 'AZ-NEF';
    case AZ_NV = 'AZ-NV';
    case AZ_OGU = 'AZ-OGU';
    case AZ_ORD = 'AZ-ORD';
    case AZ_QAB = 'AZ-QAB';
    case AZ_QAX = 'AZ-QAX';
    case AZ_QAZ = 'AZ-QAZ';
    case AZ_QBA = 'AZ-QBA';
    case AZ_QBI = 'AZ-QBI';
    case AZ_QOB = 'AZ-QOB';
    case AZ_QUS = 'AZ-QUS';
    case AZ_SA = 'AZ-SA';
    case AZ_SAB = 'AZ-SAB';
    case AZ_SAD = 'AZ-SAD';
    case AZ_SAH = 'AZ-SAH';
    case AZ_SAK = 'AZ-SAK';
    case AZ_SAL = 'AZ-SAL';
    case AZ_SAR = 'AZ-SAR';
    case AZ_SAT = 'AZ-SAT';
    case AZ_SBN = 'AZ-SBN';
    case AZ_SIY = 'AZ-SIY';
    case AZ_SKR = 'AZ-SKR';
    case AZ_SM = 'AZ-SM';
    case AZ_SMI = 'AZ-SMI';
    case AZ_SMX = 'AZ-SMX';
    case AZ_SR = 'AZ-SR';
    case AZ_SUS = 'AZ-SUS';
    case AZ_TAR = 'AZ-TAR';
    case AZ_TOV = 'AZ-TOV';
    case AZ_UCA = 'AZ-UCA';
    case AZ_XA = 'AZ-XA';
    case AZ_XAC = 'AZ-XAC';
    case AZ_XCI = 'AZ-XCI';
    case AZ_XIZ = 'AZ-XIZ';
    case AZ_XVD = 'AZ-XVD';
    case AZ_YAR = 'AZ-YAR';
    case AZ_YE = 'AZ-YE';
    case AZ_YEV = 'AZ-YEV';
    case AZ_ZAN = 'AZ-ZAN';
    case AZ_ZAQ = 'AZ-ZAQ';
    case AZ_ZAR = 'AZ-ZAR';


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


    // BURKINA FASO
    case BF_01 = 'BF-01';
    case BF_02 = 'BF-02';
    case BF_03 = 'BF-03';
    case BF_04 = 'BF-04';
    case BF_05 = 'BF-05';
    case BF_06 = 'BF-06';
    case BF_07 = 'BF-07';
    case BF_08 = 'BF-08';
    case BF_09 = 'BF-09';
    case BF_10 = 'BF-10';
    case BF_11 = 'BF-11';
    case BF_12 = 'BF-12';
    case BF_13 = 'BF-13';


    // BULGARIA
    case BG_01 = 'BG-01';
    case BG_02 = 'BG-02';
    case BG_03 = 'BG-03';
    case BG_04 = 'BG-04';
    case BG_05 = 'BG-05';
    case BG_06 = 'BG-06';
    case BG_07 = 'BG-07';
    case BG_08 = 'BG-08';
    case BG_09 = 'BG-09';
    case BG_10 = 'BG-10';
    case BG_11 = 'BG-11';
    case BG_12 = 'BG-12';
    case BG_13 = 'BG-13';
    case BG_14 = 'BG-14';
    case BG_15 = 'BG-15';
    case BG_16 = 'BG-16';
    case BG_17 = 'BG-17';
    case BG_18 = 'BG-18';
    case BG_19 = 'BG-19';
    case BG_20 = 'BG-20';
    case BG_21 = 'BG-21';
    case BG_22 = 'BG-22';
    case BG_23 = 'BG-23';
    case BG_24 = 'BG-24';
    case BG_25 = 'BG-25';
    case BG_26 = 'BG-26';
    case BG_27 = 'BG-27';
    case BG_28 = 'BG-28';


    // BAHRAIN
    case BH_13 = 'BH-13';
    case BH_14 = 'BH-14';
    case BH_15 = 'BH-15';
    case BH_17 = 'BH-17';


    // BURUNDI
    case BI_BB = 'BI-BB';
    case BI_BL = 'BI-BL';
    case BI_BM = 'BI-BM';
    case BI_BR = 'BI-BR';
    case BI_CA = 'BI-CA';
    case BI_CI = 'BI-CI';
    case BI_GI = 'BI-GI';
    case BI_KI = 'BI-KI';
    case BI_KR = 'BI-KR';
    case BI_KY = 'BI-KY';
    case BI_MA = 'BI-MA';
    case BI_MU = 'BI-MU';
    case BI_MW = 'BI-MW';
    case BI_MY = 'BI-MY';
    case BI_NG = 'BI-NG';
    case BI_RM = 'BI-RM';
    case BI_RT = 'BI-RT';
    case BI_RY = 'BI-RY';


    // BENIN
    case BJ_AL = 'BJ-AL';
    case BJ_AK = 'BJ-AK';
    case BJ_AQ = 'BJ-AQ';
    case BJ_BO = 'BJ-BO';
    case BJ_CO = 'BJ-CO';
    case BJ_DO = 'BJ-DO';
    case BJ_KO = 'BJ-KO';
    case BJ_LI = 'BJ-LI';
    case BJ_MO = 'BJ-MO';
    case BJ_OU = 'BJ-OU';
    case BJ_PL = 'BJ-PL';
    case BJ_ZO = 'BJ-ZO';


    // BRUNEI
    case BN_BE = 'BN-BE';
    case BN_BM = 'BN-BM';
    case BN_TE = 'BN-TE';
    case BN_TU = 'BN-TU';


    // BOLIVIA
    case BO_B = 'BO-B';
    case BO_C = 'BO-C';
    case BO_H = 'BO-H';
    case BO_L = 'BO-L';
    case BO_N = 'BO-N';
    case BO_O = 'BO-O';
    case BO_P = 'BO-P';
    case BO_S = 'BO-S';
    case BO_T = 'BO-T';


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


    // BAHAMAS
    case BS_AK = 'BS-AK';
    case BS_BI = 'BS-BI';
    case BS_BP = 'BS-BP';
    case BS_BY = 'BS-BY';
    case BS_CE = 'BS-CE';
    case BS_CI = 'BS-CI';
    case BS_CK = 'BS-CK';
    case BS_CO = 'BS-CO';
    case BS_CS = 'BS-CS';
    case BS_EG = 'BS-EG';
    case BS_EX = 'BS-EX';
    case BS_FP = 'BS-FP';
    case BS_GC = 'BS-GC';
    case BS_HI = 'BS-HI';
    case BS_HT = 'BS-HT';
    case BS_IN = 'BS-IN';
    case BS_LI = 'BS-LI';
    case BS_MC = 'BS-MC';
    case BS_MG = 'BS-MG';
    case BS_MI = 'BS-MI';
    case BS_NE = 'BS-NE';
    case BS_NO = 'BS-NO';
    case BS_NP = 'BS-NP';
    case BS_NS = 'BS-NS';
    case BS_RC = 'BS-RC';
    case BS_RI = 'BS-RI';
    case BS_SA = 'BS-SA';
    case BS_SE = 'BS-SE';
    case BS_SO = 'BS-SO';
    case BS_SS = 'BS-SS';
    case BS_SW = 'BS-SW';
    case BS_WG = 'BS-WG';


    // BHUTAN
    case BT_11 = 'BT-11';
    case BT_12 = 'BT-12';
    case BT_13 = 'BT-13';
    case BT_14 = 'BT-14';
    case BT_15 = 'BT-15';
    case BT_21 = 'BT-21';
    case BT_22 = 'BT-22';
    case BT_23 = 'BT-23';
    case BT_24 = 'BT-24';
    case BT_31 = 'BT-31';
    case BT_32 = 'BT-32';
    case BT_33 = 'BT-33';
    case BT_34 = 'BT-34';
    case BT_41 = 'BT-41';
    case BT_42 = 'BT-42';
    case BT_43 = 'BT-43';
    case BT_44 = 'BT-44';
    case BT_45 = 'BT-45';
    case BT_GA = 'BT-GA';
    case BT_TY = 'BT-TY';


    // BOTSWANA
    case BW_CE = 'BW-CE';
    case BW_CH = 'BW-CH';
    case BW_FR = 'BW-FR';
    case BW_GA = 'BW-GA';
    case BW_GH = 'BW-GH';
    case BW_JW = 'BW-JW';
    case BW_KG = 'BW-KG';
    case BW_KL = 'BW-KL';
    case BW_KW = 'BW-KW';
    case BW_LO = 'BW-LO';
    case BW_NE = 'BW-NE';
    case BW_NW = 'BW-NW';
    case BW_SP = 'BW-SP';
    case BW_SE = 'BW-SE';
    case BW_SO = 'BW-SO';
    case BW_ST = 'BW-ST';


    // BELARUS
    case BY_BR = 'BY-BR';
    case BY_HM = 'BY-HM';
    case BY_HO = 'BY-HO';
    case BY_HR = 'BY-HR';
    case BY_MA = 'BY-MA';
    case BY_MI = 'BY-MI';
    case BY_VI = 'BY-VI';


    // BELIZE
    case BZ_BZ = 'BZ-BZ';
    case BZ_CY = 'BZ-CY';
    case BZ_CZL = 'BZ-CZL';
    case BZ_OW = 'BZ-OW';
    case BZ_SC = 'BZ-SC';
    case BZ_TOL = 'BZ-TOL';


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


    // CONGO
    case CD_BU = 'CD-BU';
    case CD_EQ = 'CD-EQ';
    case CD_HK = 'CD-HK';
    case CD_HL = 'CD-HL';
    case CD_HU = 'CD-HU';
    case CD_IT = 'CD-IT';
    case CD_KS = 'CD-KS';
    case CD_KC = 'CD-KC';
    case CD_KE = 'CD-KE';
    case CD_KN = 'CD-KN';
    case CD_BC = 'CD-BC';
    case CD_KG = 'CD-KG';
    case CD_KL = 'CD-KL';
    case CD_LO = 'CD-LO';
    case CD_LU = 'CD-LU';
    case CD_MN = 'CD-MN';
    case CD_MA = 'CD-MA';
    case CD_MO = 'CD-MO';
    case CD_NK = 'CD-NK';
    case CD_NU = 'CD-NU';
    case CD_SA = 'CD-SA';
    case CD_SK = 'CD-SK';
    case CD_SU = 'CD-SU';
    case CD_TA = 'CD-TA';
    case CD_TO = 'CD-TO';
    case CD_TU = 'CD-TU';


    // CENTRAL AFRICAN REPUBLIC
    case CF_BB = 'CF-BB';
    case CF_BGF = 'CF-BGF';
    case CF_BK = 'CF-BK';
    case CF_KB = 'CF-KB';
    case CF_HM = 'CF-HM';
    case CF_HK = 'CF-HK';
    case CF_HS = 'CF-HS';
    case CF_KG = 'CF-KG';
    case CF_LB = 'CF-LB';
    case CF_MB = 'CF-MB';
    case CF_NM = 'CF-NM';
    case CF_MP = 'CF-MP';
    case CF_UK = 'CF-UK';
    case CF_AC = 'CF-AC';
    case CF_OP = 'CF-OP';
    case CF_SE = 'CF-SE';
    case CF_VK = 'CF-VK';


    // CONGO BRAZZAVILLE
    case CG_2 = 'CG-2';
    case CG_5 = 'CG-5';
    case CG_7 = 'CG-7';
    case CG_8 = 'CG-8';
    case CG_9 = 'CG-9';
    case CG_11 = 'CG-11';
    case CG_12 = 'CG-12';
    case CG_13 = 'CG-13';
    case CG_14 = 'CG-14';
    case CG_15 = 'CG-15';
    case CG_16 = 'CG-16';
    case CG_BZV = 'CG-BZV';


    // SWITZERLAND
    case CH_AG = 'CH-AG';
    case CH_AI = 'CH-AI';
    case CH_AR = 'CH-AR';
    case CH_BE = 'CH-BE';
    case CH_BL = 'CH-BL';
    case CH_BS = 'CH-BS';
    case CH_FR = 'CH-FR';
    case CH_GE = 'CH-GE';
    case CH_GL = 'CH-GL';
    case CH_GR = 'CH-GR';
    case CH_JU = 'CH-JU';
    case CH_LU = 'CH-LU';
    case CH_NE = 'CH-NE';
    case CH_NW = 'CH-NW';
    case CH_OW = 'CH-OW';
    case CH_SG = 'CH-SG';
    case CH_SH = 'CH-SH';
    case CH_SO = 'CH-SO';
    case CH_SZ = 'CH-SZ';
    case CH_TG = 'CH-TG';
    case CH_TI = 'CH-TI';
    case CH_UR = 'CH-UR';
    case CH_VD = 'CH-VD';
    case CH_VS = 'CH-VS';
    case CH_ZG = 'CH-ZG';
    case CH_ZH = 'CH-ZH';


    // IVORY COAST
    case CI_AB = 'CI-AB';
    case CI_BS = 'CI-BS';
    case CI_CM = 'CI-CM';
    case CI_DN = 'CI-DN';
    case CI_GD = 'CI-GD';
    case CI_LC = 'CI-LC';
    case CI_LG = 'CI-LG';
    case CI_MG = 'CI-MG';
    case CI_SM = 'CI-SM';
    case CI_SV = 'CI-SV';
    case CI_VB = 'CI-VB';
    case CI_WR = 'CI-WR';
    case CI_YM = 'CI-YM';
    case CI_ZZ = 'CI-ZZ';


    // CHILE
    case CL_AI = 'CL-AI';
    case CL_AN = 'CL-AN';
    case CL_AP = 'CL-AP';
    case CL_AT = 'CL-AT';
    case CL_BI = 'CL-BI';
    case CL_CO = 'CL-CO';
    case CL_AR = 'CL-AR';
    case CL_LI = 'CL-LI';
    case CL_LL = 'CL-LL';
    case CL_LR = 'CL-LR';
    case CL_MA = 'CL-MA';
    case CL_ML = 'CL-ML';
    case CL_NB = 'CL-NB';
    case CL_RM = 'CL-RM';
    case CL_TA = 'CL-TA';
    case CL_VS = 'CL-VS';


    // CAMEROON
    case CM_AD = 'CM-AD';
    case CM_CE = 'CM-CE';
    case CM_ES = 'CM-ES';
    case CM_EN = 'CM-EN';
    case CM_LT = 'CM-LT';
    case CM_NO = 'CM-NO';
    case CM_NW = 'CM-NW';
    case CM_SU = 'CM-SU';
    case CM_SW = 'CM-SW';
    case CM_OU = 'CM-OU';


    // CHINA
    case CN_AH = 'CN-AH';
    case CN_BJ = 'CN-BJ';
    case CN_CQ = 'CN-CQ';
    case CN_FJ = 'CN-FJ';
    case CN_GS = 'CN-GS';
    case CN_GD = 'CN-GD';
    case CN_GX = 'CN-GX';
    case CN_GZ = 'CN-GZ';
    case CN_HI = 'CN-HI';
    case CN_HE = 'CN-HE';
    case CN_HL = 'CN-HL';
    case CN_HA = 'CN-HA';
    case CN_HK = 'CN-HK';
    case CN_HB = 'CN-HB';
    case CN_HN = 'CN-HN';
    case CN_JS = 'CN-JS';
    case CN_JX = 'CN-JX';
    case CN_JL = 'CN-JL';
    case CN_LN = 'CN-LN';
    case CN_MO = 'CN-MO';
    case CN_NM = 'CN-NM';
    case CN_NX = 'CN-NX';
    case CN_QH = 'CN-QH';
    case CN_SN = 'CN-SN';
    case CN_SD = 'CN-SD';
    case CN_SH = 'CN-SH';
    case CN_SX = 'CN-SX';
    case CN_SC = 'CN-SC';
    case CN_TJ = 'CN-TJ';
    case CN_XJ = 'CN-XJ';
    case CN_XZ = 'CN-XZ';
    case CN_YN = 'CN-YN';
    case CN_ZJ = 'CN-ZJ';


    // COLOMBIA
    case CO_AMA = 'CO-AMA';
    case CO_ANT = 'CO-ANT';
    case CO_ARA = 'CO-ARA';
    case CO_ATL = 'CO-ATL';
    case CO_BOL = 'CO-BOL';
    case CO_BOY = 'CO-BOY';
    case CO_CAL = 'CO-CAL';
    case CO_CAQ = 'CO-CAQ';
    case CO_CAS = 'CO-CAS';
    case CO_CAU = 'CO-CAU';
    case CO_CES = 'CO-CES';
    case CO_COR = 'CO-COR';
    case CO_CUN = 'CO-CUN';
    case CO_CHO = 'CO-CHO';
    case CO_DC = 'CO-DC';
    case CO_GUA = 'CO-GUA';
    case CO_GUV = 'CO-GUV';
    case CO_HUI = 'CO-HUI';
    case CO_LAG = 'CO-LAG';
    case CO_MAG = 'CO-MAG';
    case CO_MET = 'CO-MET';
    case CO_NAR = 'CO-NAR';
    case CO_NSA = 'CO-NSA';
    case CO_PUT = 'CO-PUT';
    case CO_QUI = 'CO-QUI';
    case CO_RIS = 'CO-RIS';
    case CO_SAP = 'CO-SAP';
    case CO_SAN = 'CO-SAN';
    case CO_SUC = 'CO-SUC';
    case CO_TOL = 'CO-TOL';
    case CO_VAC = 'CO-VAC';
    case CO_VAU = 'CO-VAU';
    case CO_VID = 'CO-VID';


    // COSTA RICA
    case CR_A = 'CR-A';
    case CR_C = 'CR-C';
    case CR_G = 'CR-G';
    case CR_H = 'CR-H';
    case CR_L = 'CR-L';
    case CR_P = 'CR-P';
    case CR_SJ = 'CR-SJ';


    // CUBA
    case CU_01 = 'CU-01';
    case CU_03 = 'CU-03';
    case CU_04 = 'CU-04';
    case CU_05 = 'CU-05';
    case CU_06 = 'CU-06';
    case CU_07 = 'CU-07';
    case CU_08 = 'CU-08';
    case CU_09 = 'CU-09';
    case CU_10 = 'CU-10';
    case CU_11 = 'CU-11';
    case CU_12 = 'CU-12';
    case CU_13 = 'CU-13';
    case CU_14 = 'CU-14';
    case CU_15 = 'CU-15';
    case CU_16 = 'CU-16';
    case CU_99 = 'CU-99';


    // CYPRUS
    case CY_01 = 'CY-01';
    case CY_02 = 'CY-02';
    case CY_03 = 'CY-03';
    case CY_04 = 'CY-04';
    case CY_05 = 'CY-05';
    case CY_06 = 'CY-06';


    // CZECH REPUBLIC
    case CZ_10 = 'CZ-10';
    case CZ_20 = 'CZ-20';
    case CZ_31 = 'CZ-31';
    case CZ_32 = 'CZ-32';
    case CZ_41 = 'CZ-41';
    case CZ_42 = 'CZ-42';
    case CZ_51 = 'CZ-51';
    case CZ_52 = 'CZ-52';
    case CZ_53 = 'CZ-53';
    case CZ_63 = 'CZ-63';
    case CZ_64 = 'CZ-64';
    case CZ_71 = 'CZ-71';
    case CZ_72 = 'CZ-72';
    case CZ_80 = 'CZ-80';


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


    // DJIBOUTI
    case DJ_AR = 'DJ-AR';
    case DJ_AS = 'DJ-AS';
    case DJ_DI = 'DJ-DI';
    case DJ_DJ = 'DJ-DJ';
    case DJ_OB = 'DJ-OB';
    case DJ_TA = 'DJ-TA';


    // DENMARK
    case DK_81 = 'DK-81';
    case DK_82 = 'DK-82';
    case DK_83 = 'DK-83';
    case DK_84 = 'DK-84';
    case DK_85 = 'DK-85';


    // DOMINICA
    case DM_02 = 'DM-02';
    case DM_03 = 'DM-03';
    case DM_04 = 'DM-04';
    case DM_05 = 'DM-05';
    case DM_06 = 'DM-06';
    case DM_07 = 'DM-07';
    case DM_08 = 'DM-08';
    case DM_09 = 'DM-09';
    case DM_10 = 'DM-10';
    case DM_11 = 'DM-11';


    // DOMINICAN REPUBLIC
    case DO_01 = 'DO-01';
    case DO_02 = 'DO-02';
    case DO_03 = 'DO-03';
    case DO_04 = 'DO-04';
    case DO_05 = 'DO-05';
    case DO_06 = 'DO-06';
    case DO_07 = 'DO-07';
    case DO_08 = 'DO-08';
    case DO_09 = 'DO-09';
    case DO_10 = 'DO-10';
    case DO_11 = 'DO-11';
    case DO_12 = 'DO-12';
    case DO_13 = 'DO-13';
    case DO_14 = 'DO-14';
    case DO_15 = 'DO-15';
    case DO_16 = 'DO-16';
    case DO_17 = 'DO-17';
    case DO_18 = 'DO-18';
    case DO_19 = 'DO-19';
    case DO_20 = 'DO-20';
    case DO_21 = 'DO-21';
    case DO_22 = 'DO-22';
    case DO_23 = 'DO-23';
    case DO_24 = 'DO-24';
    case DO_25 = 'DO-25';
    case DO_26 = 'DO-26';
    case DO_27 = 'DO-27';
    case DO_28 = 'DO-28';
    case DO_29 = 'DO-29';
    case DO_30 = 'DO-30';
    case DO_31 = 'DO-31';
    case DO_32 = 'DO-32';


    // ALGERIA
    case DZ_01 = 'DZ-01';
    case DZ_02 = 'DZ-02';
    case DZ_03 = 'DZ-03';
    case DZ_04 = 'DZ-04';
    case DZ_05 = 'DZ-05';
    case DZ_06 = 'DZ-06';
    case DZ_07 = 'DZ-07';
    case DZ_08 = 'DZ-08';
    case DZ_09 = 'DZ-09';
    case DZ_10 = 'DZ-10';
    case DZ_11 = 'DZ-11';
    case DZ_12 = 'DZ-12';
    case DZ_13 = 'DZ-13';
    case DZ_14 = 'DZ-14';
    case DZ_15 = 'DZ-15';
    case DZ_16 = 'DZ-16';
    case DZ_17 = 'DZ-17';
    case DZ_18 = 'DZ-18';
    case DZ_19 = 'DZ-19';
    case DZ_20 = 'DZ-20';
    case DZ_21 = 'DZ-21';
    case DZ_22 = 'DZ-22';
    case DZ_23 = 'DZ-23';
    case DZ_24 = 'DZ-24';
    case DZ_25 = 'DZ-25';
    case DZ_26 = 'DZ-26';
    case DZ_27 = 'DZ-27';
    case DZ_28 = 'DZ-28';
    case DZ_29 = 'DZ-29';
    case DZ_30 = 'DZ-30';
    case DZ_31 = 'DZ-31';
    case DZ_32 = 'DZ-32';
    case DZ_33 = 'DZ-33';
    case DZ_34 = 'DZ-34';
    case DZ_35 = 'DZ-35';
    case DZ_36 = 'DZ-36';
    case DZ_37 = 'DZ-37';
    case DZ_38 = 'DZ-38';
    case DZ_39 = 'DZ-39';
    case DZ_40 = 'DZ-40';
    case DZ_41 = 'DZ-41';
    case DZ_42 = 'DZ-42';
    case DZ_43 = 'DZ-43';
    case DZ_44 = 'DZ-44';
    case DZ_45 = 'DZ-45';
    case DZ_46 = 'DZ-46';
    case DZ_47 = 'DZ-47';
    case DZ_48 = 'DZ-48';
    case DZ_49 = 'DZ-49';
    case DZ_50 = 'DZ-50';
    case DZ_51 = 'DZ-51';
    case DZ_52 = 'DZ-52';
    case DZ_53 = 'DZ-53';
    case DZ_54 = 'DZ-54';
    case DZ_55 = 'DZ-55';
    case DZ_56 = 'DZ-56';
    case DZ_57 = 'DZ-57';
    case DZ_58 = 'DZ-58';


    // ECUADOR
    case EC_A = 'EC-A';
    case EC_B = 'EC-B';
    case EC_C = 'EC-C';
    case EC_D = 'EC-D';
    case EC_E = 'EC-E';
    case EC_F = 'EC-F';
    case EC_G = 'EC-G';
    case EC_H = 'EC-H';
    case EC_I = 'EC-I';
    case EC_L = 'EC-L';
    case EC_M = 'EC-M';
    case EC_N = 'EC-N';
    case EC_O = 'EC-O';
    case EC_P = 'EC-P';
    case EC_R = 'EC-R';
    case EC_S = 'EC-S';
    case EC_SD = 'EC-SD';
    case EC_SE = 'EC-SE';
    case EC_T = 'EC-T';
    case EC_U = 'EC-U';
    case EC_W = 'EC-W';
    case EC_X = 'EC-X';
    case EC_Y = 'EC-Y';
    case EC_Z = 'EC-Z';


    // ESTONIA
    case EE_37 = 'EE-37';
    case EE_39 = 'EE-39';
    case EE_45 = 'EE-45';
    case EE_52 = 'EE-52';
    case EE_50 = 'EE-50';
    case EE_60 = 'EE-60';
    case EE_56 = 'EE-56';
    case EE_68 = 'EE-68';
    case EE_64 = 'EE-64';
    case EE_71 = 'EE-71';
    case EE_74 = 'EE-74';
    case EE_79 = 'EE-79';
    case EE_81 = 'EE-81';
    case EE_84 = 'EE-84';
    case EE_87 = 'EE-87';


    // EGYPT
    case EG_ALX = 'EG-ALX';
    case EG_ASN = 'EG-ASN';
    case EG_AST = 'EG-AST';
    case EG_BA = 'EG-BA';
    case EG_BH = 'EG-BH';
    case EG_BNS = 'EG-BNS';
    case EG_C = 'EG-C';
    case EG_DK = 'EG-DK';
    case EG_DT = 'EG-DT';
    case EG_FYM = 'EG-FYM';
    case EG_GH = 'EG-GH';
    case EG_GZ = 'EG-GZ';
    case EG_IS = 'EG-IS';
    case EG_JS = 'EG-JS';
    case EG_KB = 'EG-KB';
    case EG_KFS = 'EG-KFS';
    case EG_KN = 'EG-KN';
    case EG_LX = 'EG-LX';
    case EG_MN = 'EG-MN';
    case EG_MNF = 'EG-MNF';
    case EG_MT = 'EG-MT';
    case EG_PTS = 'EG-PTS';
    case EG_SHG = 'EG-SHG';
    case EG_SHR = 'EG-SHR';
    case EG_SIN = 'EG-SIN';
    case EG_SUZ = 'EG-SUZ';
    case EG_WAD = 'EG-WAD';


    // ERITREA
    case ER_AN = 'ER-AN';
    case ER_DK = 'ER-DK';
    case ER_DU = 'ER-DU';
    case ER_GB = 'ER-GB';
    case ER_MA = 'ER-MA';
    case ER_SK = 'ER-SK';


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


    // ETHIOPIA
    case ET_AA = 'ET-AA';
    case ET_AF = 'ET-AF';
    case ET_AM = 'ET-AM';
    case ET_BE = 'ET-BE';
    case ET_DD = 'ET-DD';
    case ET_GA = 'ET-GA';
    case ET_HA = 'ET-HA';
    case ET_OR = 'ET-OR';
    case ET_SI = 'ET-SI';
    case ET_SO = 'ET-SO';
    case ET_TI = 'ET-TI';
    case ET_SN = 'ET-SN';
    case ET_SW = 'ET-SW';


    // FINLAND
    case FI_01 = 'FI-01';
    case FI_02 = 'FI-02';
    case FI_03 = 'FI-03';
    case FI_04 = 'FI-04';
    case FI_05 = 'FI-05';
    case FI_06 = 'FI-06';
    case FI_07 = 'FI-07';
    case FI_08 = 'FI-08';
    case FI_09 = 'FI-09';
    case FI_10 = 'FI-10';
    case FI_11 = 'FI-11';
    case FI_12 = 'FI-12';
    case FI_13 = 'FI-13';
    case FI_14 = 'FI-14';
    case FI_15 = 'FI-15';
    case FI_16 = 'FI-16';
    case FI_17 = 'FI-17';
    case FI_18 = 'FI-18';
    case FI_19 = 'FI-19';


    // FIJI
    case FJ_C = 'FJ-C';
    case FJ_E = 'FJ-E';
    case FJ_N = 'FJ-N';
    case FJ_R = 'FJ-R';
    case FJ_W = 'FJ-W';


    // MICRONESIA
    case FM_KSA = 'FM-KSA';
    case FM_PNI = 'FM-PNI';
    case FM_TRK = 'FM-TRK';
    case FM_YAP = 'FM-YAP';


    // FRANCE
    case FR_20R = 'FR-20R';
    case FR_971 = 'FR-971';
    case FR_972 = 'FR-972';
    case FR_973 = 'FR-973';
    case FR_974 = 'FR-974';
    case FR_976 = 'FR-976';
    case FR_ARA = 'FR-ARA';
    case FR_BFC = 'FR-BFC';
    case FR_BRE = 'FR-BRE';
    case FR_CVL = 'FR-CVL';
    case FR_GES = 'FR-GES';
    case FR_HDF = 'FR-HDF';
    case FR_IDF = 'FR-IDF';
    case FR_NOR = 'FR-NOR';
    case FR_NAQ = 'FR-NAQ';
    case FR_OCC = 'FR-OCC';
    case FR_PDL = 'FR-PDL';
    case FR_PAC = 'FR-PAC';
    case FR_BL = 'FR-BL';
    case FR_CP = 'FR-CP';
    case FR_MF = 'FR-MF';
    case FR_PF = 'FR-PF';
    case FR_PM = 'FR-PM';
    case FR_TF = 'FR-TF';
    case FR_WF = 'FR-WF';


    // GABON
    case GA_1 = 'GA-1';
    case GA_2 = 'GA-2';
    case GA_3 = 'GA-3';
    case GA_4 = 'GA-4';
    case GA_5 = 'GA-5';
    case GA_6 = 'GA-6';
    case GA_7 = 'GA-7';
    case GA_8 = 'GA-8';
    case GA_9 = 'GA-9';


    // THE UNITED KINGDOM
    case GB_ENG = 'GB-ENG';
    case GB_NIR = 'GB-NIR';
    case GB_SCT = 'GB-SCT';
    case GB_WLS = 'GB-WLS';
    case GGY = 'GGY';
    case GIB = 'GIB';
    case IMN = 'IMN';
    case IOT = 'IOT';
    case JEY = 'JEY';
    case FLK = 'FLK';
    case MSR = 'MSR';
    case PCN = 'PCN';
    case SGS = 'SGS';
    case TCA = 'TCA';
    case VGB = 'VGB';


    // GRENADA
    case GD_01 = 'GD-01';
    case GD_02 = 'GD-02';
    case GD_03 = 'GD-03';
    case GD_04 = 'GD-04';
    case GD_05 = 'GD-05';
    case GD_06 = 'GD-06';
    case GD_10 = 'GD-10';


    // GEORGIA
    case GE_AB = 'GE-AB';
    case GE_AJ = 'GE-AJ';
    case GE_GU = 'GE-GU';
    case GE_IM = 'GE-IM';
    case GE_KA = 'GE-KA';
    case GE_KK = 'GE-KK';
    case GE_MM = 'GE-MM';
    case GE_RL = 'GE-RL';
    case GE_SJ = 'GE-SJ';
    case GE_SK = 'GE-SK';
    case GE_SZ = 'GE-SZ';
    case GE_TB = 'GE-TB';


    // GHANA
    case GH_AA = 'GH-AA';
    case GH_AF = 'GH-AF';
    case GH_AH = 'GH-AH';
    case GH_BE = 'GH-BE';
    case GH_BO = 'GH-BO';
    case GH_CP = 'GH-CP';
    case GH_EP = 'GH-EP';
    case GH_NE = 'GH-NE';
    case GH_NP = 'GH-NP';
    case GH_OT = 'GH-OT';
    case GH_SV = 'GH-SV';
    case GH_TV = 'GH-TV';
    case GH_UE = 'GH-UE';
    case GH_UW = 'GH-UW';
    case GH_WN = 'GH-WN';
    case GH_WP = 'GH-WP';


    // GREENLAND
    case GL_AV = 'GL-AV';
    case GL_KU = 'GL-KU';
    case GL_QE = 'GL-QE';
    case GL_QT = 'GL-QT';
    case GL_SM = 'GL-SM';


    // GAMBIA
    case GM_B = 'GM-B';
    case GM_L = 'GM-L';
    case GM_M = 'GM-M';
    case GM_N = 'GM-N';
    case GM_U = 'GM-U';
    case GM_W = 'GM-W';


    // GUINEA
    case GN_B = 'GN-B';
    case GN_C = 'GN-C';
    case GN_D = 'GN-D';
    case GN_F = 'GN-F';
    case GN_K = 'GN-K';
    case GN_L = 'GN-L';
    case GN_M = 'GN-M';
    case GN_N = 'GN-N';


    // EQUATORIAL GUINEA
    case GQ_C = 'GQ-C';
    case GQ_I = 'GQ-I';


    // GREECE
    case GR_69 = 'GR-69';
    case GR_A = 'GR-A';
    case GR_B = 'GR-B';
    case GR_C = 'GR-C';
    case GR_D = 'GR-D';
    case GR_E = 'GR-E';
    case GR_F = 'GR-F';
    case GR_G = 'GR-G';
    case GR_H = 'GR-H';
    case GR_I = 'GR-I';
    case GR_J = 'GR-J';
    case GR_K = 'GR-K';
    case GR_L = 'GR-L';
    case GR_M = 'GR-M';


    // GUATEMALA
    case GT_01 = 'GT-01';
    case GT_02 = 'GT-02';
    case GT_03 = 'GT-03';
    case GT_04 = 'GT-04';
    case GT_05 = 'GT-05';
    case GT_06 = 'GT-06';
    case GT_07 = 'GT-07';
    case GT_08 = 'GT-08';
    case GT_09 = 'GT-09';
    case GT_10 = 'GT-10';
    case GT_11 = 'GT-11';
    case GT_12 = 'GT-12';
    case GT_13 = 'GT-13';
    case GT_14 = 'GT-14';
    case GT_15 = 'GT-15';
    case GT_16 = 'GT-16';
    case GT_17 = 'GT-17';
    case GT_18 = 'GT-18';
    case GT_19 = 'GT-19';
    case GT_20 = 'GT-20';
    case GT_21 = 'GT-21';
    case GT_22 = 'GT-22';


    // GUINEA-BISSAU
    case GW_BA = 'GW-BA';
    case GW_BL = 'GW-BL';
    case GW_BM = 'GW-BM';
    case GW_BS = 'GW-BS';
    case GW_CA = 'GW-CA';
    case GW_GA = 'GW-GA';
    case GW_OI = 'GW-OI';
    case GW_QU = 'GW-QU';
    case GW_TO = 'GW-TO';


    // GUYANA
    case GY_BA = 'GY-BA';
    case GY_CU = 'GY-CU';
    case GY_DE = 'GY-DE';
    case GY_EB = 'GY-EB';
    case GY_ES = 'GY-ES';
    case GY_MA = 'GY-MA';
    case GY_PM = 'GY-PM';
    case GY_PT = 'GY-PT';
    case GY_UD = 'GY-UD';
    case GY_UT = 'GY-UT';


    // HONDURAS
    case HN_AT = 'HN-AT';
    case HN_CH = 'HN-CH';
    case HN_CL = 'HN-CL';
    case HN_CM = 'HN-CM';
    case HN_CP = 'HN-CP';
    case HN_CR = 'HN-CR';
    case HN_EP = 'HN-EP';
    case HN_FM = 'HN-FM';
    case HN_GD = 'HN-GD';
    case HN_IB = 'HN-IB';
    case HN_IN = 'HN-IN';
    case HN_LE = 'HN-LE';
    case HN_LP = 'HN-LP';
    case HN_OC = 'HN-OC';
    case HN_OL = 'HN-OL';
    case HN_SB = 'HN-SB';
    case HN_VA = 'HN-VA';
    case HN_YO = 'HN-YO';


    // CROATIA
    case HR_01 = 'HR-01';
    case HR_02 = 'HR-02';
    case HR_03 = 'HR-03';
    case HR_04 = 'HR-04';
    case HR_05 = 'HR-05';
    case HR_06 = 'HR-06';
    case HR_07 = 'HR-07';
    case HR_08 = 'HR-08';
    case HR_09 = 'HR-09';
    case HR_10 = 'HR-10';
    case HR_11 = 'HR-11';
    case HR_12 = 'HR-12';
    case HR_13 = 'HR-13';
    case HR_14 = 'HR-14';
    case HR_15 = 'HR-15';
    case HR_16 = 'HR-16';
    case HR_17 = 'HR-17';
    case HR_18 = 'HR-18';
    case HR_19 = 'HR-19';
    case HR_20 = 'HR-20';
    case HR_21 = 'HR-21';


    // HAITI
    case HT_AR = 'HT-AR';
    case HT_CE = 'HT-CE';
    case HT_GA = 'HT-GA';
    case HT_NI = 'HT-NI';
    case HT_ND = 'HT-ND';
    case HT_NE = 'HT-NE';
    case HT_NO = 'HT-NO';
    case HT_OU = 'HT-OU';
    case HT_SD = 'HT-SD';
    case HT_SE = 'HT-SE';


    // HUNGARY
    case HU_BA = 'HU-BA';
    case HU_BE = 'HU-BE';
    case HU_BK = 'HU-BK';
    case HU_BU = 'HU-BU';
    case HU_BZ = 'HU-BZ';
    case HU_CS = 'HU-CS';
    case HU_FE = 'HU-FE';
    case HU_GS = 'HU-GS';
    case HU_HB = 'HU-HB';
    case HU_HE = 'HU-HE';
    case HU_JN = 'HU-JN';
    case HU_KE = 'HU-KE';
    case HU_NO = 'HU-NO';
    case HU_PE = 'HU-PE';
    case HU_SO = 'HU-SO';
    case HU_SZ = 'HU-SZ';
    case HU_TO = 'HU-TO';
    case HU_VA = 'HU-VA';
    case HU_VE = 'HU-VE';
    case HU_ZA = 'HU-ZA';


    // INDONESIA
    case ID_JW = 'ID-JW';
    case ID_KA = 'ID-KA';
    case ID_ML = 'ID-ML';
    case ID_NU = 'ID-NU';
    case ID_PP = 'ID-PP';
    case ID_SL = 'ID-SL';
    case ID_SM = 'ID-SM';


    // IRELAND
    case IE_C = 'IE-C';
    case IE_L = 'IE-L';
    case IE_M = 'IE-M';
    case IE_U = 'IE-U';


    // ISRAEL
    case IL_D = 'IL-D';
    case IL_HA = 'IL-HA';
    case IL_JM = 'IL-JM';
    case IL_M = 'IL-M';
    case IL_TA = 'IL-TA';
    case IL_Z = 'IL-Z';


    // INDIA
    case IN_AN = 'IN-AN';
    case IN_AP = 'IN-AP';
    case IN_AR = 'IN-AR';
    case IN_AS = 'IN-AS';
    case IN_BR = 'IN-BR';
    case IN_CG = 'IN-CG';
    case IN_CH = 'IN-CH';
    case IN_DH = 'IN-DH';
    case IN_DL = 'IN-DL';
    case IN_GA = 'IN-GA';
    case IN_GJ = 'IN-GJ';
    case IN_HP = 'IN-HP';
    case IN_HR = 'IN-HR';
    case IN_JH = 'IN-JH';
    case IN_JK = 'IN-JK';
    case IN_KA = 'IN-KA';
    case IN_KL = 'IN-KL';
    case IN_LA = 'IN-LA';
    case IN_LD = 'IN-LD';
    case IN_MH = 'IN-MH';
    case IN_ML = 'IN-ML';
    case IN_MN = 'IN-MN';
    case IN_MP = 'IN-MP';
    case IN_MZ = 'IN-MZ';
    case IN_NL = 'IN-NL';
    case IN_OD = 'IN-OD';
    case IN_PB = 'IN-PB';
    case IN_PY = 'IN-PY';
    case IN_RJ = 'IN-RJ';
    case IN_SK = 'IN-SK';
    case IN_TN = 'IN-TN';
    case IN_TR = 'IN-TR';
    case IN_TS = 'IN-TS';
    case IN_UK = 'IN-UK';
    case IN_UP = 'IN-UP';
    case IN_WB = 'IN-WB';


    // IRAQ
    case IQ_AN = 'IQ-AN';
    case IQ_AR = 'IQ-AR';
    case IQ_BA = 'IQ-BA';
    case IQ_BB = 'IQ-BB';
    case IQ_BG = 'IQ-BG';
    case IQ_DA = 'IQ-DA';
    case IQ_DI = 'IQ-DI';
    case IQ_DQ = 'IQ-DQ';
    case IQ_KA = 'IQ-KA';
    case IQ_KI = 'IQ-KI';
    case IQ_MA = 'IQ-MA';
    case IQ_MU = 'IQ-MU';
    case IQ_NA = 'IQ-NA';
    case IQ_NI = 'IQ-NI';
    case IQ_QA = 'IQ-QA';
    case IQ_SD = 'IQ-SD';
    case IQ_SU = 'IQ-SU';
    case IQ_WA = 'IQ-WA';


    // IRAN
    case IR_00 = 'IR-00';
    case IR_01 = 'IR-01';
    case IR_02 = 'IR-02';
    case IR_03 = 'IR-03';
    case IR_04 = 'IR-04';
    case IR_05 = 'IR-05';
    case IR_06 = 'IR-06';
    case IR_07 = 'IR-07';
    case IR_08 = 'IR-08';
    case IR_09 = 'IR-09';
    case IR_10 = 'IR-10';
    case IR_11 = 'IR-11';
    case IR_12 = 'IR-12';
    case IR_13 = 'IR-13';
    case IR_14 = 'IR-14';
    case IR_15 = 'IR-15';
    case IR_16 = 'IR-16';
    case IR_17 = 'IR-17';
    case IR_18 = 'IR-18';
    case IR_19 = 'IR-19';
    case IR_20 = 'IR-20';
    case IR_21 = 'IR-21';
    case IR_22 = 'IR-22';
    case IR_23 = 'IR-23';
    case IR_24 = 'IR-24';
    case IR_25 = 'IR-25';
    case IR_26 = 'IR-26';
    case IR_27 = 'IR-27';
    case IR_28 = 'IR-28';
    case IR_29 = 'IR-29';
    case IR_30 = 'IR-30';


    // ICELAND
    case IS_1 = 'IS-1';
    case IS_2 = 'IS-2';
    case IS_3 = 'IS-3';
    case IS_4 = 'IS-4';
    case IS_5 = 'IS-5';
    case IS_6 = 'IS-6';
    case IS_7 = 'IS-7';
    case IS_8 = 'IS-8';


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


    // JAMAICA
    case JM_01 = 'JM-01';
    case JM_02 = 'JM-02';
    case JM_03 = 'JM-03';
    case JM_04 = 'JM-04';
    case JM_05 = 'JM-05';
    case JM_06 = 'JM-06';
    case JM_07 = 'JM-07';
    case JM_08 = 'JM-08';
    case JM_09 = 'JM-09';
    case JM_10 = 'JM-10';
    case JM_11 = 'JM-11';
    case JM_12 = 'JM-12';
    case JM_13 = 'JM-13';
    case JM_14 = 'JM-14';


    // JORDAN
    case JO_AJ = 'JO-AJ';
    case JO_AM = 'JO-AM';
    case JO_AQ = 'JO-AQ';
    case JO_AT = 'JO-AT';
    case JO_AZ = 'JO-AZ';
    case JO_BA = 'JO-BA';
    case JO_IR = 'JO-IR';
    case JO_JA = 'JO-JA';
    case JO_KA = 'JO-KA';
    case JO_MA = 'JO-MA';
    case JO_MD = 'JO-MD';
    case JO_MN = 'JO-MN';


    // JAPAN
    case JP_01 = 'JP-01';
    case JP_02 = 'JP-02';
    case JP_03 = 'JP-03';
    case JP_04 = 'JP-04';
    case JP_05 = 'JP-05';
    case JP_06 = 'JP-06';
    case JP_07 = 'JP-07';
    case JP_08 = 'JP-08';
    case JP_09 = 'JP-09';
    case JP_10 = 'JP-10';
    case JP_11 = 'JP-11';
    case JP_12 = 'JP-12';
    case JP_13 = 'JP-13';
    case JP_14 = 'JP-14';
    case JP_15 = 'JP-15';
    case JP_16 = 'JP-16';
    case JP_17 = 'JP-17';
    case JP_18 = 'JP-18';
    case JP_19 = 'JP-19';
    case JP_20 = 'JP-20';
    case JP_21 = 'JP-21';
    case JP_22 = 'JP-22';
    case JP_23 = 'JP-23';
    case JP_24 = 'JP-24';
    case JP_25 = 'JP-25';
    case JP_26 = 'JP-26';
    case JP_27 = 'JP-27';
    case JP_28 = 'JP-28';
    case JP_29 = 'JP-29';
    case JP_30 = 'JP-30';
    case JP_31 = 'JP-31';
    case JP_32 = 'JP-32';
    case JP_33 = 'JP-33';
    case JP_34 = 'JP-34';
    case JP_35 = 'JP-35';
    case JP_36 = 'JP-36';
    case JP_37 = 'JP-37';
    case JP_38 = 'JP-38';
    case JP_39 = 'JP-39';
    case JP_40 = 'JP-40';
    case JP_41 = 'JP-41';
    case JP_42 = 'JP-42';
    case JP_43 = 'JP-43';
    case JP_44 = 'JP-44';
    case JP_45 = 'JP-45';
    case JP_46 = 'JP-46';
    case JP_47 = 'JP-47';


    // KENYA
    case KE_01 = 'KE-01';
    case KE_02 = 'KE-02';
    case KE_03 = 'KE-03';
    case KE_04 = 'KE-04';
    case KE_05 = 'KE-05';
    case KE_06 = 'KE-06';
    case KE_07 = 'KE-07';
    case KE_08 = 'KE-08';
    case KE_09 = 'KE-09';
    case KE_10 = 'KE-10';
    case KE_11 = 'KE-11';
    case KE_12 = 'KE-12';
    case KE_13 = 'KE-13';
    case KE_14 = 'KE-14';
    case KE_15 = 'KE-15';
    case KE_16 = 'KE-16';
    case KE_17 = 'KE-17';
    case KE_18 = 'KE-18';
    case KE_19 = 'KE-19';
    case KE_20 = 'KE-20';
    case KE_21 = 'KE-21';
    case KE_22 = 'KE-22';
    case KE_23 = 'KE-23';
    case KE_24 = 'KE-24';
    case KE_25 = 'KE-25';
    case KE_26 = 'KE-26';
    case KE_27 = 'KE-27';
    case KE_28 = 'KE-28';
    case KE_29 = 'KE-29';
    case KE_30 = 'KE-30';
    case KE_31 = 'KE-31';
    case KE_32 = 'KE-32';
    case KE_33 = 'KE-33';
    case KE_34 = 'KE-34';
    case KE_35 = 'KE-35';
    case KE_36 = 'KE-36';
    case KE_37 = 'KE-37';
    case KE_38 = 'KE-38';
    case KE_39 = 'KE-39';
    case KE_40 = 'KE-40';
    case KE_41 = 'KE-41';
    case KE_42 = 'KE-42';
    case KE_43 = 'KE-43';
    case KE_44 = 'KE-44';
    case KE_45 = 'KE-45';
    case KE_46 = 'KE-46';
    case KE_47 = 'KE-47';


    // KYRGYZSTAN
    case KG_B = 'KG-B';
    case KG_C = 'KG-C';
    case KG_GB = 'KG-GB';
    case KG_GO = 'KG-GO';
    case KG_J = 'KG-J';
    case KG_N = 'KG-N';
    case KG_O = 'KG-O';
    case KG_T = 'KG-T';
    case KG_Y = 'KG-Y';


    // CAMBODIA
    case KH_1 = 'KH-1';
    case KH_2 = 'KH-2';
    case KH_3 = 'KH-3';
    case KH_4 = 'KH-4';
    case KH_5 = 'KH-5';
    case KH_6 = 'KH-6';
    case KH_7 = 'KH-7';
    case KH_8 = 'KH-8';
    case KH_9 = 'KH-9';
    case KH_10 = 'KH-10';
    case KH_11 = 'KH-11';
    case KH_12 = 'KH-12';
    case KH_13 = 'KH-13';
    case KH_14 = 'KH-14';
    case KH_15 = 'KH-15';
    case KH_16 = 'KH-16';
    case KH_17 = 'KH-17';
    case KH_18 = 'KH-18';
    case KH_19 = 'KH-19';
    case KH_20 = 'KH-20';
    case KH_21 = 'KH-21';
    case KH_22 = 'KH-22';
    case KH_23 = 'KH-23';
    case KH_24 = 'KH-24';
    case KH_25 = 'KH-25';


    // KIRIBATI
    case KI_G = 'KI-G';
    case KI_L = 'KI-L';
    case KI_P = 'KI-P';


    // COMOROS
    case KM_A = 'KM-A';
    case KM_G = 'KM-G';
    case KM_M = 'KM-M';


    // SAINT KITTS AND NEVIS
    case KN_K = 'KN-K';
    case KN_N = 'KN-N';


    // NORTH KOREA
    case KP_01 = 'KP-01';
    case KP_02 = 'KP-02';
    case KP_03 = 'KP-03';
    case KP_04 = 'KP-04';
    case KP_05 = 'KP-05';
    case KP_06 = 'KP-06';
    case KP_07 = 'KP-07';
    case KP_08 = 'KP-08';
    case KP_09 = 'KP-09';
    case KP_10 = 'KP-10';
    case KP_13 = 'KP-13';
    case KP_14 = 'KP-14';
    case KP_15 = 'KP-15';


    // SOUTH KOREA
    case KR_11 = 'KR-11';
    case KR_26 = 'KR-26';
    case KR_27 = 'KR-27';
    case KR_28 = 'KR-28';
    case KR_29 = 'KR-29';
    case KR_30 = 'KR-30';
    case KR_31 = 'KR-31';
    case KR_41 = 'KR-41';
    case KR_42 = 'KR-42';
    case KR_43 = 'KR-43';
    case KR_44 = 'KR-44';
    case KR_45 = 'KR-45';
    case KR_46 = 'KR-46';
    case KR_47 = 'KR-47';
    case KR_48 = 'KR-48';
    case KR_49 = 'KR-49';
    case KR_50 = 'KR-50';


    // KUWAIT
    case KW_AH = 'KW-AH';
    case KW_FA = 'KW-FA';
    case KW_HA = 'KW-HA';
    case KW_JA = 'KW-JA';
    case KW_KU = 'KW-KU';
    case KW_MU = 'KW-MU';


    // KAZAKHSTAN
    case KZ_10 = 'KZ-10';
    case KZ_11 = 'KZ-11';
    case KZ_15 = 'KZ-15';
    case KZ_19 = 'KZ-19';
    case KZ_23 = 'KZ-23';
    case KZ_27 = 'KZ-27';
    case KZ_31 = 'KZ-31';
    case KZ_33 = 'KZ-33';
    case KZ_35 = 'KZ-35';
    case KZ_39 = 'KZ-39';
    case KZ_43 = 'KZ-43';
    case KZ_47 = 'KZ-47';
    case KZ_55 = 'KZ-55';
    case KZ_59 = 'KZ-59';
    case KZ_61 = 'KZ-61';
    case KZ_62 = 'KZ-62';
    case KZ_63 = 'KZ-63';
    case KZ_71 = 'KZ-71';
    case KZ_75 = 'KZ-75';
    case KZ_79 = 'KZ-79';


    // LAOS
    case LA_AT = 'LA-AT';
    case LA_BK = 'LA-BK';
    case LA_BL = 'LA-BL';
    case LA_CH = 'LA-CH';
    case LA_HO = 'LA-HO';
    case LA_KH = 'LA-KH';
    case LA_LM = 'LA-LM';
    case LA_LP = 'LA-LP';
    case LA_OU = 'LA-OU';
    case LA_PH = 'LA-PH';
    case LA_SL = 'LA-SL';
    case LA_SV = 'LA-SV';
    case LA_VI = 'LA-VI';
    case LA_VT = 'LA-VT';
    case LA_XA = 'LA-XA';
    case LA_XE = 'LA-XE';
    case LA_XI = 'LA-XI';
    case LA_XS = 'LA-XS';


    // LEBANON
    case LB_AK = 'LB-AK';
    case LB_AS = 'LB-AS';
    case LB_BA = 'LB-BA';
    case LB_BH = 'LB-BH';
    case LB_BI = 'LB-BI';
    case LB_JA = 'LB-JA';
    case LB_JL = 'LB-JL';
    case LB_NA = 'LB-NA';


    // SAINT LUCIA
    case LC_01 = 'LC-01';
    case LC_02 = 'LC-02';
    case LC_03 = 'LC-03';
    case LC_05 = 'LC-05';
    case LC_06 = 'LC-06';
    case LC_07 = 'LC-07';
    case LC_08 = 'LC-08';
    case LC_10 = 'LC-10';
    case LC_11 = 'LC-11';
    case LC_12 = 'LC-12';


    // LIECHTENSTEIN
    case LI_01 = 'LI-01';
    case LI_02 = 'LI-02';
    case LI_03 = 'LI-03';
    case LI_04 = 'LI-04';
    case LI_05 = 'LI-05';
    case LI_06 = 'LI-06';
    case LI_07 = 'LI-07';
    case LI_08 = 'LI-08';
    case LI_09 = 'LI-09';
    case LI_10 = 'LI-10';
    case LI_11 = 'LI-11';


    // SRI LANKA
    case LK_1 = 'LK-1';
    case LK_2 = 'LK-2';
    case LK_3 = 'LK-3';
    case LK_4 = 'LK-4';
    case LK_5 = 'LK-5';
    case LK_6 = 'LK-6';
    case LK_7 = 'LK-7';
    case LK_8 = 'LK-8';
    case LK_9 = 'LK-9';


    // LIBERIA
    case LR_BG = 'LR-BG';
    case LR_BM = 'LR-BM';
    case LR_CM = 'LR-CM';
    case LR_GB = 'LR-GB';
    case LR_GG = 'LR-GG';
    case LR_GK = 'LR-GK';
    case LR_GP = 'LR-GP';
    case LR_LO = 'LR-LO';
    case LR_MG = 'LR-MG';
    case LR_MO = 'LR-MO';
    case LR_MY = 'LR-MY';
    case LR_NI = 'LR-NI';
    case LR_RG = 'LR-RG';
    case LR_RI = 'LR-RI';
    case LR_SI = 'LR-SI';


    // LESOTHO
    case LS_A = 'LS-A';
    case LS_B = 'LS-B';
    case LS_C = 'LS-C';
    case LS_D = 'LS-D';
    case LS_E = 'LS-E';
    case LS_F = 'LS-F';
    case LS_G = 'LS-G';
    case LS_H = 'LS-H';
    case LS_J = 'LS-J';
    case LS_K = 'LS-K';


    // LITHUANIA
    case LT_AL = 'LT-AL';
    case LT_KL = 'LT-KL';
    case LT_KU = 'LT-KU';
    case LT_MR = 'LT-MR';
    case LT_PN = 'LT-PN';
    case LT_SA = 'LT-SA';
    case LT_TA = 'LT-TA';
    case LT_TE = 'LT-TE';
    case LT_UT = 'LT-UT';
    case LT_VL = 'LT-VL';


    // LUXEMBOURG
    case LU_CA = 'LU-CA';
    case LU_CL = 'LU-CL';
    case LU_DI = 'LU-DI';
    case LU_EC = 'LU-EC';
    case LU_ES = 'LU-ES';
    case LU_GR = 'LU-GR';
    case LU_LU = 'LU-LU';
    case LU_ME = 'LU-ME';
    case LU_RD = 'LU-RD';
    case LU_RM = 'LU-RM';
    case LU_VD = 'LU-VD';
    case LU_WI = 'LU-WI';


    // LATVIA
    case LV_002 = 'LV-002';
    case LV_007 = 'LV-007';
    case LV_011 = 'LV-011';
    case LV_015 = 'LV-015';
    case LV_016 = 'LV-016';
    case LV_022 = 'LV-022';
    case LV_026 = 'LV-026';
    case LV_033 = 'LV-033';
    case LV_041 = 'LV-041';
    case LV_042 = 'LV-042';
    case LV_047 = 'LV-047';
    case LV_050 = 'LV-050';
    case LV_052 = 'LV-052';
    case LV_054 = 'LV-054';
    case LV_056 = 'LV-056';
    case LV_058 = 'LV-058';
    case LV_059 = 'LV-059';
    case LV_062 = 'LV-062';
    case LV_067 = 'LV-067';
    case LV_068 = 'LV-068';
    case LV_073 = 'LV-073';
    case LV_077 = 'LV-077';
    case LV_080 = 'LV-080';
    case LV_087 = 'LV-087';
    case LV_088 = 'LV-088';
    case LV_089 = 'LV-089';
    case LV_091 = 'LV-091';
    case LV_094 = 'LV-094';
    case LV_097 = 'LV-097';
    case LV_099 = 'LV-099';
    case LV_101 = 'LV-101';
    case LV_102 = 'LV-102';
    case LV_106 = 'LV-106';
    case LV_111 = 'LV-111';
    case LV_112 = 'LV-112';
    case LV_113 = 'LV-113';
    case LV_DGV = 'LV-DGV';
    case LV_JEL = 'LV-JEL';
    case LV_JUR = 'LV-JUR';
    case LV_LPX = 'LV-LPX';
    case LV_REZ = 'LV-REZ';
    case LV_RIX = 'LV-RIX';
    case LV_VEN = 'LV-VEN';


    // LIBYA
    case LY_BA = 'LY-BA';
    case LY_BU = 'LY-BU';
    case LY_DR = 'LY-DR';
    case LY_GT = 'LY-GT';
    case LY_JA = 'LY-JA';
    case LY_JG = 'LY-JG';
    case LY_JI = 'LY-JI';
    case LY_JU = 'LY-JU';
    case LY_KF = 'LY-KF';
    case LY_MB = 'LY-MB';
    case LY_MI = 'LY-MI';
    case LY_MJ = 'LY-MJ';
    case LY_MQ = 'LY-MQ';
    case LY_NL = 'LY-NL';
    case LY_NQ = 'LY-NQ';
    case LY_SB = 'LY-SB';
    case LY_SR = 'LY-SR';
    case LY_TB = 'LY-TB';
    case LY_WA = 'LY-WA';
    case LY_WD = 'LY-WD';
    case LY_WS = 'LY-WS';
    case LY_ZA = 'LY-ZA';


    // MOROCCO
    case MA_01 = 'MA-01';
    case MA_02 = 'MA-02';
    case MA_03 = 'MA-03';
    case MA_04 = 'MA-04';
    case MA_05 = 'MA-05';
    case MA_06 = 'MA-06';
    case MA_07 = 'MA-07';
    case MA_08 = 'MA-08';
    case MA_09 = 'MA-09';
    case MA_10 = 'MA-10';
    case MA_11 = 'MA-11';
    case MA_12 = 'MA-12';


    // MONACO
    case MC_CO = 'MC-CO';
    case MC_FO = 'MC-FO';
    case MC_JE = 'MC-JE';
    case MC_LA = 'MC-LA';
    case MC_MC = 'MC-MC';
    case MC_MG = 'MC-MG';
    case MC_MO = 'MC-MO';
    case MC_SD = 'MC-SD';
    case MC_VR = 'MC-VR';


    // MOLDOVA
    case MD_AN = 'MD-AN';
    case MD_BA = 'MD-BA';
    case MD_BD = 'MD-BD';
    case MD_BR = 'MD-BR';
    case MD_BS = 'MD-BS';
    case MD_CA = 'MD-CA';
    case MD_CL = 'MD-CL';
    case MD_CM = 'MD-CM';
    case MD_CR = 'MD-CR';
    case MD_CS = 'MD-CS';
    case MD_CT = 'MD-CT';
    case MD_CU = 'MD-CU';
    case MD_DO = 'MD-DO';
    case MD_DR = 'MD-DR';
    case MD_DU = 'MD-DU';
    case MD_ED = 'MD-ED';
    case MD_FA = 'MD-FA';
    case MD_FL = 'MD-FL';
    case MD_GA = 'MD-GA';
    case MD_GL = 'MD-GL';
    case MD_HI = 'MD-HI';
    case MD_IA = 'MD-IA';
    case MD_LE = 'MD-LE';
    case MD_NI = 'MD-NI';
    case MD_OC = 'MD-OC';
    case MD_OR = 'MD-OR';
    case MD_RE = 'MD-RE';
    case MD_RI = 'MD-RI';
    case MD_SD = 'MD-SD';
    case MD_SI = 'MD-SI';
    case MD_SN = 'MD-SN';
    case MD_SO = 'MD-SO';
    case MD_ST = 'MD-ST';
    case MD_SV = 'MD-SV';
    case MD_TA = 'MD-TA';
    case MD_TE = 'MD-TE';
    case MD_UN = 'MD-UN';


    // MONTENEGRO
    case ME_01 = 'ME-01';
    case ME_02 = 'ME-02';
    case ME_03 = 'ME-03';
    case ME_04 = 'ME-04';
    case ME_05 = 'ME-05';
    case ME_06 = 'ME-06';
    case ME_07 = 'ME-07';
    case ME_08 = 'ME-08';
    case ME_09 = 'ME-09';
    case ME_10 = 'ME-10';
    case ME_11 = 'ME-11';
    case ME_12 = 'ME-12';
    case ME_13 = 'ME-13';
    case ME_14 = 'ME-14';
    case ME_15 = 'ME-15';
    case ME_16 = 'ME-16';
    case ME_17 = 'ME-17';
    case ME_18 = 'ME-18';
    case ME_19 = 'ME-19';
    case ME_20 = 'ME-20';
    case ME_21 = 'ME-21';
    case ME_22 = 'ME-22';
    case ME_23 = 'ME-23';
    case ME_24 = 'ME-24';
    case ME_25 = 'ME-25';


    // MADAGASCAR
    case MG_A = 'MG-A';
    case MG_D = 'MG-D';
    case MG_F = 'MG-F';
    case MG_M = 'MG-M';
    case MG_T = 'MG-T';
    case MG_U = 'MG-U';


    // MARSHALL ISLANDS
    case MH_L = 'MH-L';
    case MH_T = 'MH-T';


    // NORTH MACEDONIA
    case MK_101 = 'MK-101';
    case MK_102 = 'MK-102';
    case MK_103 = 'MK-103';
    case MK_104 = 'MK-104';
    case MK_105 = 'MK-105';
    case MK_106 = 'MK-106';
    case MK_107 = 'MK-107';
    case MK_108 = 'MK-108';
    case MK_109 = 'MK-109';
    case MK_201 = 'MK-201';
    case MK_202 = 'MK-202';
    case MK_203 = 'MK-203';
    case MK_204 = 'MK-204';
    case MK_205 = 'MK-205';
    case MK_206 = 'MK-206';
    case MK_207 = 'MK-207';
    case MK_208 = 'MK-208';
    case MK_209 = 'MK-209';
    case MK_210 = 'MK-210';
    case MK_211 = 'MK-211';
    case MK_301 = 'MK-301';
    case MK_303 = 'MK-303';
    case MK_304 = 'MK-304';
    case MK_307 = 'MK-307';
    case MK_308 = 'MK-308';
    case MK_310 = 'MK-310';
    case MK_311 = 'MK-311';
    case MK_312 = 'MK-312';
    case MK_313 = 'MK-313';
    case MK_401 = 'MK-401';
    case MK_402 = 'MK-402';
    case MK_403 = 'MK-403';
    case MK_404 = 'MK-404';
    case MK_405 = 'MK-405';
    case MK_406 = 'MK-406';
    case MK_407 = 'MK-407';
    case MK_408 = 'MK-408';
    case MK_409 = 'MK-409';
    case MK_410 = 'MK-410';
    case MK_501 = 'MK-501';
    case MK_502 = 'MK-502';
    case MK_503 = 'MK-503';
    case MK_504 = 'MK-504';
    case MK_505 = 'MK-505';
    case MK_506 = 'MK-506';
    case MK_507 = 'MK-507';
    case MK_508 = 'MK-508';
    case MK_509 = 'MK-509';
    case MK_601 = 'MK-601';
    case MK_602 = 'MK-602';
    case MK_603 = 'MK-603';
    case MK_604 = 'MK-604';
    case MK_605 = 'MK-605';
    case MK_606 = 'MK-606';
    case MK_607 = 'MK-607';
    case MK_608 = 'MK-608';
    case MK_609 = 'MK-609';
    case MK_701 = 'MK-701';
    case MK_702 = 'MK-702';
    case MK_703 = 'MK-703';
    case MK_704 = 'MK-704';
    case MK_705 = 'MK-705';
    case MK_706 = 'MK-706';
    case MK_801 = 'MK-801';
    case MK_802 = 'MK-802';
    case MK_803 = 'MK-803';
    case MK_804 = 'MK-804';
    case MK_805 = 'MK-805';
    case MK_806 = 'MK-806';
    case MK_807 = 'MK-807';
    case MK_808 = 'MK-808';
    case MK_809 = 'MK-809';
    case MK_810 = 'MK-810';
    case MK_811 = 'MK-811';
    case MK_812 = 'MK-812';
    case MK_813 = 'MK-813';
    case MK_814 = 'MK-814';
    case MK_815 = 'MK-815';
    case MK_816 = 'MK-816';
    case MK_817 = 'MK-817';


    // MALI
    case ML_1 = 'ML-1';
    case ML_2 = 'ML-2';
    case ML_3 = 'ML-3';
    case ML_4 = 'ML-4';
    case ML_5 = 'ML-5';
    case ML_6 = 'ML-6';
    case ML_7 = 'ML-7';
    case ML_8 = 'ML-8';
    case ML_9 = 'ML-9';
    case ML_10 = 'ML-10';
    case ML_BKO = 'ML-BKO';


    // MYANMAR
    case MM_01 = 'MM-01';
    case MM_02 = 'MM-02';
    case MM_03 = 'MM-03';
    case MM_04 = 'MM-04';
    case MM_05 = 'MM-05';
    case MM_06 = 'MM-06';
    case MM_07 = 'MM-07';
    case MM_11 = 'MM-11';
    case MM_12 = 'MM-12';
    case MM_13 = 'MM-13';
    case MM_14 = 'MM-14';
    case MM_15 = 'MM-15';
    case MM_16 = 'MM-16';
    case MM_17 = 'MM-17';
    case MM_18 = 'MM-18';


    // MONGOLIA
    case MN_1 = 'MN-1';
    case MN_035 = 'MN-035';
    case MN_037 = 'MN-037';
    case MN_039 = 'MN-039';
    case MN_041 = 'MN-041';
    case MN_043 = 'MN-043';
    case MN_046 = 'MN-046';
    case MN_047 = 'MN-047';
    case MN_049 = 'MN-049';
    case MN_051 = 'MN-051';
    case MN_053 = 'MN-053';
    case MN_055 = 'MN-055';
    case MN_057 = 'MN-057';
    case MN_059 = 'MN-059';
    case MN_061 = 'MN-061';
    case MN_063 = 'MN-063';
    case MN_064 = 'MN-064';
    case MN_065 = 'MN-065';
    case MN_067 = 'MN-067';
    case MN_069 = 'MN-069';
    case MN_071 = 'MN-071';
    case MN_073 = 'MN-073';


    // MAURITANIA
    case MR_01 = 'MR-01';
    case MR_02 = 'MR-02';
    case MR_03 = 'MR-03';
    case MR_04 = 'MR-04';
    case MR_05 = 'MR-05';
    case MR_06 = 'MR-06';
    case MR_07 = 'MR-07';
    case MR_08 = 'MR-08';
    case MR_09 = 'MR-09';
    case MR_10 = 'MR-10';
    case MR_11 = 'MR-11';
    case MR_12 = 'MR-12';
    case MR_13 = 'MR-13';
    case MR_14 = 'MR-14';
    case MR_15 = 'MR-15';


    // MALTA
    case MT_01 = 'MT-01';
    case MT_02 = 'MT-02';
    case MT_03 = 'MT-03';
    case MT_04 = 'MT-04';
    case MT_05 = 'MT-05';
    case MT_06 = 'MT-06';
    case MT_07 = 'MT-07';
    case MT_08 = 'MT-08';
    case MT_09 = 'MT-09';
    case MT_10 = 'MT-10';
    case MT_11 = 'MT-11';
    case MT_12 = 'MT-12';
    case MT_13 = 'MT-13';
    case MT_14 = 'MT-14';
    case MT_15 = 'MT-15';
    case MT_16 = 'MT-16';
    case MT_17 = 'MT-17';
    case MT_18 = 'MT-18';
    case MT_19 = 'MT-19';
    case MT_20 = 'MT-20';
    case MT_21 = 'MT-21';
    case MT_22 = 'MT-22';
    case MT_23 = 'MT-23';
    case MT_24 = 'MT-24';
    case MT_25 = 'MT-25';
    case MT_26 = 'MT-26';
    case MT_27 = 'MT-27';
    case MT_28 = 'MT-28';
    case MT_29 = 'MT-29';
    case MT_30 = 'MT-30';
    case MT_31 = 'MT-31';
    case MT_32 = 'MT-32';
    case MT_33 = 'MT-33';
    case MT_34 = 'MT-34';
    case MT_35 = 'MT-35';
    case MT_36 = 'MT-36';
    case MT_37 = 'MT-37';
    case MT_38 = 'MT-38';
    case MT_39 = 'MT-39';
    case MT_40 = 'MT-40';
    case MT_41 = 'MT-41';
    case MT_42 = 'MT-42';
    case MT_43 = 'MT-43';
    case MT_44 = 'MT-44';
    case MT_45 = 'MT-45';
    case MT_46 = 'MT-46';
    case MT_47 = 'MT-47';
    case MT_48 = 'MT-48';
    case MT_49 = 'MT-49';
    case MT_50 = 'MT-50';
    case MT_51 = 'MT-51';
    case MT_52 = 'MT-52';
    case MT_53 = 'MT-53';
    case MT_54 = 'MT-54';
    case MT_55 = 'MT-55';
    case MT_56 = 'MT-56';
    case MT_57 = 'MT-57';
    case MT_58 = 'MT-58';
    case MT_59 = 'MT-59';
    case MT_60 = 'MT-60';
    case MT_61 = 'MT-61';
    case MT_62 = 'MT-62';
    case MT_63 = 'MT-63';
    case MT_64 = 'MT-64';
    case MT_65 = 'MT-65';
    case MT_66 = 'MT-66';
    case MT_67 = 'MT-67';
    case MT_68 = 'MT-68';


    // MAURITIUS
    case MU_AG = 'MU-AG';
    case MU_BL = 'MU-BL';
    case MU_CC = 'MU-CC';
    case MU_FL = 'MU-FL';
    case MU_GP = 'MU-GP';
    case MU_MO = 'MU-MO';
    case MU_PA = 'MU-PA';
    case MU_PL = 'MU-PL';
    case MU_PW = 'MU-PW';
    case MU_RO = 'MU-RO';
    case MU_RR = 'MU-RR';
    case MU_SA = 'MU-SA';


    // MALDIVES
    case MV_00 = 'MV-00';
    case MV_01 = 'MV-01';
    case MV_02 = 'MV-02';
    case MV_03 = 'MV-03';
    case MV_04 = 'MV-04';
    case MV_05 = 'MV-05';
    case MV_07 = 'MV-07';
    case MV_08 = 'MV-08';
    case MV_12 = 'MV-12';
    case MV_13 = 'MV-13';
    case MV_14 = 'MV-14';
    case MV_17 = 'MV-17';
    case MV_20 = 'MV-20';
    case MV_23 = 'MV-23';
    case MV_24 = 'MV-24';
    case MV_25 = 'MV-25';
    case MV_26 = 'MV-26';
    case MV_27 = 'MV-27';
    case MV_28 = 'MV-28';
    case MV_29 = 'MV-29';
    case MV_MLE = 'MV-MLE';


    // MALAWI
    case MW_C = 'MW-C';
    case MW_N = 'MW-N';
    case MW_S = 'MW-S';


    // MEXICO
    case MX_AGU = 'MX-AGU';
    case MX_BCN = 'MX-BCN';
    case MX_BCS = 'MX-BCS';
    case MX_CAM = 'MX-CAM';
    case MX_CHH = 'MX-CHH';
    case MX_CHP = 'MX-CHP';
    case MX_CMX = 'MX-CMX';
    case MX_COA = 'MX-COA';
    case MX_COL = 'MX-COL';
    case MX_DUR = 'MX-DUR';
    case MX_GRO = 'MX-GRO';
    case MX_GUA = 'MX-GUA';
    case MX_HID = 'MX-HID';
    case MX_JAL = 'MX-JAL';
    case MX_MEX = 'MX-MEX';
    case MX_MIC = 'MX-MIC';
    case MX_MOR = 'MX-MOR';
    case MX_NAY = 'MX-NAY';
    case MX_NLE = 'MX-NLE';
    case MX_OAX = 'MX-OAX';
    case MX_PUE = 'MX-PUE';
    case MX_QUE = 'MX-QUE';
    case MX_ROO = 'MX-ROO';
    case MX_SIN = 'MX-SIN';
    case MX_SLP = 'MX-SLP';
    case MX_SON = 'MX-SON';
    case MX_TAB = 'MX-TAB';
    case MX_TAM = 'MX-TAM';
    case MX_TLA = 'MX-TLA';
    case MX_VER = 'MX-VER';
    case MX_YUC = 'MX-YUC';
    case MX_ZAC = 'MX-ZAC';


    // The Netherlands
    case NL_BQ1 = 'NL-BQ1';
    case NL_BQ2 = 'NL-BQ2';
    case NL_BQ3 = 'NL-BQ3';
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


    // UGANDA
    case UG_C = 'UG-C';
    case UG_E = 'UG-E';
    case UG_N = 'UG-N';
    case UG_W = 'UG-W';


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


    // URUGUAY
    case UY_AR = 'UY-AR';
    case UY_CA = 'UY-CA';
    case UY_CL = 'UY-CL';
    case UY_CO = 'UY-CO';
    case UY_DU = 'UY-DU';
    case UY_FS = 'UY-FS';
    case UY_FD = 'UY-FD';
    case UY_LA = 'UY-LA';
    case UY_MA = 'UY-MA';
    case UY_MO = 'UY-MO';
    case UY_PA = 'UY-PA';
    case UY_RN = 'UY-RN';
    case UY_RO = 'UY-RO';
    case UY_RV = 'UY-RV';
    case UY_SA = 'UY-SA';
    case UY_SJ = 'UY-SJ';
    case UY_SO = 'UY-SO';
    case UY_TA = 'UY-TA';
    case UY_TT = 'UY-TT';


    // UZBEKISTAN
    case UZ_AN = 'UZ-AN';
    case UZ_BU = 'UZ-BU';
    case UZ_FA = 'UZ-FA';
    case UZ_JI = 'UZ-JI';
    case UZ_NG = 'UZ-NG';
    case UZ_NW = 'UZ-NW';
    case UZ_QA = 'UZ-QA';
    case UZ_QR = 'UZ-QR';
    case UZ_SA = 'UZ-SA';
    case UZ_SI = 'UZ-SI';
    case UZ_SU = 'UZ-SU';
    case UZ_TK = 'UZ-TK';
    case UZ_TO = 'UZ-TO';
    case UZ_XO = 'UZ-XO';


    // SAINT VINCENT AND THE GRENADINES
    case VC_01 = 'VC-01';
    case VC_02 = 'VC-02';
    case VC_03 = 'VC-03';
    case VC_04 = 'VC-04';
    case VC_05 = 'VC-05';
    case VC_06 = 'VC-06';


    // VENEZUELA
    case VE_A = 'VE-A';
    case VE_B = 'VE-B';
    case VE_C = 'VE-C';
    case VE_D = 'VE-D';
    case VE_E = 'VE-E';
    case VE_F = 'VE-F';
    case VE_G = 'VE-G';
    case VE_H = 'VE-H';
    case VE_I = 'VE-I';
    case VE_J = 'VE-J';
    case VE_K = 'VE-K';
    case VE_L = 'VE-L';
    case VE_M = 'VE-M';
    case VE_N = 'VE-N';
    case VE_O = 'VE-O';
    case VE_P = 'VE-P';
    case VE_R = 'VE-R';
    case VE_S = 'VE-S';
    case VE_T = 'VE-T';
    case VE_U = 'VE-U';
    case VE_V = 'VE-V';
    case VE_W = 'VE-W';
    case VE_X = 'VE-X';
    case VE_Y = 'VE-Y';
    case VE_Z = 'VE-Z';


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
            self::AD_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AD, name: 'Canillo', osm: 2804754, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AD_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AD, name: 'Encamp', osm: 2804755, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AD_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AD, name: 'La Massana', osm: 2804757, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AD_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AD, name: 'Ordino', osm: 2804758, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AD_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AD, name: 'Sant Julià de Lòria', osm: 2804759, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AD_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AD, name: 'Andorra la Vella', osm: 2804753, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AD_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AD, name: 'Escaldes-Engordany', osm: 2804756, type: BearCountrySubdivisionTypeEnum::PARISH),


            // United Arab Emirates
            self::AE_AJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::AE, name: 'Ajman', osm: 3766482, type: BearCountrySubdivisionTypeEnum::EMIRATE),
            self::AE_AZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::AE, name: 'Abu Dhabi', osm: 3766481, type: BearCountrySubdivisionTypeEnum::EMIRATE),
            self::AE_DU => new BearCountrySubdivisionData(cca2: BearCountryEnum::AE, name: 'Dubai', osm: 3766483, type: BearCountrySubdivisionTypeEnum::EMIRATE),
            self::AE_FU => new BearCountrySubdivisionData(cca2: BearCountryEnum::AE, name: 'Fujairah', osm: 3766484, type: BearCountrySubdivisionTypeEnum::EMIRATE),
            self::AE_RK => new BearCountrySubdivisionData(cca2: BearCountryEnum::AE, name: 'Ras Al Khaimah', osm: 3766485, type: BearCountrySubdivisionTypeEnum::EMIRATE),
            self::AE_SH => new BearCountrySubdivisionData(cca2: BearCountryEnum::AE, name: 'Sharjah', osm: 3766486, type: BearCountrySubdivisionTypeEnum::EMIRATE),
            self::AE_UQ => new BearCountrySubdivisionData(cca2: BearCountryEnum::AE, name: 'Umm Al Quwain', osm: 3766487, type: BearCountrySubdivisionTypeEnum::EMIRATE),


            // AFGHANISTAN
            self::AF_BAL => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Balkh', osm: 1674795, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_BAM => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Bamyan', osm: 1674849, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_BDG => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Badghis', osm: 1674811, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_BDS => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Badakhshan', osm: 1674535, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_BGL => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Baghlan', osm: 1674785, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_DAY => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Daykundi', osm: 1674833, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_FRA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Farah', osm: 1674802, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_FYB => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Faryab', osm: 1674814, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_GHA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Ghazni', osm: 1675048, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_GHO => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Ghor', osm: 1674816, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_HEL => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Helmand', osm: 1674573, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_HER => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Herat', osm: 1674803, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_JOW => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Jowzjan', osm: 1674800, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_KAB => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Kabul', osm: 1674876, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_KAN => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Kandahar', osm: 1674567, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_KAP => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Kapisa', osm: 1674767, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_KDZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Kunduz', osm: 1674564, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_KHO => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Khost', osm: 1674878, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_KNR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Kunar', osm: 1674607, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_LAG => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Laghman', osm: 1674766, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_LOG => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Logar', osm: 1674874, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_NAN => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Nangarhar', osm: 1674770, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_NIM => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Nimroz', osm: 1674664, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_NUR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Nuristan', osm: 1674544, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_PAN => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Panjshir', osm: 1675032, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_PAR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Parwan', osm: 1674782, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_PIA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Paktia', osm: 1674882, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_PKA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Paktika', osm: 1675047, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_SAM => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Samangan', osm: 1674791, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_SAR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Sar-e Pol', osm: 1674994, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_TAK => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Takhar', osm: 1674541, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_URU => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Urozgan', osm: 1674993, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_WAR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Wardak', osm: 1759757, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AF_ZAB => new BearCountrySubdivisionData(cca2: BearCountryEnum::AF, name: 'Zabul', osm: 1674841, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // ANTIGUA AND BARBUDA
            self::AG_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AG, name: 'Saint George', osm: 9604933, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AG_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AG, name: 'Saint John', osm: 9604932, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AG_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AG, name: 'Saint Mary', osm: 9604457, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AG_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AG, name: 'Saint Paul', osm: 9604629, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AG_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AG, name: 'Saint Peter', osm: 9604794, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AG_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AG, name: 'Saint Philip', osm: 9604456, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::AG_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AG, name: 'Barbuda', osm: 7742426, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::AG_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AG, name: 'Redonda', osm: 7742427, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),


            // ALBANIA
            self::AL_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Berat', osm: 1252289, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Durrës', osm: 1249872, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Elbasan', osm: 1250609, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Fier', osm: 1251469, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Gjirokastër', osm: 1253915, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Korçë', osm: 1252589, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Kukës', osm: 1759889, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Lezhë', osm: 1248935, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Dibër', osm: 1249567, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Shkodër', osm: 1248293, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Tiranë', osm: 1250098, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::AL_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AL, name: 'Vlorë', osm: 1255521, type: BearCountrySubdivisionTypeEnum::COUNTY),


            // ARMENIA
            self::AM_AG => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Aragatsotn', osm: 3917110, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_AR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Ararat', osm: 364083, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_AV => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Armavir', osm: 364086, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_ER => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Yerevan', osm: 364087, type: BearCountrySubdivisionTypeEnum::CITY),
            self::AM_GR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Gegharkunik', osm: 364080, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_KT => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Kotayk', osm: 364084, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_LO => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Lori', osm: 364078, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_SH => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Shirak', osm: 364077, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_SU => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Syunik', osm: 364082, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_TV => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Tavush', osm: 364079, type: BearCountrySubdivisionTypeEnum::REGION),
            self::AM_VD => new BearCountrySubdivisionData(cca2: BearCountryEnum::AM, name: 'Vayots Dzor', osm: 364081, type: BearCountrySubdivisionTypeEnum::REGION),


            // ANGOLA
            self::AO_BGO => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Bengo', osm: 1802539, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_BGU => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Benguela', osm: 1802540, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_BIE => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Bié', osm: 1802541, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_CAB => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Cabinda', osm: 422607, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_CCU => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Cuando Cubango', osm: 568485, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_CNN => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Cunene', osm: 422606, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_CNO => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'North Cuanza', osm: 1802542, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_CUS => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'South Cuanza', osm: 1802543, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_HUA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Huambo', osm: 1802544, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_HUI => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Huíla', osm: 1802545, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_LNO => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'North Lunda', osm: 1802547, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_LSU => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'South Lunda', osm: 1802548, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_LUA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Luanda', osm: 1802546, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_MAL => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Malanje', osm: 422660, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_MOX => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Moxico', osm: 1802549, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_NAM => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Namibe', osm: 1802550, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_UIG => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Uíge', osm: 422659, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AO_ZAI => new BearCountrySubdivisionData(cca2: BearCountryEnum::AO, name: 'Zaire', osm: 422608, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // ARGENTINA
            self::AR_A => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Salta', osm: 2405230, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_B => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Buenos Aires', osm: 1632167, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Buenos Aires', osm: 3082668, type: BearCountrySubdivisionTypeEnum::CITY),
            self::AR_D => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'San Luis', osm: 153538, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_E => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Entre Ríos', osm: 153551, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_F => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'La Rioja', osm: 153536, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_G => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Santiago del Estero', osm: 153544, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_H => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Chaco', osm: 153554, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_J => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'San Juan', osm: 153539, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_K => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Catamarca', osm: 153545, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_L => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'La Pampa', osm: 153541, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_M => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Mendoza', osm: 153540, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_N => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Misiones', osm: 153553, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_P => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Formosa', osm: 2849847, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_Q => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Neuquén', osm: 1606727, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_R => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Rio Nеgro', osm: 153547, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_S => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Santa Cruz', osm: 153543, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_T => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Tucumán', osm: 153558, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_U => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Chubut', osm: 153548, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_V => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Tierra del Fuego', osm: 153550, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_W => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Corrientes', osm: 153552, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_X => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Córdoba', osm: 3592494, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_Y => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Jujuy', osm: 153556, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::AR_Z => new BearCountrySubdivisionData(cca2: BearCountryEnum::AR, name: 'Santa Fe', osm: 153549, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // Austria
            self::AT_1 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Burgenland', osm: 76909, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AT_2 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Carinthia', osm: 52345, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AT_3 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Lower Austria', osm: 77189, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AT_4 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Upper Austria', osm: 102303, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AT_5 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Salzburg', osm: 86539, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AT_6 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Styria', osm: 35183, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AT_7 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Tyrol', osm: 52343, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AT_8 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Vorarlberg', osm: 74942, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AT_9 => new BearCountrySubdivisionData(cca2: BearCountryEnum::AT, name: 'Vienna', osm: 109166, type: BearCountrySubdivisionTypeEnum::STATE),


            // AUSTRALIA
            self::AU_ACT => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'Australian Capital Territory', osm: 2354197, type: BearCountrySubdivisionTypeEnum::TERRITORY),
            self::AU_NSW => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'New South Wales', osm: 2316593, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AU_NT => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'Northern Territory', osm: 2316594, type: BearCountrySubdivisionTypeEnum::TERRITORY),
            self::AU_QLD => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'Queensland', osm: 2316595, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AU_SA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'South Australia', osm: 2316596, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AU_TAS => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'Tasmania', osm: 2369652, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AU_VIC => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'Victoria', osm: 2316741, type: BearCountrySubdivisionTypeEnum::STATE),
            self::AU_WA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'Western Australia', osm: 2316598, type: BearCountrySubdivisionTypeEnum::STATE),
            self::CCK => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'Cocos (Keeling) Islands', osm: 82636, type: BearCountrySubdivisionTypeEnum::TERRITORY),
            self::CXR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'Christmas Island', osm: 2177207, type: BearCountrySubdivisionTypeEnum::TERRITORY),
            self::HMD => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'Heard Island and McDonald Islands', osm: 2177227, type: BearCountrySubdivisionTypeEnum::TERRITORY),
            self::NFK => new BearCountrySubdivisionData(cca2: BearCountryEnum::AU, name: 'Norfolk Island', osm: 2574988, type: BearCountrySubdivisionTypeEnum::TERRITORY),


            // AZERBAIJAN
            self::AZ_ABS => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Absheron', osm: 3764533, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_AGA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Agstafa', osm: 3764539, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_AGC => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Aghjabadi', osm: 3764536, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_AGM => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Agdam', osm: 3795445, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_AGS => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Agdash', osm: 3764538, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_AGU => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Aghsu', osm: 3764540, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_AST => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Astara', osm: 3764535, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_BA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Baku', osm: 3764541, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::AZ_BAB => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Babek', osm: 3789855, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_BAL => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Balakan', osm: 3764542, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_BAR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Barda', osm: 3764546, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_BEY => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Beylagan', osm: 3764543, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_BIL => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Bilasuvar', osm: 3764545, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_CAB => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Jabrayil', osm: 7861847, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_CAL => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Culfa', osm: 3764547, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_CUL => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Julfa', osm: 3789856, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_DAS => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Dashkasan', osm: 3795448, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_FUZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Fuzuli', osm: 3795450, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_GA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Ganja', osm: 3764556, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::AZ_GAD => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Gadabay', osm: 3764555, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_GOR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Goranboy', osm: 3795446, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_GOY => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Goychay', osm: 3764553, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_GYG => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Goygol', osm: 3795447, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_HAC => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Hajigabul', osm: 3764557, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_IMI => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Imishli', osm: 3764590, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_ISM => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Ismayilli', osm: 3764591, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_KAL => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Kalbajar', osm: 11821490, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_KAN => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Kangarli', osm: 3789860, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_KUR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Kurdamir', osm: 3764559, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_LA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Lachin', osm: 3812604, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::AZ_LAC => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Lachin', osm: 11871224, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_LAN => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Lankaran', osm: 3772758, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_LER => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Lerik', osm: 3764560, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_MAS => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Masally', osm: 3764562, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_MI => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Mingachevir', osm: 3812581, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::AZ_NA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Naftalan', osm: 3812595, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::AZ_NEF => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Neftchala', osm: 3772759, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_NV => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Nakhchivan', osm: 2379566, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::AZ_OGU => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Oghuz', osm: 3764564, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_ORD => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Ordubad', osm: 3789858, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_QAB => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Qabala', osm: 3764572, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_QAX => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Qakh', osm: 3764566, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_QAZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Qazakh', osm: 3963560, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_QBA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Guba', osm: 3764570, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_QBI => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Qubadli', osm: 11871223, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_QOB => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Qobustan', osm: 3764568, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_QUS => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Qusar', osm: 3764571, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_SA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Shaki', osm: 3912204, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::AZ_SAB => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Sabirabad', osm: 3764574, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_SAD => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Sadarak', osm: 3789859, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_SAH => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Shahbuz', osm: 2379535, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_SAK => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Shaki', osm: 3912205, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_SAL => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Salyan', osm: 3764575, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_SAR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Shirvan', osm: 3789857, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_SAT => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Shamakhi', osm: 3764573, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_SBN => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Shabran', osm: 3764592, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_SIY => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Siyazan', osm: 3764578, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_SKR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Shusha', osm: 3764597, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_SM => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Sumqayit', osm: 3764579, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::AZ_SMI => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Samukh', osm: 3764593, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_SMX => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Shamaxi', osm: 3764577, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_SR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Shirvan', osm: 3764594, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::AZ_SUS => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Shusha', osm: 11905590, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_TAR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Tartar', osm: 11822485, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_TOV => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Tovuz', osm: 3764580, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_UCA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Ujar', osm: 3764582, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_XA => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Khachmaz', osm: 12894949, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::AZ_XAC => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Khachmaz', osm: 3764583, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_XCI => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Shirvan', osm: 11905734, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_XIZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Shirvan', osm: 3764585, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_XVD => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Shirvan', osm: 11822487, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_YAR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Yardymli', osm: 3764586, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_YE => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Yevlakh', osm: 3912202, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::AZ_YEV => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Yevlakh', osm: 3764587, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_ZAN => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Zangilan', osm: 11871222, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_ZAQ => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Zaqatala', osm: 3764588, type: BearCountrySubdivisionTypeEnum::RAYON),
            self::AZ_ZAR => new BearCountrySubdivisionData(cca2: BearCountryEnum::AZ, name: 'Zardab', osm: 3764589, type: BearCountrySubdivisionTypeEnum::RAYON),


            // BOSNIA AND HERZEGOVINA
            self::BA_BRC => new BearCountrySubdivisionData(cca2: BearCountryEnum::BA, name: 'Brčko', osm: 2528143, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BA_BIH => new BearCountrySubdivisionData(cca2: BearCountryEnum::BA, name: 'Federation of Bosnia and Herzegovina', osm: 2528144, type: BearCountrySubdivisionTypeEnum::ENTITY),
            self::BA_SRP => new BearCountrySubdivisionData(cca2: BearCountryEnum::BA, name: 'Republika Srpska', osm: 2528145, type: BearCountrySubdivisionTypeEnum::ENTITY),


            // BARBADOS
            self::BB_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Christ Church', osm: 3961378, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint Andrew', osm: 3961379, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint George', osm: 3961988, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint James', osm: 3961380, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint John', osm: 3961381, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint Joseph', osm: 3961382, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint Lucy', osm: 3961383, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint Michael', osm: 3961384, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint Peter', osm: 3961385, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint Philip', osm: 3961386, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::BB_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BB, name: 'Saint Thomas', osm: 3961387, type: BearCountrySubdivisionTypeEnum::PARISH),


            // BANGLADESH
            self::BD_A => new BearCountrySubdivisionData(cca2: BearCountryEnum::BD, name: 'Barisal', osm: 3921298, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::BD_B => new BearCountrySubdivisionData(cca2: BearCountryEnum::BD, name: 'Chittagong', osm: 3824588, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::BD_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::BD, name: 'Dhaka', osm: 3921322, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::BD_D => new BearCountrySubdivisionData(cca2: BearCountryEnum::BD, name: 'Khulna', osm: 3825003, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::BD_E => new BearCountrySubdivisionData(cca2: BearCountryEnum::BD, name: 'Rajshahi', osm: 3859335, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::BD_F => new BearCountrySubdivisionData(cca2: BearCountryEnum::BD, name: 'Rangpur', osm: 3921211, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::BD_G => new BearCountrySubdivisionData(cca2: BearCountryEnum::BD, name: 'Sylhet', osm: 3921222, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::BD_H => new BearCountrySubdivisionData(cca2: BearCountryEnum::BD, name: 'Mymensingh', osm: 7318343, type: BearCountrySubdivisionTypeEnum::DIVISION),


            // BELGIUM
            self::BE_BRU => new BearCountrySubdivisionData(cca2: BearCountryEnum::BE, name: 'Brussels Capital Region', osm: 54094, type: BearCountrySubdivisionTypeEnum::REGION),
            self::BE_VLG => new BearCountrySubdivisionData(cca2: BearCountryEnum::BE, name: 'Flanders', osm: 53134, type: BearCountrySubdivisionTypeEnum::REGION),
            self::BE_WAL => new BearCountrySubdivisionData(cca2: BearCountryEnum::BE, name: 'Wallonia', osm: 90348, type: BearCountrySubdivisionTypeEnum::REGION),


            // BURKINA FASO
            self::BF_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BF, name: 'Boucle du Mouhoun', osm: 2674448, type: BearCountrySubdivisionTypeEnum::REGION),
            self::BF_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BF, name: 'Cascades', osm: 2745987, type: BearCountrySubdivisionTypeEnum::REGION),
            self::BF_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BF, name: 'Centre', osm: 2746031, type: BearCountrySubdivisionTypeEnum::REGION),
            self::BF_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BF, name: 'Centre-Est', osm: 2746016, type: BearCountrySubdivisionTypeEnum::REGION),
            self::BF_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BF, name: 'Centre-Nord', osm: 2746040, type: BearCountrySubdivisionTypeEnum::REGION),
            self::BF_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BF, name: 'Centre-Ouest', osm: 2813987, type: BearCountrySubdivisionTypeEnum::REGION),
            self::BF_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BF, name: 'Centre-Sud', osm: 2746024, type: BearCountrySubdivisionTypeEnum::REGION),
            self::BF_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BF, name: 'Est', osm: 1143562, type: BearCountrySubdivisionTypeEnum::REGION),
            self::BF_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BF, name: 'Hauts-Bassins', osm: 2674447, type: BearCountrySubdivisionTypeEnum::REGION),
            self::BF_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BF, name: 'Nord', osm: 1159881, type: BearCountrySubdivisionTypeEnum::REGION),
            self::BF_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BF, name: 'Plateau-Central', osm: 2746035, type: BearCountrySubdivisionTypeEnum::REGION),
            self::BF_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BF, name: 'Sahel', osm: 1159873, type: BearCountrySubdivisionTypeEnum::REGION),
            self::BF_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BF, name: 'Sud-Ouest', osm: 2745992, type: BearCountrySubdivisionTypeEnum::REGION),


            // BULGARIA
            self::BG_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Blagoevgrad', osm: 1739521, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Burgas', osm: 1739523, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Varna', osm: 1437135, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Veliko Tarnovo', osm: 1739524, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Vidin', osm: 1739525, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Vratsa', osm: 1739526, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Gabrovo', osm: 1739527, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Dobrich', osm: 1739528, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Kardzhali', osm: 1739529, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Kyustendil', osm: 1739530, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Lovech', osm: 1739531, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Montana', osm: 1739532, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Pazardzhik', osm: 1739533, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Pernik', osm: 1739534, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Pleven', osm: 1739535, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Plovdiv', osm: 1739536, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Razgrad', osm: 1739537, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Ruse', osm: 1739538, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_19 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Silistra', osm: 1739539, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Sliven', osm: 1739540, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Smolyan', osm: 1739541, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_22 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Sofia', osm: 1739543, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_23 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Sofia-Grad', osm: 1739542, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_24 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Stara Zagora', osm: 1300657, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_25 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Targovishte', osm: 1739544, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_26 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Haskovo', osm: 1739545, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_27 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Shumen', osm: 1739546, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BG_28 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BG, name: 'Yambol', osm: 1739547, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // BAHRAIN
            self::BH_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BH, name: 'Capital', osm: 3028094, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::BH_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BH, name: 'Southern', osm: 2522430, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::BH_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BH, name: 'Muharraq', osm: 3028095, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::BH_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BH, name: 'Northern', osm: 2522303, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),


            // BURUNDI
            self::BI_BB => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Bubanza', osm: 1700314, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_BL => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Bujumbura Rural', osm: 1695013, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_BM => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Bujumbura Mairie', osm: 1694988, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_BR => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Bururi', osm: 1695014, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_CA => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Cankuzo', osm: 1695104, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_CI => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Cibitoke', osm: 1700315, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_GI => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Gitega', osm: 1700324, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_KI => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Kirundo', osm: 1700329, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_KR => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Karuzi', osm: 1700328, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_KY => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Kayanza', osm: 1700316, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Makamba', osm: 1695019, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_MU => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Muramvya', osm: 1700317, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_MW => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Mwaro', osm: 1700318, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_MY => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Muyinga', osm: 1700330, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_NG => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Ngozi', osm: 1700331, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_RM => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Rumonge', osm: 7318716, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_RT => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Rutana', osm: 1695020, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::BI_RY => new BearCountrySubdivisionData(cca2: BearCountryEnum::BI, name: 'Ruyigi', osm: 1695105, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // BENIN
            self::BJ_AL => new BearCountrySubdivisionData(cca2: BearCountryEnum::BJ, name: 'Alibori', osm: 2803879, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BJ_AK => new BearCountrySubdivisionData(cca2: BearCountryEnum::BJ, name: 'Atakora', osm: 2845850, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BJ_AQ => new BearCountrySubdivisionData(cca2: BearCountryEnum::BJ, name: 'Atlantique', osm: 2848205, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BJ_BO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BJ, name: 'Borgou', osm: 2803880, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BJ_CO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BJ, name: 'Collines', osm: 2845888, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BJ_DO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BJ, name: 'Donga', osm: 2845865, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BJ_KO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BJ, name: 'Couffo', osm: 2846891, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BJ_LI => new BearCountrySubdivisionData(cca2: BearCountryEnum::BJ, name: 'Littoral', osm: 2848206, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BJ_MO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BJ, name: 'Mono', osm: 2848207, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BJ_OU => new BearCountrySubdivisionData(cca2: BearCountryEnum::BJ, name: 'Ouémé', osm: 2848208, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BJ_PL => new BearCountrySubdivisionData(cca2: BearCountryEnum::BJ, name: 'Plateau', osm: 2846872, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BJ_ZO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BJ, name: 'Zou', osm: 2846873, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),


            // BRUNEI
            self::BN_BE => new BearCountrySubdivisionData(cca2: BearCountryEnum::BN, name: 'Belait', osm: 3853884, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BN_BM => new BearCountrySubdivisionData(cca2: BearCountryEnum::BN, name: 'Brunei dan Muara', osm: 3853885, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BN_TE => new BearCountrySubdivisionData(cca2: BearCountryEnum::BN, name: 'Temburong', osm: 7843853, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BN_TU => new BearCountrySubdivisionData(cca2: BearCountryEnum::BN, name: 'Tutong', osm: 3853886, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // BOLIVIA
            self::BO_B => new BearCountrySubdivisionData(cca2: BearCountryEnum::BO, name: 'Beni', osm: 405935, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BO_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::BO, name: 'Cochabamba', osm: 393562, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BO_H => new BearCountrySubdivisionData(cca2: BearCountryEnum::BO, name: 'Chuquisaca', osm: 396197, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BO_L => new BearCountrySubdivisionData(cca2: BearCountryEnum::BO, name: 'La Paz', osm: 400473, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BO_N => new BearCountrySubdivisionData(cca2: BearCountryEnum::BO, name: 'Pando', osm: 3358584, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BO_O => new BearCountrySubdivisionData(cca2: BearCountryEnum::BO, name: 'Oruro', osm: 395910, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BO_P => new BearCountrySubdivisionData(cca2: BearCountryEnum::BO, name: 'Potosí', osm: 4509552, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BO_S => new BearCountrySubdivisionData(cca2: BearCountryEnum::BO, name: 'Santa Cruz', osm: 3360565, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::BO_T => new BearCountrySubdivisionData(cca2: BearCountryEnum::BO, name: 'Tarija', osm: 396198, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),


            // BRAZIL
            self::BR_AC => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Acre', osm: 326266, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_AL => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Alagoas', osm: 303781, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_AM => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Amazonas', osm: 332476, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_AP => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Amapá', osm: 331463, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_BA => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Bahia', osm: 362413, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_CE => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Ceará', osm: 302635, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_DF => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Federal District', osm: 421151, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BR_ES => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Espírito Santo', osm: 54882, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_GO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Goiás', osm: 334443, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Maranhão', osm: 332924, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_MT => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Mato Grosso', osm: 333597, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_MS => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Mato Grosso do Sul', osm: 334051, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_MG => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Minas Gerais', osm: 315173, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_PA => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Pará', osm: 185579, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_PB => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Paraíba', osm: 301464, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_PR => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Paraná', osm: 297640, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_PE => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Pernambuco', osm: 303702, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_PI => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Piauí', osm: 302819, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_RJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Rio de Janeiro', osm: 57963, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_RN => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Rio Grande do Norte', osm: 301079, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_RS => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Rio Grande do Sul', osm: 242620, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_RO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Rondônia', osm: 325866, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_RR => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Roraima', osm: 326287, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_SC => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Santa Catarina', osm: 296584, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_SP => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'São Paulo', osm: 298204, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_SE => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Sergipe', osm: 303940, type: BearCountrySubdivisionTypeEnum::STATE),
            self::BR_TO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BR, name: 'Tocantins', osm: 336819, type: BearCountrySubdivisionTypeEnum::STATE),


            // BAHAMAS
            self::BS_AK => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Acklins', osm: 3772879, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_BI => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Bimini', osm: 3776645, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_BP => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Black Point', osm: 3776646, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_BY => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Berry Islands', osm: 3776644, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_CE => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Central Eleuthera', osm: 3776650, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_CI => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Cat Island', osm: 3776647, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_CK => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Crooked Island and Long Cay', osm: 3775751, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_CO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Central Abaco', osm: 3776648, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_CS => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Central Andros', osm: 3776649, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_EG => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'East Grand Bahama', osm: 3776651, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_EX => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Exuma', osm: 3776652, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_FP => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'City of Freeport', osm: 3776653, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_GC => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Grand Cay', osm: 3776654, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_HI => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Harbour Island', osm: 3776655, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_HT => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Hope Town', osm: 3776656, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_IN => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Inagua', osm: 3775740, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_LI => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Long Island', osm: 3776657, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_MC => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Mangrove Cay', osm: 3776658, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_MG => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Mayaguana', osm: 3775742, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_MI => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Moore\'s Island', osm: 3776659, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_NE => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'North Eleuthera', osm: 3776663, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_NO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'North Abaco', osm: 3776661, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_NP => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'New Providence', osm: 3776660, type: BearCountrySubdivisionTypeEnum::ISLAND),
            self::BS_NS => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'North Eleuthera', osm: 3776662, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_RC => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Rum Cay', osm: 3776665, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_RI => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Ragged Island', osm: 3776664, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_SA => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'South Abaco', osm: 3776678, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_SE => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'South Andros', osm: 3776668, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_SO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'South Eleuthera', osm: 3776667, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_SS => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'San Salvador', osm: 3776666, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_SW => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'Spanish Wells', osm: 3776669, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BS_WG => new BearCountrySubdivisionData(cca2: BearCountryEnum::BS, name: 'West Grand Bahama', osm: 3776685, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // BHUTAN
            self::BT_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Paro', osm: 3899610, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Chhukha', osm: 3899603, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Haa', osm: 3899607, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Samtse', osm: 3899614, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Thimphu', osm: 3899616, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Tsirang', osm: 3899620, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_22 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Dagana', osm: 3899605, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_23 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Punakha', osm: 3899612, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_24 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Wangdue Phodrang', osm: 3899621, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_31 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Sarpang', osm: 3899615, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_32 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Trongsa', osm: 3899619, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_33 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Bumthang', osm: 3899602, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_34 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Zhemgang', osm: 3899622, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_41 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Trashigang', osm: 3899617, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_42 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Mongar', osm: 3899609, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_43 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Pemagatshel', osm: 3899611, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_44 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Lhuentse', osm: 3899608, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_45 => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Samdrup Jongkhar', osm: 3899613, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_GA => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Gasa', osm: 3899606, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BT_TY => new BearCountrySubdivisionData(cca2: BearCountryEnum::BT, name: 'Trashi Yangtse', osm: 3899618, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // BOTSWANA
            self::BW_CE => new BearCountrySubdivisionData(cca2: BearCountryEnum::BW, name: 'Central', osm: 270335, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BW_CH => new BearCountrySubdivisionData(cca2: BearCountryEnum::BW, name: 'Chobe', osm: 7321165, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BW_FR => new BearCountrySubdivisionData(cca2: BearCountryEnum::BW, name: 'Francistown', osm: 17349212, type: BearCountrySubdivisionTypeEnum::CITY),
            self::BW_GA => new BearCountrySubdivisionData(cca2: BearCountryEnum::BW, name: 'Gaborone', osm: 17349208, type: BearCountrySubdivisionTypeEnum::CITY),
            self::BW_GH => new BearCountrySubdivisionData(cca2: BearCountryEnum::BW, name: 'Ghanzi', osm: 270336, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BW_JW => new BearCountrySubdivisionData(cca2: BearCountryEnum::BW, name: 'Jwaneng', osm: 17349210, type: BearCountrySubdivisionTypeEnum::TOWN),
            self::BW_KG => new BearCountrySubdivisionData(cca2: BearCountryEnum::BW, name: 'Kgalagadi', osm: 270339, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BW_KL => new BearCountrySubdivisionData(cca2: BearCountryEnum::BW, name: 'Kgatleng', osm: 270333, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BW_KW => new BearCountrySubdivisionData(cca2: BearCountryEnum::BW, name: 'Kweneng', osm: 270337, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BW_LO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BW, name: 'Lobatse', osm: 17349209, type: BearCountrySubdivisionTypeEnum::TOWN),
            self::BW_NE => new BearCountrySubdivisionData(cca2: BearCountryEnum::BW, name: 'North-East', osm: 270334, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BW_NW => new BearCountrySubdivisionData(cca2: BearCountryEnum::BW, name: 'North-West', osm: 2104170, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BW_SP => new BearCountrySubdivisionData(cca2: BearCountryEnum::BW, name: 'Selibe Phikwe', osm: 17349211, type: BearCountrySubdivisionTypeEnum::TOWN),
            self::BW_SE => new BearCountrySubdivisionData(cca2: BearCountryEnum::BW, name: 'South-East', osm: 270332, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BW_SO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BW, name: 'Southern', osm: 270338, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BW_ST => new BearCountrySubdivisionData(cca2: BearCountryEnum::BW, name: 'Sowa', osm: 17349213, type: BearCountrySubdivisionTypeEnum::TOWN),


            // BELARUS
            self::BY_BR => new BearCountrySubdivisionData(cca2: BearCountryEnum::BY, name: 'Brest', osm: 59189, type: BearCountrySubdivisionTypeEnum::OBLAST),
            self::BY_HM => new BearCountrySubdivisionData(cca2: BearCountryEnum::BY, name: 'Minsk', osm: 59195, type: BearCountrySubdivisionTypeEnum::CITY),
            self::BY_HO => new BearCountrySubdivisionData(cca2: BearCountryEnum::BY, name: 'Gomel', osm: 59161, type: BearCountrySubdivisionTypeEnum::OBLAST),
            self::BY_HR => new BearCountrySubdivisionData(cca2: BearCountryEnum::BY, name: 'Grodno', osm: 59275, type: BearCountrySubdivisionTypeEnum::OBLAST),
            self::BY_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::BY, name: 'Mogilev', osm: 59162, type: BearCountrySubdivisionTypeEnum::OBLAST),
            self::BY_MI => new BearCountrySubdivisionData(cca2: BearCountryEnum::BY, name: 'Minsk', osm: 59752, type: BearCountrySubdivisionTypeEnum::OBLAST),
            self::BY_VI => new BearCountrySubdivisionData(cca2: BearCountryEnum::BY, name: 'Vitebsk', osm: 59506, type: BearCountrySubdivisionTypeEnum::OBLAST),


            // BELIZE
            self::BZ_BZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::BZ, name: 'Belize', osm: 962354, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BZ_CY => new BearCountrySubdivisionData(cca2: BearCountryEnum::BZ, name: 'Cayo', osm: 962357, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BZ_CZL => new BearCountrySubdivisionData(cca2: BearCountryEnum::BZ, name: 'Corozal', osm: 962356, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BZ_OW => new BearCountrySubdivisionData(cca2: BearCountryEnum::BZ, name: 'Orange Walk', osm: 962355, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BZ_SC => new BearCountrySubdivisionData(cca2: BearCountryEnum::BZ, name: 'Stann Creek', osm: 962353, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::BZ_TOL => new BearCountrySubdivisionData(cca2: BearCountryEnum::BZ, name: 'Toledo', osm: 962358, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // CANADA
            self::CA_AB => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Alberta', osm: 391186, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_BC => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'British Columbia', osm: 390867, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_MB => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Manitoba', osm: 390841, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_NB => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'New Brunswick', osm: 68942, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_NL => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Newfoundland and Labrador', osm: 391196, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_NS => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Nova Scotia', osm: 390558, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_NT => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Northwest Territories', osm: 391220, type: BearCountrySubdivisionTypeEnum::TERRITORY),
            self::CA_NU => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Nunavut', osm: 390840, type: BearCountrySubdivisionTypeEnum::TERRITORY),
            self::CA_ON => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Ontario', osm: 68841, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_PE => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Prince Edward Island', osm: 391115, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_QC => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Quebec', osm: 61549, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_SK => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Saskatchewan', osm: 391178, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CA_YT => new BearCountrySubdivisionData(cca2: BearCountryEnum::CA, name: 'Yukon', osm: 391455, type: BearCountrySubdivisionTypeEnum::TERRITORY),


            // CONGO
            self::CD_BU => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Bas-Uele', osm: 192820, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_EQ => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Équateur', osm: 193084, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_HK => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Haut-Katanga', osm: 193085, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_HL => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Haut-Lomami', osm: 193086, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_HU => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Haut-Uele', osm: 192817, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_IT => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Ituri', osm: 192818, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_KS => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Kasaï', osm: 3652373, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_KC => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Kasaï-Central', osm: 5646599, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_KE => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Kasaï-Oriental', osm: 3654168, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_KN => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Kinshasa', osm: 5646651, type: BearCountrySubdivisionTypeEnum::CITY),
            self::CD_BC => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Kongo Central', osm: 193090, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_KG => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Kwango', osm: 193091, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_KL => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Kwilu', osm: 5646653, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_LO => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Lomami', osm: 5646600, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_LU => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Lualaba', osm: 5646601, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_MN => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Mai-Ndombe', osm: 5647368, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Maniema', osm: 5642697, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_MO => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Mongala', osm: 192821, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_NK => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Nord-Kivu', osm: 5642698, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_NU => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Nord-Ubangi', osm: 192822, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_SA => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Sankuru', osm: 193099, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_SK => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Sud-Kivu', osm: 5642699, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_SU => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Sud-Ubangi', osm: 193101, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_TA => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Tanganyika', osm: 193102, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_TO => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Tshopo', osm: 192819, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CD_TU => new BearCountrySubdivisionData(cca2: BearCountryEnum::CD, name: 'Tshuapa', osm: 193083, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // CENTRAL AFRICAN REPUBLIC
            self::CF_BB => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Bamingui-Bangoran', osm: 2634506, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::CF_BGF => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Bangui', osm: 7322726, type: BearCountrySubdivisionTypeEnum::COMMUNE),
            self::CF_BK => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Basse-Kotto', osm: 2634533, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::CF_KB => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Gribingui', osm: 2954784, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::CF_HM => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Haut-Mbomou', osm: 2634528, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::CF_HK => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Haute-Kotto', osm: 2634510, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::CF_HS => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Haute-Sangha / Mambéré-Kadéï', osm: 2954783, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::CF_KG => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Kémo-Gribingui', osm: 2954782, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::CF_LB => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Lobaye', osm: 3564719, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::CF_MB => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Mbomou', osm: 2634531, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::CF_NM => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Nana-Mambéré', osm: 2954785, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::CF_MP => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Ombella-M\'Poko', osm: 2954675, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::CF_UK => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Ouaka', osm: 2954786, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::CF_AC => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Ouham', osm: 2954787, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::CF_OP => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Ouham-Pendé', osm: 2954276, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::CF_SE => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Sangha', osm: 2954788, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::CF_VK => new BearCountrySubdivisionData(cca2: BearCountryEnum::CF, name: 'Vakaga', osm: 2634498, type: BearCountrySubdivisionTypeEnum::PREFECTURE),


            // CONGO BRAZZAVILLE
            self::CG_2 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CG, name: 'Lékoumou', osm: 3220592, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CG_5 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CG, name: 'Kouilou', osm: 3220590, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CG_7 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CG, name: 'Likouala', osm: 3220591, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CG_8 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CG, name: 'Cuvette', osm: 3220588, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CG_9 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CG, name: 'Niari', osm: 3220593, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CG_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CG, name: 'Bouenza', osm: 3220587, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CG_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CG, name: 'Pool', osm: 3220595, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CG_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CG, name: 'Sangha', osm: 3220596, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CG_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CG, name: 'Plateaux', osm: 3220594, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CG_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CG, name: 'Cuvette-Ouest', osm: 3220589, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CG_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CG, name: 'Pointe-Noire', osm: 3947631, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CG_BZV => new BearCountrySubdivisionData(cca2: BearCountryEnum::CG, name: 'Brazzaville', osm: 3947308, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),


            // SWITZERLAND
            self::CH_AG => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Aargau', osm: 1686359, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_AI => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Appenzell Innerrhoden', osm: 1686666, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_AR => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Appenzell Ausserrhoden', osm: 1686649, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_BE => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Bern', osm: 1686344, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_BL => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Basel-Landschaft', osm: 1686366, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_BS => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Basel-Stadt', osm: 1699639, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_FR => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Fribourg', osm: 1698314, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_GE => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Geneva', osm: 1702419, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_GL => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Glarus', osm: 1685673, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_GR => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Graubünden', osm: 1686631, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_JU => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Jura', osm: 1697347, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_LU => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Lucerne', osm: 1685677, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_NE => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Neuchâtel', osm: 1702420, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_NW => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Nidwalden', osm: 1686449, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_OW => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Obwalden', osm: 1686448, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_SG => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'St. Gallen', osm: 1687006, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_SH => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Schaffhausen', osm: 1696112, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_SO => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Solothurn', osm: 1701133, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_SZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Schwyz', osm: 1688583, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_TG => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Thurgau', osm: 1693811, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_TI => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Ticino', osm: 1687730, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_UR => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Uri', osm: 1693971, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_VD => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Vaud', osm: 1702421, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_VS => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Valais', osm: 1686699, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_ZG => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Zug', osm: 1686447, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::CH_ZH => new BearCountrySubdivisionData(cca2: BearCountryEnum::CH, name: 'Zürich', osm: 1690227, type: BearCountrySubdivisionTypeEnum::CANTON),


            // CÔTE D'IVOIRE
            self::CI_AB => new BearCountrySubdivisionData(cca2: BearCountryEnum::CI, name: 'Abidjan', osm: 3377982, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CI_BS => new BearCountrySubdivisionData(cca2: BearCountryEnum::CI, name: 'Lower Sassandra', osm: 3597522, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CI_CM => new BearCountrySubdivisionData(cca2: BearCountryEnum::CI, name: 'Comoé', osm: 3578769, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CI_DN => new BearCountrySubdivisionData(cca2: BearCountryEnum::CI, name: 'Denguélé', osm: 1609819, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CI_GD => new BearCountrySubdivisionData(cca2: BearCountryEnum::CI, name: 'Gôh-Djiboua', osm: 3596727, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CI_LC => new BearCountrySubdivisionData(cca2: BearCountryEnum::CI, name: 'Lakes', osm: 3601645, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CI_LG => new BearCountrySubdivisionData(cca2: BearCountryEnum::CI, name: 'Lagoons', osm: 3581398, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CI_MG => new BearCountrySubdivisionData(cca2: BearCountryEnum::CI, name: 'Mountains', osm: 3600378, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CI_SM => new BearCountrySubdivisionData(cca2: BearCountryEnum::CI, name: 'Sassandra-Marahoué', osm: 3601234, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CI_SV => new BearCountrySubdivisionData(cca2: BearCountryEnum::CI, name: 'Savannahs', osm: 1609809, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CI_VB => new BearCountrySubdivisionData(cca2: BearCountryEnum::CI, name: 'Bandama Valley', osm: 1609817, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CI_WR => new BearCountrySubdivisionData(cca2: BearCountryEnum::CI, name: 'Woroba', osm: 3603714, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CI_YM => new BearCountrySubdivisionData(cca2: BearCountryEnum::CI, name: 'Yamoussoukro', osm: 3601243, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CI_ZZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::CI, name: 'Zanzan', osm: 1609813, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // CHILE
            self::CL_AI => new BearCountrySubdivisionData(cca2: BearCountryEnum::CL, name: 'Aisen', osm: 305693, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CL_AN => new BearCountrySubdivisionData(cca2: BearCountryEnum::CL, name: 'Antofagasta', osm: 240932, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CL_AP => new BearCountrySubdivisionData(cca2: BearCountryEnum::CL, name: 'Arica and Parinacota', osm: 238392, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CL_AT => new BearCountrySubdivisionData(cca2: BearCountryEnum::CL, name: 'Atacama', osm: 271889, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CL_BI => new BearCountrySubdivisionData(cca2: BearCountryEnum::CL, name: 'Biobio', osm: 252891, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CL_CO => new BearCountrySubdivisionData(cca2: BearCountryEnum::CL, name: 'Coquimbo', osm: 231672, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CL_AR => new BearCountrySubdivisionData(cca2: BearCountryEnum::CL, name: 'La Araucania', osm: 296378, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CL_LI => new BearCountrySubdivisionData(cca2: BearCountryEnum::CL, name: 'O\'Higgins', osm: 206487, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CL_LL => new BearCountrySubdivisionData(cca2: BearCountryEnum::CL, name: 'The Lakes', osm: 274991, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CL_LR => new BearCountrySubdivisionData(cca2: BearCountryEnum::CL, name: 'The Rivers', osm: 274988, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CL_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::CL, name: 'Magellan', osm: 301542, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CL_ML => new BearCountrySubdivisionData(cca2: BearCountryEnum::CL, name: 'Maule', osm: 239882, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CL_NB => new BearCountrySubdivisionData(cca2: BearCountryEnum::CL, name: 'Nuble', osm: 7421025, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CL_RM => new BearCountrySubdivisionData(cca2: BearCountryEnum::CL, name: 'Santiago Metropolitan', osm: 198848, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CL_TA => new BearCountrySubdivisionData(cca2: BearCountryEnum::CL, name: 'Tarapaca', osm: 238393, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CL_VS => new BearCountrySubdivisionData(cca2: BearCountryEnum::CL, name: 'Valparaiso', osm: 198847, type: BearCountrySubdivisionTypeEnum::REGION),


            // CAMEROON
            self::CM_AD => new BearCountrySubdivisionData(cca2: BearCountryEnum::CM, name: 'Adamaoua', osm: 2750694, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CM_CE => new BearCountrySubdivisionData(cca2: BearCountryEnum::CM, name: 'Centre', osm: 2750789, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CM_ES => new BearCountrySubdivisionData(cca2: BearCountryEnum::CM, name: 'East', osm: 2750738, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CM_EN => new BearCountrySubdivisionData(cca2: BearCountryEnum::CM, name: 'Far North', osm: 2749663, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CM_LT => new BearCountrySubdivisionData(cca2: BearCountryEnum::CM, name: 'Littoral', osm: 2750851, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CM_NO => new BearCountrySubdivisionData(cca2: BearCountryEnum::CM, name: 'North', osm: 2750662, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CM_NW => new BearCountrySubdivisionData(cca2: BearCountryEnum::CM, name: 'North-West', osm: 2750874, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CM_SU => new BearCountrySubdivisionData(cca2: BearCountryEnum::CM, name: 'South', osm: 2750833, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CM_SW => new BearCountrySubdivisionData(cca2: BearCountryEnum::CM, name: 'South-West', osm: 2750875, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CM_OU => new BearCountrySubdivisionData(cca2: BearCountryEnum::CM, name: 'West', osm: 6312404, type: BearCountrySubdivisionTypeEnum::REGION),


            // CHINA
            self::CN_AH => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Anhui', osm: 913011, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_BJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Beijing', osm: 912940, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::CN_CQ => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Chongqing', osm: 913069, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::CN_FJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Fujian', osm: 553303, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_GS => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Gansu', osm: 153314, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_GD => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Guangdong', osm: 911844, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_GX => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Guangxi', osm: 286342, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CN_GZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Guizhou', osm: 286937, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_HI => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Hainan', osm: 2128285, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_HE => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Hebei', osm: 912998, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_HL => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Heilongjiang', osm: 199073, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_HA => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Henan', osm: 407492, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_HK => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Hong Kong', osm: 913110, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CN_HB => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Hubei', osm: 913106, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_HN => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Hunan', osm: 913073, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_JS => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Jiangsu', osm: 913012, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_JX => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Jiangxi', osm: 913109, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_JL => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Jilin', osm: 198590, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_LN => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Liaoning', osm: 912942, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_MO => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Macao', osm: 1867188, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CN_NM => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Inner Mongolia', osm: 161349, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CN_NX => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Ningxia', osm: 913101, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CN_QH => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Qinghai', osm: 153269, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_SN => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Shaanxi', osm: 913100, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_SD => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Shandong', osm: 913006, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_SH => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Shanghai', osm: 913067, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::CN_SX => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Shanxi', osm: 913105, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_SC => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Sichuan', osm: 913068, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_TJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Tianjin', osm: 912999, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::CN_XJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Xinjiang', osm: 153310, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CN_XZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Tibet', osm: 153292, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CN_YN => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Yunnan', osm: 913094, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CN_ZJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::CN, name: 'Zhejiang', osm: 553302, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // COLOMBIA
            self::CO_AMA => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Amazonia', osm: 1303962, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_ANT => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Antioquia', osm: 1315120, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_ARA => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Arauca', osm: 1388045, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_ATL => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Atlantico', osm: 1315209, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_BOL => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Bolivar', osm: 1316581, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_BOY => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Boyaca', osm: 1390144, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_CAL => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Caldas', osm: 396705, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_CAQ => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Caqueta', osm: 1394843, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_CAS => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Casanare', osm: 1392025, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_CAU => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Cauca', osm: 1392085, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_CES => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Cesar', osm: 1317223, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_COR => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Cordoba', osm: 1321032, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_CUN => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Cundinamarca', osm: 1305533, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_CHO => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Choco', osm: 1322131, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_DC => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Bogota', osm: 12893646, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CO_GUA => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Guainia', osm: 1385038, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_GUV => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Guaviare', osm: 1380540, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_HUI => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Huila', osm: 1396291, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_LAG => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'La Guajira', osm: 1321379, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_MAG => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Magdalena', osm: 1319097, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_MET => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Meta', osm: 1305166, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_NAR => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Narino', osm: 1380130, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_NSA => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'North Santander', osm: 1324192, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_PUT => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Putumayo', osm: 1375357, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_QUI => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Quindio', osm: 1331230, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_RIS => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Risaralda', osm: 1374221, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_SAP => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'San Andres', osm: 2181889, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_SAN => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Santander', osm: 1372374, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_SUC => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Sucre', osm: 1320759, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_TOL => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Tolima', osm: 1309495, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_VAC => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Cauca Valley', osm: 1322825, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_VAU => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Vaupes', osm: 1359366, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::CO_VID => new BearCountrySubdivisionData(cca2: BearCountryEnum::CO, name: 'Vichada', osm: 1357098, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),


            // COSTA RICA
            self::CR_A => new BearCountrySubdivisionData(cca2: BearCountryEnum::CR, name: 'Alajuela', osm: 3222933, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CR_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::CR, name: 'Cartago', osm: 3223054, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CR_G => new BearCountrySubdivisionData(cca2: BearCountryEnum::CR, name: 'Guanacaste', osm: 3222919, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CR_H => new BearCountrySubdivisionData(cca2: BearCountryEnum::CR, name: 'Heredia', osm: 3221947, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CR_L => new BearCountrySubdivisionData(cca2: BearCountryEnum::CR, name: 'Limón', osm: 3223056, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CR_P => new BearCountrySubdivisionData(cca2: BearCountryEnum::CR, name: 'Puntarenas', osm: 3223028, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CR_SJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::CR, name: 'San José', osm: 3223004, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // CUBA
            self::CU_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CU, name: 'Pinar del Rio', osm: 1854617, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CU_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CU, name: 'Havana', osm: 1854615, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CU_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CU, name: 'Matanzas', osm: 1854616, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CU_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CU, name: 'Clara City', osm: 1923804, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CU_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CU, name: 'Cienfuegos', osm: 1854632, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CU_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CU, name: 'Holy Spirit', osm: 1923793, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CU_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CU, name: 'Ciego de Avila', osm: 1854631, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CU_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CU, name: 'Camaguey', osm: 1854630, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CU_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CU, name: 'Las Tunas', osm: 1854636, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CU_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CU, name: 'Holguin', osm: 1854635, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CU_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CU, name: 'Granma', osm: 1854633, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CU_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CU, name: 'Santiago', osm: 1854638, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CU_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CU, name: 'Guantanamo', osm: 1854634, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CU_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CU, name: 'Artemisa', osm: 2576644, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CU_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CU, name: 'Mayabeque', osm: 2579313, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::CU_99 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CU, name: 'Isle of Youth', osm: 1854614, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),


            // CYPRUS
            self::CY_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CY, name: 'Nicosia', osm: 3264382, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CY_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CY, name: 'Limassol', osm: 2087230, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CY_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CY, name: 'Larnaca', osm: 2087229, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CY_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CY, name: 'Famagusta', osm: 3264447, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CY_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CY, name: 'Paphos', osm: 3263729, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::CY_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CY, name: 'Kyrenia', osm: 3264494, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // CZECH REPUBLIC
            self::CZ_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CZ, name: 'Prague', osm: 435514, type: BearCountrySubdivisionTypeEnum::CITY),
            self::CZ_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CZ, name: 'Central Bohemia', osm: 442397, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CZ_31 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CZ, name: 'South Bohemia', osm: 442321, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CZ_32 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CZ, name: 'Plzeň', osm: 442466, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CZ_41 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CZ, name: 'Karlovy Vary', osm: 442314, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CZ_42 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CZ, name: 'Ústí nad Labem', osm: 442452, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CZ_51 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CZ, name: 'Liberec', osm: 442455, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CZ_52 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CZ, name: 'Hradec Králové', osm: 442463, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CZ_53 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CZ, name: 'Pardubice', osm: 442460, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CZ_63 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CZ, name: 'Vysočina', osm: 442453, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CZ_64 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CZ, name: 'South Moravia', osm: 442311, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CZ_71 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CZ, name: 'Olomouc', osm: 442459, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CZ_72 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CZ, name: 'Zlín', osm: 442449, type: BearCountrySubdivisionTypeEnum::REGION),
            self::CZ_80 => new BearCountrySubdivisionData(cca2: BearCountryEnum::CZ, name: 'Moravia-Silesia', osm: 442461, type: BearCountrySubdivisionTypeEnum::REGION),


            // GERMANY
            self::DE_BW => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Baden-Württemberg', osm: 62611, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_BY => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Bavaria', osm: 2145268, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_BE => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Berlin', osm: 62422, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_BB => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Brandenburg', osm: 62504, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_HB => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Bremen', osm: 62718, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_HH => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Hamburg', osm: 62782, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_HE => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Hesse', osm: 62650, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_MV => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Mecklenburg-Vorpommern', osm: 28322, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_NI => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Lower Saxony', osm: 62771, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_NW => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'North Rhine-Westphalia', osm: 62761, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_RP => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Rhineland-Palatinate', osm: 62341, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_SL => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Saarland', osm: 62372, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_SN => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Saxony', osm: 62467, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_ST => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Saxony-Anhalt', osm: 62607, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_SH => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Schleswig-Holstein', osm: 51529, type: BearCountrySubdivisionTypeEnum::STATE),
            self::DE_TH => new BearCountrySubdivisionData(cca2: BearCountryEnum::DE, name: 'Thuringia', osm: 62366, type: BearCountrySubdivisionTypeEnum::STATE),


            // DJIBOUTI
            self::DJ_AR => new BearCountrySubdivisionData(cca2: BearCountryEnum::DJ, name: 'Arta', osm: 4027786, type: BearCountrySubdivisionTypeEnum::REGION),
            self::DJ_AS => new BearCountrySubdivisionData(cca2: BearCountryEnum::DJ, name: 'Ali Sabieh', osm: 3725240, type: BearCountrySubdivisionTypeEnum::REGION),
            self::DJ_DI => new BearCountrySubdivisionData(cca2: BearCountryEnum::DJ, name: 'Dikhil', osm: 3725233, type: BearCountrySubdivisionTypeEnum::REGION),
            self::DJ_DJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::DJ, name: 'Djibouti', osm: 3725245, type: BearCountrySubdivisionTypeEnum::CITY),
            self::DJ_OB => new BearCountrySubdivisionData(cca2: BearCountryEnum::DJ, name: 'Obock', osm: 3725121, type: BearCountrySubdivisionTypeEnum::REGION),
            self::DJ_TA => new BearCountrySubdivisionData(cca2: BearCountryEnum::DJ, name: 'Tadjourah', osm: 3725194, type: BearCountrySubdivisionTypeEnum::REGION),


            // DENMARK
            self::DK_81 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DK, name: 'North Denmark', osm: 1319936, type: BearCountrySubdivisionTypeEnum::REGION),
            self::DK_82 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DK, name: 'Central Denmark', osm: 1319935, type: BearCountrySubdivisionTypeEnum::REGION),
            self::DK_83 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DK, name: 'Southern Denmark', osm: 1319978, type: BearCountrySubdivisionTypeEnum::REGION),
            self::DK_84 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DK, name: 'Capital Region', osm: 1320608, type: BearCountrySubdivisionTypeEnum::REGION),
            self::DK_85 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DK, name: 'Zealand', osm: 1320370, type: BearCountrySubdivisionTypeEnum::REGION),


            // DOMINICA
            self::DM_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DM, name: 'Saint Andrew', osm: 2315027, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::DM_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DM, name: 'Saint David', osm: 2314472, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::DM_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DM, name: 'Saint George', osm: 1793745, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::DM_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DM, name: 'Saint John', osm: 2315070, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::DM_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DM, name: 'Saint Joseph', osm: 2325658, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::DM_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DM, name: 'Saint Luke', osm: 2306401, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::DM_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DM, name: 'Saint Mark', osm: 2306400, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::DM_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DM, name: 'Saint Patrick', osm: 2304770, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::DM_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DM, name: 'Saint Paul', osm: 2325657, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::DM_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DM, name: 'Saint Peter', osm: 2325659, type: BearCountrySubdivisionTypeEnum::PARISH),


            // DOMINICAN REPUBLIC
            self::DO_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Santo Domingo City', osm: 53161, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::DO_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Azua', osm: 3421245, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Baoruco', osm: 3420663, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Barahona', osm: 14761637, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Dajabon', osm: 3412367, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Duarte', osm: 3420664, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Elias Pina', osm: 3420312, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'El Seibo', osm: 3422238, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Espaillat', osm: 3412918, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Independence', osm: 14761638, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'La Altagracia', osm: 3422240, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'La Romana', osm: 3422258, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'La Vega', osm: 3420314, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Maria Trinidad Sanchez', osm: 3422241, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Christ Mountain', osm: 3411021, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Pedernales', osm: 3421242, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Peravia', osm: 3421246, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Silver Port', osm: 3412919, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_19 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Mirabal Sisters', osm: 3420313, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Samana', osm: 3422242, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Saint Christopher', osm: 3422564, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_22 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Saint John', osm: 3420316, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_23 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Saint Peter', osm: 3422259, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_24 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Sanchez Ramirez', osm: 3420666, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_25 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Santiago', osm: 3412920, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_26 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Santiago Rodriguez', osm: 3412368, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_27 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Valverde', osm: 3412369, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_28 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Monsignor Nouel', osm: 3420315, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_29 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Silver Mountain', osm: 3420529, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_30 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Great Herd', osm: 3422239, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_31 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Saint Joseph', osm: 3421243, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DO_32 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DO, name: 'Santo Domingo', osm: 3422565, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // ALGERIA
            self::DZ_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Adrar', osm: 1258650, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Chlef', osm: 1283740, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Laghouat', osm: 1280081, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Oum el Bouaghi', osm: 1278749, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Batna', osm: 1278748, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Béjaïa', osm: 1278765, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Biskra', osm: 1280072, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Béchar', osm: 1258647, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Blida', osm: 1283683, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Bouira', osm: 1283093, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Tamanrasset', osm: 1279667, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Tébessa', osm: 1280465, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Tlemcen', osm: 1280702, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Tiaret', osm: 1281404, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Tizi Ouzou', osm: 1283601, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Alger', osm: 157062, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Djelfa', osm: 1280073, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Jijel', osm: 1278746, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_19 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Sétif', osm: 1278747, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Saïda', osm: 1281260, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Skikda', osm: 1273552, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_22 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Sidi Bel Abbès', osm: 1259189, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_23 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Annaba', osm: 1455599, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_24 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Guelma', osm: 1273369, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_25 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Constantine', osm: 1273368, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_26 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Médéa', osm: 1282111, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_27 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Mostaganem', osm: 1259191, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_28 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'M\'sila', osm: 1278767, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_29 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Mascara', osm: 1259190, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_30 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Ouargla', osm: 1279811, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_31 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Oran', osm: 1259187, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_32 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'El Bayadh', osm: 1258649, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_33 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Illizi', osm: 1279816, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_34 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Bordj Bou Arréridj', osm: 1278766, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_35 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Boumerdès', osm: 1283608, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_36 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'El Tarf', osm: 1455600, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_37 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Tindouf', osm: 1258651, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_38 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Tissemsilt', osm: 1282090, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_39 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'El Oued', osm: 1280071, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_40 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Khenchela', osm: 1280466, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_41 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Souk Ahras', osm: 1283457, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_42 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Tipaza', osm: 1286213, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_43 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Mila', osm: 1273544, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_44 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Aïn Defla', osm: 1283678, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_45 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Naama', osm: 1258648, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_46 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Aïn Témouchent', osm: 1259188, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_47 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Ghardaïa', osm: 1279666, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_48 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Relizane', osm: 1282091, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_49 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Timimoun', osm: 6528164, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_50 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Bordj Badji Mokhtar', osm: 6528163, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_51 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Ouled Djellal', osm: 10489092, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_52 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Béni Abbès', osm: 6824843, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_53 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'In Salah', osm: 6824900, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_54 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'In Guezzam', osm: 6825881, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_55 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Touggourt', osm: 6822397, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_56 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'Djanet', osm: 6825876, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_57 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'El Meghaier', osm: 6825874, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::DZ_58 => new BearCountrySubdivisionData(cca2: BearCountryEnum::DZ, name: 'El Meniaa', osm: 6825901, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // ECUADOR
            self::EC_A => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Azuay', osm: 107886, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_B => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Bolivar', osm: 108899, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Carchi', osm: 114048, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_D => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Orellana', osm: 114245, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_E => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Esmeraldas', osm: 113237, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_F => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Canar', osm: 108720, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_G => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Guayas', osm: 109468, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_H => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Chimborazo', osm: 108860, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_I => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Imbabura', osm: 113982, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_L => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Loja', osm: 108088, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_M => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Manabi', osm: 112910, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_N => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Napo', osm: 114276, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_O => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'The Gold', osm: 958681, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_P => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Pichincha', osm: 113722, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_R => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'The Rivers', osm: 109248, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_S => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Morona Santiago', osm: 108521, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_SD => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Saint Dominic', osm: 113721, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_SE => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Saint Helen', osm: 109441, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_T => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Tungurahua', osm: 113442, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_U => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Sucumbios', osm: 114574, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_W => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Galapagos', osm: 1628150, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_X => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Cotopaxi', osm: 963072, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_Y => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Pastaza', osm: 113869, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::EC_Z => new BearCountrySubdivisionData(cca2: BearCountryEnum::EC, name: 'Zamora Chinchipe', osm: 108326, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // ESTONIA
            self::EE_37 => new BearCountrySubdivisionData(cca2: BearCountryEnum::EE, name: 'Harju', osm: 350585, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::EE_39 => new BearCountrySubdivisionData(cca2: BearCountryEnum::EE, name: 'Hiiu', osm: 350340, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::EE_45 => new BearCountrySubdivisionData(cca2: BearCountryEnum::EE, name: 'Ida-Viru', osm: 350459, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::EE_52 => new BearCountrySubdivisionData(cca2: BearCountryEnum::EE, name: 'Järva', osm: 353776, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::EE_50 => new BearCountrySubdivisionData(cca2: BearCountryEnum::EE, name: 'Jõgeva', osm: 354089, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::EE_60 => new BearCountrySubdivisionData(cca2: BearCountryEnum::EE, name: 'Lääne-Viru', osm: 351063, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::EE_56 => new BearCountrySubdivisionData(cca2: BearCountryEnum::EE, name: 'Lääne', osm: 350424, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::EE_68 => new BearCountrySubdivisionData(cca2: BearCountryEnum::EE, name: 'Pärnu', osm: 350303, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::EE_64 => new BearCountrySubdivisionData(cca2: BearCountryEnum::EE, name: 'Põlva', osm: 352454, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::EE_71 => new BearCountrySubdivisionData(cca2: BearCountryEnum::EE, name: 'Rapla', osm: 353779, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::EE_74 => new BearCountrySubdivisionData(cca2: BearCountryEnum::EE, name: 'Saare', osm: 350144, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::EE_79 => new BearCountrySubdivisionData(cca2: BearCountryEnum::EE, name: 'Tartu', osm: 351246, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::EE_81 => new BearCountrySubdivisionData(cca2: BearCountryEnum::EE, name: 'Valga', osm: 351379, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::EE_84 => new BearCountrySubdivisionData(cca2: BearCountryEnum::EE, name: 'Viljandi', osm: 352449, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::EE_87 => new BearCountrySubdivisionData(cca2: BearCountryEnum::EE, name: 'Võru', osm: 353812, type: BearCountrySubdivisionTypeEnum::COUNTY),


            // EGYPT
            self::EG_ALX => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Alexandria', osm: 3061846, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_ASN => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Aswan', osm: 3061757, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_AST => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Asyut', osm: 3726184, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_BA => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Red Sea', osm: 3061758, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_BH => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Beheira', osm: 3824513, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_BNS => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Beni Suef', osm: 3726170, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Cairo', osm: 4103336, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_DK => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Dakahlia', osm: 4103403, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_DT => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Damietta', osm: 4103404, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_FYM => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Faiyum', osm: 3726124, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_GH => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Gharbia', osm: 3584607, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_GZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Giza', osm: 3824206, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_IS => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Ismailia', osm: 3062184, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_JS => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'South Sinai', osm: 3060793, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_KB => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Qalyubia', osm: 4103337, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_KFS => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Kafr el-Sheikh', osm: 4103405, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_KN => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Qena', osm: 3726189, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_LX => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Luxor', osm: 3726211, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_MN => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Minya', osm: 3726175, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_MNF => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Monufia', osm: 3824207, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_MT => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Matrouh', osm: 3061826, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_PTS => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Port Said', osm: 4103406, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_SHG => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Sohag', osm: 3726186, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_SHR => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Al Sharqia', osm: 4103407, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_SIN => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'North Sinai', osm: 3060792, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_SUZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'Suez', osm: 3062185, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::EG_WAD => new BearCountrySubdivisionData(cca2: BearCountryEnum::EG, name: 'New Valley', osm: 3061827, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),


            // ERITREA
            self::ER_AN => new BearCountrySubdivisionData(cca2: BearCountryEnum::ER, name: 'Anseba', osm: 4605384, type: BearCountrySubdivisionTypeEnum::REGION),
            self::ER_DK => new BearCountrySubdivisionData(cca2: BearCountryEnum::ER, name: 'Southern Red Sea', osm: 4610935, type: BearCountrySubdivisionTypeEnum::REGION),
            self::ER_DU => new BearCountrySubdivisionData(cca2: BearCountryEnum::ER, name: 'Southern', osm: 4610903, type: BearCountrySubdivisionTypeEnum::REGION),
            self::ER_GB => new BearCountrySubdivisionData(cca2: BearCountryEnum::ER, name: 'Gash-Barka', osm: 4605551, type: BearCountrySubdivisionTypeEnum::REGION),
            self::ER_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::ER, name: 'Central', osm: 4610904, type: BearCountrySubdivisionTypeEnum::REGION),
            self::ER_SK => new BearCountrySubdivisionData(cca2: BearCountryEnum::ER, name: 'Northern Red Sea', osm: 4610926, type: BearCountrySubdivisionTypeEnum::REGION),


            // SPAIN
            self::ES_AN => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Andalusia', osm: 349044, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_AR => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Aragon', osm: 349045, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_AS => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Asturias', osm: 349033, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_CB => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Cantabria', osm: 349013, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_CE => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Ceuta', osm: 1154756, type: BearCountrySubdivisionTypeEnum::CITY),
            self::ES_CL => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Castile and León', osm: 349041, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_CM => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Castile-La Mancha', osm: 349052, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_CN => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Canary Islands', osm: 349048, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_CT => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Catalonia', osm: 349053, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_EX => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Extremadura', osm: 349050, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_GA => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Galicia', osm: 349036, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_IB => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Balearic Islands', osm: 348981, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_MC => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Region of Murcia', osm: 349047, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_MD => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Madrid', osm: 349055, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_ML => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Melilla', osm: 1154757, type: BearCountrySubdivisionTypeEnum::CITY),
            self::ES_NC => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Navarre', osm: 349027, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_PV => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Basque Country', osm: 349042, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_RI => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'La Rioja', osm: 348991, type: BearCountrySubdivisionTypeEnum::COMMUNITY),
            self::ES_VC => new BearCountrySubdivisionData(cca2: BearCountryEnum::ES, name: 'Valencia', osm: 349043, type: BearCountrySubdivisionTypeEnum::COMMUNITY),


            // ETHIOPIA
            self::ET_AA => new BearCountrySubdivisionData(cca2: BearCountryEnum::ET, name: 'Addis Ababa', osm: 1707699, type: BearCountrySubdivisionTypeEnum::ADMINISTRATION),
            self::ET_AF => new BearCountrySubdivisionData(cca2: BearCountryEnum::ET, name: 'Afar', osm: 1707249, type: BearCountrySubdivisionTypeEnum::REGIONAL_STATE),
            self::ET_AM => new BearCountrySubdivisionData(cca2: BearCountryEnum::ET, name: 'Amara', osm: 1707264, type: BearCountrySubdivisionTypeEnum::REGIONAL_STATE),
            self::ET_BE => new BearCountrySubdivisionData(cca2: BearCountryEnum::ET, name: 'Benshangul-Gumaz', osm: 1707653, type: BearCountrySubdivisionTypeEnum::REGIONAL_STATE),
            self::ET_DD => new BearCountrySubdivisionData(cca2: BearCountryEnum::ET, name: 'Dire Dawa', osm: 1707654, type: BearCountrySubdivisionTypeEnum::ADMINISTRATION),
            self::ET_GA => new BearCountrySubdivisionData(cca2: BearCountryEnum::ET, name: 'Gambela Peoples', osm: 1707655, type: BearCountrySubdivisionTypeEnum::REGIONAL_STATE),
            self::ET_HA => new BearCountrySubdivisionData(cca2: BearCountryEnum::ET, name: 'Harari People', osm: 1707700, type: BearCountrySubdivisionTypeEnum::REGIONAL_STATE),
            self::ET_OR => new BearCountrySubdivisionData(cca2: BearCountryEnum::ET, name: 'Oromia', osm: 1707656, type: BearCountrySubdivisionTypeEnum::REGIONAL_STATE),
            self::ET_SI => new BearCountrySubdivisionData(cca2: BearCountryEnum::ET, name: 'Sidama', osm: 3306775, type: BearCountrySubdivisionTypeEnum::REGIONAL_STATE),
            self::ET_SO => new BearCountrySubdivisionData(cca2: BearCountryEnum::ET, name: 'Somali', osm: 1707658, type: BearCountrySubdivisionTypeEnum::REGIONAL_STATE),
            self::ET_TI => new BearCountrySubdivisionData(cca2: BearCountryEnum::ET, name: 'Tigrai', osm: 1707148, type: BearCountrySubdivisionTypeEnum::REGIONAL_STATE),
            self::ET_SN => new BearCountrySubdivisionData(cca2: BearCountryEnum::ET, name: 'Southern Nations', osm: 16827893, type: BearCountrySubdivisionTypeEnum::REGIONAL_STATE),
            self::ET_SW => new BearCountrySubdivisionData(cca2: BearCountryEnum::ET, name: 'Southwest Ethiopia', osm: 13509372, type: BearCountrySubdivisionTypeEnum::REGIONAL_STATE),


            // FINLAND
            self::FI_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Åland', osm: 2375171, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'South Karelia', osm: 2067231, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Southern Ostrobothnia', osm: 1702263, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Southern Savonia', osm: 918897, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Kainuu', osm: 1997164, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Tavastia Proper', osm: 1473990, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Central Ostrobothnia', osm: 1702330, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Central Finland', osm: 1701740, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Kymenlaakso', osm: 2102313, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Lapland', osm: 1724359, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Pirkanmaa', osm: 1701741, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Ostrobothnia', osm: 2000320, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'North Karelia', osm: 1999428, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Northern Ostrobothnia', osm: 1724360, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Northern Savonia', osm: 918898, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Päijänne Tavastia', osm: 1703362, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Satakunta', osm: 2000361, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Uusimaa', osm: 37355, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FI_19 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FI, name: 'Southwest Finland', osm: 38092, type: BearCountrySubdivisionTypeEnum::REGION),


            // FIJI
            self::FJ_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::FJ, name: 'Central', osm: 4632579, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::FJ_E => new BearCountrySubdivisionData(cca2: BearCountryEnum::FJ, name: 'Eastern', osm: 4632580, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::FJ_N => new BearCountrySubdivisionData(cca2: BearCountryEnum::FJ, name: 'Northern', osm: 4632581, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::FJ_R => new BearCountrySubdivisionData(cca2: BearCountryEnum::FJ, name: 'Rotuma', osm: 7223650, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::FJ_W => new BearCountrySubdivisionData(cca2: BearCountryEnum::FJ, name: 'Western', osm: 4632582, type: BearCountrySubdivisionTypeEnum::DIVISION),


            // MICRONESIA
            self::FM_KSA => new BearCountrySubdivisionData(cca2: BearCountryEnum::FM, name: 'Kosrae', osm: 3819480, type: BearCountrySubdivisionTypeEnum::STATE),
            self::FM_PNI => new BearCountrySubdivisionData(cca2: BearCountryEnum::FM, name: 'Pohnpei', osm: 3819481, type: BearCountrySubdivisionTypeEnum::STATE),
            self::FM_TRK => new BearCountrySubdivisionData(cca2: BearCountryEnum::FM, name: 'Chuuk', osm: 3819479, type: BearCountrySubdivisionTypeEnum::STATE),
            self::FM_YAP => new BearCountrySubdivisionData(cca2: BearCountryEnum::FM, name: 'Yap', osm: 3819422, type: BearCountrySubdivisionTypeEnum::STATE),


            // FRANCE
            self::FR_20R => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Corsica', osm: 76910, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_971 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Guadeloupe', osm: 2562137, type: BearCountrySubdivisionTypeEnum::COLLECTIVITY),
            self::FR_972 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Martinique', osm: 2473088, type: BearCountrySubdivisionTypeEnum::COLLECTIVITY),
            self::FR_973 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'French Guiana', osm: 1260551, type: BearCountrySubdivisionTypeEnum::COLLECTIVITY),
            self::FR_974 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Reunion', osm: 1785276, type: BearCountrySubdivisionTypeEnum::COLLECTIVITY),
            self::FR_976 => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Mayotte', osm: 1259885, type: BearCountrySubdivisionTypeEnum::COLLECTIVITY),
            self::FR_ARA => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Auvergne-Rhône-Alps', osm: 3792877, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_BFC => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Burgundy-Free County', osm: 3792878, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_BRE => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Brittany', osm: 102740, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_CVL => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Center-Loire Valley', osm: 8640, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_GES => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Greater East', osm: 3792876, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_HDF => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Upper France', osm: 4217435, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_IDF => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Paris', osm: 8649, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_NOR => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Normandy', osm: 3793170, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_NAQ => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'New Aquitaine', osm: 3792880, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_OCC => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Occitania', osm: 3792883, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_PDL => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Loire Country', osm: 8650, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_PAC => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Provence-Alps-French Riviera', osm: 8654, type: BearCountrySubdivisionTypeEnum::REGION),
            self::FR_BL => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Saint Barthélemy', osm: 537967, type: BearCountrySubdivisionTypeEnum::COLLECTIVITY),
            self::FR_CP => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Clipperton', osm: 2573009, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::FR_MF => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Saint Martin', osm: 1891583, type: BearCountrySubdivisionTypeEnum::COLLECTIVITY),
            self::FR_PF => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'French Polynesia', osm: 3412620, type: BearCountrySubdivisionTypeEnum::COLLECTIVITY),
            self::FR_PM => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Saint Pierre and Miquelon', osm: 3406826, type: BearCountrySubdivisionTypeEnum::COLLECTIVITY),
            self::FR_TF => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'French Southern and Antarctic Lands', osm: 2186658, type: BearCountrySubdivisionTypeEnum::TERRITORY),
            self::FR_WF => new BearCountrySubdivisionData(cca2: BearCountryEnum::FR, name: 'Wallis and Futuna', osm: 3412448, type: BearCountrySubdivisionTypeEnum::COLLECTIVITY),


            // GABON
            self::GA_1 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GA, name: 'Estuary', osm: 1243584, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::GA_2 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GA, name: 'Upper Ogooué', osm: 1243580, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::GA_3 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GA, name: 'Middle Ogooué', osm: 1243586, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::GA_4 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GA, name: 'Ngounié', osm: 1243583, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::GA_5 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GA, name: 'Nyanga', osm: 1243587, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::GA_6 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GA, name: 'Ogooué-Ivindo', osm: 1243581, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::GA_7 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GA, name: 'Ogooué-Lolo', osm: 1243588, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::GA_8 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GA, name: 'Maritime Ogooué', osm: 1243589, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::GA_9 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GA, name: 'Woleu-Ntem', osm: 1243582, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // THE UNITED KINGDOM
            self::GB_ENG => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'England', osm: 58447, type: BearCountrySubdivisionTypeEnum::COUNTRY),
            self::GB_NIR => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'Northern Ireland', osm: 156393, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::GB_SCT => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'Scotland', osm: 58446, type: BearCountrySubdivisionTypeEnum::COUNTRY),
            self::GB_WLS => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'Wales', osm: 58437, type: BearCountrySubdivisionTypeEnum::COUNTRY),
            self::GGY => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'Guernsey', osm: 270009, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::GIB => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'Gibraltar', osm: 1278736, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::IMN => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'Isle of Man', osm: 62269, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::IOT => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'British Indian Ocean Territory', osm: 1993867, type: BearCountrySubdivisionTypeEnum::TERRITORY),
            self::JEY => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'Jersey', osm: 367988, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::MSR => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'Montserrat', osm: 537257, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::FLK => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'Falkland Islands', osm: 2185374, type: BearCountrySubdivisionTypeEnum::TERRITORY),
            self::PCN => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'Pitcairn Islands', osm: 2185375, type: BearCountrySubdivisionTypeEnum::TERRITORY),
            self::SGS => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'South Georgia and the South Sandwich Islands', osm: 1983628, type: BearCountrySubdivisionTypeEnum::TERRITORY),
            self::TCA => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'Turks and Caicos Islands', osm: 547479, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::VGB => new BearCountrySubdivisionData(cca2: BearCountryEnum::GB, name: 'British Virgin Islands', osm: 285454, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),


            // GRENADA
            self::GD_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GD, name: 'Saint Andrew', osm: 12344206, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::GD_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GD, name: 'Saint David', osm: 12344200, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::GD_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GD, name: 'Saint George', osm: 12344153, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::GD_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GD, name: 'Saint John', osm: 12343999, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::GD_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GD, name: 'Saint Mark', osm: 12343976, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::GD_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GD, name: 'Saint Patrick', osm: 12342346, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::GD_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GD, name: 'Southern Grenadine Islands', osm: 12335403, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),


            // GEORGIA
            self::GE_AB => new BearCountrySubdivisionData(cca2: BearCountryEnum::GE, name: 'Abkhazia', osm: 1152720, type: BearCountrySubdivisionTypeEnum::REPUBLIC),
            self::GE_AJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::GE, name: 'Ajaria', osm: 1995970, type: BearCountrySubdivisionTypeEnum::REPUBLIC),
            self::GE_GU => new BearCountrySubdivisionData(cca2: BearCountryEnum::GE, name: 'Guria', osm: 1995971, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GE_IM => new BearCountrySubdivisionData(cca2: BearCountryEnum::GE, name: 'Imereti', osm: 1997289, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GE_KA => new BearCountrySubdivisionData(cca2: BearCountryEnum::GE, name: 'K\'akheti', osm: 2000091, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GE_KK => new BearCountrySubdivisionData(cca2: BearCountryEnum::GE, name: 'Kvemo Kartli', osm: 2000092, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GE_MM => new BearCountrySubdivisionData(cca2: BearCountryEnum::GE, name: 'Mtskheta-Mtianeti', osm: 2000090, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GE_RL => new BearCountrySubdivisionData(cca2: BearCountryEnum::GE, name: 'Rach\'a-Lechkhumi-Kvemo Svaneti', osm: 1997284, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GE_SJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::GE, name: 'Samtskhe-Javakheti', osm: 1996031, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GE_SK => new BearCountrySubdivisionData(cca2: BearCountryEnum::GE, name: 'Shida Kartli', osm: 2000040, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GE_SZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::GE, name: 'Samegrelo-Zemo Svaneti', osm: 1996076, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GE_TB => new BearCountrySubdivisionData(cca2: BearCountryEnum::GE, name: 'Tbilisi', osm: 1996871, type: BearCountrySubdivisionTypeEnum::CITY),


            // GHANA
            self::GH_AA => new BearCountrySubdivisionData(cca2: BearCountryEnum::GH, name: 'Greater Accra', osm: 1991849, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GH_AF => new BearCountrySubdivisionData(cca2: BearCountryEnum::GH, name: 'Ahafo', osm: 10212840, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GH_AH => new BearCountrySubdivisionData(cca2: BearCountryEnum::GH, name: 'Ashanti', osm: 3330249, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GH_BE => new BearCountrySubdivisionData(cca2: BearCountryEnum::GH, name: 'Bono East', osm: 10212839, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GH_BO => new BearCountrySubdivisionData(cca2: BearCountryEnum::GH, name: 'Bono', osm: 3329833, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GH_CP => new BearCountrySubdivisionData(cca2: BearCountryEnum::GH, name: 'Central', osm: 3330281, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GH_EP => new BearCountrySubdivisionData(cca2: BearCountryEnum::GH, name: 'Eastern', osm: 3498733, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GH_NE => new BearCountrySubdivisionData(cca2: BearCountryEnum::GH, name: 'North East', osm: 10212837, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GH_NP => new BearCountrySubdivisionData(cca2: BearCountryEnum::GH, name: 'Northern', osm: 3498732, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GH_OT => new BearCountrySubdivisionData(cca2: BearCountryEnum::GH, name: 'Oti', osm: 10211892, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GH_SV => new BearCountrySubdivisionData(cca2: BearCountryEnum::GH, name: 'Savannah', osm: 10212838, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GH_TV => new BearCountrySubdivisionData(cca2: BearCountryEnum::GH, name: 'Volta', osm: 3328699, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GH_UE => new BearCountrySubdivisionData(cca2: BearCountryEnum::GH, name: 'Upper East', osm: 3327998, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GH_UW => new BearCountrySubdivisionData(cca2: BearCountryEnum::GH, name: 'Upper West', osm: 3328013, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GH_WN => new BearCountrySubdivisionData(cca2: BearCountryEnum::GH, name: 'Western North', osm: 10212841, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GH_WP => new BearCountrySubdivisionData(cca2: BearCountryEnum::GH, name: 'Western', osm: 3498734, type: BearCountrySubdivisionTypeEnum::REGION),


            // GREENLAND
            self::GL_AV => new BearCountrySubdivisionData(cca2: BearCountryEnum::GL, name: 'Avannaata', osm: 8514493, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::GL_KU => new BearCountrySubdivisionData(cca2: BearCountryEnum::GL, name: 'Kujalleq', osm: 8512366, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::GL_QE => new BearCountrySubdivisionData(cca2: BearCountryEnum::GL, name: 'Qeqqata', osm: 8514368, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::GL_QT => new BearCountrySubdivisionData(cca2: BearCountryEnum::GL, name: 'Qeqertalik', osm: 8514395, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::GL_SM => new BearCountrySubdivisionData(cca2: BearCountryEnum::GL, name: 'Sermersooq', osm: 8515166, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),


            // GAMBIA
            self::GM_B => new BearCountrySubdivisionData(cca2: BearCountryEnum::GM, name: 'Banjul', osm: 3214211, type: BearCountrySubdivisionTypeEnum::CITY),
            self::GM_L => new BearCountrySubdivisionData(cca2: BearCountryEnum::GM, name: 'Lower River', osm: 7224885, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::GM_M => new BearCountrySubdivisionData(cca2: BearCountryEnum::GM, name: 'Central River', osm: 7224883, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::GM_N => new BearCountrySubdivisionData(cca2: BearCountryEnum::GM, name: 'North Bank', osm: 7224886, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::GM_U => new BearCountrySubdivisionData(cca2: BearCountryEnum::GM, name: 'Upper River', osm: 7224884, type: BearCountrySubdivisionTypeEnum::DIVISION),
            self::GM_W => new BearCountrySubdivisionData(cca2: BearCountryEnum::GM, name: 'Western', osm: 7224888, type: BearCountrySubdivisionTypeEnum::DIVISION),


            // GUINEA
            self::GN_B => new BearCountrySubdivisionData(cca2: BearCountryEnum::GN, name: 'Boké', osm: 3309644, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GN_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::GN, name: 'Conakry', osm: 3731500, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::GN_D => new BearCountrySubdivisionData(cca2: BearCountryEnum::GN, name: 'Kindia', osm: 3309805, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GN_F => new BearCountrySubdivisionData(cca2: BearCountryEnum::GN, name: 'Faranah', osm: 3403910, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GN_K => new BearCountrySubdivisionData(cca2: BearCountryEnum::GN, name: 'Kankan', osm: 3403911, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GN_L => new BearCountrySubdivisionData(cca2: BearCountryEnum::GN, name: 'Labé', osm: 3308839, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GN_M => new BearCountrySubdivisionData(cca2: BearCountryEnum::GN, name: 'Mamou', osm: 3308938, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GN_N => new BearCountrySubdivisionData(cca2: BearCountryEnum::GN, name: 'Nzérékoré', osm: 3399113, type: BearCountrySubdivisionTypeEnum::REGION),


            // EQUATORIAL GUINEA
            self::GQ_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::GQ, name: 'Continental', osm: 2793044, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GQ_I => new BearCountrySubdivisionData(cca2: BearCountryEnum::GQ, name: 'Insular', osm: 2793045, type: BearCountrySubdivisionTypeEnum::REGION),


            // GREECE
            self::GR_69 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GR, name: 'Mount Athos', osm: 2135921, type: BearCountrySubdivisionTypeEnum::SELF_GOVERNED_PART),
            self::GR_A => new BearCountrySubdivisionData(cca2: BearCountryEnum::GR, name: 'Eastern Macedonia and Thrace', osm: 937937, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GR_B => new BearCountrySubdivisionData(cca2: BearCountryEnum::GR, name: 'Central Macedonia', osm: 937958, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GR_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::GR, name: 'Western Macedonia', osm: 956701, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GR_D => new BearCountrySubdivisionData(cca2: BearCountryEnum::GR, name: 'Epirus', osm: 554424, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GR_E => new BearCountrySubdivisionData(cca2: BearCountryEnum::GR, name: 'Thessaly', osm: 958236, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GR_F => new BearCountrySubdivisionData(cca2: BearCountryEnum::GR, name: 'Ionian Islands', osm: 957830, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GR_G => new BearCountrySubdivisionData(cca2: BearCountryEnum::GR, name: 'Western Greece', osm: 910919, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GR_H => new BearCountrySubdivisionData(cca2: BearCountryEnum::GR, name: 'Central Greece', osm: 910915, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GR_I => new BearCountrySubdivisionData(cca2: BearCountryEnum::GR, name: 'Attica', osm: 957716, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GR_J => new BearCountrySubdivisionData(cca2: BearCountryEnum::GR, name: 'Peloponnese', osm: 957717, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GR_K => new BearCountrySubdivisionData(cca2: BearCountryEnum::GR, name: 'Northern Aegean', osm: 958517, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GR_L => new BearCountrySubdivisionData(cca2: BearCountryEnum::GR, name: 'Southern Aegean', osm: 1851752, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GR_M => new BearCountrySubdivisionData(cca2: BearCountryEnum::GR, name: 'Crete', osm: 282436, type: BearCountrySubdivisionTypeEnum::REGION),


            // GUATEMALA
            self::GT_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Guatemala', osm: 214704, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'El Progreso', osm: 214697, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Sacatepéquez', osm: 214703, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Chimaltenango', osm: 214715, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Escuintla', osm: 214714, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Saint Rose', osm: 9565597, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Sololá', osm: 214713, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Totonicapán', osm: 214709, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Quetzaltenango', osm: 214710, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Suchitepéquez', osm: 214696, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Retalhuleu', osm: 214711, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Saint Mark', osm: 214707, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Huehuetenango', osm: 214708, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Quiché', osm: 214700, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Lower Verapaz', osm: 214712, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Upper Verapaz', osm: 214695, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Petén', osm: 214699, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Izabal', osm: 214705, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_19 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Zacapa', osm: 214698, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Chiquimula', osm: 214702, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Jalapa', osm: 214706, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::GT_22 => new BearCountrySubdivisionData(cca2: BearCountryEnum::GT, name: 'Jutiapa', osm: 214716, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),


            // GUINEA-BISSAU
            self::GW_BA => new BearCountrySubdivisionData(cca2: BearCountryEnum::GW, name: 'Bafatá', osm: 1761578, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GW_BL => new BearCountrySubdivisionData(cca2: BearCountryEnum::GW, name: 'Bolama', osm: 1761581, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GW_BM => new BearCountrySubdivisionData(cca2: BearCountryEnum::GW, name: 'Biombo', osm: 1761579, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GW_BS => new BearCountrySubdivisionData(cca2: BearCountryEnum::GW, name: 'Bissau', osm: 1761580, type: BearCountrySubdivisionTypeEnum::SECTOR),
            self::GW_CA => new BearCountrySubdivisionData(cca2: BearCountryEnum::GW, name: 'Cacheu', osm: 1761582, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GW_GA => new BearCountrySubdivisionData(cca2: BearCountryEnum::GW, name: 'Gabú', osm: 1761583, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GW_OI => new BearCountrySubdivisionData(cca2: BearCountryEnum::GW, name: 'Oio', osm: 1761584, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GW_QU => new BearCountrySubdivisionData(cca2: BearCountryEnum::GW, name: 'Quinara', osm: 1761585, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GW_TO => new BearCountrySubdivisionData(cca2: BearCountryEnum::GW, name: 'Tombali', osm: 1761586, type: BearCountrySubdivisionTypeEnum::REGION),


            // GUYANA
            self::GY_BA => new BearCountrySubdivisionData(cca2: BearCountryEnum::GY, name: 'Barima-Waini', osm: 7105826, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GY_CU => new BearCountrySubdivisionData(cca2: BearCountryEnum::GY, name: 'Cuyuni-Mazaruni', osm: 7108866, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GY_DE => new BearCountrySubdivisionData(cca2: BearCountryEnum::GY, name: 'Demerara-Mahaica', osm: 7105917, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GY_EB => new BearCountrySubdivisionData(cca2: BearCountryEnum::GY, name: 'East Berbice-Corentyne', osm: 7109048, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GY_ES => new BearCountrySubdivisionData(cca2: BearCountryEnum::GY, name: 'Essequibo Islands-West Demerara', osm: 7105894, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GY_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::GY, name: 'Mahaica-Berbice', osm: 7108958, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GY_PM => new BearCountrySubdivisionData(cca2: BearCountryEnum::GY, name: 'Pomeroon-Supenaam', osm: 7105874, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GY_PT => new BearCountrySubdivisionData(cca2: BearCountryEnum::GY, name: 'Potaro-Siparuni', osm: 7108941, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GY_UD => new BearCountrySubdivisionData(cca2: BearCountryEnum::GY, name: 'Upper Demerara-Berbice', osm: 7109155, type: BearCountrySubdivisionTypeEnum::REGION),
            self::GY_UT => new BearCountrySubdivisionData(cca2: BearCountryEnum::GY, name: 'Upper Takutu-Upper Essequibo', osm: 7108944, type: BearCountrySubdivisionTypeEnum::REGION),


            // HONDURAS
            self::HN_AT => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'Atlántida', osm: 4627386, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_CH => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'Choluteca', osm: 4627314, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_CL => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'Colón', osm: 4627315, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_CM => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'Comayagua', osm: 12113927, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_CP => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'Copán', osm: 4627388, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_CR => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'Cortés', osm: 4627389, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_EP => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'El Paraíso', osm: 4627316, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_FM => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'Francisco Morazán', osm: 4627390, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_GD => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'Gracias a Dios', osm: 3811537, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_IB => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'Islas de la Bahía', osm: 4625745, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_IN => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'Intibucá', osm: 4627391, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_LE => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'Lempira', osm: 4627393, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_LP => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'La Paz', osm: 4627392, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_OC => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'Ocotepeque', osm: 4627394, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_OL => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'Olancho', osm: 4627317, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_SB => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'Santa Bárbara', osm: 4627395, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_VA => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'Valle', osm: 4627318, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HN_YO => new BearCountrySubdivisionData(cca2: BearCountryEnum::HN, name: 'Yoro', osm: 4627396, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),


            // CROATIA
            self::HR_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Zagreb County', osm: 226241, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Krapina-Zagorje', osm: 226223, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Sisak-Moslavina', osm: 224139, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Karlovac', osm: 226271, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Varaždin', osm: 226210, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Koprivnica-Križevci', osm: 226209, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Bjelovar-Bilogora', osm: 224165, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Primorje-Gorski Kotar', osm: 226452, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Lika-Senj', osm: 226465, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Virovitica-Podravina', osm: 222869, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Požega-Slavonia', osm: 222870, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Brod-Posavina', osm: 222861, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Zadar', osm: 226726, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Osijek-Baranja', osm: 222646, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Šibenik-Knin', osm: 226741, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Vukovar-Srijem', osm: 222649, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Split-Dalmatia', osm: 226749, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Istria', osm: 226351, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_19 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Dubrovnik-Neretva', osm: 226750, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Međimurje', osm: 224183, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HR_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::HR, name: 'Zagreb City', osm: 226224, type: BearCountrySubdivisionTypeEnum::CITY),


            // HAITI
            self::HT_AR => new BearCountrySubdivisionData(cca2: BearCountryEnum::HT, name: 'Artibonite', osm: 392238, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HT_CE => new BearCountrySubdivisionData(cca2: BearCountryEnum::HT, name: 'Center', osm: 392213, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HT_GA => new BearCountrySubdivisionData(cca2: BearCountryEnum::HT, name: 'Big Cove', osm: 391700, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HT_NI => new BearCountrySubdivisionData(cca2: BearCountryEnum::HT, name: 'Nippes', osm: 391834, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HT_ND => new BearCountrySubdivisionData(cca2: BearCountryEnum::HT, name: 'North', osm: 392028, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HT_NE => new BearCountrySubdivisionData(cca2: BearCountryEnum::HT, name: 'Northeast', osm: 392189, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HT_NO => new BearCountrySubdivisionData(cca2: BearCountryEnum::HT, name: 'Northwest', osm: 391963, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HT_OU => new BearCountrySubdivisionData(cca2: BearCountryEnum::HT, name: 'West', osm: 386871, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HT_SD => new BearCountrySubdivisionData(cca2: BearCountryEnum::HT, name: 'South', osm: 2744350, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::HT_SE => new BearCountrySubdivisionData(cca2: BearCountryEnum::HT, name: 'Southeast', osm: 391953, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),


            // HUNGARY
            self::HU_BA => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Baranya', osm: 22234, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_BE => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Békés', osm: 22266, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_BK => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Bács-Kiskun', osm: 22260, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_BU => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Budapest', osm: 37244, type: BearCountrySubdivisionTypeEnum::CITY),
            self::HU_BZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Borsod-Abaúj-Zemplén', osm: 22271, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_CS => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Csongrád-Csanád', osm: 22265, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_FE => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Fejér', osm: 22255, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_GS => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Győr-Moson-Sopron', osm: 22249, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_HB => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Hajdú-Bihar', osm: 22267, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_HE => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Heves', osm: 22273, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_JN => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Jász-Nagykun-Szolnok', osm: 26935, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_KE => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Komárom-Esztergom', osm: 22252, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_NO => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Nógrád', osm: 22274, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_PE => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Pest', osm: 22259, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_SO => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Somogy', osm: 22225, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_SZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Szabolcs-Szatmár-Bereg', osm: 22268, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_TO => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Tolna', osm: 22239, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_VA => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Vas', osm: 22250, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_VE => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Veszprém', osm: 22278, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::HU_ZA => new BearCountrySubdivisionData(cca2: BearCountryEnum::HU, name: 'Zala', osm: 22238, type: BearCountrySubdivisionTypeEnum::COUNTY),


            // INDONESIA
            self::ID_JW => new BearCountrySubdivisionData(cca2: BearCountryEnum::ID, name: 'Java', osm: 7225990, type: BearCountrySubdivisionTypeEnum::UNIT),
            self::ID_KA => new BearCountrySubdivisionData(cca2: BearCountryEnum::ID, name: 'Kalimantan', osm: 7225940, type: BearCountrySubdivisionTypeEnum::UNIT),
            self::ID_ML => new BearCountrySubdivisionData(cca2: BearCountryEnum::ID, name: 'Moluccas', osm: 7225996, type: BearCountrySubdivisionTypeEnum::UNIT),
            self::ID_NU => new BearCountrySubdivisionData(cca2: BearCountryEnum::ID, name: 'Lesser Sunda Islands', osm: 7226026, type: BearCountrySubdivisionTypeEnum::UNIT),
            self::ID_PP => new BearCountrySubdivisionData(cca2: BearCountryEnum::ID, name: 'Western New Guinea', osm: 7226099, type: BearCountrySubdivisionTypeEnum::UNIT),
            self::ID_SL => new BearCountrySubdivisionData(cca2: BearCountryEnum::ID, name: 'Sulawesi', osm: 7226110, type: BearCountrySubdivisionTypeEnum::UNIT),
            self::ID_SM => new BearCountrySubdivisionData(cca2: BearCountryEnum::ID, name: 'Sumatra', osm: 7226121, type: BearCountrySubdivisionTypeEnum::UNIT),


            // IRELAND
            self::IE_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::IE, name: 'Connacht', osm: 278721, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IE_L => new BearCountrySubdivisionData(cca2: BearCountryEnum::IE, name: 'Leinster', osm: 278746, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IE_M => new BearCountrySubdivisionData(cca2: BearCountryEnum::IE, name: 'Munster', osm: 278750, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IE_U => new BearCountrySubdivisionData(cca2: BearCountryEnum::IE, name: 'Ulster', osm: 14419962, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // ISRAEL
            self::IL_D => new BearCountrySubdivisionData(cca2: BearCountryEnum::IL, name: 'Southern', osm: 1473952, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::IL_HA => new BearCountrySubdivisionData(cca2: BearCountryEnum::IL, name: 'Haifa', osm: 1400966, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::IL_JM => new BearCountrySubdivisionData(cca2: BearCountryEnum::IL, name: 'Jerusalem', osm: 1384720, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::IL_M => new BearCountrySubdivisionData(cca2: BearCountryEnum::IL, name: 'Central', osm: 1400928, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::IL_TA => new BearCountrySubdivisionData(cca2: BearCountryEnum::IL, name: 'Tel Aviv', osm: 1400916, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::IL_Z => new BearCountrySubdivisionData(cca2: BearCountryEnum::IL, name: 'Northern', osm: 1375620, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // INDIA
            self::IN_AN => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Andaman and Nicobar Islands', osm: 2025855, type: BearCountrySubdivisionTypeEnum::UNION_TERRITORY),
            self::IN_AP => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Andhra Pradesh', osm: 2022095, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_AR => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Arunāchal Pradesh', osm: 2027346, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_AS => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Assam', osm: 2025886, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_BR => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Bihār', osm: 1958982, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_CG => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Chhattīsgarh', osm: 1972004, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_CH => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Chandīgarh', osm: 1942809, type: BearCountrySubdivisionTypeEnum::UNION_TERRITORY),
            self::IN_DH => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Dādra and Nagar Haveli and Damān and Diu', osm: 1952530, type: BearCountrySubdivisionTypeEnum::UNION_TERRITORY),
            self::IN_DL => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Delhi', osm: 1942586, type: BearCountrySubdivisionTypeEnum::UNION_TERRITORY),
            self::IN_GA => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Goa', osm: 11251493, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_GJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Gujarāt', osm: 1949080, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_HP => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Himāchal Pradesh', osm: 364186, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_HR => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Haryāna', osm: 1942601, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_JH => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Jhārkhand', osm: 1960191, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_JK => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Jammu and Kashmīr', osm: 1943188, type: BearCountrySubdivisionTypeEnum::UNION_TERRITORY),
            self::IN_KA => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Karnātaka', osm: 2019939, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_KL => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Kerala', osm: 2018151, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_LA => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Ladākh', osm: 5515045, type: BearCountrySubdivisionTypeEnum::UNION_TERRITORY),
            self::IN_LD => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Lakshadweep', osm: 2027460, type: BearCountrySubdivisionTypeEnum::UNION_TERRITORY),
            self::IN_MH => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Mahārāshtra', osm: 1950884, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_ML => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Meghālaya', osm: 2027521, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_MN => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Manipur', osm: 2027869, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_MP => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Madhya Pradesh', osm: 1950071, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_MZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Mizoram', osm: 2029046, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_NL => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Nāgāland', osm: 2027973, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_OD => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Odisha', osm: 1984022, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_PB => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Punjab', osm: 1942686, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_PY => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Puducherry', osm: 107001, type: BearCountrySubdivisionTypeEnum::UNION_TERRITORY),
            self::IN_RJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Rājasthān', osm: 1942920, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_SK => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Sikkim', osm: 1791324, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_TN => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Tamil Nādu', osm: 96905, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_TR => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Tripura', osm: 2026458, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_TS => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Telangāna[3]', osm: 3250963, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_UK => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Uttarākhand', osm: 9987086, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_UP => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'Uttar Pradesh', osm: 1942587, type: BearCountrySubdivisionTypeEnum::STATE),
            self::IN_WB => new BearCountrySubdivisionData(cca2: BearCountryEnum::IN, name: 'West Bengal', osm: 1960177, type: BearCountrySubdivisionTypeEnum::STATE),


            // IRAQ
            self::IQ_AN => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Anbar', osm: 3242292, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_AR => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Erbil', osm: 2969761, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_BA => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Basra', osm: 3244379, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_BB => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Babylon', osm: 3244378, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_BG => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Bagdad', osm: 3242293, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_DA => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Duhok', osm: 2969732, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_DI => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Diyala', osm: 3242294, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_DQ => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Dhi Qar', osm: 3244380, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_KA => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Karbala', osm: 3244381, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_KI => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Kirkuk', osm: 2969788, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Maysan', osm: 3244382, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_MU => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Muthanna', osm: 3244383, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_NA => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Najaf', osm: 3244384, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_NI => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Nineveh', osm: 2969789, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_QA => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Qadisiya', osm: 3244377, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_SD => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Saladin', osm: 3242295, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_SU => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Sulaymaniya', osm: 2969790, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::IQ_WA => new BearCountrySubdivisionData(cca2: BearCountryEnum::IQ, name: 'Wasit', osm: 3244385, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),


            // IRAN
            self::IR_00 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Markazi', osm: 229958, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Gilan', osm: 241472, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Mazandaran', osm: 269900, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'East Azerbaijan', osm: 2232180, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'West Azerbaijan', osm: 241593, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Kermanshah', osm: 241037, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Khuzestan', osm: 3661581, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Fars', osm: 255446, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Kerman', osm: 229593, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Central Khorasan', osm: 537657, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Isfahan', osm: 241475, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Sistan and Baluchestan', osm: 537693, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Kurdistan', osm: 241546, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Hamadan', osm: 241038, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Chaharmahal and Bakhtiari', osm: 230033, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Lorestan', osm: 229893, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Ilam', osm: 229766, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Kohgiluyeh and Boyer-Ahmad', osm: 241478, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Bushehr', osm: 269575, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_19 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Zanjan', osm: 241473, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Semnan', osm: 241474, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Yazd', osm: 3300249, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_22 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Hormozgan', osm: 3385992, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_23 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Tehran', osm: 537701, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_24 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Ardabil', osm: 269635, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_25 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Qom', osm: 537702, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_26 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Qazvin', osm: 241471, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_27 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Golestan', osm: 269903, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_28 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'North Khorasan', osm: 225444, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_29 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'South Khorasan', osm: 537658, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::IR_30 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IR, name: 'Alborz', osm: 1015996, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // ICELAND
            self::IS_1 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IS, name: 'Capital', osm: 3881596, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IS_2 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IS, name: 'Southern Peninsula', osm: 4002388, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IS_3 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IS, name: 'Western', osm: 4001119, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IS_4 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IS, name: 'Westfjords', osm: 4001093, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IS_5 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IS, name: 'Northwestern', osm: 4001076, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IS_6 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IS, name: 'Northeastern', osm: 4001055, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IS_7 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IS, name: 'Eastern', osm: 4001011, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IS_8 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IS, name: 'Southern', osm: 4002410, type: BearCountrySubdivisionTypeEnum::REGION),


            // ITALY
            self::IT_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Piedmont', osm: 44874, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_23 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Aosta Valley', osm: 45155, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_25 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Lombardy', osm: 44879, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_32 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Trentino-South Tyrol', osm: 45757, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_34 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Veneto', osm: 43648, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_36 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Friuli-Venezia Giulia', osm: 179296, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_42 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Liguria', osm: 301482, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_45 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Emilia-Romagna', osm: 42611, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_52 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Tuscany', osm: 41977, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_55 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Umbria', osm: 42004, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_57 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Marche', osm: 53060, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_62 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Lazio', osm: 40784, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_65 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Abruzzo', osm: 53937, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_67 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Molise', osm: 41256, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_72 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Campania', osm: 40218, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_75 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Apulia', osm: 40095, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_77 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Basilicata', osm: 40137, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_78 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Calabria', osm: 1783980, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_82 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Sicily', osm: 39152, type: BearCountrySubdivisionTypeEnum::REGION),
            self::IT_88 => new BearCountrySubdivisionData(cca2: BearCountryEnum::IT, name: 'Sardinia', osm: 7361997, type: BearCountrySubdivisionTypeEnum::REGION),


            // JAMAICA
            self::JM_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JM, name: 'Kingston', osm: 6577227, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::JM_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JM, name: 'Saint Andrew', osm: 6577862, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::JM_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JM, name: 'Saint Thomas', osm: 319362, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::JM_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JM, name: 'Portland', osm: 319344, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::JM_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JM, name: 'Saint Mary', osm: 319343, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::JM_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JM, name: 'Saint Ann', osm: 319340, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::JM_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JM, name: 'Trelawny', osm: 319341, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::JM_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JM, name: 'Saint James', osm: 319345, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::JM_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JM, name: 'Hanover', osm: 319347, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::JM_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JM, name: 'Westmoreland', osm: 319351, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::JM_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JM, name: 'Saint Elizabeth', osm: 319352, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::JM_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JM, name: 'Manchester', osm: 1637038, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::JM_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JM, name: 'Clarendon', osm: 1637035, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::JM_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JM, name: 'Saint Catherine', osm: 1637037, type: BearCountrySubdivisionTypeEnum::PARISH),


            // JORDAN
            self::JO_AJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::JO, name: 'Ajloun', osm: 2925616, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::JO_AM => new BearCountrySubdivisionData(cca2: BearCountryEnum::JO, name: 'Amman', osm: 2926344, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::JO_AQ => new BearCountrySubdivisionData(cca2: BearCountryEnum::JO, name: 'Aqaba', osm: 2926345, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::JO_AT => new BearCountrySubdivisionData(cca2: BearCountryEnum::JO, name: 'Tafilah', osm: 2926349, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::JO_AZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::JO, name: 'Zarqa', osm: 2925597, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::JO_BA => new BearCountrySubdivisionData(cca2: BearCountryEnum::JO, name: 'Balqa', osm: 2925596, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::JO_IR => new BearCountrySubdivisionData(cca2: BearCountryEnum::JO, name: 'Irbid', osm: 2925617, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::JO_JA => new BearCountrySubdivisionData(cca2: BearCountryEnum::JO, name: 'Jerash', osm: 2925599, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::JO_KA => new BearCountrySubdivisionData(cca2: BearCountryEnum::JO, name: 'Karak', osm: 2926346, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::JO_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::JO, name: 'Mafraq', osm: 2925608, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::JO_MD => new BearCountrySubdivisionData(cca2: BearCountryEnum::JO, name: 'Madaba', osm: 2926348, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::JO_MN => new BearCountrySubdivisionData(cca2: BearCountryEnum::JO, name: 'Ma\'an', osm: 2926347, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),


            // JAPAN
            self::JP_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Hokkaido', osm: 3795658, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Aomori', osm: 1834655, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Iwate', osm: 3792412, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Miyagi', osm: 3790801, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Akita', osm: 3791413, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Yamagata', osm: 3790869, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Fukushima', osm: 1800608, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Ibaraki', osm: 2682940, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Tochigi', osm: 1800742, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Gunma', osm: 1851649, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Saitama', osm: 1768185, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Chiba', osm: 2679957, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Tokyo', osm: 1543125, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Kanagawa', osm: 2689487, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Niigata', osm: 3559887, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Toyama', osm: 3793529, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Ishikawa', osm: 3794726, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Fukui', osm: 357112, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_19 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Yamanashi', osm: 3578391, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Nagano', osm: 3560284, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Gifu', osm: 760746, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_22 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Shizuoka', osm: 3793581, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_23 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Aichi', osm: 3560336, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_24 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Mie', osm: 812190, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_25 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Shiga', osm: 357800, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_26 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Kyoto', osm: 2137477, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_27 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Osaka', osm: 341906, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_28 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Hyogo', osm: 356912, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_29 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Nara', osm: 358631, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_30 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Wakayama', osm: 908959, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_31 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Tottori', osm: 3285636, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_32 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Shimane', osm: 3346137, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_33 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Okayama', osm: 3794962, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_34 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Hiroshima', osm: 3218753, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_35 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Yamaguchi', osm: 4016543, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_36 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Tokushima', osm: 3795000, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_37 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Kagawa', osm: 3795064, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_38 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Ehime', osm: 3795063, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_39 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Kochi', osm: 3795031, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_40 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Fukuoka', osm: 1553735, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_41 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Saga', osm: 1842150, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_42 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Nagasaki', osm: 1842151, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_43 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Kumamoto', osm: 1842185, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_44 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Oita', osm: 356911, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_45 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Miyazaki', osm: 1842184, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_46 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Kagoshima', osm: 1842186, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::JP_47 => new BearCountrySubdivisionData(cca2: BearCountryEnum::JP, name: 'Okinawa', osm: 3795635, type: BearCountrySubdivisionTypeEnum::PREFECTURE),


            // KENYA
            self::KE_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Baringo', osm: 3495537, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Bomet', osm: 14649074, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Bungoma', osm: 3495538, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Busia', osm: 3486321, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Elgeyo/Marakwet', osm: 11981582, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Embu', osm: 3495540, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Garissa', osm: 3495541, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Homa Bay', osm: 3486017, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Isiolo', osm: 3495542, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Kajiado', osm: 3486020, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Kakamega', osm: 3495543, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Kericho', osm: 3486288, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Kiambu', osm: 3495544, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Kilifi', osm: 3495545, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Kirinyaga', osm: 3495546, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Kisii', osm: 3338140, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Kisumu', osm: 3486289, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Kitui', osm: 3495547, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_19 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Kwale', osm: 3495548, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Laikipia', osm: 3495549, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Lamu', osm: 3495550, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_22 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Machakos', osm: 3492707, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_23 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Makueni', osm: 3492708, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_24 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Mandera', osm: 3495551, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_25 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Marsabit', osm: 3495552, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_26 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Meru', osm: 3495553, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_27 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Migori', osm: 3486018, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_28 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Mombasa', osm: 3495554, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_29 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Murang\'a', osm: 3977580, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_30 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Nairobi City', osm: 3492709, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_31 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Nakuru', osm: 14649082, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_32 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Nandi', osm: 3495556, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_33 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Narok', osm: 3338145, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_34 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Nyamira', osm: 3486290, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_35 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Nyandarua', osm: 3495557, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_36 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Nyeri', osm: 3495558, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_37 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Samburu', osm: 3495559, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_38 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Siaya', osm: 3486291, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_39 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Taita/Taveta', osm: 3495560, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_40 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Tana River', osm: 3495561, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_41 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Tharaka-Nithi', osm: 3495562, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_42 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Trans Nzoia', osm: 3495563, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_43 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Turkana', osm: 3495564, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_44 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Uasin Gishu', osm: 3495565, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_45 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Vihiga', osm: 3486322, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_46 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'Wajir', osm: 3495566, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::KE_47 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KE, name: 'West Pokot', osm: 11981571, type: BearCountrySubdivisionTypeEnum::COUNTY),


            // KYRGYZSTAN
            self::KG_B => new BearCountrySubdivisionData(cca2: BearCountryEnum::KG, name: 'Batken', osm: 178019, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KG_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::KG, name: 'Chuy', osm: 178026, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KG_GB => new BearCountrySubdivisionData(cca2: BearCountryEnum::KG, name: 'Bishkek', osm: 8493930, type: BearCountrySubdivisionTypeEnum::CITY),
            self::KG_GO => new BearCountrySubdivisionData(cca2: BearCountryEnum::KG, name: 'Osh', osm: 8496351, type: BearCountrySubdivisionTypeEnum::CITY),
            self::KG_J => new BearCountrySubdivisionData(cca2: BearCountryEnum::KG, name: 'Jalal-Abad', osm: 178024, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KG_N => new BearCountrySubdivisionData(cca2: BearCountryEnum::KG, name: 'Naryn', osm: 1251542, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KG_O => new BearCountrySubdivisionData(cca2: BearCountryEnum::KG, name: 'Osh', osm: 178020, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KG_T => new BearCountrySubdivisionData(cca2: BearCountryEnum::KG, name: 'Talas', osm: 178023, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KG_Y => new BearCountrySubdivisionData(cca2: BearCountryEnum::KG, name: 'Issyk-Kul', osm: 178025, type: BearCountrySubdivisionTypeEnum::REGION),


            // CAMBODIA
            self::KH_1 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Banteay Mean Choăy', osm: 2200390, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_2 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Baat Dambang', osm: 6608542, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_3 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Kampong Chaam', osm: 2200442, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_4 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Kampong Chhnang', osm: 2200303, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_5 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Kampong Spueu', osm: 2215016, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_6 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Kampong Thum', osm: 2198944, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_7 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Kampot', osm: 2200183, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_8 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Kandaal', osm: 2200251, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_9 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Kaoh Kong', osm: 2199066, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Kracheh', osm: 2200456, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Mondol Kiri', osm: 2200450, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Phnom Penh', osm: 2199033, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::KH_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Preah Vihear', osm: 2198922, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Prey Veaeng', osm: 2200477, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Pousaat', osm: 2200278, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Rotanak Kiri', osm: 2200301, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Siem Reab', osm: 2200393, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Preah Sihanouk', osm: 3279394, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_19 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Stueng Traeng', osm: 2198916, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Svaay Rieng', osm: 2301441, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Taakaev', osm: 2200220, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_22 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Otdar Mean Chey', osm: 2200402, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_23 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Kaeb', osm: 2200024, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_24 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Pailin', osm: 2200322, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KH_25 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KH, name: 'Tbong Khmum', osm: 3714841, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // KIRIBATI
            self::KI_G => new BearCountrySubdivisionData(cca2: BearCountryEnum::KI, name: 'Gilbert Islands', osm: 7229957, type: BearCountrySubdivisionTypeEnum::ISLAND),
            self::KI_L => new BearCountrySubdivisionData(cca2: BearCountryEnum::KI, name: 'Line Islands', osm: 7229956, type: BearCountrySubdivisionTypeEnum::ISLAND),
            self::KI_P => new BearCountrySubdivisionData(cca2: BearCountryEnum::KI, name: 'Phoenix Islands', osm: 7229955, type: BearCountrySubdivisionTypeEnum::ISLAND),


            // COMOROS
            self::KM_A => new BearCountrySubdivisionData(cca2: BearCountryEnum::KM, name: 'Ndzuwani', osm: 2955050, type: BearCountrySubdivisionTypeEnum::ISLAND),
            self::KM_G => new BearCountrySubdivisionData(cca2: BearCountryEnum::KM, name: 'Ngazidja', osm: 2955051, type: BearCountrySubdivisionTypeEnum::ISLAND),
            self::KM_M => new BearCountrySubdivisionData(cca2: BearCountryEnum::KM, name: 'Mwali', osm: 2955018, type: BearCountrySubdivisionTypeEnum::ISLAND),


            // SAINT KITTS AND NEVIS
            self::KN_K => new BearCountrySubdivisionData(cca2: BearCountryEnum::KN, name: 'Saint Kitts', osm: 5283162, type: BearCountrySubdivisionTypeEnum::STATE),
            self::KN_N => new BearCountrySubdivisionData(cca2: BearCountryEnum::KN, name: 'Nevis', osm: 5820117, type: BearCountrySubdivisionTypeEnum::STATE),


            // NORTH KOREA
            self::KP_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KP, name: 'Pyongyang', osm: 356443, type: BearCountrySubdivisionTypeEnum::CITY),
            self::KP_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KP, name: 'South Pyongan', osm: 356419, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KP_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KP, name: 'North Pyongan', osm: 356540, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KP_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KP, name: 'Chagang', osm: 356392, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KP_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KP, name: 'South Hwanghae', osm: 356533, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KP_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KP, name: 'North Hwanghae', osm: 356442, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KP_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KP, name: 'Kangwon', osm: 356535, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KP_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KP, name: 'South Hamgyong', osm: 356386, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KP_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KP, name: 'North Hamgyong', osm: 3781418, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KP_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KP, name: 'Ryanggang', osm: 356379, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KP_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KP, name: 'Rason', osm: 6648083, type: BearCountrySubdivisionTypeEnum::CITY),
            self::KP_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KP, name: 'Nampo', osm: 5453650, type: BearCountrySubdivisionTypeEnum::CITY),
            self::KP_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KP, name: 'Kaesong', osm: 5455268, type: BearCountrySubdivisionTypeEnum::CITY),


            // SOUTH KOREA
            self::KR_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'Seoul', osm: 2297418, type: BearCountrySubdivisionTypeEnum::CITY),
            self::KR_26 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'Busan', osm: 2396450, type: BearCountrySubdivisionTypeEnum::CITY),
            self::KR_27 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'Daegu', osm: 2395674, type: BearCountrySubdivisionTypeEnum::CITY),
            self::KR_28 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'Incheon', osm: 2297419, type: BearCountrySubdivisionTypeEnum::CITY),
            self::KR_29 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'Gwangju', osm: 2399220, type: BearCountrySubdivisionTypeEnum::CITY),
            self::KR_30 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'Daejeon', osm: 2349984, type: BearCountrySubdivisionTypeEnum::CITY),
            self::KR_31 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'Ulsan', osm: 2395867, type: BearCountrySubdivisionTypeEnum::CITY),
            self::KR_41 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'Gyeonggi', osm: 2306392, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KR_42 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'Gangwon', osm: 2308426, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KR_43 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'North Chungcheong', osm: 2327258, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KR_44 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'South Chungcheong', osm: 2327259, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KR_45 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'North Jeolla', osm: 2355168, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KR_46 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'South Jeolla', osm: 2398104, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KR_47 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'North Gyeongsang', osm: 2304454, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KR_48 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'Gyeongsangnam-do', osm: 2393403, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KR_49 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'Jeju-teukbyeoljachido', osm: 2398560, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::KR_50 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KR, name: 'Sejong', osm: 2349795, type: BearCountrySubdivisionTypeEnum::CITY),


            // KUWAIT
            self::KW_AH => new BearCountrySubdivisionData(cca2: BearCountryEnum::KW, name: 'Ahmadi', osm: 4579477, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::KW_FA => new BearCountrySubdivisionData(cca2: BearCountryEnum::KW, name: 'Farwaniya', osm: 4579479, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::KW_HA => new BearCountrySubdivisionData(cca2: BearCountryEnum::KW, name: 'Hawalli', osm: 17903691, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::KW_JA => new BearCountrySubdivisionData(cca2: BearCountryEnum::KW, name: 'Jahra', osm: 4579481, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::KW_KU => new BearCountrySubdivisionData(cca2: BearCountryEnum::KW, name: 'Capital', osm: 4579478, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::KW_MU => new BearCountrySubdivisionData(cca2: BearCountryEnum::KW, name: 'Mubarak Al-Kabeer', osm: 4579482, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),


            // KAZAKHSTAN
            self::KZ_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Abai', osm: 14243026, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Akmola', osm: 215743, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Aktobe', osm: 215683, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_19 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Almaty', osm: 215718, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_23 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Atyrau', osm: 214834, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_27 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'West Kazakhstan', osm: 215441, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_31 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Jambyl', osm: 215722, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_33 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Jetisu', osm: 14312169, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_35 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Karaganda', osm: 215776, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_39 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Kostanay', osm: 1288730, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_43 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Kyzylorda', osm: 215727, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_47 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Mangystau', osm: 215686, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_55 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Pavlodar', osm: 215772, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_59 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'North Kazakhstan', osm: 215760, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_61 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Turkistan', osm: 215739, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_62 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Ulytau', osm: 14312737, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_63 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'East Kazakhstan', osm: 215699, type: BearCountrySubdivisionTypeEnum::REGION),
            self::KZ_71 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Astana', osm: 3087155, type: BearCountrySubdivisionTypeEnum::CITY),
            self::KZ_75 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Almaty', osm: 2465058, type: BearCountrySubdivisionTypeEnum::CITY),
            self::KZ_79 => new BearCountrySubdivisionData(cca2: BearCountryEnum::KZ, name: 'Shymkent', osm: 3389772, type: BearCountrySubdivisionTypeEnum::CITY),


            // LAOS
            self::LA_AT => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Attapeu', osm: 5831653, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LA_BK => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Bokèo', osm: 5831654, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LA_BL => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Borikhamxay', osm: 5831655, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LA_CH => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Champasack', osm: 5831656, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LA_HO => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Huaphanh', osm: 5831657, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LA_KH => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Khammuane', osm: 5831658, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LA_LM => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Luangnamtha', osm: 5831659, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LA_LP => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Luangprabang', osm: 5831660, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LA_OU => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Oudomxay', osm: 5831661, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LA_PH => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Phongsaly', osm: 5831662, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LA_SL => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Saravane', osm: 5831664, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LA_SV => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Savannakhet', osm: 5831665, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LA_VI => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Vientiane', osm: 5831667, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LA_VT => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Vientiane', osm: 5831666, type: BearCountrySubdivisionTypeEnum::PREFECTURE),
            self::LA_XA => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Xayabury', osm: 5831663, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LA_XE => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Sekong', osm: 5831669, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LA_XI => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Xiengkhuang', osm: 5831670, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LA_XS => new BearCountrySubdivisionData(cca2: BearCountryEnum::LA, name: 'Xaysomboon', osm: 5831668, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // LEBANON
            self::LB_AK => new BearCountrySubdivisionData(cca2: BearCountryEnum::LB, name: 'Akkar', osm: 7231014, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::LB_AS => new BearCountrySubdivisionData(cca2: BearCountryEnum::LB, name: 'North Lebanon', osm: 318161, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::LB_BA => new BearCountrySubdivisionData(cca2: BearCountryEnum::LB, name: 'Beirut', osm: 316552, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::LB_BH => new BearCountrySubdivisionData(cca2: BearCountryEnum::LB, name: 'Baalbek-Hermel', osm: 7231015, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::LB_BI => new BearCountrySubdivisionData(cca2: BearCountryEnum::LB, name: 'Beqaa', osm: 318174, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::LB_JA => new BearCountrySubdivisionData(cca2: BearCountryEnum::LB, name: 'South Lebanon', osm: 318236, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::LB_JL => new BearCountrySubdivisionData(cca2: BearCountryEnum::LB, name: 'Mount Lebanon', osm: 318194, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::LB_NA => new BearCountrySubdivisionData(cca2: BearCountryEnum::LB, name: 'Nabatieh', osm: 318309, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),


            // SAINT LUCIA
            self::LC_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LC, name: 'Anse la Raye', osm: 9304002, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LC_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LC, name: 'Castries', osm: 9304003, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LC_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LC, name: 'Choiseul', osm: 9303814, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LC_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LC, name: 'Dennery', osm: 9304004, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LC_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LC, name: 'Gros Islet', osm: 9304005, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LC_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LC, name: 'Laborie', osm: 9303813, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LC_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LC, name: 'Micoud', osm: 9302977, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LC_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LC, name: 'Soufrière', osm: 9303838, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LC_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LC, name: 'Vieux Fort', osm: 9303796, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LC_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LC, name: 'Canaries', osm: 9333382, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // LIECHTENSTEIN
            self::LI_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LI, name: 'Balzers', osm: 1155953, type: BearCountrySubdivisionTypeEnum::COMMUNE),
            self::LI_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LI, name: 'Eschen', osm: 1155949, type: BearCountrySubdivisionTypeEnum::COMMUNE),
            self::LI_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LI, name: 'Gamprin', osm: 1155947, type: BearCountrySubdivisionTypeEnum::COMMUNE),
            self::LI_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LI, name: 'Mauren', osm: 1155951, type: BearCountrySubdivisionTypeEnum::COMMUNE),
            self::LI_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LI, name: 'Planken', osm: 1155954, type: BearCountrySubdivisionTypeEnum::COMMUNE),
            self::LI_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LI, name: 'Ruggell', osm: 1155950, type: BearCountrySubdivisionTypeEnum::COMMUNE),
            self::LI_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LI, name: 'Schaan', osm: 1155952, type: BearCountrySubdivisionTypeEnum::COMMUNE),
            self::LI_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LI, name: 'Schellenberg', osm: 1155946, type: BearCountrySubdivisionTypeEnum::COMMUNE),
            self::LI_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LI, name: 'Triesen', osm: 1155945, type: BearCountrySubdivisionTypeEnum::COMMUNE),
            self::LI_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LI, name: 'Triesenberg', osm: 1155948, type: BearCountrySubdivisionTypeEnum::COMMUNE),
            self::LI_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LI, name: 'Vaduz', osm: 1155956, type: BearCountrySubdivisionTypeEnum::COMMUNE),


            // SRI LANKA
            self::LK_1 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LK, name: 'Western', osm: 4630841, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LK_2 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LK, name: 'Central', osm: 4630835, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LK_3 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LK, name: 'Southern', osm: 4630839, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LK_4 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LK, name: 'Northern', osm: 3237344, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LK_5 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LK, name: 'Eastern', osm: 4630810, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LK_6 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LK, name: 'North Western', osm: 4630837, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LK_7 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LK, name: 'North Central', osm: 4630836, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LK_8 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LK, name: 'Uva', osm: 4630840, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::LK_9 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LK, name: 'Sabaragamuwa', osm: 4630838, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // LIBERIA
            self::LR_BG => new BearCountrySubdivisionData(cca2: BearCountryEnum::LR, name: 'Bong', osm: 3320949, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LR_BM => new BearCountrySubdivisionData(cca2: BearCountryEnum::LR, name: 'Bomi', osm: 3320948, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LR_CM => new BearCountrySubdivisionData(cca2: BearCountryEnum::LR, name: 'Grand Cape Mount', osm: 3320952, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LR_GB => new BearCountrySubdivisionData(cca2: BearCountryEnum::LR, name: 'Grand Bassa', osm: 3320951, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LR_GG => new BearCountrySubdivisionData(cca2: BearCountryEnum::LR, name: 'Grand Gedeh', osm: 3315297, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LR_GK => new BearCountrySubdivisionData(cca2: BearCountryEnum::LR, name: 'Grand Kru', osm: 3315170, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LR_GP => new BearCountrySubdivisionData(cca2: BearCountryEnum::LR, name: 'Gbarpolu', osm: 3320950, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LR_LO => new BearCountrySubdivisionData(cca2: BearCountryEnum::LR, name: 'Lofa', osm: 3320953, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LR_MG => new BearCountrySubdivisionData(cca2: BearCountryEnum::LR, name: 'Margibi', osm: 3320954, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LR_MO => new BearCountrySubdivisionData(cca2: BearCountryEnum::LR, name: 'Montserrado', osm: 3320955, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LR_MY => new BearCountrySubdivisionData(cca2: BearCountryEnum::LR, name: 'Maryland', osm: 3315051, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LR_NI => new BearCountrySubdivisionData(cca2: BearCountryEnum::LR, name: 'Nimba', osm: 3320773, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LR_RG => new BearCountrySubdivisionData(cca2: BearCountryEnum::LR, name: 'River Gee', osm: 3315298, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LR_RI => new BearCountrySubdivisionData(cca2: BearCountryEnum::LR, name: 'River Cess', osm: 3315299, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LR_SI => new BearCountrySubdivisionData(cca2: BearCountryEnum::LR, name: 'Sinoe', osm: 3315211, type: BearCountrySubdivisionTypeEnum::COUNTY),


            // LESOTHO
            self::LS_A => new BearCountrySubdivisionData(cca2: BearCountryEnum::LS, name: 'Maseru', osm: 1252921, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LS_B => new BearCountrySubdivisionData(cca2: BearCountryEnum::LS, name: 'Botha-Bothe', osm: 1252922, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LS_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::LS, name: 'Leribe', osm: 1252929, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LS_D => new BearCountrySubdivisionData(cca2: BearCountryEnum::LS, name: 'Berea', osm: 1252926, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LS_E => new BearCountrySubdivisionData(cca2: BearCountryEnum::LS, name: 'Mafeteng', osm: 1252924, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LS_F => new BearCountrySubdivisionData(cca2: BearCountryEnum::LS, name: 'Mohale\'s Hoek', osm: 1252923, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LS_G => new BearCountrySubdivisionData(cca2: BearCountryEnum::LS, name: 'Quthing', osm: 1252925, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LS_H => new BearCountrySubdivisionData(cca2: BearCountryEnum::LS, name: 'Qacha\'s Nek', osm: 1252928, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LS_J => new BearCountrySubdivisionData(cca2: BearCountryEnum::LS, name: 'Mokhotlong', osm: 1252920, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::LS_K => new BearCountrySubdivisionData(cca2: BearCountryEnum::LS, name: 'Thaba-Tseka', osm: 1252927, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // LITHUANIA
            self::LT_AL => new BearCountrySubdivisionData(cca2: BearCountryEnum::LT, name: 'Alytus', osm: 1076930, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LT_KL => new BearCountrySubdivisionData(cca2: BearCountryEnum::LT, name: 'Klaipėda', osm: 1189583, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LT_KU => new BearCountrySubdivisionData(cca2: BearCountryEnum::LT, name: 'Kaunas', osm: 1069509, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LT_MR => new BearCountrySubdivisionData(cca2: BearCountryEnum::LT, name: 'Marijampolė', osm: 974211, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LT_PN => new BearCountrySubdivisionData(cca2: BearCountryEnum::LT, name: 'Panevėžys', osm: 1028503, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LT_SA => new BearCountrySubdivisionData(cca2: BearCountryEnum::LT, name: 'Šiauliai', osm: 1256237, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LT_TA => new BearCountrySubdivisionData(cca2: BearCountryEnum::LT, name: 'Tauragė', osm: 1307305, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LT_TE => new BearCountrySubdivisionData(cca2: BearCountryEnum::LT, name: 'Telšiai', osm: 1211025, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LT_UT => new BearCountrySubdivisionData(cca2: BearCountryEnum::LT, name: 'Utena', osm: 966958, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::LT_VL => new BearCountrySubdivisionData(cca2: BearCountryEnum::LT, name: 'Vilnius', osm: 977317, type: BearCountrySubdivisionTypeEnum::COUNTY),


            // LUXEMBOURG
            self::LU_CA => new BearCountrySubdivisionData(cca2: BearCountryEnum::LU, name: 'Kapellen', osm: 407813, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::LU_CL => new BearCountrySubdivisionData(cca2: BearCountryEnum::LU, name: 'Klierf', osm: 1115796, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::LU_DI => new BearCountrySubdivisionData(cca2: BearCountryEnum::LU, name: 'Diekrech', osm: 1113683, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::LU_EC => new BearCountrySubdivisionData(cca2: BearCountryEnum::LU, name: 'Iechternach', osm: 407792, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::LU_ES => new BearCountrySubdivisionData(cca2: BearCountryEnum::LU, name: 'Esch-Uelzecht', osm: 1113898, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::LU_GR => new BearCountrySubdivisionData(cca2: BearCountryEnum::LU, name: 'Gréivemaacher', osm: 407796, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::LU_LU => new BearCountrySubdivisionData(cca2: BearCountryEnum::LU, name: 'Lëtzebuerg', osm: 407824, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::LU_ME => new BearCountrySubdivisionData(cca2: BearCountryEnum::LU, name: 'Miersch', osm: 407810, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::LU_RD => new BearCountrySubdivisionData(cca2: BearCountryEnum::LU, name: 'Réiden-Atert', osm: 660245, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::LU_RM => new BearCountrySubdivisionData(cca2: BearCountryEnum::LU, name: 'Réimech', osm: 407799, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::LU_VD => new BearCountrySubdivisionData(cca2: BearCountryEnum::LU, name: 'Veianen', osm: 1342842, type: BearCountrySubdivisionTypeEnum::CANTON),
            self::LU_WI => new BearCountrySubdivisionData(cca2: BearCountryEnum::LU, name: 'Wolz', osm: 1115797, type: BearCountrySubdivisionTypeEnum::CANTON),


            // LATVIA
            self::LV_002 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Aizkraukle', osm: 13047869, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_007 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Alūksne', osm: 1797378, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_011 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Ādaži', osm: 13047861, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_015 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Balvi', osm: 13047873, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_016 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Bauska', osm: 13047877, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_022 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Cēsis', osm: 13047857, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_026 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Dobele', osm: 13047879, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_033 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Gulbene', osm: 1797394, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_041 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Jelgava', osm: 13047878, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_042 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Jēkabpils', osm: 13047868, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_047 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Krāslava', osm: 13047973, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_050 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Kuldīga', osm: 13047883, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_052 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Ķekava', osm: 13047946, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_054 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Limbaži', osm: 13047876, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_056 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Līvāni', osm: 13047865, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_058 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Ludza', osm: 13047872, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_059 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Madona', osm: 13047863, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_062 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Mārupe', osm: 13047859, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_067 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Ogre', osm: 13047866, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_068 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Olaine', osm: 13047948, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_073 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Preiļi', osm: 13047972, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_077 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Rēzekne', osm: 13047871, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_080 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Ropaži', osm: 13047860, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_087 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Salaspils', osm: 13047947, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_088 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Saldus', osm: 13047880, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_089 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Saulkrasti', osm: 13047862, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_091 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Sigulda', osm: 13047858, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_094 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Smiltene', osm: 13047874, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_097 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Talsi', osm: 13047882, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_099 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Tukums', osm: 13047881, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_101 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Valka', osm: 1797392, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_102 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Varakļāni', osm: 1806951, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_106 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Ventspils', osm: 13047867, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_111 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Augšdaugava', osm: 13047870, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_112 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Dienvidkurzeme', osm: 13047884, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_113 => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Valmiera', osm: 13047875, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::LV_DGV => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Daugavpils', osm: 13048683, type: BearCountrySubdivisionTypeEnum::CITY),
            self::LV_JEL => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Jelgava', osm: 13048684, type: BearCountrySubdivisionTypeEnum::CITY),
            self::LV_JUR => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Jūrmala', osm: 13048687, type: BearCountrySubdivisionTypeEnum::CITY),
            self::LV_LPX => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Liepāja', osm: 13048685, type: BearCountrySubdivisionTypeEnum::CITY),
            self::LV_REZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Rēzekne', osm: 13048682, type: BearCountrySubdivisionTypeEnum::CITY),
            self::LV_RIX => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Rīga', osm: 13048688, type: BearCountrySubdivisionTypeEnum::CITY),
            self::LV_VEN => new BearCountrySubdivisionData(cca2: BearCountryEnum::LV, name: 'Ventspils', osm: 13048686, type: BearCountrySubdivisionTypeEnum::CITY),


            // LIBYA
            self::LY_BA => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Benghazi', osm: 2060170, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_BU => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Butnan', osm: 2060171, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_DR => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Derna', osm: 2060172, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_GT => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Ghat', osm: 2060173, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_JA => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Green Mountain', osm: 2060174, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_JG => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Western Mountain', osm: 2060175, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_JI => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Jafara', osm: 2060176, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_JU => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Jufra', osm: 2060177, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_KF => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Kufra', osm: 2060178, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_MB => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Murqub', osm: 3795005, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_MI => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Misrata', osm: 2060180, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_MJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Meadows', osm: 2060179, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_MQ => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Murzuq', osm: 2060181, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_NL => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Nalut', osm: 2060182, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_NQ => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Nuqat al Khams', osm: 2060183, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_SB => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Sabha', osm: 2060184, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_SR => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Sirte', osm: 2060185, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_TB => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Tripoli', osm: 2060186, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_WA => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Oases', osm: 2060169, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_WD => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Wadi al Hayaa', osm: 2060187, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_WS => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Wadi ash Shati', osm: 2060188, type: BearCountrySubdivisionTypeEnum::POPULARATE),
            self::LY_ZA => new BearCountrySubdivisionData(cca2: BearCountryEnum::LY, name: 'Zawiya', osm: 2060189, type: BearCountrySubdivisionTypeEnum::POPULARATE),


            // MOROCCO
            self::MA_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MA, name: 'Tanger-Tétouan-Al Hoceïma', osm: 1592819, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MA_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MA, name: 'L\'Oriental', osm: 1719443, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MA_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MA, name: 'Fès-Meknès', osm: 4730909, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MA_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MA, name: 'Rabat-Salé-Kénitra', osm: 4730737, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MA_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MA, name: 'Béni Mellal-Khénifra', osm: 4734547, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MA_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MA, name: 'Casablanca-Settat', osm: 2424085, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MA_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MA, name: 'Marrakech-Safi', osm: 2424086, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MA_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MA, name: 'Drâa-Tafilalet', osm: 2424034, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MA_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MA, name: 'Souss-Massa', osm: 2424036, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MA_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MA, name: 'Guelmim-Oued Noun', osm: 2424040, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MA_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MA, name: 'Laâyoune-Sakia El Hamra', osm: 2424260, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MA_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MA, name: 'Dakhla-Oued Ed-Dahab', osm: 3406823, type: BearCountrySubdivisionTypeEnum::REGION),


            // MONACO
            self::MC_CO => new BearCountrySubdivisionData(cca2: BearCountryEnum::MC, name: 'La Condamine', osm: 2221178, type: BearCountrySubdivisionTypeEnum::QUARTER),
            self::MC_FO => new BearCountrySubdivisionData(cca2: BearCountryEnum::MC, name: 'Fontvieille', osm: 2220206, type: BearCountrySubdivisionTypeEnum::QUARTER),
            self::MC_JE => new BearCountrySubdivisionData(cca2: BearCountryEnum::MC, name: 'Jardin Exotique', osm: 5986473, type: BearCountrySubdivisionTypeEnum::QUARTER),
            self::MC_LA => new BearCountrySubdivisionData(cca2: BearCountryEnum::MC, name: 'Larvotto', osm: 5986437, type: BearCountrySubdivisionTypeEnum::QUARTER),
            self::MC_MC => new BearCountrySubdivisionData(cca2: BearCountryEnum::MC, name: 'Monte-Carlo', osm: 5986438, type: BearCountrySubdivisionTypeEnum::QUARTER),
            self::MC_MG => new BearCountrySubdivisionData(cca2: BearCountryEnum::MC, name: 'Moneghetti', osm: 5986474, type: BearCountrySubdivisionTypeEnum::QUARTER),
            self::MC_MO => new BearCountrySubdivisionData(cca2: BearCountryEnum::MC, name: 'Monaco-Ville', osm: 2220207, type: BearCountrySubdivisionTypeEnum::QUARTER),
            self::MC_SD => new BearCountrySubdivisionData(cca2: BearCountryEnum::MC, name: 'Sainte-Dévote', osm: 5986475, type: BearCountrySubdivisionTypeEnum::QUARTER),
            self::MC_VR => new BearCountrySubdivisionData(cca2: BearCountryEnum::MC, name: 'Vallon de la Rousse', osm: 5986436, type: BearCountrySubdivisionTypeEnum::QUARTER),


            // MOLDOVA
            self::MD_AN => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Anenii Noi', osm: 1692078, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_BA => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Bălți', osm: 58983, type: BearCountrySubdivisionTypeEnum::CITY),
            self::MD_BD => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Bender [Tighina]', osm: 9581354, type: BearCountrySubdivisionTypeEnum::CITY),
            self::MD_BR => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Briceni', osm: 59002, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_BS => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Basarabeasca', osm: 1104136, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_CA => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Cahul', osm: 1699034, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_CL => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Călărași', osm: 58988, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_CM => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Cimișlia', osm: 1211126, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_CR => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Criuleni', osm: 1692126, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_CS => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Căușeni', osm: 65343, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_CT => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Cantemir', osm: 1699022, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_CU => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Chișinău', osm: 1691801, type: BearCountrySubdivisionTypeEnum::CITY),
            self::MD_DO => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Dondușeni', osm: 59007, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_DR => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Drochia', osm: 1693907, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_DU => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Dubăsari', osm: 1692123, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_ED => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Edineț', osm: 59000, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_FA => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Fălești', osm: 58984, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_FL => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Florești', osm: 1693560, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_GA => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Găgăuzia', osm: 1699032, type: BearCountrySubdivisionTypeEnum::UNIT),
            self::MD_GL => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Glodeni', osm: 1693874, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_HI => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Hîncești', osm: 58991, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_IA => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Ialoveni', osm: 1691800, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_LE => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Leova', osm: 1699023, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_NI => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Nisporeni', osm: 58990, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_OC => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Ocnița', osm: 59005, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_OR => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Orhei', osm: 1692172, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_RE => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Rezina', osm: 1435790, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_RI => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Rîșcani', osm: 1693908, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_SD => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Șoldănești', osm: 1693561, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_SI => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Sîngerei', osm: 58996, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_SN => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Stînga Nistrului', osm: 2607033, type: BearCountrySubdivisionTypeEnum::UNIT),
            self::MD_SO => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Soroca', osm: 1693523, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_ST => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Strășeni', osm: 85827, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_SV => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Ștefan Vodă', osm: 65344, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_TA => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Taraclia', osm: 1699033, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_TE => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Telenești', osm: 58993, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MD_UN => new BearCountrySubdivisionData(cca2: BearCountryEnum::MD, name: 'Ungheni', osm: 58985, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // MONTENEGRO
            self::ME_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Andrijevica', osm: 2319358, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Bar', osm: 2319526, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Berane', osm: 2319359, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Bijelo Polje', osm: 2319527, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Budva', osm: 2319528, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Cetinje', osm: 2319529, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Danilovgrad', osm: 2319530, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Herceg-Novi', osm: 2187901, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Kolašin', osm: 2319531, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Kotor', osm: 2319532, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Mojkovac', osm: 2319533, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Nikšić', osm: 2319534, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Plav', osm: 2317882, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Pljevlja', osm: 2319535, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Plužine', osm: 2319536, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Podgorica', osm: 2319360, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Rožaje', osm: 2317936, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Šavnik', osm: 2319539, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_19 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Tivat', osm: 2319537, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Ulcinj', osm: 2319538, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Žabljak', osm: 2319540, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_22 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Gusinje', osm: 7460668, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_23 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Petnjica', osm: 7463938, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_24 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Tuzi', osm: 10141812, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::ME_25 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ME, name: 'Zeta', osm: 10147976, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),


            // MADAGASCAR
            self::MG_A => new BearCountrySubdivisionData(cca2: BearCountryEnum::MG, name: 'Toamasina', osm: 3203753, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MG_D => new BearCountrySubdivisionData(cca2: BearCountryEnum::MG, name: 'Antsiranana', osm: 3247585, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MG_F => new BearCountrySubdivisionData(cca2: BearCountryEnum::MG, name: 'Fianarantsoa', osm: 3203751, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MG_M => new BearCountrySubdivisionData(cca2: BearCountryEnum::MG, name: 'Mahajanga', osm: 3203752, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MG_T => new BearCountrySubdivisionData(cca2: BearCountryEnum::MG, name: 'Antananarivo', osm: 3203754, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MG_U => new BearCountrySubdivisionData(cca2: BearCountryEnum::MG, name: 'Toliara', osm: 3203749, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // MARSHALL ISLANDS
            self::MH_L => new BearCountrySubdivisionData(cca2: BearCountryEnum::MH, name: 'Ralik', osm: 7240959, type: BearCountrySubdivisionTypeEnum::CHAIN),
            self::MH_T => new BearCountrySubdivisionData(cca2: BearCountryEnum::MH, name: 'Ratak', osm: 7240960, type: BearCountrySubdivisionTypeEnum::CHAIN),


            // NORTH MACEDONIA
            self::MK_101 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Veles', osm: 2575609, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_102 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Gradsko', osm: 2575972, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_103 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Demir Kapija', osm: 2577810, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_104 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Kavadarci', osm: 2577610, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_105 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Lozovo', osm: 2572593, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_106 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Negotino', osm: 2577657, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_107 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Rosoman', osm: 2577488, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_108 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Sveti Nikole', osm: 2572599, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_109 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Čaška', osm: 2576148, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_201 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Berovo', osm: 2583831, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_202 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Vinica', osm: 2583460, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_203 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Delčevo', osm: 2583474, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_204 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Zrnovci', osm: 2581655, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_205 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Karbinci', osm: 2580986, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_206 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Kočani', osm: 2454874, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_207 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Makedonska Kamenica', osm: 2583425, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_208 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Pehčevo', osm: 2583788, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_209 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Probištip', osm: 2582634, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_210 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Češinovo-Obleševo', osm: 2581719, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_211 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Štip', osm: 2580154, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_301 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Vevčani', osm: 2603187, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_303 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Debar', osm: 2605591, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_304 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Debrca', osm: 2603059, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_307 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Kičevo', osm: 2606600, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_308 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Makedonski Brod', osm: 2608091, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_310 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Ohrid', osm: 2601514, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_311 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Plasnica', osm: 2608063, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_312 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Struga', osm: 2603188, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_313 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Centar Župa', osm: 2605589, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_401 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Bogdanci', osm: 2591418, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_402 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Bosilovo', osm: 2589323, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_403 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Valandovo', osm: 2590953, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_404 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Vasilevo', osm: 2589047, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_405 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Gevgelija', osm: 2591417, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_406 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Dojran', osm: 2591259, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_407 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Konče', osm: 2589262, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_408 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Novo Selo', osm: 2589373, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_409 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Radoviš', osm: 2588938, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_410 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Strumica', osm: 2591087, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_501 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Bitola', osm: 2598354, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_502 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Demir Hisar', osm: 2598353, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_503 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Dolneni', osm: 2592899, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_504 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Krivogaštani', osm: 2596009, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_505 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Kruševo', osm: 2596098, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_506 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Mogila', osm: 2596099, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_507 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Novaci', osm: 2598190, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_508 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Prilep', osm: 2593112, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_509 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Resen', osm: 2598355, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_601 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Bogovinje', osm: 2615507, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_602 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Brvenica', osm: 2615505, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_603 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Vrapčište', osm: 2615539, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_604 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Gostivar', osm: 2615530, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_605 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Želino', osm: 2615107, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_606 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Jegunovce', osm: 2608570, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_607 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Mavrovo i Rostuše', osm: 2615675, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_608 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Tearce', osm: 2615128, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_609 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Tetovo', osm: 2615182, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_701 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Kratovo', osm: 2587448, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_702 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Kriva Palanka', osm: 2587615, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_703 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Kumanovo', osm: 2585982, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_704 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Lipkovo', osm: 2585376, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_705 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Rankovce', osm: 2587610, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_706 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Staro Nagoričane', osm: 2586114, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_801 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Aerodrom', osm: 2432325, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_802 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Aračinovo', osm: 2460855, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_803 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Butel', osm: 2433475, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_804 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Gazi Baba', osm: 2433366, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_805 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Gjorče Petrov', osm: 2440352, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_806 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Zelenikovo', osm: 2460678, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_807 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Ilinden', osm: 2460762, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_808 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Karpoš', osm: 2440380, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_809 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Kisela Voda', osm: 2432321, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_810 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Petrovec', osm: 2460743, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_811 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Saraj', osm: 2440308, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_812 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Sopište', osm: 2460481, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_813 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Studeničani', osm: 2460539, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_814 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Centar', osm: 2439777, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_815 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Čair', osm: 2433521, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_816 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Čučer-Sandevo', osm: 2460854, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::MK_817 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MK, name: 'Šuto Orizari', osm: 2433628, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),


            // MALI
            self::ML_1 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ML, name: 'Kayes', osm: 2096896, type: BearCountrySubdivisionTypeEnum::REGION),
            self::ML_2 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ML, name: 'Koulikoro', osm: 2096898, type: BearCountrySubdivisionTypeEnum::REGION),
            self::ML_3 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ML, name: 'Sikasso', osm: 2096900, type: BearCountrySubdivisionTypeEnum::REGION),
            self::ML_4 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ML, name: 'Ségou', osm: 2096901, type: BearCountrySubdivisionTypeEnum::REGION),
            self::ML_5 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ML, name: 'Mopti', osm: 2096899, type: BearCountrySubdivisionTypeEnum::REGION),
            self::ML_6 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ML, name: 'Tombouctou', osm: 2096902, type: BearCountrySubdivisionTypeEnum::REGION),
            self::ML_7 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ML, name: 'Gao', osm: 2096895, type: BearCountrySubdivisionTypeEnum::REGION),
            self::ML_8 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ML, name: 'Kidal', osm: 2096897, type: BearCountrySubdivisionTypeEnum::REGION),
            self::ML_9 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ML, name: 'Ménaka', osm: 3079153, type: BearCountrySubdivisionTypeEnum::REGION),
            self::ML_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ML, name: 'Taoudénit', osm: 12558577, type: BearCountrySubdivisionTypeEnum::REGION),
            self::ML_BKO => new BearCountrySubdivisionData(cca2: BearCountryEnum::ML, name: 'Bamako', osm: 2105525, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // MYANMAR
            self::MM_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MM, name: 'Sagaing', osm: 5996484, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MM_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MM, name: 'Bago', osm: 5996474, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MM_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MM, name: 'Magway', osm: 5996479, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MM_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MM, name: 'Mandalay', osm: 5996480, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MM_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MM, name: 'Tanintharyi', osm: 5996486, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MM_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MM, name: 'Yangon', osm: 5996487, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MM_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MM, name: 'Ayeyarwady', osm: 5996473, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MM_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MM, name: 'Kachin', osm: 5996476, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MM_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MM, name: 'Kayah', osm: 5996477, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MM_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MM, name: 'Kayin', osm: 5996478, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MM_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MM, name: 'Chin', osm: 5996475, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MM_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MM, name: 'Mon', osm: 5996481, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MM_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MM, name: 'Rakhine', osm: 5996483, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MM_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MM, name: 'Shan', osm: 5996485, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MM_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MM, name: 'Nay Pyi Taw', osm: 5996482, type: BearCountrySubdivisionTypeEnum::UNION_TERRITORY),


            // MONGOLIA
            self::MN_1 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Ulaanbaatar', osm: 270090, type: BearCountrySubdivisionTypeEnum::CITY),
            self::MN_035 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Orhon', osm: 270092, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_037 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Darhan uul', osm: 270091, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_039 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Hentiy', osm: 269885, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_041 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Hövsgöl', osm: 270072, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_043 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Hovd', osm: 270055, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_046 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Uvs', osm: 270059, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_047 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Töv', osm: 3382267, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_049 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Selenge', osm: 270089, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_051 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Sühbaatar', osm: 269874, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_053 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Ömnögovĭ', osm: 270051, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_055 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Övörhangay', osm: 270074, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_057 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Dzavhan', osm: 4074177, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_059 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Dundgovĭ', osm: 270094, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_061 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Dornod', osm: 269886, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_063 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Dornogovĭ', osm: 270050, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_064 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Govĭ-Sümber', osm: 270095, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_065 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Govĭ-Altay', osm: 270054, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_067 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Bulgan', osm: 270073, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_069 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Bayanhongor', osm: 270052, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_071 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Bayan-Ölgiy', osm: 3382266, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MN_073 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MN, name: 'Arhangay', osm: 270075, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // MAURITANIA
            self::MR_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MR, name: 'Eastern Basin', osm: 3394987, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MR_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MR, name: 'Western Basin', osm: 3395036, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MR_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MR, name: 'Assaba', osm: 3395241, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MR_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MR, name: 'Gorgol', osm: 3395243, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MR_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MR, name: 'Brakna', osm: 3395242, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MR_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MR, name: 'Trarza', osm: 3395245, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MR_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MR, name: 'Adrar', osm: 3394986, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MR_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MR, name: 'Nouadhibou Peninsula', osm: 3395035, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MR_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MR, name: 'Tagant', osm: 3394988, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MR_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MR, name: 'Guidimaka', osm: 3395244, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MR_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MR, name: 'Tiris Zemmour', osm: 3394989, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MR_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MR, name: 'Inchiri', osm: 3395037, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MR_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MR, name: 'West Nouakchott', osm: 16510636, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MR_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MR, name: 'North Nouakchott', osm: 3395130, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::MR_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MR, name: 'South Nouakchott', osm: 16510635, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // MALTA
            self::MT_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Attard', osm: 7510551, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Balzan', osm: 7510550, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Birgu', osm: 6172198, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Birkirkara', osm: 7510585, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Birżebbuġa', osm: 7510570, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Bormla', osm: 7510576, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Dingli', osm: 7510566, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Fgura', osm: 7510560, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Floriana', osm: 7510581, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Fontana', osm: 7508578, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Gudja', osm: 7510557, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Gżira', osm: 7510588, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Għajnsielem', osm: 6311965, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Għarb', osm: 7508581, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Għargħur', osm: 7510592, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Għasri', osm: 7508582, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Għaxaq', osm: 7510562, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Ħamrun', osm: 7510547, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_19 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Iklin', osm: 7510586, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Isla', osm: 7510578, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Kalkara', osm: 7510575, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_22 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Kerċem', osm: 7508579, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_23 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Kirkop', osm: 7510554, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_24 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Lija', osm: 7510593, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_25 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Luqa', osm: 7510563, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_26 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Marsa', osm: 7510579, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_27 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Marsaskala', osm: 7510572, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_28 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Marsaxlokk', osm: 7510571, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_29 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Mdina', osm: 7510549, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_30 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Mellieħa', osm: 6181422, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_31 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Mġarr', osm: 6172218, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_32 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Mosta', osm: 7510594, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_33 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Mqabba', osm: 7510555, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_34 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Msida', osm: 7510584, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_35 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Mtarfa', osm: 7510564, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_36 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Munxar', osm: 7508589, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_37 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Nadur', osm: 7508587, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_38 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Naxxar', osm: 7510595, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_39 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Paola', osm: 7510577, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_40 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Pembroke', osm: 7510590, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_41 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Pietà', osm: 7510582, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_42 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Qala', osm: 7508586, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_43 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Qormi', osm: 7510556, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_44 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Qrendi', osm: 7510568, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_45 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Rabat Għawdex', osm: 7508583, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_46 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Rabat Malta', osm: 7510565, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_47 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Safi', osm: 7510553, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_48 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'San Ġiljan', osm: 7510589, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_49 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'San Ġwann', osm: 7510587, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_50 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'San Lawrenz', osm: 7508580, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_51 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'San Pawl il-Baħar', osm: 7510596, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_52 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Sannat', osm: 7508590, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_53 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Santa Luċija', osm: 7510558, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_54 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Santa Venera', osm: 7510548, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_55 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Siġġiewi', osm: 7510567, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_56 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Sliema', osm: 6172199, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_57 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Swieqi', osm: 7510591, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_58 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Ta\' Xbiex', osm: 7510583, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_59 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Tarxien', osm: 7510559, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_60 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Valletta', osm: 7510580, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_61 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Xagħra', osm: 7508585, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_62 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Xewkija', osm: 7508588, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_63 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Xgħajra', osm: 7510574, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_64 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Żabbar', osm: 7510573, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_65 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Żebbuġ Għawdex', osm: 7508584, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_66 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Żebbuġ Malta', osm: 7510552, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_67 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Żejtun', osm: 7510561, type: BearCountrySubdivisionTypeEnum::COUNCIL),
            self::MT_68 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MT, name: 'Żurrieq', osm: 7510569, type: BearCountrySubdivisionTypeEnum::COUNCIL),


            // MAURITIUS
            self::MU_AG => new BearCountrySubdivisionData(cca2: BearCountryEnum::MU, name: 'Agalega Islands', osm: 3691785, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::MU_BL => new BearCountrySubdivisionData(cca2: BearCountryEnum::MU, name: 'Black River', osm: 3488093, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MU_CC => new BearCountrySubdivisionData(cca2: BearCountryEnum::MU, name: 'Cargados Carajos Shoals', osm: 3691786, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::MU_FL => new BearCountrySubdivisionData(cca2: BearCountryEnum::MU, name: 'Flacq', osm: 3488094, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MU_GP => new BearCountrySubdivisionData(cca2: BearCountryEnum::MU, name: 'Grand Port', osm: 3488095, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MU_MO => new BearCountrySubdivisionData(cca2: BearCountryEnum::MU, name: 'Moka', osm: 3488096, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MU_PA => new BearCountrySubdivisionData(cca2: BearCountryEnum::MU, name: 'Pamplemousses', osm: 3488097, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MU_PL => new BearCountrySubdivisionData(cca2: BearCountryEnum::MU, name: 'Port Louis', osm: 3488099, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MU_PW => new BearCountrySubdivisionData(cca2: BearCountryEnum::MU, name: 'Plaines Wilhems', osm: 3488098, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MU_RO => new BearCountrySubdivisionData(cca2: BearCountryEnum::MU, name: 'Rodrigues Island', osm: 3691784, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::MU_RR => new BearCountrySubdivisionData(cca2: BearCountryEnum::MU, name: 'Rivière du Rempart', osm: 3488100, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::MU_SA => new BearCountrySubdivisionData(cca2: BearCountryEnum::MU, name: 'Savanne', osm: 3488101, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // MALDIVES
            self::MV_00 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'South Ari', osm: 6599352, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'Addu', osm: 6599413, type: BearCountrySubdivisionTypeEnum::CITY),
            self::MV_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'North Ari', osm: 6599351, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'Faadhippolhu', osm: 6599328, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'Felidhu', osm: 6600315, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'Hahdhunmathi', osm: 6599390, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'North Thiladhunmathi', osm: 6599296, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'Kolhumadulu', osm: 6599381, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'Mulaku', osm: 6599365, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'North Maalhosmadulu', osm: 6599331, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'North Nilandhe', osm: 6599372, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'South Nilandhe', osm: 6599371, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'South Maalhosmadulu', osm: 6599335, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_23 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'South Thiladhunmathi', osm: 6599297, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_24 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'North Miladhunmadulu', osm: 6599324, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_25 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'South Miladhunmadulu', osm: 6599323, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_26 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'Male', osm: 6599423, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_27 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'North Huvadhu', osm: 6599410, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_28 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'South Huvadhu', osm: 6599411, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_29 => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'Fuvammulah', osm: 6599412, type: BearCountrySubdivisionTypeEnum::ATOLL),
            self::MV_MLE => new BearCountrySubdivisionData(cca2: BearCountryEnum::MV, name: 'Male', osm: 6599336, type: BearCountrySubdivisionTypeEnum::CITY),


            // MALAWI
            self::MW_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::MW, name: 'Chapakati', osm: 192621, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MW_N => new BearCountrySubdivisionData(cca2: BearCountryEnum::MW, name: 'Chakumpoto', osm: 192622, type: BearCountrySubdivisionTypeEnum::REGION),
            self::MW_S => new BearCountrySubdivisionData(cca2: BearCountryEnum::MW, name: 'Chakumwera', osm: 192623, type: BearCountrySubdivisionTypeEnum::REGION),


            // MEXICO
            self::MX_AGU => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Aguascalientes', osm: 2610002, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_BCN => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Baja California', osm: 2589601, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_BCS => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Baja California Sur', osm: 2589611, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_CAM => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Campeche', osm: 2568834, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_CHH => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Chihuahua', osm: 1673425, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_CHP => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Chiapas', osm: 2556679, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_CMX => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Ciudad de México', osm: 1376330, type: BearCountrySubdivisionTypeEnum::ENTITY),
            self::MX_COA => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Coahuila de Zaragoza', osm: 1661524, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_COL => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Colima', osm: 2340912, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_DUR => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Durango', osm: 2399740, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_GRO => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Guerrero', osm: 2439316, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_GUA => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Guanajuato', osm: 2340909, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_HID => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Hidalgo', osm: 1376490, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_JAL => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Jalisco', osm: 2340910, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_MEX => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'México', osm: 1376489, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_MIC => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Michoacán de Ocampo', osm: 2340636, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_MOR => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Morelos', osm: 1376332, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_NAY => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Nayarit', osm: 7695827, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_NLE => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Nuevo León', osm: 1661523, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_OAX => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Oaxaca', osm: 2529822, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_PUE => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Puebla', osm: 1376491, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_QUE => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Querétaro', osm: 2340903, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_ROO => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Quintana Roo', osm: 2614434, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_SIN => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Sinaloa', osm: 2455086, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_SLP => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'San Luis Potosí', osm: 4086617, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_SON => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Sonora', osm: 1673426, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_TAB => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Tabasco', osm: 2556680, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_TAM => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Tamaulipas', osm: 2415518, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_TLA => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Tlaxcala', osm: 1375274, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_VER => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Veracruz de Ignacio de la Llave', osm: 2415761, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_YUC => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Yucatán', osm: 2614435, type: BearCountrySubdivisionTypeEnum::STATE),
            self::MX_ZAC => new BearCountrySubdivisionData(cca2: BearCountryEnum::MX, name: 'Zacatecas', osm: 2399704, type: BearCountrySubdivisionTypeEnum::STATE),


            // NETHERLANDS
            self::NL_BQ1 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Bonaire', osm: 2324450, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::NL_BQ2 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Saba', osm: 2324451, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::NL_BQ3 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Sint Eustatius', osm: 2324452, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::NL_DR => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Drenthe', osm: 47540, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_FL => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Flevoland', osm: 47407, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_FR => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Friesland', osm: 47381, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_GE => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Gelderland', osm: 47554, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_GR => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Groningen', osm: 47826, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_LI => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Limburg', osm: 47793, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_NB => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'North Brabant', osm: 47696, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_NH => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'North Holland', osm: 47654, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_OV => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Overijssel', osm: 47608, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_UT => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Utrecht', osm: 47667, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_ZE => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'Zeeland', osm: 47806, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NL_ZH => new BearCountrySubdivisionData(cca2: BearCountryEnum::NL, name: 'South Holland', osm: 47772, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // NORWAY
            self::BVT => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Bouvet Island', osm: 2425963, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::NO_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Oslo', osm: 406091, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Rogaland', osm: 405836, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Møre and Romsdal', osm: 406868, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Northland', osm: 408105, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Svalbard', osm: 1337397, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NO_22 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Jan Mayen', osm: 1337126, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NO_31 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Østfold', osm: 406060, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_32 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Akershus', osm: 406106, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_33 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Buskerud', osm: 412297, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_34 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Inland', osm: 10155527, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_39 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Vestfold', osm: 404589, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_40 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Telemark', osm: 405156, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_42 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Agder', osm: 10155517, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_46 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Westland', osm: 10155543, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_50 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Trøndelag', osm: 406567, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_55 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Troms', osm: 407717, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::NO_56 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NO, name: 'Finnmark', osm: 406389, type: BearCountrySubdivisionTypeEnum::COUNTY),


            // NEPAL
            self::NP_P1 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NP, name: 'Koshi', osm: 10489132, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NP_P2 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NP, name: 'Madhesh', osm: 10489318, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NP_P3 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NP, name: 'Bagmati', osm: 10489317, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NP_P4 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NP, name: 'Gandaki', osm: 10489605, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NP_P5 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NP, name: 'Lumbini', osm: 10493722, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NP_P6 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NP, name: 'Karnali', osm: 10493723, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::NP_P7 => new BearCountrySubdivisionData(cca2: BearCountryEnum::NP, name: 'Sudurpashchim', osm: 10488187, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // NEW ZEALAND
            self::NZ_AUK => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Auckland', osm: 2094141, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_BOP => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Bay of Plenty', osm: 1790755, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_CAN => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Canterbury', osm: 1640137, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_CIT => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Chatham Islands', osm: 2647558, type: BearCountrySubdivisionTypeEnum::ISLAND),
            self::NZ_GIS => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Gisborne', osm: 2643819, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_HKB => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Hawke\'s Bay', osm: 1643811, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_MBH => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Marlborough', osm: 4266977, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_MWT => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Manawatu-Wanganui', osm: 1638992, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_NSN => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Nelson', osm: 4266962, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_NTL => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Northland', osm: 2133870, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_OTA => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Otago', osm: 1640138, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_STL => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Southland', osm: 1640159, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_TAS => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Tasman', osm: 4266979, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_TKI => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Taranaki', osm: 1643812, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_WGN => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Wellington', osm: 1638991, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_WKO => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'Waikato', osm: 2094142, type: BearCountrySubdivisionTypeEnum::REGION),
            self::NZ_WTC => new BearCountrySubdivisionData(cca2: BearCountryEnum::NZ, name: 'West Coast', osm: 1640136, type: BearCountrySubdivisionTypeEnum::REGION),


            // PORTUGAL
            self::PT_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Aveiro', osm: 3920249, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Beja', osm: 5134927, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Braga', osm: 3738284, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Bragança', osm: 3905929, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Castelo Branco', osm: 4104644, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Coimbra', osm: 4875183, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Évora', osm: 5130767, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Faro', osm: 1278415, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Guarda', osm: 3905924, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Leiria', osm: 5011694, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Lisbon', osm: 2897141, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Portalegre', osm: 5123448, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Porto', osm: 3459013, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Santarém', osm: 5122644, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_15 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Setúbal', osm: 5143590, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_16 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Viana do Castelo', osm: 3898131, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_17 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Vila Real', osm: 3967823, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Viseu', osm: 3920285, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::PT_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Azores', osm: 1629146, type: BearCountrySubdivisionTypeEnum::REGION),
            self::PT_30 => new BearCountrySubdivisionData(cca2: BearCountryEnum::PT, name: 'Madeira', osm: 1629145, type: BearCountrySubdivisionTypeEnum::REGION),


            // QATAR
            self::QA_DA => new BearCountrySubdivisionData(cca2: BearCountryEnum::QA, name: 'Ad Dawhah', osm: 27332, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::QA_KH => new BearCountrySubdivisionData(cca2: BearCountryEnum::QA, name: 'Al Khor', osm: 27329, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::QA_MS => new BearCountrySubdivisionData(cca2: BearCountryEnum::QA, name: 'Al Shamal', osm: 27335, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::QA_RA => new BearCountrySubdivisionData(cca2: BearCountryEnum::QA, name: 'Al Rayyan', osm: 27331, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::QA_SH => new BearCountrySubdivisionData(cca2: BearCountryEnum::QA, name: 'Al-Shahaniya', osm: 27330, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::QA_US => new BearCountrySubdivisionData(cca2: BearCountryEnum::QA, name: 'Umm Salal', osm: 27328, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::QA_WA => new BearCountrySubdivisionData(cca2: BearCountryEnum::QA, name: 'Al Wakrah', osm: 27337, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::QA_ZA => new BearCountrySubdivisionData(cca2: BearCountryEnum::QA, name: 'Al Daayen', osm: 11146904, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),


            // SAUDI ARABIA
            self::SA_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Riyadh', osm: 3678409, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Makkah', osm: 3678639, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Medina', osm: 3679869, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Eastern', osm: 3667294, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Al-Qassim', osm: 3679872, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Ha\'il', osm: 3676707, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Tabuk', osm: 3679867, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Northern Borders', osm: 3673927, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Jazan', osm: 3679903, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Najran', osm: 3667317, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_11 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Al Bahah', osm: 3679888, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_12 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Al Jawf', osm: 3842543, type: BearCountrySubdivisionTypeEnum::REGION),
            self::SA_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SA, name: 'Asir', osm: 3678598, type: BearCountrySubdivisionTypeEnum::REGION),


            // SWEDEN
            self::SE_AB => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Stockholm', osm: 54391, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_AC => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Västerbotten', osm: 52825, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_BD => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Norrbotten', osm: 52824, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Uppsala', osm: 54220, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_D => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Södermanland', osm: 54386, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_E => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Östergötland', osm: 940675, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_F => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Jönköping', osm: 54374, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_G => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Kronoberg', osm: 54412, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_H => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Kalmar', osm: 54417, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_I => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Gotland', osm: 941530, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_K => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Blekinge', osm: 54413, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_M => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Skåne', osm: 54409, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_N => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Halland', osm: 54403, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_O => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Västra Götaland', osm: 54367, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_S => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Värmland', osm: 54223, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_T => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Örebro', osm: 54222, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_U => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Västmanland', osm: 54221, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_W => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Dalarna', osm: 52834, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_X => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Gävleborg', osm: 52832, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_Y => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Västernorrland', osm: 52827, type: BearCountrySubdivisionTypeEnum::COUNTY),
            self::SE_Z => new BearCountrySubdivisionData(cca2: BearCountryEnum::SE, name: 'Jämtland', osm: 52826, type: BearCountrySubdivisionTypeEnum::COUNTY),


            // SINGAPORE
            self::SG_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SG, name: 'Central Singapore', osm: 3831712, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::SG_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SG, name: 'North East', osm: 3831713, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::SG_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SG, name: 'North West', osm: 3831714, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::SG_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SG, name: 'South East', osm: 3831715, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::SG_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::SG, name: 'South West', osm: 3831716, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // UGANDA
            self::UG_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::UG, name: 'Central', osm: 3771649, type: BearCountrySubdivisionTypeEnum::REGION),
            self::UG_E => new BearCountrySubdivisionData(cca2: BearCountryEnum::UG, name: 'Eastern', osm: 3771602, type: BearCountrySubdivisionTypeEnum::REGION),
            self::UG_N => new BearCountrySubdivisionData(cca2: BearCountryEnum::UG, name: 'Northern', osm: 3771442, type: BearCountrySubdivisionTypeEnum::REGION),
            self::UG_W => new BearCountrySubdivisionData(cca2: BearCountryEnum::UG, name: 'Western', osm: 3772011, type: BearCountrySubdivisionTypeEnum::REGION),


            // THE UNITED STATES
            self::US_AL => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Alabama', osm: 161950, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_AK => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Alaska', osm: 1116270, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_AZ => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Arizona', osm: 162018, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_AR => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Arkansas', osm: 161646, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_CA => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'California', osm: 165475, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_CO => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Colorado', osm: 161961, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_CT => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Connecticut', osm: 165794, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_DE => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Delaware', osm: 162110, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_FL => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Florida', osm: 162050, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_GA => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Georgia', osm: 161957, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_HI => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Hawaii', osm: 166563, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_ID => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Idaho', osm: 162116, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_IL => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Illinois', osm: 122586, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_IN => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Indiana', osm: 161816, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_IA => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Iowa', osm: 161650, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_KS => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Kansas', osm: 161644, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_KY => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Kentucky', osm: 161655, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_LA => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Louisiana', osm: 224922, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_ME => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Maine', osm: 63512, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_MD => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Maryland', osm: 162112, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Massachusetts', osm: 61315, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_MI => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Michigan', osm: 165789, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_MN => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Minnesota', osm: 165471, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_MS => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Mississippi', osm: 161943, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_MO => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Missouri', osm: 161638, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_MT => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Montana', osm: 162115, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_NE => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Nebraska', osm: 161648, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_NV => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Nevada', osm: 165473, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_NH => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'New Hampshire', osm: 67213, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_NJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'New Jersey', osm: 224951, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_NM => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'New Mexico', osm: 162014, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_NY => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'New York', osm: 61320, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_NC => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'North Carolina', osm: 224045, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_ND => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'North Dakota', osm: 161653, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_OH => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Ohio', osm: 162061, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_OK => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Oklahoma', osm: 161645, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_OR => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Oregon', osm: 165476, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_PA => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Pennsylvania', osm: 162109, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_RI => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Rhode Island', osm: 392915, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_SC => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'South Carolina', osm: 224040, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_SD => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'South Dakota', osm: 161652, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_TN => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Tennessee', osm: 161838, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_TX => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Texas', osm: 114690, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_UT => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Utah', osm: 161993, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_VT => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Vermont', osm: 60759, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_VA => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Virginia', osm: 224042, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_WA => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Washington', osm: 165479, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_WV => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'West Virginia', osm: 162068, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_WI => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Wisconsin', osm: 165466, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_WY => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Wyoming', osm: 161991, type: BearCountrySubdivisionTypeEnum::STATE),
            self::US_DC => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'District of Columbia', osm: 162069, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::US_AS => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'American Samoa', osm: 2177187, type: BearCountrySubdivisionTypeEnum::OUTLYING_AREA),
            self::US_GU => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Guam', osm: 306001, type: BearCountrySubdivisionTypeEnum::OUTLYING_AREA),
            self::US_MP => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Northern Mariana Islands', osm: 306004, type: BearCountrySubdivisionTypeEnum::OUTLYING_AREA),
            self::US_PR => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Puerto Rico', osm: 4422604, type: BearCountrySubdivisionTypeEnum::OUTLYING_AREA),
            self::US_UM => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'United States Minor Outlying Islands', osm: 2185386, type: BearCountrySubdivisionTypeEnum::OUTLYING_AREA),
            self::US_VI => new BearCountrySubdivisionData(cca2: BearCountryEnum::US, name: 'Virgin Islands', osm: 286898, type: BearCountrySubdivisionTypeEnum::OUTLYING_AREA),


            // URUGUAY
            self::UY_AR => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Artigas', osm: 1617618, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_CA => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Canelones', osm: 1625171, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_CL => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Cerro Largo', osm: 1656175, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_CO => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Colonia', osm: 1650769, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_DU => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Durazno', osm: 1646018, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_FS => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Flores', osm: 1645684, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_FD => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Florida', osm: 1635164, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_LA => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Lavalleja', osm: 1635124, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Maldonado', osm: 1635117, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_MO => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Montevideo', osm: 1634207, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_PA => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Paysandú', osm: 1662387, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_RN => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Rio Nеgro', osm: 1662476, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_RV => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Rivera', osm: 1627812, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_RO => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Rocha', osm: 1653142, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_SA => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Salto', osm: 1614733, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_SJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'San José', osm: 1635189, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_SO => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Soriano', osm: 1646600, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_TA => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Tacuarembó', osm: 1662265, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),
            self::UY_TT => new BearCountrySubdivisionData(cca2: BearCountryEnum::UY, name: 'Treinta y Tres', osm: 1640982, type: BearCountrySubdivisionTypeEnum::DEPARTMENT),


            // UZBEKISTAN
            self::UZ_AN => new BearCountrySubdivisionData(cca2: BearCountryEnum::UZ, name: 'Andijan', osm: 178016, type: BearCountrySubdivisionTypeEnum::REGION),
            self::UZ_BU => new BearCountrySubdivisionData(cca2: BearCountryEnum::UZ, name: 'Bukhara', osm: 1670973, type: BearCountrySubdivisionTypeEnum::REGION),
            self::UZ_FA => new BearCountrySubdivisionData(cca2: BearCountryEnum::UZ, name: 'Fergana', osm: 178018, type: BearCountrySubdivisionTypeEnum::REGION),
            self::UZ_JI => new BearCountrySubdivisionData(cca2: BearCountryEnum::UZ, name: 'Jizzakh', osm: 196254, type: BearCountrySubdivisionTypeEnum::REGION),
            self::UZ_NG => new BearCountrySubdivisionData(cca2: BearCountryEnum::UZ, name: 'Namangan', osm: 178017, type: BearCountrySubdivisionTypeEnum::REGION),
            self::UZ_NW => new BearCountrySubdivisionData(cca2: BearCountryEnum::UZ, name: 'Navoiy', osm: 196246, type: BearCountrySubdivisionTypeEnum::REGION),
            self::UZ_QA => new BearCountrySubdivisionData(cca2: BearCountryEnum::UZ, name: 'Qashqadaryo', osm: 1670974, type: BearCountrySubdivisionTypeEnum::REGION),
            self::UZ_QR => new BearCountrySubdivisionData(cca2: BearCountryEnum::UZ, name: 'Karakalpakstan', osm: 196241, type: BearCountrySubdivisionTypeEnum::REPUBLIC),
            self::UZ_SA => new BearCountrySubdivisionData(cca2: BearCountryEnum::UZ, name: 'Samarqand', osm: 196249, type: BearCountrySubdivisionTypeEnum::REGION),
            self::UZ_SI => new BearCountrySubdivisionData(cca2: BearCountryEnum::UZ, name: 'Sirdaryo', osm: 196253, type: BearCountrySubdivisionTypeEnum::REGION),
            self::UZ_SU => new BearCountrySubdivisionData(cca2: BearCountryEnum::UZ, name: 'Surxondaryo', osm: 196248, type: BearCountrySubdivisionTypeEnum::REGION),
            self::UZ_TK => new BearCountrySubdivisionData(cca2: BearCountryEnum::UZ, name: 'Toshkent Shahri', osm: 2216724, type: BearCountrySubdivisionTypeEnum::CITY),
            self::UZ_TO => new BearCountrySubdivisionData(cca2: BearCountryEnum::UZ, name: 'Tashkent', osm: 196251, type: BearCountrySubdivisionTypeEnum::REGION),
            self::UZ_XO => new BearCountrySubdivisionData(cca2: BearCountryEnum::UZ, name: 'Xorazm', osm: 196242, type: BearCountrySubdivisionTypeEnum::REGION),


            // SAINT VINCENT AND THE GRENADINES
            self::VC_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VC, name: 'Charlotte', osm: 4016640, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::VC_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VC, name: 'Saint Andrew', osm: 4016641, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::VC_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VC, name: 'Saint David', osm: 4016642, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::VC_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VC, name: 'Saint George', osm: 4016643, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::VC_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VC, name: 'Saint Patrick', osm: 4016644, type: BearCountrySubdivisionTypeEnum::PARISH),
            self::VC_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VC, name: 'Grenadines', osm: 4016680, type: BearCountrySubdivisionTypeEnum::PARISH),


            // VENEZUELA
            self::VE_A => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Distrito Capital', osm: 2444378, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::VE_B => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Anzoátegui', osm: 2267150, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_C => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Apure', osm: 3395162, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_D => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Aragua', osm: 272746, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_E => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Barinas', osm: 3763132, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_F => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Bolívar', osm: 2269155, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_G => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Carabobo', osm: 272745, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_H => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Cojedes', osm: 272662, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_I => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Falcón', osm: 2269792, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_J => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Guárico', osm: 272663, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_K => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Lara', osm: 272744, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_L => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Mérida', osm: 272635, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_M => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Miranda', osm: 272673, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_N => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Monagas', osm: 272670, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_O => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Nueva Esparta', osm: 2269770, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_P => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Portuguesa', osm: 272661, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_R => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Sucre', osm: 272671, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_S => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Táchira', osm: 272633, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_T => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Trujillo', osm: 272634, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_U => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Yaracuy', osm: 272743, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_V => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Zulia', osm: 272632, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_W => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Dependencias Federales', osm: 3399075, type: BearCountrySubdivisionTypeEnum::DEPENDENCY),
            self::VE_X => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'La Guaira', osm: 2442704, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_Y => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Delta Amacuro', osm: 272669, type: BearCountrySubdivisionTypeEnum::STATE),
            self::VE_Z => new BearCountrySubdivisionData(cca2: BearCountryEnum::VE, name: 'Amazonas', osm: 2269815, type: BearCountrySubdivisionTypeEnum::STATE),


            // VIETNAM
            self::VN_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Lai Châu', osm: 1903322, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Lào Cai', osm: 1903400, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hà Giang', osm: 1903478, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Cao Bằng', osm: 1844412, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Sơn La', osm: 1903291, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Yên Bái', osm: 1903199, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Tuyên Quang', osm: 1903418, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Lạng Sơn', osm: 5522596, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_13 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Quảng Ninh', osm: 1902947, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_14 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hòa Bình', osm: 1902973, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_18 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Ninh Bình', osm: 1900963, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_20 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Thái Bình', osm: 1901019, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_21 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Thanh Hóa', osm: 1898590, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_22 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Nghệ An', osm: 1898509, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_23 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hà Tĩnh', osm: 1898458, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_24 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Quảng Bình', osm: 1896050, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_25 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Quảng Trị', osm: 1895630, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_26 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Thừa Thiên-Huế', osm: 1891483, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_27 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Quảng Nam', osm: 1891352, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_28 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Kon Tum', osm: 1879515, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_29 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Quảng Ngãi', osm: 1890793, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_30 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Gia Lai', osm: 1884018, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_31 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bình Định', osm: 1889794, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_32 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Phú Yên', osm: 1889204, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_33 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Đắk Lắk', osm: 1884034, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_34 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Khánh Hòa', osm: 1887959, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_35 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Lâm Đồng', osm: 1885367, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_36 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Ninh Thuận', osm: 1886159, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_37 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Tây Ninh', osm: 1898961, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_39 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Đồng Nai', osm: 1904421, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_40 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bình Thuận', osm: 1904231, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_41 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Long An', osm: 1877236, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_43 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bà Rịa-Vũng Tàu', osm: 1904296, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_44 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'An Giang', osm: 1875748, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_45 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Đồng Tháp', osm: 1875866, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_46 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Tiền Giang', osm: 1876011, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_47 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Kiên Giang', osm: 1874471, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_49 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Vĩnh Long', osm: 1875887, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_50 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bến Tre', osm: 1875968, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_51 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Trà Vinh', osm: 1873642, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_52 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Sóc Trăng', osm: 1873632, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_53 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bắc Kạn', osm: 1903471, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_54 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bắc Giang', osm: 1902941, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_55 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bạc Liêu', osm: 1873533, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_56 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bắc Ninh', osm: 1902690, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_57 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bình Dương', osm: 1906037, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_58 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Bình Phước', osm: 1898841, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_59 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Cà Mau', osm: 1873490, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_61 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hải Dương', osm: 1902686, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_63 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hà Nam', osm: 1901010, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_66 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hưng Yên', osm: 1901032, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_67 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Nam Định', osm: 1901008, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_68 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Phú Thọ', osm: 1902930, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_69 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Thái Nguyên', osm: 1902967, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_70 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Vĩnh Phúc', osm: 1902889, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_71 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Điện Biên', osm: 1903340, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_72 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Đắk Nông', osm: 1884042, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_73 => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hậu Giang', osm: 1874249, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VN_CT => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Cần Thơ', osm: 1874283, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::VN_DN => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Đà Nẵng', osm: 1891418, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::VN_HN => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hà Nội', osm: 1903516, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::VN_HP => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hải Phòng', osm: 1902682, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::VN_SG => new BearCountrySubdivisionData(cca2: BearCountryEnum::VN, name: 'Hồ Chí Minh', osm: 1973756, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),


            // VANUATU
            self::VU_MAP => new BearCountrySubdivisionData(cca2: BearCountryEnum::VU, name: 'Malampa', osm: 3765629, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VU_PAM => new BearCountrySubdivisionData(cca2: BearCountryEnum::VU, name: 'Penama', osm: 3765606, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VU_SAM => new BearCountrySubdivisionData(cca2: BearCountryEnum::VU, name: 'Sanma', osm: 3765591, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VU_SEE => new BearCountrySubdivisionData(cca2: BearCountryEnum::VU, name: 'Shefa', osm: 3765630, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VU_TAE => new BearCountrySubdivisionData(cca2: BearCountryEnum::VU, name: 'Tafea', osm: 3765631, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::VU_TOB => new BearCountrySubdivisionData(cca2: BearCountryEnum::VU, name: 'Torba', osm: 3765596, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // SAMOA
            self::WS_AA => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'A\'ana', osm: 13285809, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_AL => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Aiga-i-le-Tai', osm: 13285778, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_AT => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Atua', osm: 13285780, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_FA => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Fa\'asaleleaga', osm: 13285392, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_GE => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Gaga\'emauga', osm: 13285430, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_GI => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Gaga\'ifomauga', osm: 13285429, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_PA => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Palauli', osm: 13285391, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_SA => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Satupa\'itea', osm: 13285390, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_TU => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Tuamasaga', osm: 13285808, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_VF => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Va\'a-o-Fonoti', osm: 13285779, type: BearCountrySubdivisionTypeEnum::DISTRICT),
            self::WS_VS => new BearCountrySubdivisionData(cca2: BearCountryEnum::WS, name: 'Vaisigano', osm: 13285389, type: BearCountrySubdivisionTypeEnum::DISTRICT),


            // YEMEN
            self::YE_AB => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Abyan', osm: 383898, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_AD => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Aden', osm: 383893, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_AM => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Amran', osm: 383907, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_BA => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Al Bayda', osm: 383901, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_DA => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Dhale', osm: 383902, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_DH => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Dhamar', osm: 383906, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_HD => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Hadramaut', osm: 383897, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_HJ => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Hajjah', osm: 383905, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_HU => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Al Hudaydah', osm: 383894, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_IB => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Ibb', osm: 383900, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_JA => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Al Jawf', osm: 383899, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_LA => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Lahij', osm: 383892, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Marib', osm: 383909, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_MR => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Al Mahrah', osm: 383908, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_MW => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Al Mahwit', osm: 383903, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_RA => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Raymah', osm: 383910, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_SA => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Sanaa', osm: 8894341, type: BearCountrySubdivisionTypeEnum::MUNICIPALITY),
            self::YE_SD => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Shabwah', osm: 383904, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_SH => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Shabwah', osm: 383896, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_SN => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Sanaa', osm: 383891, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_SU => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Socotra', osm: 5486640, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),
            self::YE_TA => new BearCountrySubdivisionData(cca2: BearCountryEnum::YE, name: 'Taiz', osm: 383895, type: BearCountrySubdivisionTypeEnum::GOVERNORATE),


            // SOUTH AFRICA
            self::ZA_EC => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'Eastern Cape', osm: 88574, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZA_FS => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'Free State', osm: 92417, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZA_GP => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'Gauteng', osm: 349344, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZA_KZN => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'KwaZulu-Natal', osm: 349390, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZA_LP => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'Limpopo', osm: 349547, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZA_MP => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'Mpumalanga', osm: 349556, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZA_NC => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'Northern Cape', osm: 86720, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZA_NW => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'North West', osm: 349519, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZA_WC => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZA, name: 'Western Cape', osm: 80501, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // ZAMBIA
            self::ZM_01 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Western', osm: 318852, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_02 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Central', osm: 318861, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_03 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Eastern', osm: 318865, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_04 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Luapula', osm: 318866, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_05 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Northern', osm: 318862, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_06 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'North-Western', osm: 318859, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_07 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Southern', osm: 318863, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_08 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Copperbelt', osm: 318860, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_09 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Lusaka', osm: 318864, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZM_10 => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZM, name: 'Muchinga', osm: 3668334, type: BearCountrySubdivisionTypeEnum::PROVINCE),


            // ZIMBABWE
            self::ZW_BU => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Bulawayo', osm: 3337019, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_HA => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Harare', osm: 318467, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_MA => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Manicaland', osm: 3336975, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_MC => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Mashonaland Central', osm: 3336976, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_ME => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Mashonaland East', osm: 3336977, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_MI => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Midlands', osm: 3336982, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_MN => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Matabeleland North', osm: 3336980, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_MS => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Matabeleland South', osm: 3336981, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_MV => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Masvingo', osm: 3336979, type: BearCountrySubdivisionTypeEnum::PROVINCE),
            self::ZW_MW => new BearCountrySubdivisionData(cca2: BearCountryEnum::ZW, name: 'Mashonaland West', osm: 3336978, type: BearCountrySubdivisionTypeEnum::PROVINCE),
        };
    }


    public static function syncToDatabase(): void {
        foreach (self::cases() as $case) {
            BearCountrySubdivisionCrud::syncToDatabase($case);
        }
    }
}
