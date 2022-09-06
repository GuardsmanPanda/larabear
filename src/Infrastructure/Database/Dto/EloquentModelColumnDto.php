<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Dto;

class EloquentModelColumnDto {

    public function __construct(
        public readonly string      $columnName,
        public readonly string      $nativeDataType,
        public readonly string      $phpDataType,
        public readonly int         $sortOrder,
        public readonly bool        $isNullable,
        public readonly string      $requiredHeader,
        public readonly string|null $eloquentCast,
    ) {}
}
