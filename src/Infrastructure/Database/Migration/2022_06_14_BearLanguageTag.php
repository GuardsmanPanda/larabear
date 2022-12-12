<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_language_tag', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'language_tag')->primary();
                $table->text(column: 'language_iso2_code');
                $table->text(column: 'country_iso2_code');
            } else {
                $table->string(column: 'language_tag')->primary();
                $table->string(column: 'language_iso2_code');
                $table->string(column: 'country_iso2_code');
            }
            $table->foreign('language_iso2_code')->references('language_iso2_code')->on('bear_language');
            $table->foreign('country_iso2_code')->references('country_iso2_code')->on('bear_country');
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
        $locales = array(
            array('language_tag' => 'en-US', 'language_iso2_code' => 'en', 'country_iso2_code' => 'US'),
            array('language_tag' => 'da-DK', 'language_iso2_code' => 'da', 'country_iso2_code' => 'DK'),
            array('language_tag' => 'sv-SE', 'language_iso2_code' => 'sv', 'country_iso2_code' => 'SE'),
            array('language_tag' => 'fi-FI', 'language_iso2_code' => 'fi', 'country_iso2_code' => 'FI'),
            array('language_tag' => 'no-NO', 'language_iso2_code' => 'no', 'country_iso2_code' => 'NO'),
            array('language_tag' => 'de-DE', 'language_iso2_code' => 'de', 'country_iso2_code' => 'DE'),
            array('language_tag' => 'es-ES', 'language_iso2_code' => 'es', 'country_iso2_code' => 'ES'),
            array('language_tag' => 'fr-FR', 'language_iso2_code' => 'fr', 'country_iso2_code' => 'FR'),
            array('language_tag' => 'it-IT', 'language_iso2_code' => 'it', 'country_iso2_code' => 'IT'),
        );
        DB::table('bear_language_tag')->insert($locales);
    }

    public function down(): void {
        Schema::dropIfExists('bear_language_tag');
    }
};
