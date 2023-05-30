<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Sms\Service;

use GuardsmanPanda\Larabear\Infrastructure\Sms\Crud\BearSmsUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Sms\Model\BearSms;
use GuardsmanPanda\Larabear\Integration\Twilio\Client\BearTwilioClient;
use RuntimeException;

final class BearSmsService {
    public static function sendSms(BearSms $sms): BearSms {
        $updater = BearSmsUpdater::fromId(id: $sms->id, lockForUpdate: true);
        if ($updater->getSentAt() !== null) {
            throw new RuntimeException(message: "Sms [$sms->id] already sent");
        }
        $response = BearTwilioClient::sendSms(phone_number: $sms->phone_number, message: $sms->message, is_sandboxed: $sms->is_sandboxed);
        if ($response->code === 0 && $response->sid !== null) {
            return $updater->setSentData(twilio_id: $response->sid)->update();
        }
        return $updater->setError(error_code: $response->code, error_message: $response->error_message)->update();
    }
}
