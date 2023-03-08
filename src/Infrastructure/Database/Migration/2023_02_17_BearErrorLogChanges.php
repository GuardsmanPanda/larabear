<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigCreator;
use GuardsmanPanda\Larabear\Infrastructure\Config\Enum\BearConfigType;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void {
        BearConfigCreator::create(
            config_key: 'larabear::max-error-mail-per-key-per-hour',
            config_description: 'Only send this many error emails per hour per error key, email_status_text on error table will be "MAIL_LIMIT_EXCEEDED" if limit was exceeded',
            config_data_type: BearConfigType::INTEGER,
            config_integer: 7
        );
    }

    public function down(): void {
        throw new RuntimeException(message: 'Cannot reverse this migration.');
    }
};
