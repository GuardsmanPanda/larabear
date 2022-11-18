<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void {
        $locales = array(
            array('language_tag' => 'en-GB', 'language_iso2_code' => 'en', 'country_iso2_code' => 'GB'),
            array('language_tag' => 'pt-PT', 'language_iso2_code' => 'pt', 'country_iso2_code' => 'PT'),
            array('language_tag' => 'nl-NL', 'language_iso2_code' => 'nl', 'country_iso2_code' => 'NL'),
            array('language_tag' => 'ko-KR', 'language_iso2_code' => 'ko', 'country_iso2_code' => 'KR'),
            array('language_tag' => 'zh-CN', 'language_iso2_code' => 'zh', 'country_iso2_code' => 'CN'),
            array('language_tag' => 'ja-JP', 'language_iso2_code' => 'ja', 'country_iso2_code' => 'JP'),
            array('language_tag' => 'hr-HR', 'language_iso2_code' => 'hr', 'country_iso2_code' => 'HR'),
            array('language_tag' => 'hu-HU', 'language_iso2_code' => 'hu', 'country_iso2_code' => 'HU'),
            array('language_tag' => 'et-EE', 'language_iso2_code' => 'et', 'country_iso2_code' => 'EE'),
            array('language_tag' => 'bg-BG', 'language_iso2_code' => 'bg', 'country_iso2_code' => 'BG'),
            array('language_tag' => 'cs-CZ', 'language_iso2_code' => 'cs', 'country_iso2_code' => 'CZ'),
            array('language_tag' => 'el-GR', 'language_iso2_code' => 'el', 'country_iso2_code' => 'GR'),
            array('language_tag' => 'he-IL', 'language_iso2_code' => 'he', 'country_iso2_code' => 'IL'),
            array('language_tag' => 'is-IS', 'language_iso2_code' => 'is', 'country_iso2_code' => 'IS'),
            array('language_tag' => 'lt-LT', 'language_iso2_code' => 'lt', 'country_iso2_code' => 'LT'),
            array('language_tag' => 'pl-PL', 'language_iso2_code' => 'pl', 'country_iso2_code' => 'PL'),
            array('language_tag' => 'ro-RO', 'language_iso2_code' => 'ro', 'country_iso2_code' => 'RO'),
            array('language_tag' => 'sk-SK', 'language_iso2_code' => 'sk', 'country_iso2_code' => 'SK'),
            array('language_tag' => 'sl-SI', 'language_iso2_code' => 'sl', 'country_iso2_code' => 'SI'),
            array('language_tag' => 'th-TH', 'language_iso2_code' => 'th', 'country_iso2_code' => 'TH'),
            array('language_tag' => 'uk-UA', 'language_iso2_code' => 'uk', 'country_iso2_code' => 'UA'),
            array('language_tag' => 'vi-VN', 'language_iso2_code' => 'vi', 'country_iso2_code' => 'VN'),
        );
        DB::table('bear_language_tag')->insert($locales);
    }

    public function down(): void {}
};
