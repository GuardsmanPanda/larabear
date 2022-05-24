<?php

namespace GuardsmanPanda\Larabear\Integration\UptimeKuma\Client;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Throwable;

class UptimeKumaClient {
    public static function pushStatus(
        string|null $key,
        string      $msg = 'OK',
        bool        $isUp = true,
        float         $runtimeSeconds = null,
        float         $runtimeMilliSeconds = null,
        float       $runtimeMicroSeconds = null
    ): void {
        if ($key === null) {
            return; // We can safely ignore null keys, as the fail to fire event will be visible in Uptime Kuma.
        }

        $query = [
            'status' => $isUp ? 'up' : 'down',
            'msg' => $msg,
        ];

        if ($runtimeSeconds !== null) {
            $query['ping'] = (int)($runtimeSeconds * 1000);
        } else if ($runtimeMilliSeconds !== null) {
            $query['ping'] = (int)$runtimeMilliSeconds;
        } else if ($runtimeMicroSeconds !== null) {
            $query['ping'] = (int)($runtimeMicroSeconds / 1000);
        }

        try {
            Http::get(url: trim(string: Config::get(key: 'bear.uptime_kuma.base_url'), characters: '/') . "/api/push/$key", query: $query);
        } catch (Throwable $e) {
            // We can safely ignore any exceptions, as the fail to fire event will be visible in Uptime Kuma.
        }
    }
}
