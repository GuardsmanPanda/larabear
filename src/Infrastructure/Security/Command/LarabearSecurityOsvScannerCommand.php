<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Security\Command;

use Illuminate\Console\Command;

class LarabearSecurityOsvScannerCommand extends Command {
    protected $signature = 'bear:osv';
    protected $description = 'Scans the repository with the OSV tool.';

    public function handle(): void {
        $this->info('Scanning the repository with the OSV tool...');
        exec(command: 'go version', output: $res, result_code: $code);
        dd($res, $code);
    }
}