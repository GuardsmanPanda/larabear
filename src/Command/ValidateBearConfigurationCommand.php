<?php

namespace GuardsmanPanda\Larabear\Command;

use GuardsmanPanda\Larabear\Service\TerminalService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class ValidateBearConfigurationCommand extends Command {
    protected $signature = 'bear';
    protected $description = 'Validate the configuration for larabear';
    private TerminalService $terminalService;

    public function handle(): void {
        $this->terminalService = new TerminalService($this->output);
        $this->terminalService->printH1(headline: 'Validate larabear configuration');
        $this->validateSessionSettings();
    }


    private function validateSessionSettings(): void {
        $this->terminalService->printH2(headline: 'Validate session settings');
        $this->terminalService->printTestResult(
            testName: 'Session Domain Should Be Null',
            errorMessage: Config::get('session.domain') !== null ? "Session domain 'domain' in config/session.php should be null" : null
        );
    }
}