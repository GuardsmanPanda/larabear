<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_severity', callback: static function (Blueprint $table): void {
            if (DB::getPdo()->getAttribute(PDO::ATTR_DRIVER_NAME) === 'pgsql') {
                $table->text(column: 'slug')->primary();
                $table->text(column: 'severity_name');
                $table->text(column: 'severity_description');
            } else {
                $table->string(column: 'slug')->primary();
                $table->string(column: 'severity_name');
                $table->string(column: 'severity_description');
            }
            $table->tinyInteger(column: 'severity_level');
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        DB::table(table: 'bear_severity')->insert([
            ['slug' => 'BASELINE', 'severity_name' => 'Baseline', 'severity_description' => 'Can safely be ignored, but should eventually be resolved.', 'severity_level' => 6],
            ['slug' => 'LOW', 'severity_name' => 'Low', 'severity_description' => 'Unlikely to cause significant issues, but should be investigated.', 'severity_level' => 5],
            ['slug' => 'MEDIUM', 'severity_name' => 'Medium', 'severity_description' => 'Might cause significant issues, or may have already caused minor issues.', 'severity_level' => 4],
            ['slug' => 'HIGH', 'severity_name' => 'High', 'severity_description' => 'Likely to cause significant issues, or may have already cause moderate issues.', 'severity_level' => 3],
            ['slug' => 'CRITICAL', 'severity_name' => 'Critical', 'severity_description' => 'Something is critically broken, MUST be investigated.', 'severity_level' => 2],
            ['slug' => 'EMERGENCY', 'severity_name' => 'Emergency', 'severity_description' => 'All hands situation, MUST be resolved immediately.', 'severity_level' => 1],
        ]);

        Schema::table(table: 'bear_security_incident', callback: static function (Blueprint $table): void {
            $table->foreign('security_incident_severity', 'security_incident_severity_foreign')->references('slug')->on('bear_severity');
        });
    }

    public function down(): void {
        Schema::table(table: 'bear_security_incident', callback: static function (Blueprint $table): void {
            $table->dropForeign('security_incident_severity_foreign');
        });
        Schema::dropIfExists('bear_severity');
    }
};
