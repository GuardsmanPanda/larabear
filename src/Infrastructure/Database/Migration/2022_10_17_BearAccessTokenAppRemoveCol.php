<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table(table: 'bear_access_token_app', callback: static function (Blueprint $table) {
            $table->dropColumn('delete_get_request_log_after_days');
            $table->dropColumn('delete_all_request_log_after_days');
        });
    }

    public function down(): void {
        throw new RuntimeException('This migration cannot be reversed.');
    }
};
