<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Parser;

use RuntimeException;

final class BearBinaryStringParser {

    private function __construct(private readonly string $binaryString, private bool $littleEndian = true, private int $offset = 0) {
    }

    public static function fromHexEWKBString(string $hexString): self {
        $binaryString = hex2bin($hexString);
        if ($binaryString === false) {
            throw new RuntimeException(message: 'Failed to convert hex string to binary string');
        }
        $tmp = new self(binaryString: $binaryString);
        $tmp->littleEndian = $tmp->getByte() === 1;
        return $tmp;
    }


    public function getByte(): int {
        $byte = unpack(format: 'C', string: $this->binaryString, offset: $this->offset);
        if ($byte === false) {
            throw new RuntimeException(message: 'Failed to unpack byte');
        }
        $this->offset++;
        return $byte[1];
    }


    public function getInt32(): int {
        $int32 = unpack(format: $this->littleEndian ? 'V' : 'N', string: $this->binaryString, offset: $this->offset);
        if ($int32 === false) {
            throw new RuntimeException(message: 'Failed to unpack int32');
        }
        $this->offset += 4;
        return $int32[1];
    }


    public function getDouble(): float {
        $double = unpack(format: $this->littleEndian ? 'e' : 'E', string: $this->binaryString, offset: $this->offset);
        if ($double === false) {
            throw new RuntimeException(message: 'Failed to unpack double');
        }
        $this->offset += 8;
        return $double[1];
    }
}
