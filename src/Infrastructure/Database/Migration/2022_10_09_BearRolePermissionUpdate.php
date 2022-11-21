<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table(table: 'bear_role', callback: static function (Blueprint $table) {
            $table->dropColumn(columns: 'role_name');
        });
        Schema::table(table: 'bear_permission', callback: static function (Blueprint $table) {
            $table->dropColumn(columns: 'permission_name');
        });
    }

    public function down(): void {
        throw new RuntimeException('This migration cannot be reversed.');
    }
};
