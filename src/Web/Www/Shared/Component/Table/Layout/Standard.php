<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Table\Layout;

use Illuminate\View\Component;
use Illuminate\View\View;

class Standard extends Component {
    public function __construct() {}

    public function render(): View {
        return view(view: 'bear::table.layout.standard');
    }
}