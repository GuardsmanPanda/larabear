<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Service;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Config\Interface\BearConfigEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Config\Model\BearConfig;
use RuntimeException;

final class BearConfigService {
    public static function getBoolean(BearConfigEnumInterface $enum): bool {
        return  BearConfig::findOrFail(id: $enum->getValue())->config_boolean ?? throw new RuntimeException(message: "Config key {$enum->getValue()} is not a boolean");
    }

    public static function getInteger(BearConfigEnumInterface $enum): int {
        return  BearConfig::findOrFail(id: $enum->getValue())->config_integer ?? throw new RuntimeException(message: "Config key {$enum->getValue()} is not an integer");
    }

    public static function getString(BearConfigEnumInterface $enum): string {
        return  BearConfig::findOrFail(id: $enum->getValue())->config_string ?? throw new RuntimeException(message: "Config key {$enum->getValue()} is not a string");
    }

    public static function getEncryptedString(BearConfigEnumInterface $enum): string {
        return  BearConfig::findOrFail(id: $enum->getValue())->encrypted_config_string ?? throw new RuntimeException(message: "Config key {$enum->getValue()} is not an encrypted string");
    }

    public static function getDate(BearConfigEnumInterface $enum): CarbonInterface {
        return  BearConfig::findOrFail(id: $enum->getValue())->config_date ?? throw new RuntimeException(message: "Config key {$enum->getValue()} is not a date");
    }

    public static function getTimestamp(BearConfigEnumInterface $enum): CarbonInterface {
        return  BearConfig::findOrFail(id: $enum->getValue())->config_timestamp ?? throw new RuntimeException(message: "Config key {$enum->getValue()} is not a timestamp");
    }
}
