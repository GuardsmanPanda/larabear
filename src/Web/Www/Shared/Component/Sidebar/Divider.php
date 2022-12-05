<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Sidebar;

use Illuminate\View\Component;
use Illuminate\View\View;
use RuntimeException;

class Divider extends Component {
    public function __construct(public readonly string $color = 'white') {}

    public function render(): View {
        return view(view: 'bear::sidebar.divider', data: [
            'divider_classes' => match ($this->color) {
                'white' => 'w-full border-t border-gray-300 mx-2',
                default => throw new RuntimeException(message: 'Unknown color: ' . $this->color),
            },
            'text_classes' => match ($this->color) {
                'white' => 'bg-white px-2 text-sm text-gray-500 font-medium',
                default => throw new RuntimeException(message: 'Unknown color: ' . $this->color),
            }
        ]);
    }
}
