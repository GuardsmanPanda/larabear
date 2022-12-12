<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        DB::statement("ALTER TABLE bear_country  RENAME COLUMN country_dialing_code TO country_calling_code");
    }

    public function down(): void {
        throw new RuntimeException('This migration cannot be reversed.');
    }
};
