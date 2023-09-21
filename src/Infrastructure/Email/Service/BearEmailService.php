<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Email\Service;

use GuardsmanPanda\Larabear\Infrastructure\Email\Crud\BearEmailUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Email\Model\BearEmail;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use GuardsmanPanda\Larabear\Integration\Postmark\Client\BearPostmarkClient;
use GuardsmanPanda\Larabear\Integration\Postmark\Data\BearPostMarkClientResponse;
use RuntimeException;

final class BearEmailService {
    public static function sendEmail(BearEmail $email): BearEmail {
        $updater = BearEmailUpdater::fromId(id: $email->id, lockForUpdate: true);
        if ($updater->getEmailSentAt() !== null) {
            throw new RuntimeException(message: 'Email already sent');
        }
        $result = BearPostmarkClient::sendMessage(
            to: $email->email_to,
            subject: $email->email_subject,
            htmlBody: $email->email_html,
            textBody: $email->email_text,
            tag: $email->email_tag,
            replyTo: $email->email_reply_to,
            cc: $email->email_cc,
            bcc: $email->email_bcc,
            sandbox: $email->is_sandboxed,
            attachments: $email->additional_data_json['attachments'] ?? []
        );
        if ($result->code !== 0) {
            return $updater->setEmailError(email_error_code: $result->code, email_error_message: $result->message)->update();
        }
        return $updater->setEmailSendData(email_postmark_id: $result->messageId ?? throw new RuntimeException(message: 'No email id found'))->update();
    }

    /**
     * @param string $to
     * @param string $subject
     * @param string $view
     * @param array<string, mixed> $data
     * @param string|null $tag
     * @param string|null $replyTo
     * @param string|null $cc
     * @param string|null $bcc
     * @param bool $sandbox
     * @return BearPostMarkClientResponse
     */
    public static function sendView(
        string $to,
        string $subject,
        string $view,
        array $data = [],
        string $tag = null,
        string $replyTo = null,
        string $cc = null,
        string $bcc = null,
        bool $sandbox = false
    ): BearPostMarkClientResponse {
        return BearPostmarkClient::sendMessage(
            to: $to,
            subject: $subject,
            htmlBody: Resp::view(view: $view, data: $data)->toHtml(),
            tag: $tag,
            replyTo: $replyTo,
            cc: $cc,
            bcc: $bcc,
            sandbox: $sandbox
        );
    }
}
