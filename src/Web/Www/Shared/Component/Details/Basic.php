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
            'gray' => ' shadow-gray-200 border-gray-200' . ($this->outline ? ' bg-white' : ' bg-gray-50'),
            'red' => ' shadow-red-300 border-red-300' . ($this->outline ? ' bg-white' : ' bg-red-50'),
            'yellow' => ' shadow-yellow-300 border-yellow-300' . ($this->outline ? ' bg-white' : ' bg-yellow-50'),
            'green' => ' shadow-green-300 border-green-300' . ($this->outline ? ' bg-white' : ' bg-green-50'),
            'emerald' => ' shadow-emerald-300 border-emerald-300' . ($this->outline ? ' bg-white' : ' bg-emerald-50'),
            default => throw new RuntimeException(message: 'Unknown color: ' . $this->color),
        };
        $this->summaryClasses .= match ($this->color) {
            'gray' => ' bg-gray-200 shadow-gray-300',
            'red' => ' bg-red-300 shadow-red-400',
            'yellow' => ' bg-yellow-300 shadow-yellow-400',
            'green' => ' bg-green-300 shadow-green-400',
            'emerald' => ' bg-emerald-300 shadow-emerald-400',
            default => throw new RuntimeException(message: 'Unknown color: ' . $this->color),
        };
    }

    public function render(): View {
        return Resp::view(view: 'bear::details.basic');
    }
}
