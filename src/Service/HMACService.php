<?php

namespace GuardsmanPanda\Larabear\Service;

use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\HttpException;

class HMACService {
    public static function verifyOrAbort($hmac, $data, $secret): void {
        $calculatedHmac = base64_encode(hash_hmac('sha1', $data, $secret, true));
        if (!hash_equals($hmac, $calculatedHmac)) {
            Log::alert('HMAC verification failed: ' . $hmac . ' != ' . $calculatedHmac);
            throw new HttpException(statusCode: 401, message: 'HMAC verification failed');
        }
    }
}
