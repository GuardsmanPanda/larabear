<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Button;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;
use RuntimeException;

final class Outline extends Component {
    public string $classes = 'whitespace-nowrap font-medium inline-flex rounded border transition-all duration-50 hover:scale-105 items-center shadow hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2';

    public function __construct(
        public readonly string $color = 'gray',
        public readonly string $size = 'default',
        public readonly string|null $icon = null
    ) {
        $this->classes .= match ($this->size) {
            'default' => ' px-5 h-9',
            'small' => ' px-4 h-8',
            'tiny' => ' text-sm px-3 h-7',
            default => throw new RuntimeException(message: 'Unknown size: ' . $this->size),
        };
        $this->classes .= match ($this->color) {
            'gray' => ' text-gray-600 border-gray-300 focus:ring-gray-300',
            'red' => ' text-red-600 border-red-300 shadow-red-300 focus:ring-red-300',
            'green' => ' text-green-600 border-green-400 shadow-green-300 focus:ring-green-400',
            default => throw new RuntimeException(message: 'Unknown color: ' . $this->color),
        };
    }

    public function render(): View {
        $icon_classes = match ($this->size) {
            'default' => '-ml-2.5 mr-1.5',
            'small' => '-ml-2 mr-1.5',
            'tiny' => '-ml-1 mr-1',
            default => throw new RuntimeException(message: 'Unknown size: ' . $this->size),
        };
        return Resp::view(view: 'bear::button.basic', data: [
            'icon_classes' => $icon_classes . match ($this->color) {
                    'gray' => ' text-gray-500',
                    'red' => ' text-red-500',
                    'green' => ' text-green-500',
                    default => '',
                },
            'icon_size' => match ($this->size) {
                'default' => "5",
                'small' => "4",
                'tiny' => "3.5",
                default => throw new RuntimeException(message: 'Unknown size: ' . $this->size),
            },
        ]);
    }
}
