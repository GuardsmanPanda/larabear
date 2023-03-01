<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use Illuminate\Database\Eloquent\Collection;

final class BearCollectionService {
    /**
     * @param Collection<string|int, mixed> $from
     * @param Collection<string|int, mixed> $to
     * @param callable $filter
     * @return void
     */
    public static function moveItems(Collection &$from, Collection $to, callable $filter): void {
        foreach ($from as $item) {
            if ($filter($item)) {
                $to->add($item);
            }
        }
        $from = $from->diff($to);
    }
}
