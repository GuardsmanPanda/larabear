<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\UptimeKuma\Client;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Throwable;

class UptimeKumaClient {
    public static function pushStatus(
        string|null $key,
        string      $msg = 'OK',
        bool        $isUp = true
    ): void {
        if ($key === null) {
            return; // We can safely ignore null keys, as the fail to fire event will be visible in Uptime Kuma.
        }

        $query = [
            'status' => $isUp ? 'up' : 'down',
            'msg' => $msg,
        ];

        if (defined(constant_name: 'LARAVEL_START')) {
            $query['ping'] = (int)((microtime(as_float: true) - get_defined_constants()['LARAVEL_START'])*1000);
        }

        try {
            Http::get(url: trim(string: Config::get(key: 'bear.uptime_kuma.base_url'), characters: '/') . "/api/push/$key", query: $query);
        } catch (Throwable $e) {
            // We can safely ignore any exceptions, as the fail to fire event will be visible in Uptime Kuma.
        }
    }
}
