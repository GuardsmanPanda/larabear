<?php declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists(table: 'bear_language_tag');
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_language_tag');
    }
};
