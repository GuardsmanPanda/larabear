<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Dto;

class EloquentModelColumnDto {

    public function __construct(
        public readonly string      $columnName,
        public readonly string      $nativeDataType,
        public readonly bool        $isNullable,
        public string      $phpDataType,
        public int         $sortOrder,
        public string      $requiredHeader,
        public string|null $eloquentCast,
    ) {}
}
