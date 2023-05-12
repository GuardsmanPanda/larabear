<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Sms\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Sms\Model\BearSms;

final class BearSmsUpdater {
    public function __construct(private readonly BearSms $model) {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);
    }

    public static function fromId(string $id, bool $lockForUpdate = false): self {
        if ($lockForUpdate) {
            return new self(model: BearSms::lockForUpdate()->findOrFail(id: $id));
        }
        return new self(model: BearSms::findOrFail(id: $id));
    }


    public function setToPhoneNumber(string $to_phone_number): self {
        $this->model->to_phone_number = $to_phone_number;
        return $this;
    }

    public function setSmsMessage(string $sms_message): self {
        $this->model->sms_message = $sms_message;
        return $this;
    }

    public function setIsSandboxed(bool $is_sandboxed): self {
        $this->model->is_sandboxed = $is_sandboxed;
        return $this;
    }

    public function setSmsTag(string|null $sms_tag): self {
        $this->model->sms_tag = $sms_tag;
        return $this;
    }

    public function setSmsSentData(string $sms_twilio_id): self {
        $this->model->sms_twilio_id = $sms_twilio_id;
        $this->model->sms_sent_at = now();
        $this->model->sms_error_code = null;
        $this->model->sms_error_message = null;
        return $this;
    }

    public function setSmsError(int $sms_error_code, string $sms_error_message): self {
        $this->model->sms_error_message = $sms_error_message;
        $this->model->sms_error_code = $sms_error_code;
        return $this;
    }

    public function getSmsSentAt(): CarbonInterface|null {
        return $this->model->sms_sent_at;
    }

    public function update(): BearSms {
        $this->model->save();
        return $this->model;
    }
}
