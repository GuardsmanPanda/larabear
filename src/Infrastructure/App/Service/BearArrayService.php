<?php

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

class BearArrayService {
    public static function groupArrayBy(array $array, string $key): array {
        $result = [];
        foreach ($array as $item) {
            $result[$item[$key]][] = $item;
        }
        return $result;
    }

    public static function groupsClassBy(array $array, string $key): array {
        $result = [];
        foreach ($array as $item) {
            $result[$item->$key][] = $item;
        }
        return $result;
    }
}
