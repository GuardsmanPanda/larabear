<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Security\Command;

use Illuminate\Console\Command;

class LarabearSecurityOsvScannerCommand extends Command {
    protected $signature = 'bear:osv';
    protected $description = 'Scans the repository with the OSV tool.';

    public function handle(): void {
        $this->info('Scanning the repository with the OSV tool...');
        exec(command: 'go version', output: $res, result_code: $code);
        if ($code !== 0) {
            $this->error(string: 'Go is not installed. Please install Go and try again. https://golang.org/doc/install');
            return;
        }
        exec(command: 'go get github.com/ossf/osv/cmd/osv@latest', output: $res, result_code: $code);
    }
}