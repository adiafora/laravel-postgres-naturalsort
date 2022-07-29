<?php

namespace Adiafora\NaturalSort;

use Illuminate\Database\Eloquent\Builder;
use InvalidArgumentException;

trait NaturalSortTrait
{
    /**
     * Natural sorting.
     *
     * @param Builder $builder
     * @param string  $column
     * @param string  $direction
     *
     * @return Builder
     */
    public function scopeOrderByNatural(Builder $builder, string $column, string $direction = 'asc')
    {
        if (! in_array($direction, ['asc', 'desc'], true)) {
            throw new InvalidArgumentException('Order direction must be "asc" or "desc".');
        }

        return $builder->orderByRaw('naturalsort(' . $column . ') ' . $direction);
    }

    /**
     * Natural sorting in reverse order.
     *
     * @param Builder $builder
     * @param string  $column
     *
     * @return mixed
     */
    public function scopeOrderByNaturalDesc(Builder $builder, string $column)
    {
        return $builder->orderByNatural($column, 'desc');
    }
}