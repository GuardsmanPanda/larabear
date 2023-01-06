<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\Postmark\Client;

use GuardsmanPanda\Larabear\Infrastructure\Email\Crud\BearEmailUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Email\Model\BearEmail;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
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
    ): string|null {
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
            $code = $result->ErrorCode ?? -1;
            $message = $result->Message ?? 'Unknown error';
            return $result->MessageID ?? throw new RuntimeException(message: "Postmark error: $code - $message");
        } catch (Throwable $t) {
            BearLogErrorCreator::create(
                message: "Exception when sending email, Message [{$t->getMessage()}]",
                namespace: 'larabear', key: 'postmark-direct',
                exception: $t
            );
        }
        return null;
    }


    public static function sendEmail(BearEmail $email): void {
        $updater = BearEmailUpdater::fromId(id: $email->id, lockForUpdate: true);
        if ($updater->getEmailSentAt() !== null) {
            throw new RuntimeException(message: 'Email already sent');
        }
        $client = new MailClient(serverToken: self::getPostmarkToken(sandbox: $email->is_sandboxed));
        if ($email->email_to === null || $email->email_subject === null) {
            throw new RuntimeException(message: 'Email to or subject is null');
        }
        $result = $client->sendEmail(
            from: Config::get(key: 'bear.postmark_from_email') ?? throw new RuntimeException(message: 'Missing email_from'),
            to: $email->email_to,
            subject: $email->email_subject,
            htmlBody: $email->email_html,
            textBody: $email->email_text,
            tag: $email->email_tag,
            replyTo: $email->email_reply_to,
            cc: $email->email_cc,
            bcc: $email->email_bcc
        );
        $code = $result->ErrorCode ?? -1;
        $message = $result->Message ?? 'Unknown error';
        if ($code !== 0) {
            $updater->setEmailError(email_error_code: $code, email_error_message: $message)->update();
        } else {
            $updater->setEmailSendData(email_postmark_id: $result->MessageID ?? throw new RuntimeException(message: 'No email id found'))->update();
        }
    }


    private static function getPostmarkToken(bool $sandbox): string {
        return $sandbox ? (Config::get(key: 'bear.postmark_sandbox_token') ?? throw new RuntimeException(message: 'Missing postmark_sandbox_token')) : (Config::get(key: 'bear.postmark_token') ?? throw new RuntimeException(message: 'Missing postmark_token'));
    }
}
