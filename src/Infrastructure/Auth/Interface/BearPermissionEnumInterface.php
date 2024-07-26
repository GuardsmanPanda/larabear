<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Interface;

use GuardsmanPanda\Larabear\Infrastructure\App\Interface\BearDatabaseBackedEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearPermission;

interface BearPermissionEnumInterface extends BearDatabaseBackedEnumInterface {
    public function getValue(): string;

    public function getDescription(): string;

    public function getModel(): BearPermission;
}
