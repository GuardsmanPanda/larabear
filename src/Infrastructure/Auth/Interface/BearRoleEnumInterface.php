<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Interface;

use GuardsmanPanda\Larabear\Infrastructure\App\Interface\BearDatabaseBackedEnumInterface;

interface BearRoleEnumInterface extends BearDatabaseBackedEnumInterface {
    public function getValue(): string;
    public function getDescription(): string;
}
