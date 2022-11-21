<?php

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Table\Cell;

use Illuminate\View\Component;
use Illuminate\View\View;

class Relative extends Component {
    public function __construct() {}

    public function render(): View {
        return view(view: 'bear::table.cell.relative');
    }
}
