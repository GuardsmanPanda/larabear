<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

final class BearCollectionService {
    /**
     * @template TKey of array-key
     * @template TModel of Model
     *
     * @param Collection<TKey, TModel> $from
     * @param Collection<TKey, TModel> $to
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
