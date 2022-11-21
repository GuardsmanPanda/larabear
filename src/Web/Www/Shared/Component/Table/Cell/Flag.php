<?php

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Table\Cell;

use Illuminate\View\Component;
use Illuminate\View\View;

class Flag extends Component {
    public function __construct(
        public readonly string|null $countryCode,
        public readonly string|null $countryName = null,
        public readonly string|null $ip = null
    ) {}

    public function render(): View {
        return view(view: 'bear::table.cell.flag');
    }
}
