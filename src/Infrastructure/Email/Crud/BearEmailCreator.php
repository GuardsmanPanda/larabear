<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Email\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Email\Model\BearEmail;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Support\Str;

class BearEmailCreator {
    public static function create(
        string $email_to,
        string $email_subject,
        string $email_cc = null,
        string $email_bcc = null,
        string $email_tag = null,
        string $email_reply_to = null,
        CarbonInterface $email_sent_at = null,
        string $email_external_id = null,
        string $encrypted_text_body = null,
        string $encrypted_html_body = null
    ): BearEmail {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST']);

        $model = new BearEmail();
        $model->id = Str::uuid()->toString();

        $model->email_to = $email_to;
        $model->email_subject = $email_subject;
        $model->email_cc = $email_cc;
        $model->email_bcc = $email_bcc;
        $model->email_tag = $email_tag;
        $model->email_reply_to = $email_reply_to;
        $model->email_sent_at = $email_sent_at;
        $model->email_external_id = $email_external_id;
        $model->encrypted_text_body = $encrypted_text_body;
        $model->encrypted_html_body = $encrypted_html_body;

        $model->save();
        return $model;
    }
}
