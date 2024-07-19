<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearAccessToken;

final class BearAccessTokenAppUpdater {
    public function __construct(private readonly BearAccessToken $model) {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);
    }

    public static function fromId(string $id): BearAccessTokenAppUpdater {
        return new BearAccessTokenAppUpdater(model: BearAccessToken::findOrFail(id: $id));
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


    public function setExpiresAt(CarbonInterface|null $expires_at): self {
        if ($expires_at?->toIso8601String() === $this->model->expires_at?->toIso8601String()) {
            return $this;
        }
        $this->model->expires_at = $expires_at;
        return $this;
    }

    public function setLastUsageDate(CarbonInterface|null $last_usage_date): self {
        if ($last_usage_date?->toDateString() === $this->model->last_usage_date?->toDateString()) {
            return $this;
        }
        $this->model->last_usage_date = $last_usage_date;
        return $this;
    }

    public function update(): BearAccessToken {
        $this->model->save();
        return $this->model;
    }
}
