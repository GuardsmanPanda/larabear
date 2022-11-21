<?php

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Dialog;

use Illuminate\View\Component;
use Illuminate\View\View;

class Layout extends Component {
    public function render(): View {
        return view(view: 'bear::dialog.layout');
    }
}
