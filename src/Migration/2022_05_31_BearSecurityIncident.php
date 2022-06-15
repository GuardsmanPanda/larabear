<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        $config = Config::get(key: 'bear.user_table');
        if ($config === null) {
            throw new RuntimeException(message: 'bear.user_table is not configured, run "php artisan bear" to fix this problem.');
        }

        Schema::create(table: 'bear_security_incident', callback: static function (Blueprint $table) use ($config): void {
            $table->id();

            if (DB::getPdo()->getAttribute(PDO::ATTR_DRIVER_NAME) === 'pgsql') {
                $table->text(column: 'security_incident_severity');
                $table->text(column: 'security_incident_namespace')->default('default');
                $table->text(column: 'security_incident_headline');
                $table->text(column: 'security_incident_description');
            } else {
                $table->string(column: 'security_incident_severity');
                $table->string(column: 'security_incident_namespace')->default('default');
                $table->string(column: 'security_incident_headline');
                $table->string(column: 'security_incident_description');
            }

            $table->text(column: 'security_incident_remediation')->nullable();
            $table->text(column: 'security_incident_reference')->nullable();

            if ($config['primary_key_type'] === 'uuid') {
                $table->uuid(column: 'caused_by_user_id')->nullable();
            } else if ($config['primary_key_type'] === 'biginteger') {
                $table->bigInteger(column: 'caused_by_user_id')->unsigned()->nullable();
            } else if ($config['primary_key_type'] === 'integer') {
                $table->integer(column: 'caused_by_user_id')->unsigned()->nullable();
            } else {
                $table->text(column: 'caused_by_user_id')->nullable();
            }

            $table->ipAddress(column: 'request_ip')->nullable();

            if (DB::getPdo()->getAttribute(PDO::ATTR_DRIVER_NAME) === 'pgsql') {
                $table->text(column: 'request_country_code')->nullable();
                $table->text(column: 'request_http_method');
                $table->text(column: 'request_http_path')->nullable();
                $table->text(column: 'request_http_query')->nullable();
                $table->text(column: 'request_http_hostname')->nullable();
            } else {
                $table->string(column: 'request_country_code')->nullable();
                $table->string(column: 'request_http_method');
                $table->string(column: 'request_http_path')->nullable();
                $table->string(column: 'request_http_query')->nullable();
                $table->string(column: 'request_http_hostname')->nullable();
            }

            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('caused_by_user_id')->references($config['primary_key_column'])->on($config['table_name']);
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_security_incident');
    }
};
