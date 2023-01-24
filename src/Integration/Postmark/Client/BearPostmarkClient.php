<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\Postmark\Client;

use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use GuardsmanPanda\Larabear\Integration\Postmark\Data\BearPostMarkClientResponseData;
use Illuminate\Support\Facades\Config;
use Postmark\PostmarkClient as MailClient;
use RuntimeException;
use Throwable;

final class BearPostmarkClient {
    public static function sendMessage(
        string $to,
        string $subject,
        string $htmlBody = null,
        string $textBody = null,
        string $tag = null,
        string $replyTo = null,
        string $cc = null,
        string $bcc = null,
        bool $sandbox = false
    ): BearPostMarkClientResponseData {
        $client = new MailClient(serverToken: self::getPostmarkToken(sandbox: $sandbox));
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
            return new BearPostMarkClientResponseData(message: $result->Message ?? "Success", code: $result->ErrorCode ?? 0, messageId: $result->MessageID ?? null);
        } catch (Throwable $t) {
            BearLogErrorCreator::create(
                message: "Exception when sending email, Message [{$t->getMessage()}]",
                namespace: 'larabear', key: 'postmark-direct',
                exception: $t
            );
            return new BearPostMarkClientResponseData(message: "Exception when sending email, Message [{$t->getMessage()}]", code: -1, messageId: null);
        }
    }

    private static function getPostmarkToken(bool $sandbox): string {
        return $sandbox ? (Config::get(key: 'bear.postmark_sandbox_token') ?? throw new RuntimeException(message: 'Missing postmark_sandbox_token')) : (Config::get(key: 'bear.postmark_token') ?? throw new RuntimeException(message: 'Missing postmark_token'));
    }
}
