<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Enum;

use GuardsmanPanda\Larabear\Infrastructure\App\Interface\BearDatabaseBackedEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Crud\LarabearCountrySubdivisionCrud;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Data\BearCountrySubdivisionData;

enum BearCountrySubdivisionEnum: string implements BearDatabaseBackedEnumInterface {
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


    // NORWAY
    case NO_03 = 'NO-03';
    case NO_11 = 'NO-11';
    case NO_15 = 'NO-15';
    case NO_18 = 'NO-18';
    case NO_30 = 'NO-30';
    case NO_34 = 'NO-34';
    case NO_38 = 'NO-38';
    case NO_42 = 'NO-42';
    case NO_46 = 'NO-46';
    case NO_50 = 'NO-50';
    case NO_54 = 'NO-54';


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
    case SE_X = 'SE_X';
    case SE_Y = 'SE-Y';
    case SE_Z = 'SE-Z';


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
                english_name: 'Minsk', capital: 'Minsk', osm_relation_id: 59752,
            ),
            self::BY_MI => new BearCountrySubdivisionData(
                iso_3166: 'BY-MI', country_cca2: BearCountryEnum::BY, subdivision_type: BearCountrySubdivisionTypeEnum::OBLAST,
                english_name: 'Mogilev', capital: 'Mogilev', osm_relation_id: 59162,
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
                english_name: 'Community of Madrid', capital: 'Madrid', osm_relation_id: 349055,
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
                english_name: 'Valencian Community', capital: 'Valencia', osm_relation_id: 349043,
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
                english_name: 'More and Romsdal', capital: 'Molde', osm_relation_id: 406868,
            ),
            self::NO_18 => new BearCountrySubdivisionData(
                iso_3166: 'NO-18', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Northland', capital: 'Bodø', osm_relation_id: 408105,
            ),
            self::NO_30 => new BearCountrySubdivisionData(
                iso_3166: 'NO-30', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Viken', capital: 'Drammen', osm_relation_id: 10155539,
            ),
            self::NO_34 => new BearCountrySubdivisionData(
                iso_3166: 'NO-34', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Inland', capital: 'Lillehammer', osm_relation_id: 10155527,
            ),
            self::NO_38 => new BearCountrySubdivisionData(
                iso_3166: 'NO-38', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Vestfold and Telemark', capital: 'Skien', osm_relation_id: 10487008,
            ),
            self::NO_42 => new BearCountrySubdivisionData(
                iso_3166: 'NO-42', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Agder', capital: 'Arendal', osm_relation_id: 10155517,
            ),
            self::NO_46 => new BearCountrySubdivisionData(
                iso_3166: 'NO-46', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Westland', capital: 'Bergen', osm_relation_id: 10155543,
            ),
            self::NO_50 => new BearCountrySubdivisionData(
                iso_3166: 'NO-50', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Trondelag', capital: 'Steinkjer', osm_relation_id: 406567,
            ),
            self::NO_54 => new BearCountrySubdivisionData(
                iso_3166: 'NO-54', country_cca2: BearCountryEnum::NO, subdivision_type: BearCountrySubdivisionTypeEnum::COUNTY,
                english_name: 'Troms and Finnmark', capital: 'Tromsø', osm_relation_id: 10155507,
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
        };
    }


    public static function syncToDatabase(): void {
        foreach (self::cases() as $case) {
            LarabearCountrySubdivisionCrud::syncToDatabase($case);
        }
    }
}
