<?php

namespace GuardsmanPanda\Larabear\Service;

use Illuminate\Console\OutputStyle;
use Symfony\Component\Console\Terminal;

class TerminalService {
    public readonly int $terminalWidth;

    public function __construct(public readonly OutputStyle $output) {
            $this->terminalWidth = max((new Terminal())->getWidth(), 30);
    }

    public function printH1(string $headline): void {
        $this->output->writeln("<fg=white;bg=blue;options=bold>$headline</>");
    }

    public function printH2(string $headline): void {
        $this->output->writeln('');
        $this->output->writeln(str_pad("  <fg=white;options=bold,underscore>$headline</>", $this->terminalWidth, ' ', STR_PAD_BOTH));
    }

    public function printTestResult(String $testName, string $errorMessage = null): void {
        $prefix = $errorMessage === null ? "<bg=green;fg=black;options=bold>  PASS  </>" : "<bg=red;fg=black;options=bold>FAIL</>";
        $this->output->writeln("    $prefix $testName");
        if ($errorMessage !== null) {
            $this->output->warning("    $errorMessage");
        }
    }
}