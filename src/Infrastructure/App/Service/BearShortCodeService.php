<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Config\Enum\LarabearConfigEnum;
use RuntimeException;

final class BearShortCodeService {
    private const string CHARS = '25679BCDFGHJKLMNPQRSTVWXZbcdfghjkmnpqrstvwxz';

    public static function generateNextCode(): string {
        $updater = BearConfigUpdater::fromEnumInterface(enum: LarabearConfigEnum::LARABEAR_LAST_UNIQUE_SHORT_CODE, lockForUpdate: true);
        $value = $updater->getConfigString();
        if (!is_string(value: $value)) {
            throw new RuntimeException(message: 'The LARABEAR_LAST_UNIQUE_SHORT_CODE config value is not a string.');
        }

        if ($value === '1') {
            $value_array = [-1];
        } else {
            // Change value string into array of characters
            $value_array = str_split(string: $value);

            // Map each character to the index in the chars string
            $value_array = array_map(callback: static function($char) {
                $pos = strpos(haystack: self::CHARS, needle: $char);
                return is_int(value: $pos) ? $pos : throw new RuntimeException(message: 'Invalid character in short code');
            }, array: $value_array);
        }

        // Reverse the value array
        $value_array = array_reverse(array: $value_array);
        $value_array[0]++;

        // For each index, if it is greater than the length of the chars string, set it to 0 and increment the next element.
        foreach ($value_array as $i => $iValue) {
            if ($iValue >= strlen(string: self::CHARS)) {
                $value_array[$i] = 0;
                if (array_key_exists(key: $i + 1, array: $value_array)) {
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
        $updater->setConfigString(config_string: $value)->update();
        return $value;
    }
}
