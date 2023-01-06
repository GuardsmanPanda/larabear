<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Table\Cell;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;

final class Uuid extends Component {
    public function __construct() {}

    public function render(): View {
        return Resp::view(view: 'bear::table.cell.uuid');
    }
}
