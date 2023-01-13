<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Config\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigCreator;
use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigDeleter;
use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Config\Enum\BearConfigType;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

final class LarabearConfigController extends Controller {
    public function index(): View {
        return Resp::view(view: 'larabear-config::index', data: [
            'configs' => DB::select(query: "SELECT * FROM bear_config ORDER BY config_key"),
        ]);
    }

    public function createDialog(): View {
        return Resp::view(view: 'larabear-config::create');
    }

    public function create(): View {
        BearConfigCreator::create(
            config_key: Req::getStringOrDefault(key: 'config_key'),
            config_description: Req::getStringOrDefault(key: 'config_description'),
            config_data_type: BearConfigType::from(Req::getStringOrDefault(key: 'config_data_type')),
            config_string: Req::getString(key: 'config_string'),
            encrypted_config_string: Req::getString(key: 'encrypted_config_string'),
            config_boolean: Req::getBool(key: 'config_boolean'),
            config_integer: Req::getInt(key: 'config_integer'),
            config_date: Req::getDate(key: 'config_date'),
            config_timestamp: Req::getDateTime(key: 'config_timestamp'),
        );
        return $this->index();
    }


    public function updateDialog(string $key): View {
        return Resp::view(view: 'larabear-config::update', data: [
            'config_data' => DB::selectOne(query: "SELECT * FROM bear_config WHERE config_key = ?", bindings: [$key]),
        ]);
    }

    public function update(string $key): View {
        $updater = BearConfigUpdater::fromConfigKey(config_key: $key);
        $updater->setConfigDescription(config_description: Req::getStringOrDefault(key: 'config_description'));
        $updater->setConfigDataType(config_data_type: BearConfigType::from(Req::getStringOrDefault(key: 'config_data_type')));
        $updater->setConfigString(config_string: Req::getString(key: 'config_string'));
        $updater->setEncryptedConfigString(encrypted_config_string: Req::getString(key: 'encrypted_config_string'));
        $updater->setConfigBoolean(config_boolean: Req::getBool(key: 'config_boolean'));
        $updater->setConfigInteger(config_integer: Req::getInt(key: 'config_integer'));
        $updater->setConfigDate(config_date: Req::getDate(key: 'config_date'));
        $updater->setConfigTimestamp(config_timestamp: Req::getDateTime(key: 'config_timestamp'));
        $updater->update();
        return $this->index();
    }

    public function delete(string $key): void {
        BearConfigDeleter::deleteFromConfigKey(config_key: $key);
    }
}
