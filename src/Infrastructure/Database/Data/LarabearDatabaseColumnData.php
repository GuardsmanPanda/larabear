<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Data;

final class LarabearDatabaseColumnData {

    public function __construct(
        public readonly string $columnName,
        public readonly string $nativeDataType,
        public readonly bool $isNullable,
        public string $phpDataType,
        public int $sortOrder,
        public string $requiredHeader,
        public string|null $eloquentCast,
        public string|null $columnDefault = null,
    ) {}
}
