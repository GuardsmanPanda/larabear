<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\Postmark;

use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use Illuminate\Support\Facades\Config;
use Postmark\PostmarkClient as MailClient;
use RuntimeException;
use Throwable;

class BearPostmarkClient {
    public static function sendMessage(
        string $to,
        string $subject,
        string $htmlBody = null,
        string $textBody = null,
        string $tag = null,
        string $replyTo = null,
        string $cc = null,
        string $bcc = null
    ): string|null {
        $client = new MailClient(serverToken: Config::get(key: 'bear.postmark_token') ?? throw new RuntimeException(message: 'Missing encrypted_api_token'));
        try {
            $result = $client->sendEmail(
                from: Config::get(key: 'bear.postmark_from_email') ?? throw new RuntimeException(message: 'Missing email_from'),
                to: $to,
                subject: $subject,
                htmlBody: $htmlBody,
                textBody: $textBody,
                tag: $tag,
                replyTo: $replyTo,
                cc: $cc,
                bcc: $bcc
            );
            return $result->messageId ?? throw new RuntimeException(message: 'No messageId returned');
        } catch (Throwable $t) {
            BearLogErrorCreator::create(
                message: "Exception, Message [{$t->getMessage()}]",
                namespace: 'larabear', key: 'postmark', exception: $t
            );
        }
        return null;
    }
}
