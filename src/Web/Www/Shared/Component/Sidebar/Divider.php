<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Sidebar;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;
use RuntimeException;

final class Divider extends Component {
    public function __construct(public readonly string $color = 'white') {}

    public function render(): View {
        return Resp::view(view: 'bear::sidebar.divider', data: [
            'divider_classes' => match ($this->color) {
                'white' => 'w-full border-t border-gray-200 border-dashed mx-2',
                'gray' => 'w-full border-t border-gray-300 border-dashed mx-2',
                default => throw new RuntimeException(message: 'Unknown color: ' . $this->color),
            },
            'text_classes' => match ($this->color) {
                'white' => 'bg-white px-2 text-sm text-gray-500 font-medium',
                'gray' => 'bg-gray-100 px-2 text-sm text-gray-600 font-medium',
                default => throw new RuntimeException(message: 'Unknown color: ' . $this->color),
            }
        ]);
    }
}
