<?php declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists('bear_severity');
    }

    public function down(): void {
        throw new Exception('Cannot rollback this migration');
    }
};
