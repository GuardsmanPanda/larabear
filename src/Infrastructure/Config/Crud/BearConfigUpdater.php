<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Config\Model\BearConfig;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use RuntimeException;
use stdClass;

class BearConfigUpdater {
    public function __construct(private readonly BearConfig $model) {
        BearDBService::mustBeInTransaction();
        if (!Req::isWriteRequest()) {
            throw new RuntimeException(message: 'Database write operations should not be performed in read-only [GET, HEAD, OPTIONS] requests.');
        }
    }

    public static function fromConfigKey(string $config_key, bool $lockForUpdate = false): self {
        if ($lockForUpdate) {
            return new self(model: BearConfig::lockForUpdate()->findOrFail(id: $config_key));
        }
        return new self(model: BearConfig::findOrFail(id: $config_key));
    }

    public function setConfigDescription(string $config_description): void {
        $this->model->config_description = $config_description;
    }

    public function setConfigDataType(string $config_data_type): void {
        $this->model->config_data_type = $config_data_type;
    }

    public function setConfigJson(stdClass $config_json): void {
        $this->model->config_json = $config_json;
    }

    public function setConfigString(string|null $config_string): void {
        $this->model->config_string = $config_string;
    }

    public function setEncryptedConfigString(string|null $encrypted_config_string): void {
        $this->model->encrypted_config_string = $encrypted_config_string;
    }

    public function setConfigBoolean(bool|null $config_boolean): void {
        $this->model->config_boolean = $config_boolean;
    }

    public function setConfigInteger(int|null $config_integer): void {
        $this->model->config_integer = $config_integer;
    }

    public function setConfigDate(CarbonInterface|null $config_date): void {
        $this->model->config_date = $config_date;
    }

    public function setConfigTimestamp(CarbonInterface|null $config_timestamp): void {
        $this->model->config_timestamp = $config_timestamp;
    }


    public function getConfigString(): string|null {
        return $this->model->config_string;
    }

    public function save(): BearConfig {
        $this->model->save();
        return $this->model;
    }
}
