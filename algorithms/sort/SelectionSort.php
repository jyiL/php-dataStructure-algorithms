<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/2/22
 * Time: 3:39 PM
 */

declare(strict_types = 1);

namespace Algorithms\Sort;

class SelectionSort implements SortInterface
{
    /**
     * SelectionSort 选择排序
     *
     * In computer science, selection sort is a sorting algorithm,
     * specifically an in-place comparison sort.
     * It has O(n2) time complexity, making it inefficient on large lists,
     * and generally performs worse than the similar insertion sort.
     * Selection sort is noted for its simplicity,
     * and it has performance advantages over more complicated algorithms in certain situations,
     * particularly where auxiliary memory is limited.
     *
     * The algorithm divides the input list into two parts:
     * the sublist of items already sorted, which is built up from left to right at the front (left) of the list,
     * and the sublist of items remaining to be sorted that occupy the rest of the list.
     * Initially, the sorted sublist is empty and the unsorted sublist is the entire input list.
     * The algorithm proceeds by finding the smallest (or largest,
     * depending on sorting order) element in the unsorted sublist,
     * exchanging (swapping) it with the leftmost unsorted element (putting it in sorted order),
     * and moving the sublist boundaries one element to the right.
     *
     * @link https://en.wikipedia.org/wiki/Selection_sort
     * @param array $target 待排序数组
     *
     * @return array
     */
    public function sort(array $target): array
    {
        $length = count($target);

        for ($i = 0; $i < $length; $i++) {
            $min = $i;

            for ($j = $i + 1; $j < $length; $j++) {
                if ($target[$j] < $target[$min])
                    $min = $j;
            }

            if ($i != $min) {
                $tmp = $target[$i];
                $target[$i] = $target[$min];
                $target[$min] = $tmp;
            }
        }

        return $target;
    }
}