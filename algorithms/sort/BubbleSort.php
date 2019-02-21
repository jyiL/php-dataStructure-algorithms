<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/2/20
 * Time: 10:07 AM
 */

declare(strict_types = 1);

namespace Algorithms\Sort;

class BubbleSort implements SortInterface
{
    /**
     * BubbleSort 冒泡排序
     *
     * Bubble sort, sometimes referred to as sinking sort,
     * is a simple sorting algorithm that repeatedly steps through the list,
     * compares adjacent pairs and swaps them if they are in the wrong order.
     * The pass through the list is repeated until the list is sorted.
     * The algorithm, which is a comparison sort,
     * is named for the way smaller or larger elements "bubble" to the top of the list.
     * Although the algorithm is simple,
     * it is too slow and impractical for most problems even when compared to insertion sort.
     * Bubble sort can be practical if the input is in mostly sorted order with some out-of-order elements nearly in position.
     *
     * @link https://en.wikipedia.org/wiki/Bubble_sort
     * @param array $target 待排数组
     *
     * @return array
     */
    public function sort(array $target): array
    {
        $len = count($target);
        for ($i = 0; $i < $len; $i ++) {
            for ($j = 0; $j < $len-1; $j++) {
                if ($target[$j] > $target[$j+1]) {
                    $tmp = $target[$j];
                    $target[$j] = $target[$j+1];
                    $target[$j+1] = $tmp;
                }
            }
        }

        return $target;
    }
}