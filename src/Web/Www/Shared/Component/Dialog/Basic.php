<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Dialog;

use Illuminate\View\Component;
use Illuminate\View\View;

class Basic  extends Component {
    public function __construct(
        public readonly string $title,
        public readonly string $closeText = 'Close',
        public readonly bool $includeButton = true
    ) {}

    public function render(): View {
        return view(view: 'bear::dialog.basic');
    }
}
