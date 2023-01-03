<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Dialog;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;

class Basic  extends Component {
    public function __construct(
        public readonly string $title,
        public readonly string $closeText = 'Close',
        public readonly bool $includeButton = true
    ) {}

    public function render(): View {
        return Resp::view(view: 'bear::dialog.basic');
    }
}
