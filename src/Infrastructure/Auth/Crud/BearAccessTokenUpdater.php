<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearAccessToken;

final readonly class BearAccessTokenUpdater {
    public function __construct(private BearAccessToken $model) {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['PUT', 'PATCH']);
        BearDatabaseService::mustBeInTransaction();
    }

    public static function fromId(string $id): BearAccessTokenUpdater {
        return new BearAccessTokenUpdater(model: BearAccessToken::findOrFail(id: $id));
    }


    public function setPathPrefixRestriction(string $path_prefix_restriction): self {
        $this->model->path_prefix_restriction = $path_prefix_restriction;
        return $this;
    }

    public function setIpRestriction(string $ip_restriction): self {
        $this->model->ip_restriction = $ip_restriction;
        return $this;
    }

    public function setDescription(string $description): self {
        $this->model->description = $description;
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
        if ($last_usage_date?->toIso8601String() === $this->model->last_usage_date?->toIso8601String()) {
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
