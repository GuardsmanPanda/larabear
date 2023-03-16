<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Email\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Email\Model\BearEmail;
use Illuminate\Routing\Controller;

final class LarabearEmailController extends Controller {
    public function emailContent(BearEmail $email): string {
        return $email->email_html ?? $email->email_text ?? 'No email content found.';
    }
}
