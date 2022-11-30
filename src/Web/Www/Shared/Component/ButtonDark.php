<?php

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use RuntimeException;

class ButtonDark extends Component {
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
            'indigo' => ' text-indigo-50 bg-indigo-600 border-indigo-600 hover:bg-indigo-700 shadow-indigo-600/20 hover:shadow-indigo-600/20 focus:ring-indigo-700',
            'emerald' => ' text-emerald-50 bg-emerald-600 border-emerald-600 hover:bg-emerald-700 shadow-emerald-600/20 hover:shadow-emerald-600/20 focus:ring-emerald-700',
            'red' => ' text-red-50 bg-red-600 border-red-600 hover:bg-red-700 shadow-red-600/20 hover:shadow-red-600/20 focus:ring-red-700',
            default => throw new RuntimeException(message: 'Unknown color: ' . $this->color),
        };
    }

    public function render(): View {
        $icon_classes = match ($this->size) {
            'default' => '-ml-1 mr-2',
            'small' => '-ml-1 mr-1.5',
            'tiny' => '-ml-1 mr-1',
            default => throw new RuntimeException(message: 'Unknown size: ' . $this->size),
        };
        return view(view: 'bear::button', data: [
            'icon_classes' => $icon_classes . match ($this->color) {
                    'indigo' => ' text-indigo-50',
                    'emerald' => ' text-emerald-50',
                    'red' => ' text-red-50',
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
