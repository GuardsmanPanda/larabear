<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Console\Service;

use Symfony\Component\Console\Output\ConsoleOutput;

class ConsoleService {
    private static ConsoleOutput|null $output = null;

    public static function printH1(string $headline): void {
        $around = str_pad(string: '', length: 120, pad_string: '#', pad_type: STR_PAD_BOTH);
        $headline = "  <fg=bright-green;options=bold>$headline</>  ";
        self::writeLine(message: $around);
        self::writeLine(message: str_pad(string: $headline, length: 120 + 33, pad_string: '#', pad_type: STR_PAD_BOTH));
        self::writeLine(message: $around);
    }

    public static function printH2(string $headline): void {
        self::writeLine(message: '');
        self::writeLine(message: "<fg=bright-blue;options=bold>$headline</>");
    }

    public static function printTestResult(string $testName, string $warningMessage = null, string $errorMessage = null): void {
        $prefix = "<bg=green;fg=bright-green;options=bold>  PASS  </>";
        if ($errorMessage !== null) {
            $prefix = "<bg=bright-red;fg=white;options=bold>  FAIL  </>";
        } else if ($warningMessage !== null) {
            $prefix = "<bg=bright-yellow;fg=black;options=bold>  WARN  </>";
        }
        self::writeLine(message: " $prefix " . ($errorMessage ?? $warningMessage ?? $testName));
    }


    public static function writeLine(string $message): void {
        if (self::$output === null) {
            self::$output = new ConsoleOutput();
        }
        self::$output->writeln(messages: $message);
    }
}
