<?php

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_role_permission', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'role_slug');
                $table->text(column: 'permission_slug');
            } else {
                $table->string(column: 'role_slug');
                $table->string(column: 'permission_slug');
            }
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->primary(columns: ['role_slug', 'permission_slug']);
            $table->foreign('role_slug')->references('role_slug')->on('bear_role');
            $table->foreign('permission_slug')->references('permission_slug')->on('bear_permission');
        });
    }

    public function down(): void {
        Schema::dropIfExists('bear_role_permission');
    }
};
