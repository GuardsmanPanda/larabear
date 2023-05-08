<?php declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('bear_access_token_app', static function (Blueprint $table) {
                $table->uuid(column: 'external_api_id')->nullable();
                $table->foreign('external_api_id')->references( 'id')->on( 'bear_external_api');
        });
    }

    public function down(): void {
        throw new RuntimeException(message: 'Cannot reverse this migration.');
    }
};
