<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Button;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;
use RuntimeException;

final class Dark extends Component {
    public string $classes = 'whitespace-nowrap font-medium inline-flex rounded transition-all hover:scale-105 items-center shadow hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 border';

    public function __construct(
        public readonly string      $color = 'indigo',
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
            'indigo' => ' text-indigo-50 bg-indigo-600 border-indigo-600 shadow-indigo-600/20 focus:ring-indigo-700',
            'emerald' => ' text-emerald-50 bg-emerald-600 border-emerald-600 shadow-emerald-600/20 focus:ring-emerald-700',
            'red' => ' text-red-50 bg-red-600 border-red-600 shadow-red-600/20 focus:ring-red-700',
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
                    'indigo' => ' text-indigo-50',
                    'emerald' => ' text-emerald-50',
                    'red' => ' text-red-50',
                    default => '',
                },
            'icon_size' => match ($this->size) {
                'default' => "5",
                'small' => "4",
                'tiny' => "3.5",
                default => throw new RuntimeException(message: 'Unknown size: ' . $this->size),
            }
        ]);
    }
}
