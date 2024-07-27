<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Config\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Htmx;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

final class LarabearConfigController extends Controller {
    public function index(): View {
        return Resp::view(view: 'larabear-config::index', data: [
            'configs' => DB::select(query: "SELECT * FROM bear_config ORDER BY enum"),
        ]);
    }

    public function updateDialog(string $key): View {
        return Htmx::dialogView(view: 'larabear-config::update', title: "Update Config - $key",data: [
            'config_data' => DB::selectOne(query: "SELECT * FROM bear_config WHERE enum = ?", bindings: [$key]),
        ]);
    }

    public function update(string $key): View {
        $updater = BearConfigUpdater::fromConfigKey(config_key: $key);
        $updater->setDescription(description: Req::getString(key: 'config_description'));
        $updater->setConfigString(config_string: Req::getStringOrNull(key: 'config_string', isOptional: true));
        $updater->setEncryptedConfigString(encrypted_config_string: Req::getStringOrNull(key: 'encrypted_config_string', isOptional: true));
        $updater->setConfigBoolean(config_boolean: Req::getBoolOrNull(key: 'config_boolean', isOptional: true));
        $updater->setConfigInteger(config_integer: Req::getIntOrNull(key: 'config_integer', isOptional: true));
        $updater->setConfigDate(config_date: Req::getDateOrNull(key: 'config_date', isOptional: true));
        $updater->setConfigTimestamp(config_timestamp: Req::getDateTimeOrNull(key: 'config_timestamp', isOptional: true));
        $updater->update();
        return $this->index();
    }
}
