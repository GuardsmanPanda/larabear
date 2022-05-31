<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_access_token_log', callback: static function (Blueprint $table) {
            $table->id();
            $table->ipAddress(column: 'request_ip');
            $table->text(column: 'country_code')->nullable();
            $table->text(column: 'http_method');
            $table->text(column: 'http_path');
            $table->integer(column: 'http_status_code');
            $table->text(column: 'response_body');
            $table->uuid(column: 'access_token_id');
            $table->integer(column: 'request_time_milliseconds');
            $table->boolean(column: 'is_processed')->default(false);
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign( 'access_token_id')->references('id')->on('bear_access_token');
        });
    }

    public function down(): void {
        Schema::dropIfExists('bear_access_token_log');
    }
};
