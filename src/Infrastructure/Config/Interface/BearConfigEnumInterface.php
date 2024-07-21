<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Interface;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\App\Interface\BearDatabaseBackedEnumInterface;

interface BearConfigEnumInterface extends BearDatabaseBackedEnumInterface {
    public function getValue(): string;
    public function getDescription(): string;

    public function getDefaultConfigString(): string|null;
    public function getDefaultEncryptedConfigString(): string|null;
    public function getDefaultConfigInteger(): int|null;
    public function getDefaultConfigBoolean(): bool|null;
    public function getDefaultConfigDate(): CarbonInterface|null;
    public function getDefaultConfigTimestamp(): CarbonInterface|null;
}
