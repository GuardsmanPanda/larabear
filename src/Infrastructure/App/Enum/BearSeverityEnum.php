<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Enum;

use InvalidArgumentException;

enum BearSeverityEnum: string {
    case EMERGENCY = 'EMERGENCY';
    case ALERT = 'ALERT';
    case CRITICAL = 'CRITICAL';
    case ERROR = 'ERROR';
    case WARNING = 'WARNING';
    case NOTICE = 'NOTICE';
    case INFO = 'INFO';
    case DEBUG = 'DEBUG';


    public function toInt(): int {
        return match ($this) {
            self::EMERGENCY => 0,
            self::ALERT => 1,
            self::CRITICAL => 2,
            self::ERROR => 3,
            self::WARNING => 4,
            self::NOTICE => 5,
            self::INFO => 6,
            self::DEBUG => 7,
        };
    }


    public static function fromInt(int $severity): self {
        return match ($severity) {
            0 => self::EMERGENCY,
            1 => self::ALERT,
            2 => self::CRITICAL,
            3 => self::ERROR,
            4 => self::WARNING,
            5 => self::NOTICE,
            6 => self::INFO,
            7 => self::DEBUG,
            default => throw new InvalidArgumentException("Invalid severity: $severity"),
        };
    }
}
