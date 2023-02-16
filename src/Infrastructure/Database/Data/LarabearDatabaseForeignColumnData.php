<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Data;

final class LarabearDatabaseForeignColumnData {

    public function __construct(
        public readonly string $columnName,
        public readonly string $methodName,
        public readonly string $foreignColumnName,
        public readonly string $foreignModelName,
        public readonly string $foreignNamespace,
        public readonly bool $isNullable,
    ) {}
}
