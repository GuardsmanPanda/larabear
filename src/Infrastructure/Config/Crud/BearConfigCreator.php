<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Config\Model\BearConfig;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

final class BearConfigCreator {
    public static function create(
        string          $slug,
        string          $description,
        string          $config_string = null,
        string          $encrypted_config_string = null,
        bool            $config_boolean = null,
        int             $config_integer = null,
        CarbonInterface $config_date = null,
        CarbonInterface $config_timestamp = null,
    ): BearConfig {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearConfig();

        $model->slug = $slug;
        $model->description = $description;
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
