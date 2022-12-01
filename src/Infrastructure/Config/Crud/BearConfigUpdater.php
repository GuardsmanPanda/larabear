<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Config\Model\BearConfig;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use stdClass;

class BearConfigUpdater {
    public function __construct(private readonly BearConfig $model) {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH']);
    }

    public static function fromConfigKey(string $config_key, bool $lockForUpdate = false): self {
        if ($lockForUpdate) {
            return new self(model: BearConfig::lockForUpdate()->findOrFail(id: $config_key));
        }
        return new self(model: BearConfig::findOrFail(id: $config_key));
    }


    public function setConfigDescription(string $config_description): self {
        $this->model->config_description = $config_description;
        return $this;
    }

    public function setConfigDataType(string $config_data_type): self {
        $this->model->config_data_type = $config_data_type;
        return $this;
    }

    public function setConfigJson(stdClass $config_json): self {
        $this->model->config_json = $config_json;
        return $this;
    }

    public function setConfigString(string|null $config_string): self {
        $this->model->config_string = $config_string;
        return $this;
    }

    public function setEncryptedConfigString(string|null $encrypted_config_string): self {
        $this->model->encrypted_config_string = $encrypted_config_string;
        return $this;
    }

    public function setConfigBoolean(bool|null $config_boolean): self {
        $this->model->config_boolean = $config_boolean;
        return $this;
    }

    public function setConfigInteger(int|null $config_integer): self {
        $this->model->config_integer = $config_integer;
        return $this;
    }

    public function setConfigDate(CarbonInterface|null $config_date): self {
        if ($config_date?->toDateString() === $this->model->config_date?->toDateString()) {
            return $this;
        }
        $this->model->config_date = $config_date;
        return $this;
    }

    public function setConfigTimestamp(CarbonInterface|null $config_timestamp): self {
        $this->model->config_timestamp = $config_timestamp;
        return $this;
    }


    public function getConfigString(): string|null {
        return $this->model->config_string;
    }

    public function update(): BearConfig {
        $this->model->save();
        return $this->model;
    }
}
