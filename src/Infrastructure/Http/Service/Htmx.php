<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Service;

class Htmx {
    public static function refresh(): void {
        Resp::header(key: 'HX-Refresh', value: 'true');
    }
}
