<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_error_response', callback: static function (Blueprint $table) {
            $table->id();
            $table->ipAddress(column: 'ip')->index();
            $table->uuid(column: 'user_id')->nullable()->index();
            $table->integer(column: 'status_code')->index();
            $table->text(column: 'country_code')->nullable();
            $table->text(column: 'http_method');
            $table->text(column: 'http_path');
            $table->jsonb(column: 'query_json')->nullable();
            $table->mediumText(column: 'content')->nullable();
            $table->text(column: 'hostname');
            $table->text(column: 'referer')->nullable();
            $table->text(column: 'action_name')->nullable();
            $table->text(column: 'response_body');
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text(column: 'request_id')->nullable();
            $table->foreign('user_id')->references('id')->on(table: 'bear_user');
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_error_response');
    }
};
