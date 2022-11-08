<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Service;

class Htmx {
    public static function refresh(): void {
        Resp::header(name: 'HX-Refresh', value: 'true');
    }
}
