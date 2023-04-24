<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Button;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;
use RuntimeException;

final class Light extends Component {
    public string $classes = 'whitespace-nowrap font-medium inline-flex rounded transition-all hover:scale-105 items-center shadow hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 border';

    public function __construct(
        public readonly string      $color = 'gray',
        public readonly string      $size = 'default',
        public readonly string|null $icon = null
    ) {
        $this->classes .= match ($this->size) {
            'default' => ' px-5 h-9',
            'small' => ' px-4 h-8',
            'tiny' => ' text-sm px-3 h-7',
            default => throw new RuntimeException(message: 'Unknown size: ' . $this->size),
        };
        $this->classes .= match ($this->color) {
            'gray' => ' text-gray-600 hover:text-gray-700 bg-gray-200 border-gray-200 shadow-gray-500/20 focus:ring-gray-300',
            'red' => ' text-red-600 hover:text-red-700 bg-red-200 border-red-200 shadow-red-500/20 focus:ring-red-300',
            default => throw new RuntimeException(message: 'Unknown color: ' . $this->color),
        };
    }

    public function render(): View {
        $icon_classes = match ($this->size) {
            'default' => '-ml-3 mr-1.5',
            'small' => '-ml-2 mr-1.5',
            'tiny' => '-ml-1 mr-1',
            default => throw new RuntimeException(message: 'Unknown size: ' . $this->size),
        };
        return Resp::view(view: 'bear::button.basic', data: [
            'icon_classes' => $icon_classes . match ($this->color) {
                    'gray' => ' text-gray-500',
                    'red' => ' text-red-500',
                    default => '',
                },
            'icon_size' => match ($this->size) {
                'default' => "6",
                'small' => "5",
                'tiny' => "3.5",
                default => throw new RuntimeException(message: 'Unknown size: ' . $this->size),
            }
        ]);
    }
}
