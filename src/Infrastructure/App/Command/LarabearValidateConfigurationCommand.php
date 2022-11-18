<?php

namespace GuardsmanPanda\Larabear\Infrastructure\App\Command;

use GuardsmanPanda\Larabear\Infrastructure\Console\Service\ConsoleService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class LarabearValidateConfigurationCommand extends Command {
    protected $signature = 'bear';
    protected $description = 'Validate the configuration for larabear';

    public function handle(): void {
        ConsoleService::printH1(headline: 'Validating larabear configuration');
        if (Config::get(key: 'bear') === null) {
            ConsoleService::printTestResult(testName: '', errorMessage: 'Missing bear.php file in config/ directory please run "php artisan vendor:publish --tag=bear"');
            return;
        }
        $this->validateSessionSettings();
        $this->validateUptimeKumaSettings();
        $this->validateResponseErrorLogSettings();
        $this->validateRouteUsageLogSettings();
        $this->output->writeln(messages: '');
    }

    private function validateRouteUsageLogSettings(): void {
        ConsoleService::printH2(headline: 'Validating route usage log settings');
        $config = Config::get(key: 'bear.route_usage_log');
        if ($config === null) {
            ConsoleService::printTestResult(testName: '', warningMessage: 'Missing route_usage_log in bear.php file');
            return;
        }
        ConsoleService::printTestResult(
            testName: "'enabled' should be set to a boolean value in route_usage_log settings.",
            errorMessage: is_bool($config['enabled'] ?? null) ? null : 'Missing or invalid value for enabled in route_usage_log in bear.php file should be true or false'
        );
        ConsoleService::printTestResult(
            testName: "'log_one_in_every' should be set to an integer value in route_usage_log settings.",
            errorMessage: is_int($config['log_one_in_every'] ?? null) ? null : 'Missing or invalid value for log_one_in_every in route_usage_log in bear.php file should be an integer'
        );
    }


    private function validateResponseErrorLogSettings(): void {
        ConsoleService::printH2(headline: 'Validating response error log settings');
        $config = Config::get(key: 'bear.response_error_log');
        if ($config === null) {
            ConsoleService::printTestResult(testName: '', warningMessage: 'Missing response_error_log in bear.php file');
            return;
        }
        ConsoleService::printTestResult(
            testName: "'enabled' should be set to a boolean value in response_error_log settings.",
            errorMessage: is_bool($config['enabled'] ?? null) ? null : 'Missing or invalid value for enabled in response_error_log in bear.php file should be true or false'
        );
        ConsoleService::printTestResult(
            testName: "'ignore_response_codes' should be set to an array in response error log settings.",
            errorMessage: is_array(value: $config['ignore_response_codes'] ?? null) ? null : 'Missing or invalid value for enabled in response_error_log in bear.php file should be an array'
        );
    }


    private function validateSessionSettings(): void {
        ConsoleService::printH2(headline: 'Validating session settings');
        ConsoleService::printTestResult(
            testName: 'Domain Should Be Null',
            errorMessage: Config::get('session.domain') !== null ? "'domain'  in config/session.php should be null .. Current setting: " . Config::get('session.domain') : null
        );
        ConsoleService::printTestResult(
            testName: 'Http Only Should Be True',
            errorMessage: Config::get('session.http_only') !== true ? "'http_only'  in config/session.php should be true .. Current setting: " . Config::get('session.http_only') : null
        );
        ConsoleService::printTestResult(
            testName: 'Secure Should Be True',
            errorMessage: Config::get('session.secure') !== true ? "'secure'  in config/session.php should be true .. Current setting: " . Config::get('session.secure') : null
        );
        ConsoleService::printTestResult(
            testName: "Path Should Be '/",
            errorMessage: Config::get('session.path') !== '/' ? "'path'  in config/session.php should be '/' .. Current setting: " . Config::get('session.path') : null
        );
        ConsoleService::printTestResult(
            testName: 'Same Site Should Be Strict or Lax',
            errorMessage: in_array(needle: Config::get('session.same_site'), haystack: ['lax', 'strict']) ? null : "'same_site'  in config/session.php should be null .. Current setting: " . Config::get('session.same_site')
        );
        ConsoleService::printTestResult(
            testName: "Cookie Name Should Start With '__host-'",
            errorMessage: str_starts_with(haystack: Config::get('session.cookie'), needle: '__host-') ? null : "'cookie'  in config/session.php should start_with '__host-' .. Current setting: " . Config::get('session.cookie')
        );
        ConsoleService::printTestResult(
            testName: "Session Only Encryption Key Should Be Set",
            errorMessage: Config::get('bear.cookie.session_key') === null ? "Missing session encryption key, generate with 'php artisan bear:generate-session-key' and check 'cookie' => 'session_key' config/bear.php" : null
        );
    }


    private function validateUptimeKumaSettings(): void {
        ConsoleService::printH2(headline: 'Validating uptime kuma settings');
        $config = Config::get('bear.uptime_kuma');
        if ($config === null) {
            ConsoleService::printTestResult(
                testName: 'Uptime Kuma Settings Are Not Set',
                warningMessage: 'Missing uptime kuma settings, add "uptime_kuma" to config/bear.php'
            );
            return;
        }
        ConsoleService::printTestResult(
            testName: 'Uptime Kuma Should Be In Config',
            errorMessage: array_key_exists(key: 'base_url', array: $config) ? null : "Missing uptime kuma base url, add 'base_url' to 'uptime_kuma' in config/bear.php"
        );
    }
}
