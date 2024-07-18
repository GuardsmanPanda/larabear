<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists('bear_user');
        Schema::create(table: 'bear_user', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->uuid(column: 'id')->primary()->default(DB::raw('gen_random_uuid()'));
                $table->text(column: 'user_display_name');
                $table->text(column: 'user_email')->nullable()->unique();
                $table->text(column: 'user_country_iso2_code')->nullable();
            } else {
                $table->uuid(column: 'id')->primary();
                $table->string(column: 'user_display_name');
                $table->string(column: 'user_email')->nullable()->unique();
                $table->string(column: 'user_country_iso2_code')->nullable();
            }
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->useCurrentOnUpdate();
            $table->foreign('user_country_iso2_code')->references('country_iso2_code')->on('bear_country');
        });
    }

    public function down(): void {
        Schema::dropIfExists('bear_user');
    }
};
