<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearAccessTokenApp;

class BearAccessTokenAppUpdater {
    public function __construct(private readonly BearAccessTokenApp $model) {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['PATCH']);
    }

    public static function fromId(string $id): BearAccessTokenAppUpdater {
        return new BearAccessTokenAppUpdater(model: BearAccessTokenApp::findOrFail(id: $id));
    }


    public function setRoutePrefixRestriction(string $route_prefix_restriction): self {
        $this->model->route_prefix_restriction = $route_prefix_restriction;
        return $this;
    }

    public function setRequestIpRestriction(string $request_ip_restriction): self {
        $this->model->request_ip_restriction = $request_ip_restriction;
        return $this;
    }

    public function setAccessTokenPurpose(string $access_token_purpose): self {
        $this->model->access_token_purpose = $access_token_purpose;
        return $this;
    }

    public function setAccessToken(string $access_token): self {
        $this->model->hashed_access_token = hash(algo: 'xxh128', data: $access_token);
        return $this;
    }

    public function setApiPrimaryKey(string|null $api_primary_key): self {
        $this->model->api_primary_key = $api_primary_key;
        return $this;
    }

    public function setServerHostnameRestriction(string|null $server_hostname_restriction): self {
        $this->model->server_hostname_restriction = $server_hostname_restriction;
        return $this;
    }

    public function setExpiresAt(CarbonInterface|null $expires_at): self {
        if ($expires_at?->toIso8601String() === $this->model->expires_at?->toIso8601String()) {
            return $this;
        }
        $this->model->expires_at = $expires_at;
        return $this;
    }

    public function setLastUsageAt(CarbonInterface|null $last_usage_at): self {
        if ($last_usage_at?->toIso8601String() === $this->model->last_usage_at?->toIso8601String()) {
            return $this;
        }
        $this->model->last_usage_at = $last_usage_at;
        return $this;
    }

    public function update(): BearAccessTokenApp {
        $this->model->save();
        return $this->model;
    }
}
