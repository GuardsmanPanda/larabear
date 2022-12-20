<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('bear_user', static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'user_first_name')->nullable();
                $table->text(column: 'user_last_name')->nullable();
                $table->text(column: 'user_city')->nullable();
            } else {
                $table->string(column: 'user_first_name')->nullable();
                $table->string(column: 'user_last_name')->nullable();
                $table->string(column: 'user_city')->nullable();
            }
        });
    }

    public function down(): void {
        Schema::table('bear_user', static function (Blueprint $table) {
            $table->dropColumn('user_first_name');
            $table->dropColumn('user_last_name');
            $table->dropColumn('user_city');
        });
    }
};
