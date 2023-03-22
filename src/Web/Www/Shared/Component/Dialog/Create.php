<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Dialog;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;

final class Create  extends Component {
    public function __construct(
        public readonly string $title,
        public readonly string $submitText = 'Create',
        public readonly string $cancelText = 'Cancel',
    ) {}

    public function render(): View {
        return Resp::view(view: 'bear::dialog.crud');
    }
}
