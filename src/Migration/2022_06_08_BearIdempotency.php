<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_idempotency', callback: static function (Blueprint $table): void {
            if (DB::getPdo()->getAttribute(PDO::ATTR_DRIVER_NAME) === 'pgsql') {
                $table->text(column: 'idempotency_key')->primary();
                $table->ipAddress(column: 'request_ip')->nullable();
                $table->text(column: 'request_country_code')->nullable();
                $table->text(column: 'request_http_method');
                $table->text(column: 'request_http_path')->nullable();
            } else {
                $table->string(column: 'idempotency_key')->primary();
                $table->ipAddress(column: 'request_ip')->nullable();
                $table->string(column: 'request_country_code')->nullable();
                $table->string(column: 'request_http_method');
                $table->string(column: 'request_http_path')->nullable();
            }
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_idempotency');
    }
};
