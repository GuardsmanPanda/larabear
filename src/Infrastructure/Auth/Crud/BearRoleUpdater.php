<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRole;
use RuntimeException;

class BearRoleUpdater {
    public function __construct(private readonly BearRole $model) {
        BearDatabaseService::mustBeInTransaction();
        if (!Req::isWriteRequest()) {
            throw new RuntimeException(message: 'Database write operations should not be performed in read-only [GET, HEAD, OPTIONS] requests.');
        }
    }

    public static function fromRoleSlug(string $role_slug): BearRoleUpdater {
        return new BearRoleUpdater(model: BearRole::where(column: 'role_slug', operator:'=', value: $role_slug)->sole());
    }

    public function setRoleDescription(string|null $role_description): void {
        $this->model->role_description = $role_description;
    }

    public function save(): BearRole {
        $this->model->save();
        return $this->model;
    }
}
