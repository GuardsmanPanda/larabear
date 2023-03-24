<?php declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table(table: 'bear_external_api', callback: static function (Blueprint $table) {
            $table->uuid(column: 'oauth2_client_id')->nullable();
            $table->foreign('oauth2_client_id')->references('oauth2_client_id')->on('bear_oauth2_client');
        });
    }

    public function down(): void {
        throw new RuntimeException(message: 'Cannot reverse this migration.');
    }
};
