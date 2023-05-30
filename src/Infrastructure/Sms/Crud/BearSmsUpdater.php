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


    public function setPhoneNumber(string $phone_number): self {
        $this->model->phone_number = $phone_number;
        return $this;
    }

    public function setMessage(string $message): self {
        $this->model->message = $message;
        return $this;
    }

    public function setIsSandboxed(bool $is_sandboxed): self {
        $this->model->is_sandboxed = $is_sandboxed;
        return $this;
    }

    public function setTag(string|null $tag): self {
        $this->model->tag = $tag;
        return $this;
    }

    public function setSentData(string $twilio_id): self {
        $this->model->twilio_id = $twilio_id;
        $this->model->sent_at = now();
        $this->model->error_code = null;
        $this->model->error_message = null;
        return $this;
    }

    public function setError(int $error_code, string $error_message): self {
        $this->model->error_message = $error_message;
        $this->model->error_code = $error_code;
        return $this;
    }

    public function getSentAt(): CarbonInterface|null {
        return $this->model->sent_at;
    }

    public function update(): BearSms {
        $this->model->save();
        return $this->model;
    }
}
