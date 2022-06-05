<?php

namespace GuardsmanPanda\Larabear\Command;

use GuardsmanPanda\Larabear\Service\TerminalService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class BearValidateConfigurationCommand extends Command {
    protected $signature = 'bear';
    protected $description = 'Validate the configuration for larabear';
    private TerminalService $terminalService;

    public function handle(): void {
        $this->terminalService = new TerminalService($this->output);
        $this->terminalService->printH1(headline: 'Validating larabear configuration');
        if (Config::get(key: 'bear') === null) {
            $this->terminalService->printTestResult(testName: '', errorMessage: 'Missing bear.php file in config/ directory please run "php artisan vendor:publish --tag=bear"');
            return;
        }
        $this->validateSessionSettings();
        $this->validateUptimeKumaSettings();
        $this->validateUserTableSettings();
        $this->output->writeln(messages: '');
    }


    private function validateSessionSettings(): void {
        $this->terminalService->printH2(headline: 'Validating session settings');
        $this->terminalService->printTestResult(
            testName: 'Domain Should Be Null',
            errorMessage: Config::get('session.domain') !== null ? "'domain'  in config/session.php should be null .. Current setting: " . Config::get('session.domain') : null
        );
        $this->terminalService->printTestResult(
            testName: 'Http Only Should Be True',
            errorMessage: Config::get('session.http_only') !== true ? "'http_only'  in config/session.php should be true .. Current setting: " . Config::get('session.http_only') : null
        );
        $this->terminalService->printTestResult(
            testName: 'Secure Should Be True',
            errorMessage: Config::get('session.secure') !== true ? "'secure'  in config/session.php should be true .. Current setting: " . Config::get('session.secure') : null
        );
        $this->terminalService->printTestResult(
            testName: "Path Should Be '/",
            errorMessage: Config::get('session.path') !== '/' ? "'path'  in config/session.php should be '/' .. Current setting: " . Config::get('session.path') : null
        );
        $this->terminalService->printTestResult(
            testName: 'Same Site Should Be Strict or Lax',
            errorMessage: in_array(needle: Config::get('session.same_site'), haystack: ['lax', 'strict']) ? null : "'same_site'  in config/session.php should be null .. Current setting: " . Config::get('session.same_site')
        );
        $this->terminalService->printTestResult(
            testName: "Cookie Name Should Start With '__host-'",
            errorMessage: str_starts_with(haystack: Config::get('session.cookie'), needle: '__host-') ? null : "'cookie'  in config/session.php should start_with '__host-' .. Current setting: " . Config::get('session.cookie')
        );
        $this->terminalService->printTestResult(
            testName: "Session Only Encryption Key Should Be Set",
            errorMessage: Config::get('bear.cookie.session_key') === null ? "Missing session encryption key, generate with 'php artisan bear:generate-session-key' and check 'cookie' => 'session_key' config/bear.php" : null
        );
    }


    private function validateUptimeKumaSettings(): void {
        $this->terminalService->printH2(headline: 'Validating uptime kuma settings');
        $config = Config::get('bear.uptime_kuma');
        if ($config === null) {
            $this->terminalService->printTestResult(
                testName: 'Uptime Kuma Settings Are Not Set',
                warningMessage: 'Missing uptime kuma settings, add "uptime_kuma" to config/bear.php'
            );
            return;
        }
        $this->terminalService->printTestResult(
            testName: 'Uptime Kuma Should Be In Config',
            errorMessage: array_key_exists(key: 'base_url', array: $config) ? null : "Missing uptime kuma base url, add 'base_url' to 'uptime_kuma' in config/bear.php"
        );
    }

    private function validateUserTableSettings(): void {
        $this->terminalService->printH2(headline: 'Validating user table settings');
        $config = Config::get(key: 'bear.user_table');
        if ($config === null) {
            $this->terminalService->printTestResult(
                testName: 'User Table Settings Are Not Set',
                errorMessage: 'Missing user table settings, add "user_table" to config/bear.php'
            );
            $this->output->writeln(messages: "
    'user_table' => [
        'table_name' => 'users',
        'primary_key_column' => 'id',
        'primary_key_type' => 'uuid', //Options uuid, integer, biginteger
    ],");
            return;
        }
        $this->terminalService->printTestResult(
            testName: 'User Table Should Be In Config',
            errorMessage: array_key_exists(key: 'table_name', array: $config) ? null : "Missing user table name, add 'table_name' to 'user_table' in config/bear.php"
        );
        $this->terminalService->printTestResult(
            testName: 'Primary Key Column Should Be In Config',
            errorMessage: array_key_exists(key: 'primary_key_column', array: $config) ? null : "Missing user table name, add 'primary_key_column' to 'user_table' in config/bear.php"
        );
        $this->terminalService->printTestResult(
            testName: 'Primary Key Type Should Be In Config',
            errorMessage: array_key_exists(key: 'primary_key_type', array: $config) ? null : "Missing user table name, add 'table_name' to 'primary_key_type' in config/bear.php"
        );
    }
}
