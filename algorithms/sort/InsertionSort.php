<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/2/20
 * Time: 5:08 PM
 */

declare(strict_types = 1);

namespace Algorithms\Sort;

class InsertionSort implements SortInterface
{
    /**
     * InsertionSort 插入排序
     *
     * Insertion sort is a simple sorting algorithm that builds the final sorted array (or list) one item at a time.
     * It is much less efficient on large lists than more advanced algorithms such as quicksort, heapsort,
     * or merge sort. However, insertion sort provides several advantages:
     * Simple implementation: Jon Bentley shows a three-line C version, and a five-line optimized version
     * Efficient for (quite) small data sets, much like other quadratic sorting algorithms
     * More efficient in practice than most other simple quadratic (i.e., O(n2)) algorithms such as selection sort or bubble sort
     * Adaptive, i.e., efficient for data sets that are already substantially sorted: the time complexity is O(kn) when each element in the input is no more than k places away from its sorted position
     * Stable; i.e., does not change the relative order of elements with equal keys
     * In-place; i.e., only requires a constant amount O(1) of additional memory space
     * Online; i.e., can sort a list as it receives it
     *
     * When people manually sort cards in a bridge hand, most use a method that is similar to insertion sort.
     *
     * @link https://en.wikipedia.org/wiki/Insertion_sort
     *
     * @param array $target 待排序数组
     *
     * @return array
     */
    public function sort(array $target): array
    {
        $length = count($target);

        for ($i = 1; $i < $length; $i++) {
            $key = $target[$i];
            $j = $i - 1;

            while ($j >= 0 && $target[$j] > $key) {
                $target[$j + 1] = $target[$j];
                $j--;
            }

            $target[$j + 1] = $key;
        }

        return $target;
    }
}