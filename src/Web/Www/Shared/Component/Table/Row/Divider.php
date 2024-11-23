<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Table\Row;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;

final class Divider extends Component {
    public function render(): View {
        return Resp::view(view: 'bear::table.row.divider');
    }
}
