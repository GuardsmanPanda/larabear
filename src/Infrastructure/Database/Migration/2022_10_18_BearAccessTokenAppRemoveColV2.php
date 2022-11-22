<?php

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table(table: 'bear_access_token_app', callback: static function (Blueprint $table) {
            $table->dropColumn('usage_count');
        });
    }

    public function down(): void {
        throw new RuntimeException('This migration cannot be reversed.');
    }
};
