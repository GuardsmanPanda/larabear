<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearPermission;

final class BearPermissionUpdater {
    public function __construct(private readonly BearPermission $model) {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);
    }

    public static function fromPermissionSlug(string $permission_slug): self {
        return new self(model: BearPermission::findOrFail(id: $permission_slug));
    }


    public function setPermissionDescription(string|null $permission_description): self {
        $this->model->permission_description = $permission_description;
        return $this;
    }

    public function update(): BearPermission {
        $this->model->save();
        return $this->model;
    }
}
