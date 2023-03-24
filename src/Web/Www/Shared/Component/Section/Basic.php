<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Section;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;

final class Basic extends Component {
    public string $classes = "rounded-b shadow px-4 py-2";

    public function __construct(public readonly string $title) {}

    public function render(): View {
        return Resp::view(view: 'bear::section.basic');
    }
}
