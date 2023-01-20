<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Config\Enum\BearConfigType;
use GuardsmanPanda\Larabear\Infrastructure\Config\Model\BearConfig;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Database\Eloquent\Casts\ArrayObject;

final class BearConfigCreator {
    /**
     * @param string $config_key
     * @param string $config_description
     * @param BearConfigType $config_data_type
     * @param string|null $config_string
     * @param string|null $encrypted_config_string
     * @param bool|null $config_boolean
     * @param int|null $config_integer
     * @param CarbonInterface|null $config_date
     * @param CarbonInterface|null $config_timestamp
     * @param ArrayObject<string, mixed> $config_json
     * @return BearConfig
     */
    public static function create(
        string $config_key,
        string $config_description,
        BearConfigType $config_data_type,
        string $config_string = null,
        string $encrypted_config_string = null,
        bool $config_boolean = null,
        int $config_integer = null,
        CarbonInterface $config_date = null,
        CarbonInterface $config_timestamp = null,
        ArrayObject $config_json = new ArrayObject()
    ): BearConfig {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearConfig();

        $model->config_key = $config_key;
        $model->config_description = $config_description;
        $model->config_data_type = $config_data_type->value;
        $model->config_json = $config_json;
        $model->config_string = $config_string;
        $model->encrypted_config_string = $encrypted_config_string;
        $model->config_boolean = $config_boolean;
        $model->config_integer = $config_integer;
        $model->config_date = $config_date;
        $model->config_timestamp = $config_timestamp;

        $model->save();
        return $model;
    }
}
