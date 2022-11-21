<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearPermission;
use RuntimeException;

class BearPermissionUpdater {
    public function __construct(private readonly BearPermission $model) {
        BearDBService::mustBeInTransaction();
        if (!Req::isWriteRequest()) {
            throw new RuntimeException(message: 'Database write operations should not be performed in read-only [GET, HEAD, OPTIONS] requests.');
        }
    }

    public static function fromPermissionSlug(string $permission_slug): BearPermissionUpdater {
        return new BearPermissionUpdater(model: BearPermission::where(column: 'permission_slug', operator:'=', value: $permission_slug)->sole());
    }


    public function setPermissionDescription(string|null $permission_description): void {
        $this->model->permission_description = $permission_description;
    }

    public function save(): BearPermission {
        $this->model->save();
        return $this->model;
    }
}
