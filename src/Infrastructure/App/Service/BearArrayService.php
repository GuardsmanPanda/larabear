<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use InvalidArgumentException;
use UnitEnum;

final class BearArrayService {
    /**
     * @param array<mixed> $array
     * @param string $key
     * @return array<int|string, array<int, mixed>>.
     */
    public static function groupArrayBy(array $array, string $key): array {
        $result = [];
        foreach ($array as $item) {
            if (is_array($item)) {
                $result[$item[$key]][] = $item;
            } else {
                $result[$item->$key][] = $item;
            }
        }
        return $result;
    }


    /**
     * @param array<UnitEnum> $enumCases
     * @return array<int|string, mixed>
     */
    public static function enumCasesToKeyValueArray(array $enumCases): array {
        $result = [];
        foreach ($enumCases as $case) {
            $result[$case->value] = $case->name;  /** @phpstan-ignore-line */
        }
        return $result;
    }


    /**
     * @param string $string
     * @param string $separator
     * @param string $eol
     * @return array<string, string>
     */
    public static function stringToKeyValue(string $string, string $separator = ',', string $eol = PHP_EOL): array {
        $result = [];
        foreach (explode(separator: $eol, string: $string) as $line) {
            $line = trim(string: $line);
            $idx = strpos(haystack: $line, needle: $separator);
            if ($idx === false) {
                if ($line !== '') {
                    throw new InvalidArgumentException(message: "Invalid line: $line, no separator [$separator] found");
                }
            } else {
                $result[substr(string: $line, offset: 0, length: $idx)] = substr(string: $line, offset: $idx + 1);
            }
        }
        return $result;
    }
}

