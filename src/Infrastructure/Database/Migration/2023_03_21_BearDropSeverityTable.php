<?php declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists(table: 'bear_error');
        Schema::dropIfExists(table: 'bear_severity');
    }

    public function down(): void {
        throw new RuntimeException(message: 'Cannot rollback this migration');
    }
};
