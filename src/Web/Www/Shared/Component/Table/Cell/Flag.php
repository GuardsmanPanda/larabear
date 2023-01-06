<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Table\Cell;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;

final class Flag extends Component {
    public function __construct(
        public readonly string|null $countryCode,
        public readonly string|null $countryName = null,
        public readonly string|null $ip = null
    ) {}

    public function render(): View {
        return Resp::view(view: 'bear::table.cell.flag');
    }
}
