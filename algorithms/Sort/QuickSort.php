<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/2/21
 * Time: 12:11 PM
 */

declare(strict_types = 1);

namespace Algorithms\Sort;

class QuickSort implements SortInterface
{
    /**
     * QuickSort 快速排序
     *
     * QuickSort (sometimes called partition-exchange sort) is an O(n log n) efficient sorting algorithm,
     * serving as a systematic method for placing the elements of a random access file or an array in order.
     * Developed by British computer scientist Tony Hoare in 1959[1] and published in 1961,
     * it is still a commonly used algorithm for sorting. When implemented well,
     * it can be about two or three times faster than its main competitors,
     * merge sort and heapsort.
     *
     * QuickSort is a comparison sort, meaning that it can sort items of any type for which a "less-than" relation (formally, a total order) is defined.
     * In efficient implementations it is not a stable sort,
     * meaning that the relative order of equal sort items is not preserved.
     * QuickSort can operate in-place on an array,
     * requiring small additional amounts of memory to perform the sorting.
     * It is very similar to selection sort,
     * except that it does not always choose worst-case partition.
     *
     * Mathematical analysis of quicksort shows that,
     * on average, the algorithm takes O(n log n) comparisons to sort n items.
     * In the worst case, it makes O(n2) comparisons, though this behavior is rare.
     *
     * @link https://en.wikipedia.org/wiki/Quicksort
     * @param array $target 待排序数组
     *
     * @return array
     */
    public function sort(array $target): array
    {
        if (count($target) < 2)
            return $target;

        $left = [];
        $right = [];

        $indexKey = key($target);
        $index = array_shift($target);

        array_walk($target, function($val, $key) use(&$left, &$right, $index) {
            if ($index < $val)
                $right[$key] = $val;
            else
                $left[$key] = $val;
        });

        return array_merge(
            $this->sort($left),
            [$indexKey => $index],
            $this->sort($right)
        );

    }
}