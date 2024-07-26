<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_permission_user', callback: static function (Blueprint $table): void {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'permission_enum');
            } else {
                $table->string(column: 'permission_enum');
            }
            $table->uuid(column: 'user_id')->index();
            $table->timestampTz(column: 'created_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
            $table->primary(columns: ['permission_enum', 'user_id']);
            $table->foreign('permission_enum')->references('enum')->on(table: 'bear_permission');
            $table->foreign('user_id')->references('id')->on(table: 'bear_user');
        });
    }


    public function down(): void {
        Schema::dropIfExists('bear_permission_user');
    }
};
