<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Details;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;
use RuntimeException;

final class Basic  extends Component {
    public string $classes = "rounded-b shadow border";
    public string$summaryClasses = "select-none font-semibold cursor-pointer py-1.5 px-3 shadow-sm text-sm";

    public function __construct(public readonly string $summary, public readonly  string $color = 'gray', public readonly bool $outline = false) {
        $this->classes .= match ($this->color) {
            'gray' => ' shadow-gray-300 border-gray-300' . ($this->outline ? ' bg-white' : ' bg-gray-50'),
            'red' => ' shadow-red-400 border-red-400' . ($this->outline ? ' bg-white' : ' bg-red-50'),
            'yellow' => ' shadow-yellow-400 border-yellow-400' . ($this->outline ? ' bg-white' : ' bg-yellow-50'),
            'green' => ' shadow-green-400 border-green-400' . ($this->outline ? ' bg-white' : ' bg-green-50'),
            'emerald' => ' shadow-emerald-400 border-emerald-400' . ($this->outline ? ' bg-white' : ' bg-emerald-50'),
            default => throw new RuntimeException(message: 'Unknown color: ' . $this->color),
        };
        $this->summaryClasses .= match ($this->color) {
            'gray' => ' bg-gray-300 shadow-gray-400',
            'red' => ' bg-red-400 shadow-red-500',
            'yellow' => ' bg-yellow-400 shadow-yellow-500',
            'green' => ' bg-green-400 shadow-green-500',
            'emerald' => ' bg-emerald-400 shadow-emerald-500',
            default => throw new RuntimeException(message: 'Unknown color: ' . $this->color),
        };
    }

    public function render(): View {
        return Resp::view(view: 'bear::details.basic');
    }
}
