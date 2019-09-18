<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/2/21
 * Time: 11:14 AM
 */

declare(strict_types = 1);

namespace Algorithms\Sort;

class MergeSort implements SortInterface
{
    /**
     * MergeSort 归并排序
     *
     * In computer science, merge sort (also commonly spelled mergesort) is an efficient,
     * general-purpose, comparison-based sorting algorithm.
     * Most implementations produce a stable sort,
     * which means that the order of equal elements is the same in the input and output.
     * Merge sort is a divide and conquer algorithm that was invented by John von Neumann in 1945.
     * A detailed description and analysis of bottom-up mergesort appeared in a report by Goldstine and von Neumann as early as 1948.
     *
     * @link https://en.wikipedia.org/wiki/Merge_sort
     * @param array $target 待排序数组
     *
     * @return array
     */
    public function sort(array $target): array
    {
        $length = count($target);

        $mid = intval($length / 2);

        if ($length == 1)
            return $target;

        $left = $this->sort(array_slice($target, 0, $mid));
        $right = $this->sort(array_slice($target, $mid));

        $target = $this->merge($left, $right);

        return $target;
    }

    /**
     *
     */
    private function merge(array $left, array $right): array
    {
        $tmp = [];

        while (count($left) && count($right)) {
            $tmp[] = $left[0] < $right[0] ? array_shift($left) : array_shift($right);
        }

        return array_merge($tmp, $left, $right);
    }
}