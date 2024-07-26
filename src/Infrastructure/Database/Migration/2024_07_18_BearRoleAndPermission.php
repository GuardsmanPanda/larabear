<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        $tables = [
            'bear_permission',
            'bear_role',
        ];
        foreach ($tables as $table) {
            Schema::create(table: $table, callback: static function (Blueprint $table) {
                if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                    $table->text(column: 'enum')->primary();
                    $table->text(column: 'description')->nullable();
                } else {
                    $table->string(column: 'enum')->primary();
                    $table->string(column: 'description');
                }
                $table->timestampTz(column: 'created_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
                $table->timestampTz(column: 'updated_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
            });
        }

        Schema::create(table: 'bear_role_permission', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'role_enum');
                $table->text(column: 'permission_enum');
            } else {
                $table->string(column: 'role_enum');
                $table->string(column: 'permission_enum');
            }
            $table->timestampTz(column: 'created_at')->default(DB::raw(value: 'CURRENT_TIMESTAMP'));
            $table->primary(columns: ['role_enum', 'permission_enum']);
            $table->foreign('role_enum')->references('enum')->on(table: 'bear_role');
            $table->foreign('permission_enum')->references('enum')->on(table: 'bear_permission');
        });
    }


    public function down(): void {
        Schema::dropIfExists(table: 'bear_role_permission');
        Schema::dropIfExists(table: 'bear_permission');
        Schema::dropIfExists(table: 'bear_role');
    }
};
