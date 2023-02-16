<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Heading;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;

final class H3 extends Component {
    public function __construct(public readonly string $subtitle = '') {}

    public function render(): View {
        return Resp::view(view: 'bear::heading.h3');
    }
}
