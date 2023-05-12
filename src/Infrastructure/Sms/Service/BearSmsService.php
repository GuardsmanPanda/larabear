<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Sms\Service;

use GuardsmanPanda\Larabear\Infrastructure\Sms\Crud\BearSmsUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Sms\Model\BearSms;
use GuardsmanPanda\Larabear\Integration\Twilio\Client\BearTwilioClient;
use RuntimeException;

final class BearSmsService {
    public static function sendSms(BearSms $sms): BearSms {
        $updater = BearSmsUpdater::fromId(id: $sms->id, lockForUpdate: true);
        if ($updater->getSmsSentAt() !== null) {
            throw new RuntimeException(message: "Sms [$sms->id] already sent");
        }
        $response = BearTwilioClient::sendSms(to_phone_number: $sms->to_phone_number, message: $sms->sms_message, is_sandboxed: $sms->is_sandboxed);
        if ($response->code === 0 && $response->sid !== null) {
            return $updater->setSmsSentData(sms_twilio_id: $response->sid)->update();
        }
        return $updater->setSmsError(sms_error_code: $response->code, sms_error_message: $response->error_message)->update();
    }
}
