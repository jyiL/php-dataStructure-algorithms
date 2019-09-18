<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/2/20
 * Time: 10:50 AM
 */

declare(strict_types = 1);

namespace Algorithms\Sort;

class AlgorithmsSort
{
    public $sortArr = [];

    public function __construct(SortInterface $sort = null)
    {
        if ($sort != null) {
            $name = strtolower(get_class($sort));
            $this->sortArr[$name] = $sort;
        }
    }

    public function addSort(SortInterface $sort)
    {
        $name = strtolower(get_class($sort));
        $this->sortArr[$name] = $sort;
    }
}