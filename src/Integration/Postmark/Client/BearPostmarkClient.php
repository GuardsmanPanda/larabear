<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\Postmark\Client;

use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Client\BearExternalApiClient;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Model\BearExternalApi;
use GuardsmanPanda\Larabear\Integration\Postmark\Data\BearPostMarkClientResponse;
use RuntimeException;
use Throwable;

final class BearPostmarkClient {
    /**
     * @param string $to
     * @param string $subject
     * @param string|null $htmlBody
     * @param string|null $textBody
     * @param string|null $tag
     * @param string|null $replyTo
     * @param string|null $cc
     * @param string|null $bcc
     * @param bool $sandbox
     * @param array<array<string,string>> $attachments
     * @return BearPostMarkClientResponse
     */
    public static function sendMessage(
        string $to,
        string $subject,
        string $htmlBody = null,
        string $textBody = null,
        string $tag = null,
        string $replyTo = null,
        string $cc = null,
        string $bcc = null,
        bool $sandbox = false,
        array $attachments = []
    ): BearPostMarkClientResponse {
        $slug = $sandbox ? 'postmark-sandbox' : 'postmark';
        $external = BearExternalApi::where(column: 'external_api_slug', operator: '=', value: $slug)->first();
        if ($external === null) {
            BearErrorCreator::create(message: "Postmark External Api With Slug [$slug], Not Found In bear_external_api Table", slug: 'larabear::postmark-client');
            return new BearPostMarkClientResponse(message: "Postmark external Api Not Found", code: -1, messageId: null);
        }
        $client = BearExternalApiClient::fromExternalApi(api: $external);
        try {
            $result = $client->request(path: 'email', method: 'POST', body: [
                'From' => $external->metadata_json['from'] ?? throw new RuntimeException(message: 'Missing from in external_api_metadata_json'),
                'To' => $to,
                'subject' => $subject,
                'HtmlBody' => $htmlBody,
                'TextBody' => $textBody,
                'Tag' => $tag,
                'ReplyTo' => $replyTo,
                'Cc' => $cc,
                'Bcc' => $bcc,
                'Attachments' => $attachments
            ])->json();
            return new BearPostMarkClientResponse(message: $result['Message'] ?? "Success", code: $result['ErrorCode'] ?? 0, messageId: $result['MessageID'] ?? null);
        } catch (Throwable $t) {
            BearErrorCreator::create(
                message: "Exception when sending email, Message [{$t->getMessage()}]",
                slug: 'larabear::postmark-direct',
                exception: $t
            );
            return new BearPostMarkClientResponse(message: "Exception when sending email, Message [{$t->getMessage()}]", code: -1, messageId: null);
        }
    }
}
