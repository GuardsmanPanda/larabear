<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\Twilio\Client;

use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Client\BearExternalApiClient;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Model\BearExternalApi;
use GuardsmanPanda\Larabear\Integration\Twilio\Data\BearTwilioSmsResponse;
use RuntimeException;
use Throwable;

final class BearTwilioClient {
    public static function sendSms(string $to_phone_number, string $message, bool $is_sandboxed = false): BearTwilioSmsResponse {
        $slug = $is_sandboxed ? 'twilio-sandbox' : 'twilio';
        $external = BearExternalApi::where(column: 'external_api_slug', operator: '=', value: $slug)->first();
        if ($external === null) {
            BearErrorCreator::create(message: "Twilio External Api With Slug [$slug], Not Found In bear_external_api Table", key: 'larabear::twilio-client');
            return new BearTwilioSmsResponse(error_message: 'Twilio External Api Not Found');
        }

        $client = BearExternalApiClient::fromExternalApi(api: $external);
        try {
            $response = $client->request(path: "Messages.json", method: 'POST', body: [
                'To' => $to_phone_number,
                'From' => $external->external_api_metadata_json['from_phone_number'] ?? throw new RuntimeException(message: 'Missing from_phone_number in external_api_metadata_json'),
                'Body' => $message
            ]);
            if ($response->successful() || $response->clientError()) {
                $json = $response->json();
                return new BearTwilioSmsResponse(error_message: $json['error_message'] ?? '', code: $json['error_code'] ?? 0, sid: $json['sid']);
            }
            BearErrorCreator::create(message: "Twilio Error: {$response->body()}", key: 'larabear::twilio-client-exception');
            return new BearTwilioSmsResponse(error_message: "Twilio Error: {$response->body()}");
        } catch (Throwable $t) {
            return new BearTwilioSmsResponse(error_message: "Twilio Error: {$t->getMessage()}");
        }
    }
}
