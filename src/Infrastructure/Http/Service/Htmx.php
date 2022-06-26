<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Service;

use Illuminate\Contracts\View\View;

class Htmx {
    public static function dialogViewOpen(string $view, array $data): View {
        Resp::header(name: 'HX-Dialog', value: 'open');
        return  \Illuminate\Support\Facades\View::make(view: $view, data: $data);
    }

    public static function dialogClose(): void {
        Resp::header(name: 'HX-Dialog', value: 'close');
    }
}