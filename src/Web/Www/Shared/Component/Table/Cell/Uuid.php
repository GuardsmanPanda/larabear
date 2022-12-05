<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Table\Cell;

use Illuminate\View\Component;
use Illuminate\View\View;

class Uuid extends Component {
    public function __construct() {}

    public function render(): View {
        return view(view: 'bear::table.cell.uuid');
    }
}
