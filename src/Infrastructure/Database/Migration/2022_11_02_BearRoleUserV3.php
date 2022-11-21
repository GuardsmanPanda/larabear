<?php

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists('bear_role_user');
        Schema::create(table: 'bear_role_user', callback: static function (Blueprint $table): void {
            if (BearDBService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'role_slug');
            } else {
                $table->string(column: 'role_slug');
            }
            $table->uuid(column: 'user_id')->index();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->primary(columns: ['role_slug', 'user_id']);
            $table->foreign('role_slug')->references('role_slug')->on('bear_role');
            $table->foreign('user_id')->references('id')->on('bear_user');
        });
    }

    public function down(): void {
        Schema::dropIfExists('bear_role_user');
    }
};
