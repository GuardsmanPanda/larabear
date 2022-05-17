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
        $this->terminalService->printH1(headline: 'Validating larabear configuration');
        $this->validateSessionSettings();
    }


    private function validateSessionSettings(): void {
        $this->terminalService->printH2(headline: 'Validating session settings');
        $this->terminalService->printTestResult(
            testName: 'Domain Should Be Null',
            errorMessage: Config::get('session.domain') !== null ? "'domain'  in config/session.php should be null" : null
        );
        $this->terminalService->printTestResult(
            testName: 'Http Only Should Be True',
            errorMessage: Config::get('session.http_only') !== true ? "'http_only'  in config/session.php should be true" : null
        );
        $this->terminalService->printTestResult(
            testName: 'Secure Should Be True',
            errorMessage: Config::get('session.secure') !== true ? "'secure'  in config/session.php should be true" : null
        );
        $this->terminalService->printTestResult(
            testName: "Path Should Be '/",
            errorMessage: Config::get('session.path') !== '/' ? "'path'  in config/session.php should be '/'" : null
        );
        $this->terminalService->printTestResult(
            testName: 'Same Site Should Be Strict or Lax',
            errorMessage: in_array(needle:  Config::get('session.same_site'), haystack: ['lax', 'strict']) ? null : "'same_site'  in config/session.php should be null"
        );
        $this->terminalService->printTestResult(
            testName: "Cookie Name Should Start With '__host-'",
            errorMessage: str_starts_with(haystack: Config::get('session.cookie'), needle: '__host-') ? null : "'cookie'  in config/session.php should start_with '__host-'"
        );
        $this->terminalService->printTestResult(
            testName: "Session Only Encryption Key Should Be Set",
            errorMessage: Config::get('bear.cookie.session_key') === null ? "Missing session encryption key, generate with 'php artisan bear:generate-session-key' and check 'cookie' => 'session_key' config/bear.php" : null
        );
    }
}