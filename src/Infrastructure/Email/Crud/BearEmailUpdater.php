<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Email\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Email\Model\BearEmail;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

class BearEmailUpdater {
    public function __construct(private readonly BearEmail $model) {}

    public static function fromId(string $id, bool $lockForUpdate = false): self {
        if ($lockForUpdate) {
            return new self(model: BearEmail::lockForUpdate()->findOrFail(id: $id));
        }
        return new self(model: BearEmail::findOrFail(id: $id));
    }


    public function setEmailSentAt(CarbonInterface|null $email_sent_at): self {
        $this->model->email_sent_at = $email_sent_at;
        return $this;
    }

    public function setEmailPostmarkId(string|null $email_postmark_id): self {
        $this->model->email_postmark_id = $email_postmark_id;
        return $this;
    }

    public function setEmailErrorAt(CarbonInterface|null $email_error_at): self {
        $this->model->email_error_at = $email_error_at;
        return $this;
    }

    public function setEmailErrorCode(int|null $email_error_code): self {
        $this->model->email_error_code = $email_error_code;
        return $this;
    }

    public function setEmailErrorMessage(string|null $email_error_message): self {
        $this->model->email_error_message = $email_error_message;
        return $this;
    }

    public function getEmailSentAt(): CarbonInterface|null {
        return $this->model->email_sent_at;
    }

    public function update(): BearEmail {
        $this->model->save();
        return $this->model;
    }
}
