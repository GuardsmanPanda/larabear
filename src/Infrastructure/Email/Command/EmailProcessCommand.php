<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Email\Command;

use GuardsmanPanda\Larabear\Infrastructure\Email\Model\BearEmail;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use GuardsmanPanda\Larabear\Integration\Postmark\Client\BearPostmarkClient;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Throwable;

class EmailProcessCommand extends Command {
    protected $signature = 'bear:email-process';
    protected $description = 'Process emails';

    public function handle(): void {
        $emails = BearEmail::fromQuery(query: "SELECT * FROM email WHERE email_sent_at IS NULL");
        foreach ($emails as $email) {
            try {
                DB::beginTransaction();
                BearPostmarkClient::sendEmail(email: $email);
                DB::commit();
            } catch (Throwable $t) {
                DB::rollBack();
                BearLogErrorCreator::create(
                    message: "Failure to send email [{$t->getMessage()}]",
                    namespace: 'larabear', key: 'email-send-command',
                    exception: $t
                );
            }
        }
    }
}
