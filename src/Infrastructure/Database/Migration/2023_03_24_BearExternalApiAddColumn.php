<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table(table: 'bear_external_api', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->text(column: 'oauth2_client_id')->nullable();
            } else {
                $table->string(column: 'oauth2_client_id', length: 36)->nullable();
            }
            $table->foreign('oauth2_client_id')->references('oauth2_client_id')->on('bear_oauth2_client');
        });
    }

    public function down(): void {
        throw new RuntimeException(message: 'Cannot reverse this migration.');
    }
};
