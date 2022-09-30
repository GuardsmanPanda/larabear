<?php

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearMigrationService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists(table: 'bear_security_incident');
        Schema::dropIfExists(table: 'bear_log_security_incident');
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_log_security_incident');
    }
};
