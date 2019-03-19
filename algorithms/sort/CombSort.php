<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/2/22
 * Time: 4:06 PM
 */

declare(strict_types = 1);

namespace Algorithms\Sort;

class CombSort implements SortInterface
{
    /**
     * CombSort 梳排序
     *
     * Comb sort is a relatively simple sorting algorithm originally designed by Włodzimierz Dobosiewicz in 1980.
     * Later it was rediscovered by Stephen Lacey and Richard Box in 1991.
     * Comb sort improves on bubble sort.
     *
     * @link https://en.wikipedia.org/wiki/Comb_sort
     * @param array $target 待排数组
     *
     * @return array
     */
    public function sort(array $target): array
    {
        $length  = count($target);
        $step = (int)floor($length/1.3);

        while ($step >= 1) {
            for ($i = 0; $i < $length; $i++) {
                if ($i + $step < $length && $target[$i] > $target[$i + $step]) {
                    $tmp = $target[$i];
                    $target[$i] = $target[$i+$step];
                    $target[$i+$step] = $tmp;
                }

                if($i + $step > $length) {
                    break;
                }
            }

            $step = (int)floor($step/1.3);
        }

        return $target;
    }
}