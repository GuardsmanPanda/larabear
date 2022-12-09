<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Email\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Email\Model\BearEmail;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

class BearEmailUpdater {
    public function __construct(private readonly BearEmail $model) {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['PATCH']);
    }

    public static function fromId(string $id): self {
        return new self(model: BearEmail::findOrFail(id: $id));
    }


    public function setEmailTo(string $email_to): self {
        $this->model->email_to = $email_to;
        return $this;
    }

    public function setEmailSubject(string $email_subject): self {
        $this->model->email_subject = $email_subject;
        return $this;
    }

    public function setEmailCc(string|null $email_cc): self {
        $this->model->email_cc = $email_cc;
        return $this;
    }

    public function setEmailBcc(string|null $email_bcc): self {
        $this->model->email_bcc = $email_bcc;
        return $this;
    }

    public function setEmailTag(string|null $email_tag): self {
        $this->model->email_tag = $email_tag;
        return $this;
    }

    public function setEmailReplyTo(string|null $email_reply_to): self {
        $this->model->email_reply_to = $email_reply_to;
        return $this;
    }

    public function setEmailSentAt(CarbonInterface|null $email_sent_at): self {
        if ($email_sent_at?->toIso8601String() === $this->model->email_sent_at?->toIso8601String()) {
            return $this;
        }
        $this->model->email_sent_at = $email_sent_at;
        return $this;
    }

    public function setEmailExternalId(string|null $email_external_id): self {
        $this->model->email_external_id = $email_external_id;
        return $this;
    }

    public function setEncryptedTextBody(string|null $encrypted_text_body): self {
        $this->model->encrypted_text_body = $encrypted_text_body;
        return $this;
    }

    public function setEncryptedHtmlBody(string|null $encrypted_html_body): self {
        $this->model->encrypted_html_body = $encrypted_html_body;
        return $this;
    }

    public function update(): BearEmail {
        $this->model->save();
        return $this->model;
    }
}
