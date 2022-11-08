<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Config\Model\BearConfig;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\App;
use RuntimeException;
use stdClass;

class BearConfigCreator {
    public static function create(
        string $config_key,
        string $config_description,
        string $config_data_type,
        string $config_string = null,
        string $encrypted_config_string = null,
        bool $config_boolean = null,
        int $config_integer = null,
        CarbonInterface $config_date = null,
        CarbonInterface $config_timestamp = null,
        stdClass $config_json = new stdClass()
    ): BearConfig {
        BearDBService::mustBeInTransaction();
        if (!App::runningUnitTests() && !Req::isWriteRequest()) {
            throw new RuntimeException(message: 'Database write operations should not be performed in read-only [GET, HEAD, OPTIONS] requests.');
        }
        $model = new BearConfig();
        $model->config_key = $config_key;
        $model->config_description = $config_description;
        $model->config_data_type = $config_data_type;
        $model->config_json = $config_json;
        $model->config_string = $config_string;
        $model->encrypted_config_string = $encrypted_config_string;
        $model->config_boolean = $config_boolean;
        $model->config_integer = $config_integer;
        $model->config_date = $config_date;
        $model->config_timestamp = $config_timestamp;

        $model->save();
        return $model->fresh();
    }
}
