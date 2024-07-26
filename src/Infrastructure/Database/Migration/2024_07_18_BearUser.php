<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_user', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->uuid(column: 'id')->primary()->default(DB::raw('gen_random_uuid()'));
                $table->text(column: 'display_name');
                $table->text(column: 'email')->nullable()->unique();
                $table->text(column: 'country_cca2')->nullable();
            } else {
                $table->uuid(column: 'id')->primary();
                $table->string(column: 'display_name');
                $table->string(column: 'email')->nullable()->unique();
                $table->string(column: 'country_cca2')->nullable();
            }
            $table->text(column: 'password')->nullable();
            $table->text(column: 'remember_token')->nullable();
            $table->timestampTz(column: 'last_login_at')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
            $table->foreign('country_cca2')->references('cca2')->on(table: 'bear_country');
        });
    }


    public function down(): void {
        Schema::dropIfExists('bear_user');
    }
};
