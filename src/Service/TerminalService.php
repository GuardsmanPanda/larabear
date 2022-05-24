<?php

namespace GuardsmanPanda\Larabear\Service;

use Illuminate\Console\OutputStyle;

class TerminalService {
    public function __construct(public readonly OutputStyle $output) {}

    public function printH1(string $headline): void {
        $around = str_pad(string: '', length: 120, pad_string: '#', pad_type: STR_PAD_BOTH);
        $headline = "  <fg=bright-green;options=bold>$headline</>  ";
        $this->output->writeln(messages: $around);
        $this->output->writeln(messages: str_pad(string: $headline, length: 120 + 33, pad_string: '#', pad_type: STR_PAD_BOTH));
        $this->output->writeln(messages: $around);
    }

    public function printH2(string $headline): void {
        $this->output->writeln(messages: '');
        $this->output->writeln(messages: "<fg=bright-blue;options=bold>$headline</>");
    }

    public function printTestResult(string $testName, string $warningMessage = null, string $errorMessage = null): void {
        $prefix = "<bg=green;fg=bright-green;options=bold>  PASS  </>";
        if ($errorMessage !== null) {
            $prefix = "<bg=bright-red;fg=white;options=bold>  FAIL  </>";
        } else if ($warningMessage !== null) {
            $prefix = "<bg=bright-yellow;fg=black;options=bold>  WARN  </>";
        }
        $this->output->writeln(messages: " $prefix " . ($errorMessage ?? $warningMessage ?? $testName));
    }
}
