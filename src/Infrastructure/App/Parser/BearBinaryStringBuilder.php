<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Parser;

final class BearBinaryStringBuilder {
    public function __construct(private string $binaryString = '') {
    }

    public static function builder(): self {
        return new self();
    }

    public function appendByte(int $byte): self {
        $this->binaryString .= pack('C', $byte);
        return $this;
    }

    public function appendInt32(int $int32): self {
        $this->binaryString .= pack('V', $int32);
        return $this;
    }

    public function appendDouble(float $double): self {
        $this->binaryString .= pack('e', $double);
        return $this;
    }

    public function getStringAsUpperHex(): string {
        return strtoupper(string: bin2hex($this->binaryString));
    }
}
