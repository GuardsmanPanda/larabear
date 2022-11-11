<?php

use Illuminate\Database\Migrations\Migration;
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
