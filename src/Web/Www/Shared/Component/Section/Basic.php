<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Section;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;
use InvalidArgumentException;

final class Basic extends Component {
    public string $classes = "rounded-b shadow p-4";
    public string $headerClasses = "mb-2 border-b -mt-2";

    public function __construct(public readonly string $title, public readonly string $color = 'white', public readonly string $size = 'normal') {
        $this->classes .= match ($this->color) {
            'white' => ' bg-white',
            'indigo-100' => ' bg-indigo-100',
            default => throw new InvalidArgumentException(message: "Invalid color: $this->color"),
        };

        $this->headerClasses .= match ($this->color) {
            'white' => '',
            'indigo-100' => ' border-indigo-300',
            default => throw new InvalidArgumentException(message: "Invalid color: $this->color"),
        };
        $this->headerClasses .= match ($this->size) {
            'normal' => ' pb-0.5',
            'small' => ' text-sm',
            default => throw new InvalidArgumentException(message: "Invalid size: $this->size"),
        };
    }

    public function render(): View {
        return Resp::view(view: 'bear::section.basic');
    }
}
