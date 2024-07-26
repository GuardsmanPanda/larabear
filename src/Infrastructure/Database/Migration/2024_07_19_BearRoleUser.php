<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists(table: 'bear_role_user');
        Schema::create(table: 'bear_role_user', callback: static function (Blueprint $table): void {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'role_enum');
            } else {
                $table->string(column: 'role_enum');
            }
            $table->uuid(column: 'user_id')->index();
            $table->timestampTz(column: 'created_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
            $table->primary(columns: ['role_enum', 'user_id']);
            $table->foreign('role_enum')->references('enum')->on(table: 'bear_role');
            $table->foreign('user_id')->references('id')->on(table: 'bear_user');
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_role_user');
    }
};
