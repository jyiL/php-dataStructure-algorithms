<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/2/21
 * Time: 3:39 PM
 */

declare(strict_types = 1);

namespace Algorithms\Sort;

class RadixSort implements SortInterface
{
    /**
     * RadixSort 基数排序
     *
     * In computer science,
     * radix sort is a non-comparative integer sorting algorithm that sorts data with integer keys by grouping keys by the individual digits which share the same significant position and value.
     * A positional notation is required,
     * but because integers can represent strings of characters (e.g., names or dates) and specially formatted floating point numbers,
     * radix sort is not limited to integers.
     * Radix sort dates back as far as 1887 to the work of Herman Hollerith on tabulating machines.
     *
     * Most digital computers internally represent all of their data as electronic representations of binary numbers,
     * so processing the digits of integer representations by groups of binary digit representations is most convenient.
     * Radix sorts can be implemented to start at either the most significant digit (MSD) or least significant digit (LSD).
     * For example, when sorting the number 1234 into a list, one could start with the 1 or the 4.
     *
     * LSD radix sorts typically use the following sorting order:
     * short keys come before longer keys,
     * and then keys of the same length are sorted lexicographically.
     * This coincides with the normal order of integer representations,
     * such as the sequence 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11.
     *
     * MSD radix sorts use lexicographic order,
     * which is suitable for sorting strings,
     * such as words, or fixed-length integer representations.
     * A sequence such as "b, c, d, e, f, g, h, i, j, ba" would be lexicographically sorted as "b, ba, c, d, e, f, g, h, i, j".
     * If lexicographic ordering is used to sort variable-length integer representations,
     * then the representations of the numbers from 1 to 10 would be output as 1, 10, 2, 3, 4, 5, 6, 7, 8, 9, as if the shorter keys were left-justified and padded on the right with blank characters to make the shorter keys as long as the longest key for the purpose of determining sorted order
     *
     * @link https://en.wikipedia.org/wiki/Radix_sort
     * @param array $target 待排序数组
     *
     * @return array
     */
    public function sort(array $target): array
    {
        $n = count($target);

        if ($n <= 0)
            return $target;

        $min = min($target);
        $max = max($target);
        $length = $max - $min + 1;

        $bucketArr = array_fill($min, $length, 0);

        array_map(function($val) use(&$bucketArr) {
            $bucketArr[$val] ++;
        }, $target);

        $data = [];

        foreach ($bucketArr as $key => $val) {
            if ($val == 1) {
                $data[] = $key;
            } else {
                // repeating number 重复数字
                while ($val--) {
                    $data[] = $key;
                }
            }
        }

        return $data;
    }
}