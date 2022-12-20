<?php declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_log_login_history', callback: static function (Blueprint $table) {
            $table->id();
            $table->uuid(column: 'user_id')->nullable();
            $table->text(column: 'login_from_country_code')->nullable();
            $table->boolean(column: 'was_successful');
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('user_id')->references('id')->on('bear_user');
            $table->index(['user_id', 'created_at']);
        });
    }

    public function down(): void {
        Schema::dropIfExists('bear_log_login_history');
    }
};
