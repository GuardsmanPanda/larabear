<?php declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('bear_error', static function (Blueprint $table) {
            $table->dropForeign('error_severity_foreign');
        });
        Schema::dropIfExists('bear_severity');
    }

    public function down(): void {
        throw new Exception('Cannot rollback this migration');
    }
};
