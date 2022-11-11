<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Security\Service;

use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\HttpException;

class SecurityHMACService {
    public static function verifyOrAbort(string $hmac, string $data, string $secret): void {
        $calculatedHmac = base64_encode(hash_hmac(algo: 'sha1', data: $data, key: $secret, binary: true));
        if (!hash_equals(known_string: $hmac, user_string: $calculatedHmac)) {
            Log::alert(message: 'HMAC verification failed: ' . $hmac . ' != ' . $calculatedHmac);
            throw new HttpException(statusCode: 401, message: 'HMAC verification failed');
        }
    }
}
