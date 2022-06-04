<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_language', callback: static function (Blueprint $table) {
            if (DB::getPdo()->getAttribute(PDO::ATTR_DRIVER_NAME) === 'pgsql') {
                $table->text(column: 'language_iso2_code')->primary();
                $table->text(column: 'language_iso3_code');
            }   else {
                $table->string(column: 'language_iso2_code')->primary();
                $table->string(column: 'language_iso3_code');
            }
            $table->text(column: 'language_name');
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
        $languages = array(
            array(
                "language_iso2_code" => "ja",
                "language_iso3_code" => "jpn",
                "language_name" => "Japanese",
            ),
            array(
                "language_iso2_code" => "ht",
                "language_iso3_code" => "hat",
                "language_name" => "Haitian",
            ),
            array(
                "language_iso2_code" => "hu",
                "language_iso3_code" => "hun",
                "language_name" => "Hungarian",
            ),
            array(
                "language_iso2_code" => "is",
                "language_iso3_code" => "isl",
                "language_name" => "Icelandic",
            ),
            array(
                "language_iso2_code" => "id",
                "language_iso3_code" => "ind",
                "language_name" => "Indonesian",
            ),
            array(
                "language_iso2_code" => "he",
                "language_iso3_code" => "heb",
                "language_name" => "Hebrew",
            ),
            array(
                "language_iso2_code" => "nl",
                "language_iso3_code" => "nld",
                "language_name" => "Dutch",
            ),
            array(
                "language_iso2_code" => "ne",
                "language_iso3_code" => "nep",
                "language_name" => "Nepali",
            ),
            array(
                "language_iso2_code" => "hy",
                "language_iso3_code" => "hye",
                "language_name" => "Armenian",
            ),
            array(
                "language_iso2_code" => "sk",
                "language_iso3_code" => "slk",
                "language_name" => "Slovak",
            ),
            array(
                "language_iso2_code" => "sm",
                "language_iso3_code" => "smo",
                "language_name" => "Samoan",
            ),
            array(
                "language_iso2_code" => "sn",
                "language_iso3_code" => "sna",
                "language_name" => "Shona",
            ),
            array(
                "language_iso2_code" => "sl",
                "language_iso3_code" => "slv",
                "language_name" => "Slovenian",
            ),
            array(
                "language_iso2_code" => "ro",
                "language_iso3_code" => "rom",
                "language_name" => "Romanian",
            ),
            array(
                "language_iso2_code" => "da",
                "language_iso3_code" => "dan",
                "language_name" => "Danish",
            ),
            array(
                "language_iso2_code" => "en",
                "language_iso3_code" => "eng",
                "language_name" => "English",
            ),
            array(
                "language_iso2_code" => "hr",
                "language_iso3_code" => "hrv",
                "language_name" => "Croatian",
            ),
            array(
                "language_iso2_code" => "af",
                "language_iso3_code" => "afr",
                "language_name" => "Afrikaans",
            ),
            array(
                "language_iso2_code" => "hi",
                "language_iso3_code" => "hin",
                "language_name" => "Hindi",
            ),
            array(
                "language_iso2_code" => "am",
                "language_iso3_code" => "amh",
                "language_name" => "Amharic",
            ),
            array(
                "language_iso2_code" => "az",
                "language_iso3_code" => "aze",
                "language_name" => "Azerbaijani",
            ),
            array(
                "language_iso2_code" => "bg",
                "language_iso3_code" => "bul",
                "language_name" => "Bulgarian",
            ),
            array(
                "language_iso2_code" => "be",
                "language_iso3_code" => "bel",
                "language_name" => "Belarusian",
            ),
            array(
                "language_iso2_code" => "ar",
                "language_iso3_code" => "ara",
                "language_name" => "Arabic",
            ),
            array(
                "language_iso2_code" => "de",
                "language_iso3_code" => "deu",
                "language_name" => "German",
            ),
            array(
                "language_iso2_code" => "fr",
                "language_iso3_code" => "fra",
                "language_name" => "French",
            ),
            array(
                "language_iso2_code" => "bs",
                "language_iso3_code" => "bos",
                "language_name" => "Bosnian",
            ),
            array(
                "language_iso2_code" => "bn",
                "language_iso3_code" => "ben",
                "language_name" => "Bengali",
            ),
            array(
                "language_iso2_code" => "ca",
                "language_iso3_code" => "cat",
                "language_name" => "Catalan",
            ),
            array(
                "language_iso2_code" => "el",
                "language_iso3_code" => "ell",
                "language_name" => "Greek",
            ),
            array(
                "language_iso2_code" => "co",
                "language_iso3_code" => "cos",
                "language_name" => "Corsican",
            ),
            array(
                "language_iso2_code" => "cy",
                "language_iso3_code" => "cym",
                "language_name" => "Welsh",
            ),
            array(
                "language_iso2_code" => "cs",
                "language_iso3_code" => "ces",
                "language_name" => "Czech",
            ),
            array(
                "language_iso2_code" => "eo",
                "language_iso3_code" => "epo",
                "language_name" => "Esperanto",
            ),
            array(
                "language_iso2_code" => "et",
                "language_iso3_code" => "est",
                "language_name" => "Estonian",
            ),
            array(
                "language_iso2_code" => "es",
                "language_iso3_code" => "spa",
                "language_name" => "Spanish",
            ),
            array(
                "language_iso2_code" => "gd",
                "language_iso3_code" => "gla",
                "language_name" => "Scottish Gaelic",
            ),
            array(
                "language_iso2_code" => "fi",
                "language_iso3_code" => "fin",
                "language_name" => "Finnish",
            ),
            array(
                "language_iso2_code" => "ga",
                "language_iso3_code" => "gle",
                "language_name" => "Irish",
            ),
            array(
                "language_iso2_code" => "gl",
                "language_iso3_code" => "glg",
                "language_name" => "Galician",
            ),
            array(
                "language_iso2_code" => "fy",
                "language_iso3_code" => "fry",
                "language_name" => "Western Frisian",
            ),
            array(
                "language_iso2_code" => "gu",
                "language_iso3_code" => "guj",
                "language_name" => "Gujarati",
            ),
            array(
                "language_iso2_code" => "eu",
                "language_iso3_code" => "eus",
                "language_name" => "Basque",
            ),
            array(
                "language_iso2_code" => "ha",
                "language_iso3_code" => "hau",
                "language_name" => "Hausa",
            ),
            array(
                "language_iso2_code" => "ig",
                "language_iso3_code" => "ibo",
                "language_name" => "Igbo",
            ),
            array(
                "language_iso2_code" => "it",
                "language_iso3_code" => "ita",
                "language_name" => "Italian",
            ),
            array(
                "language_iso2_code" => "lg",
                "language_iso3_code" => "lug",
                "language_name" => "Ganda",
            ),
            array(
                "language_iso2_code" => "kk",
                "language_iso3_code" => "kaz",
                "language_name" => "Kazakh",
            ),
            array(
                "language_iso2_code" => "mg",
                "language_iso3_code" => "mlg",
                "language_name" => "Malagasy",
            ),
            array(
                "language_iso2_code" => "kn",
                "language_iso3_code" => "kan",
                "language_name" => "Kannada",
            ),
            array(
                "language_iso2_code" => "la",
                "language_iso3_code" => "lat",
                "language_name" => "Latin",
            ),
            array(
                "language_iso2_code" => "lb",
                "language_iso3_code" => "ltz",
                "language_name" => "Luxembourgish",
            ),
            array(
                "language_iso2_code" => "mk",
                "language_iso3_code" => "mkd",
                "language_name" => "Macedonian",
            ),
            array(
                "language_iso2_code" => "mi",
                "language_iso3_code" => "mri",
                "language_name" => "Maori",
            ),
            array(
                "language_iso2_code" => "ku",
                "language_iso3_code" => "kur",
                "language_name" => "Kurdish",
            ),
            array(
                "language_iso2_code" => "lt",
                "language_iso3_code" => "lit",
                "language_name" => "Lithuanian",
            ),
            array(
                "language_iso2_code" => "lo",
                "language_iso3_code" => "lao",
                "language_name" => "Lao",
            ),
            array(
                "language_iso2_code" => "ka",
                "language_iso3_code" => "kat",
                "language_name" => "Georgian",
            ),
            array(
                "language_iso2_code" => "km",
                "language_iso3_code" => "khm",
                "language_name" => "Central Khmer",
            ),
            array(
                "language_iso2_code" => "ko",
                "language_iso3_code" => "kor",
                "language_name" => "Korean",
            ),
            array(
                "language_iso2_code" => "lv",
                "language_iso3_code" => "lav",
                "language_name" => "Latvian",
            ),
            array(
                "language_iso2_code" => "fa",
                "language_iso3_code" => "fas",
                "language_name" => "Persian",
            ),
            array(
                "language_iso2_code" => "mt",
                "language_iso3_code" => "mlt",
                "language_name" => "Maltese",
            ),
            array(
                "language_iso2_code" => "ml",
                "language_iso3_code" => "mal",
                "language_name" => "Malayalam",
            ),
            array(
                "language_iso2_code" => "ky",
                "language_iso3_code" => "kir",
                "language_name" => "Kyrgyz",
            ),
            array(
                "language_iso2_code" => "my",
                "language_iso3_code" => "mya",
                "language_name" => "Burmese",
            ),
            array(
                "language_iso2_code" => "mn",
                "language_iso3_code" => "mon",
                "language_name" => "Mongolian",
            ),
            array(
                "language_iso2_code" => "ms",
                "language_iso3_code" => "msa",
                "language_name" => "Malay",
            ),
            array(
                "language_iso2_code" => "mr",
                "language_iso3_code" => "mar",
                "language_name" => "Marathi",
            ),
            array(
                "language_iso2_code" => "no",
                "language_iso3_code" => "nor",
                "language_name" => "Norwegian",
            ),
            array(
                "language_iso2_code" => "or",
                "language_iso3_code" => "ori",
                "language_name" => "Oriya",
            ),
            array(
                "language_iso2_code" => "ps",
                "language_iso3_code" => "pus",
                "language_name" => "Pashto",
            ),
            array(
                "language_iso2_code" => "pl",
                "language_iso3_code" => "pol",
                "language_name" => "Polish",
            ),
            array(
                "language_iso2_code" => "ny",
                "language_iso3_code" => "nya",
                "language_name" => "Chewa",
            ),
            array(
                "language_iso2_code" => "pa",
                "language_iso3_code" => "pan",
                "language_name" => "Punjabi",
            ),
            array(
                "language_iso2_code" => "st",
                "language_iso3_code" => "sot",
                "language_name" => "Southern Sotho",
            ),
            array(
                "language_iso2_code" => "sq",
                "language_iso3_code" => "sqi",
                "language_name" => "Albanian",
            ),
            array(
                "language_iso2_code" => "sv",
                "language_iso3_code" => "swe",
                "language_name" => "Swedish",
            ),
            array(
                "language_iso2_code" => "ru",
                "language_iso3_code" => "rus",
                "language_name" => "Russian",
            ),
            array(
                "language_iso2_code" => "pt",
                "language_iso3_code" => "por",
                "language_name" => "Portuguese",
            ),
            array(
                "language_iso2_code" => "su",
                "language_iso3_code" => "sun",
                "language_name" => "Sundanese",
            ),
            array(
                "language_iso2_code" => "sw",
                "language_iso3_code" => "swa",
                "language_name" => "Swahili",
            ),
            array(
                "language_iso2_code" => "si",
                "language_iso3_code" => "sin",
                "language_name" => "Sinhala",
            ),
            array(
                "language_iso2_code" => "so",
                "language_iso3_code" => "som",
                "language_name" => "Somali",
            ),
            array(
                "language_iso2_code" => "sd",
                "language_iso3_code" => "snd",
                "language_name" => "Sindhi",
            ),
            array(
                "language_iso2_code" => "sr",
                "language_iso3_code" => "srp",
                "language_name" => "Serbian",
            ),
            array(
                "language_iso2_code" => "rw",
                "language_iso3_code" => "kin",
                "language_name" => "Kinyarwanda",
            ),
            array(
                "language_iso2_code" => "tl",
                "language_iso3_code" => "tgl",
                "language_name" => "Tagalog",
            ),
            array(
                "language_iso2_code" => "tt",
                "language_iso3_code" => "tat",
                "language_name" => "Tatar",
            ),
            array(
                "language_iso2_code" => "uk",
                "language_iso3_code" => "ukr",
                "language_name" => "Ukrainian",
            ),
            array(
                "language_iso2_code" => "uz",
                "language_iso3_code" => "uzb",
                "language_name" => "Uzbek",
            ),
            array(
                "language_iso2_code" => "ur",
                "language_iso3_code" => "urd",
                "language_name" => "Urdu",
            ),
            array(
                "language_iso2_code" => "ta",
                "language_iso3_code" => "tam",
                "language_name" => "Tamil",
            ),
            array(
                "language_iso2_code" => "tk",
                "language_iso3_code" => "tuk",
                "language_name" => "Turkmen",
            ),
            array(
                "language_iso2_code" => "th",
                "language_iso3_code" => "tha",
                "language_name" => "Thai",
            ),
            array(
                "language_iso2_code" => "tg",
                "language_iso3_code" => "tgk",
                "language_name" => "Tajik",
            ),
            array(
                "language_iso2_code" => "ug",
                "language_iso3_code" => "uig",
                "language_name" => "Uyghur",
            ),
            array(
                "language_iso2_code" => "tr",
                "language_iso3_code" => "tur",
                "language_name" => "Turkish",
            ),
            array(
                "language_iso2_code" => "te",
                "language_iso3_code" => "tel",
                "language_name" => "Telugu",
            ),
            array(
                "language_iso2_code" => "zu",
                "language_iso3_code" => "zul",
                "language_name" => "Zulu",
            ),
            array(
                "language_iso2_code" => "yo",
                "language_iso3_code" => "yor",
                "language_name" => "Yoruba",
            ),
            array(
                "language_iso2_code" => "xh",
                "language_iso3_code" => "xho",
                "language_name" => "Xhosa",
            ),
            array(
                "language_iso2_code" => "yi",
                "language_iso3_code" => "yid",
                "language_name" => "Yiddish",
            ),
            array(
                "language_iso2_code" => "zh",
                "language_iso3_code" => "zho",
                "language_name" => "Chinese",
            ),
            array(
                "language_iso2_code" => "vi",
                "language_iso3_code" => "vie",
                "language_name" => "Vietnamese",
            ),
            array(
                "language_iso2_code" => "jv",
                "language_iso3_code" => "jav",
                "language_name" => "Javanese",
            ),
        );
        DB::table('bear_language')->insert($languages);
    }

    public function down(): void {
        Schema::dropIfExists('bear_language');
    }
};
