<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Interface;

use GuardsmanPanda\Larabear\Infrastructure\App\Interface\DatabaseBackedEnumInterface;

interface BearRoleInterface extends DatabaseBackedEnumInterface {
    public function getValue(): string;
    public function getDescription(): string;
}
