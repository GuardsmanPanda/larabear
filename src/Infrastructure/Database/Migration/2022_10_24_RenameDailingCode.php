<?php declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void {
        DB::statement("ALTER TABLE bear_country  RENAME COLUMN country_dialing_code TO country_calling_code");
    }

    public function down(): void {
        throw new RuntimeException('This migration cannot be reversed.');
    }
};
