<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Config\Interface\BearConfigEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Config\Model\BearConfig;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

final class BearConfigCreator {
    public static function create(BearConfigEnumInterface $enum): BearConfig {
        BearDatabaseService::mustBeInTransaction();

        $model = new BearConfig();

        $model->enum = $enum->getValue();
        $model->description = $enum->getDescription();
        $model->config_string = $enum->getDefaultConfigString();
        $model->encrypted_config_string = $enum->getDefaultEncryptedConfigString();
        $model->config_boolean = $enum->getDefaultConfigBoolean();
        $model->config_integer = $enum->getDefaultConfigInteger();
        $model->config_date = $enum->getDefaultConfigDate();
        $model->config_timestamp = $enum->getDefaultConfigTimestamp();

        $model->save();
        return $model;
    }
}
