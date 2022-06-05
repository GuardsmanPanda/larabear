<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_security_incident', callback: static function (Blueprint $table) {
            $table->id();
            $table->text(column: 'security_incident_severity');
            $table->text(column: 'security_incident_namespace')->default('default');
            $table->text(column: 'security_incident_headline');
            $table->text(column: 'security_incident_description');
            $table->text(column: 'security_incident_remediation')->nullable();
            $table->text(column: 'security_incident_reference')->nullable();
            $table->text(column: 'user_identifier')->nullable();
            $table->ipAddress(column: 'request_ip')->nullable();
            $table->text(column: 'request_country_code')->nullable();
            $table->text(column: 'request_http_method')->nullable();
            $table->text(column: 'request_http_path')->nullable();
            $table->text(column: 'request_http_query')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void {
        Schema::dropIfExists('bear_security_incident');
    }
};
