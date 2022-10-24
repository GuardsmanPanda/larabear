<?php

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;


use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigUpdater;

class BearShortCodeService {
    private const CHARS = '25679bcdfghjkmnpqrstvwxz';

    public static function generateNextCode(): string {
        $updater = BearConfigUpdater::fromConfigKey(config_key: 'larabear.last_unique_short_code', lockForUpdate: true);
        $value = $updater->getConfigString();

        // Change value string into array of characters
        $value_array = str_split(string: $value);

        // Map each character to the index in the chars string
        $value_array = array_map(callback: static function($char) {
            return str_contains(self::CHARS, $char) ? strpos(haystack: self::CHARS, needle: $char) : -1;
        }, array: $value_array);

        // Reverse the value array
        $value_array = array_reverse(array: $value_array);
        $value_array[0]++;

        // For each index, if it is greater than the length of the chars string, set it to 0 and increment the next element.
        foreach ($value_array as $i => $iValue) {
            if ($iValue >= strlen(string: self::CHARS)) {
                $value_array[$i] = 0;
                if (isset($value_array[$i + 1])) {
                    $value_array[$i + 1]++;
                } else {
                    $value_array[$i + 1] = 0;
                }
            }
        }

        // Map each index back to a character
        $value_array = array_map(callback: static function($index) {
            return self::CHARS[$index];
        }, array: $value_array);

        // join the array back into a string
        $value = implode(separator: '', array: array_reverse(array: $value_array));
        $updater->setConfigString(config_string: $value);
        $updater->save();
        return $value;
    }
}
