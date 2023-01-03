<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Table\Layout;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;

class Standard extends Component {
    public function __construct() {}

    public function render(): View {
        return Resp::view(view: 'bear::table.layout.standard');
    }
}