<?php declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists('bear_log_login_history');
        Schema::create(table: 'bear_user_login_history', callback: static function (Blueprint $table) {
            $table->id();
            $table->uuid(column: 'user_id')->nullable();
            $table->text(column: 'login_type');
            $table->text(column: 'request_country_code')->nullable();
            $table->ipAddress(column: 'request_ip')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->index();
            $table->foreign('user_id')->references('id')->on('bear_user');
            $table->index(['user_id', 'created_at']);
        });
    }

    public function down(): void {
        Schema::dropIfExists('bear_user_login_history');
    }
};
