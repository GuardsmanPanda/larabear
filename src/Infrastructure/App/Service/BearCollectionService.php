<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use Illuminate\Database\Eloquent\Collection;

final class BearCollectionService {
    public static function moveElements(Collection $from, Collection $to, callable $filter): void {
        $from->each(function ($item) use ($to, $filter) {
            if ($filter($item)) {
                $to->add($item);
            }
        });
        $from->diff($to);
    }
}
