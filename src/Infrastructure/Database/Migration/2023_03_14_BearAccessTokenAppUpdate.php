<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table(table: 'bear_access_token_app', callback: static function (Blueprint $table) {
            $table->dropColumn( 'server_hostname_restriction');
            $table->dropColumn( 'last_usage_at');
            $table->date(column: 'last_usage_date')->nullable();
        });
    }

    public function down(): void {
        throw new RuntimeException(message: 'Cannot reverse this migration.');
    }
};
