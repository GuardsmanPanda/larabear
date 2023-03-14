<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Dashboard\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

final class LarabearDashboardController extends Controller {
    public function index(): View {
        return Resp::view(view: 'larabear-dashboard::index', data: [
            'php_info' => $this->collectPhpInfo(),
        ]);
    }

    /**
     * @return array<string, array{name: string, value: mixed, info: array<string, string>}>
     */
    private function collectPhpInfo(): array {
        $phpInfo = [];
        $phpInfo['php_version'] = ['name' => 'php_version', 'value' => PHP_VERSION, 'info' => []];
        $opCache = opcache_get_configuration();
        if (!is_array($opCache)) {
            return $phpInfo;
        }
        $opcacheConfigs = $opCache['directives'];

        $phpInfo['opcache_enabled'] = ['name' => 'opcache_enabled', 'value' => $opcacheConfigs['opcache.enable'], 'info' => []];
        if ($opcacheConfigs['opcache.enable']) {
            $phpInfo['opcache_enabled']['info']['success'] = 'OPCache is enabled';
        } else {
            $phpInfo['opcache_enabled']['info']['error'] = 'OPCache is disabled';
        }
        return $phpInfo;
    }
}
