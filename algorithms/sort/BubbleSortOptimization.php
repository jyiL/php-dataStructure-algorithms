<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/2/20
 * Time: 2:20 PM
 */

declare(strict_types = 1);

namespace Algorithms\Sort;

class BubbleSortOptimization implements SortInterface
{
    /**
     * BubbleSortOptimization 冒泡排序优化
     *
     * @link https://en.wikipedia.org/wiki/Bubble_sort
     * @param array $target 待排序数组
     *
     * @return array
     */
    public function sort(array $target): array
    {
        $len = count($target);
        $bound = $len - 1;

        for ($i = 0; $i< $len; $i++) {
            $newBound = 0;
            $flag = false;
            for ($j = 0; $j < $bound; $j++) {
                if ($target[$j] > $target[$j+1]) {
                    $tmp = $target[$j];
                    $target[$j] = $target[$j+1];
                    $target[$j+1] = $tmp;
                    $flag = true;
                    $newBound = $j;
                }
            }
            $bound = $newBound;

            if (!$flag) break;
        }

        return $target;
    }
}