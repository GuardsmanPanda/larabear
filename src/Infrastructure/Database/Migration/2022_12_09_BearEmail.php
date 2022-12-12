<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create(table: 'bear_email', callback: static function (Blueprint $table) {
            if (BearDatabaseService::defaultConnectionDriver() === 'pgsql') {
                $table->uuid(column: 'id')->primary()->default(DB::raw('gen_random_uuid()'));
                $table->text(column: 'email_to')->index();
                $table->text(column: 'email_cc')->nullable();
                $table->text(column: 'email_bcc')->nullable();
                $table->text(column: 'email_tag')->nullable();
                $table->text(column: 'email_subject');
                $table->text(column: 'email_reply_to')->nullable();
            } else {
                $table->uuid(column: 'id')->primary();
                $table->string(column: 'email_to')->index();
                $table->string(column: 'email_cc')->nullable();
                $table->string(column: 'email_bcc')->nullable();
                $table->string(column: 'email_tag')->nullable();
                $table->string(column: 'email_subject');
                $table->string(column: 'email_reply_to')->nullable();
            }
            $table->boolean(column: 'sandbox')->default(false);
            $table->timestampTz(column: 'email_sent_at')->nullable();
            $table->uuid(column: 'email_external_id')->nullable();
            $table->text(column: 'encrypted_text_body')->nullable();
            $table->text(column: 'encrypted_html_body')->nullable();
            $table->timestampTz(column: 'created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz(column: 'updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->useCurrentOnUpdate();
        });
    }

    public function down(): void {
        Schema::dropIfExists(table: 'bear_email');
    }
};
