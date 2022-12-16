<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Email\Command;

use Illuminate\Console\Command;

class EmailProcessCommand extends Command {
    protected $signature = 'bear:email-process';
    protected $description = 'Process emails';

    public function handle(): void {

    }
}
