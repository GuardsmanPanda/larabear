<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use InvalidArgumentException;

final class BearArrayService {
    /**
     * @param array<array-key, mixed> $array
     * @param string $key
     * @return array<array-key, array<int, mixed>>
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
     * @param array<array-key, mixed> $from
     * @param array<array-key, mixed> $to
     * @param callable $filter
     * @return void
     */
    public static function moveItems(array &$from, array &$to, callable $filter): void {
        $newFrom = [];
        foreach ($from as $item) {
            if ($filter($item)) {
                $to[] = $item;
            } else {
                $newFrom[] = $item;
            }
        }
        $from = $newFrom;
    }

    /**
     * @param string $string
     * @param string $separator
     * @param string $eol
     * @return array<string, string>
     */
    public static function stringToKeyValue(string $string, string $separator = ',', string $eol = PHP_EOL): array {
        $result = [];
        foreach (explode(separator: $eol, string: $string) as $line) {  // @phpstan-ignore-line
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
