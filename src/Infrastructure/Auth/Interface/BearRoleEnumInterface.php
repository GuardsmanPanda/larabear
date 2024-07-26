<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Interface;

use GuardsmanPanda\Larabear\Infrastructure\App\Interface\BearDatabaseBackedEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRole;

interface BearRoleEnumInterface extends BearDatabaseBackedEnumInterface {
    public function getValue(): string;
    public function getDescription(): string;
    public function getModel(): BearRole;
}
