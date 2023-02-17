<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Email\Command;

use GuardsmanPanda\Larabear\Infrastructure\Email\Model\BearEmail;
use GuardsmanPanda\Larabear\Infrastructure\Email\Service\BearEmailService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use GuardsmanPanda\Larabear\Integration\Postmark\Client\BearPostmarkClient;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Throwable;

final class LarabearEmailProcessCommand extends Command {
    protected $signature = 'larabear:email-process';
    protected $description = 'Process emails';

    public function handle(): void {
        $emails = BearEmail::fromQuery(query: "SELECT * FROM bear_email WHERE email_sent_at IS NULL AND email_error_code IS NULL ORDER BY created_at LIMIT 3");
        foreach ($emails as $email) {
            try {
                DB::beginTransaction();
                BearEmailService::sendEmail(email: $email);
                DB::commit();
            } catch (Throwable $t) {
                DB::rollBack();
                BearErrorCreator::create(
                    message: "Failure to send email [{$t->getMessage()}]",
                    key: 'larabear::email-send-command',
                    exception: $t
                );
            }
        }
    }
}
