<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_security_incident', callback: static function (Blueprint $table) {
            $table->id();
            $table->text(column: 'severity');
            $table->text(column: 'namespace')->default('default');
            $table->text(column: 'headline');
            $table->text(column: 'description');
            $table->text(column: 'remediation')->nullable();
            $table->text(column: 'reference')->nullable();
            $table->ipAddress(column: 'request_ip');
            $table->text(column: 'user_id')->nullable();
            $table->text(column: 'country_code')->nullable();
            $table->text(column: 'http_method');
            $table->text(column: 'http_path');
            $table->text(column: 'http_query')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void {
        Schema::dropIfExists('bear_security_incident');
    }
};
