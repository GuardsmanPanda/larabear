<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Details;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;

class Basic  extends Component {
    public function __construct(public readonly string $summary) {}

    public function render(): View {
        return Resp::view(view: 'bear::details.basic');
    }
}
