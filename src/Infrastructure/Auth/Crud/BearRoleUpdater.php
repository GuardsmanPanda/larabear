<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRole;

final class BearRoleUpdater {
    public function __construct(private readonly BearRole $model) {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);
    }

    public static function fromRoleSlug(string $role_slug): self {
        return new self(model: BearRole::findOrFail(id: $role_slug));
    }


    public function setRoleDescription(string|null $role_description): self {
        $this->model->role_description = $role_description;
        return $this;
    }

    public function update(): BearRole {
        $this->model->save();
        return $this->model;
    }
}
