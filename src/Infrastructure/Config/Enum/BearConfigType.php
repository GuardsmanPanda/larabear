<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Enum;

enum BearConfigType: string {
    case STRING = 'STRING';
    case ENCRYPTED_STRING = 'ENCRYPTED_STRING';
    case BOOLEAN = 'BOOLEAN';
    case INTEGER = 'INTEGER';
    case DATE = 'DATE';
    case TIMESTAMP = 'TIMESTAMP';
    case JSON = 'JSON';
}
