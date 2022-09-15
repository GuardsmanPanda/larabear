<?php

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

class BearArrayService {
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
}
