<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_security_incident_enum', callback: static function (Blueprint $table): void {
            if (DB::getPdo()->getAttribute(PDO::ATTR_DRIVER_NAME) === 'pgsql') {
                $table->text(column: 'slug')->primary();
                $table->text(column: 'security_incident_enum_name');
                $table->text(column: 'security_incident_enum_description');
            } else {
                $table->string(column: 'slug')->primary();
                $table->string(column: 'security_incident_enum_name');
                $table->string(column: 'security_incident_enum_description');
            }
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        DB::table(table: 'bear_security_incident_enum')->insert([
            ['slug' => 'BASELINE', 'name' => 'Baseline', 'description' => 'Incidents which are unlikely to cause any damage, and can safely be ignored.'],
            ['slug' => 'LOW', 'name' => 'Low', 'description' => 'Incidents could are unlikely to be a risk, but should be investigated and resolved.'],
            ['slug' => 'MEDIUM', 'name' => 'Medium', 'description' => 'Incidents could be a risk, or a sign of an attempted breach.'],
            ['slug' => 'HIGH', 'name' => 'High', 'description' => 'Incidents which are likely to cause a breach of security, or a security incident.'],
            ['slug' => 'CRITICAL', 'name' => 'Critical', 'description' => 'Incidents which MUST be investigated and resolved ASAP.'],
            ['slug' => 'EMERGENCY', 'name' => 'Emergency', 'description' => 'This signifies that a security breach has already occurred, and must be investigated and resolved immediately.'],
        ]);

        Schema::table(table: 'bear_security_incident', callback: static function (Blueprint $table): void {
            $table->foreign('security_incident_severity')->references('slug')->on('bear_security_incident_enum');
        });
    }

    public function down(): void {
        Schema::table(table: 'bear_security_incident', callback: static function (Blueprint $table): void {
            $table->dropForeign('security_incident_severity');
        });
        Schema::dropIfExists('bear_security_incident_enum');
    }
};
