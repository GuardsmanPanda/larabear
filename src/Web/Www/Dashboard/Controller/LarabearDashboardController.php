<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Dashboard\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Process;
use Illuminate\View\View;

final class LarabearDashboardController extends Controller {
    public function index(): View {
        return Resp::view(view: 'larabear-dashboard::index', data: [
            'php_info' => $this->collectPhpInfo(),
            'hostname' => Process::command(command: 'hostname')->run()->output(),
        ]);
    }

    /**
     * @return array<string, array<string, string>>
     */
    private function collectPhpInfo(): array {
        $phpInfo = [];
        //phpInfo(INFO_GENERAL);

        $phpInfo['php_version'] = ['name' => 'php_version', 'value' => PHP_VERSION, 'icon' => 'check', 'message' => 'PHP version is correct.'];
        $opCache = opcache_get_configuration();
        if (!is_array($opCache)) {
            return $phpInfo;
        }
        $opcacheConfigs = $opCache['directives'];

        $phpInfo['opcache.enable'] = ['value' => $opcacheConfigs['opcache.enable'], 'icon' => 'check', 'message' => 'OPCache is enabled'];
        if (!$opcacheConfigs['opcache.enable']) {
            $phpInfo['opcache.enable']['message'] = 'OPCache is disabled.';
            $phpInfo['opcache.enable']['icon'] = 'exclamation-triangle';
        }

        $phpInfo['opcache.validate_timestamps'] = ['value' => $opcacheConfigs['opcache.validate_timestamps'], 'icon' => 'check', 'message' => 'OPCache is correctly not validating timestamps. (performance)'];
        if ($opcacheConfigs['opcache.validate_timestamps']) {
            $phpInfo['opcache.validate_timestamps']['message'] = 'OPCache is validating timestamps. (bad performance, only for development)';
            $phpInfo['opcache.validate_timestamps']['icon'] = 'exclamation-triangle';
        }
        $phpInfo['opcache.max_accelerated_files'] = ['value' => $opcacheConfigs['opcache.max_accelerated_files'], 'icon' => 'check', 'message' => 'OPCache is configured to cache a lot of files.'];
        if ($opcacheConfigs['opcache.max_accelerated_files'] < 1000000) {
            $phpInfo['opcache.max_accelerated_files']['message'] = 'Set opcache.max_accelerated_files to 1000000.';
            $phpInfo['opcache.max_accelerated_files']['icon'] = 'exclamation-triangle';
        }

        return $phpInfo;
    }
}
