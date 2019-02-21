<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/2/20
 * Time: 3:53 PM
 */

declare(strict_types = 1);

namespace Algorithms\Sort;

class HeapSort implements SortInterface
{
    /**
     * HeapSort 堆排序
     *
     * In computer science, heapsort is a comparison-based sorting algorithm.
     * Heapsort can be thought of as an improved selection sort:
     * like that algorithm, it divides its input into a sorted and an unsorted region,
     * and it iteratively shrinks the unsorted region by extracting the largest element and moving that to the sorted region.
     * The improvement consists of the use of a heap data structure rather than a linear-time search to find the maximum.
     *
     * Although somewhat slower in practice on most machines than a well-implemented quicksort,
     * it has the advantage of a more favorable worst-case O(n log n) runtime.
     * Heapsort is an in-place algorithm, but it is not a stable sort.
     *
     * Heapsort was invented by J. W. J. Williams in 1964.
     * This was also the birth of the heap, presented already by Williams as a useful data structure in its own right.
     * In the same year, R. W. Floyd published an improved version that could sort an array in-place,
     * continuing his earlier research into the treesort algorithm.
     *
     * @link https://en.wikipedia.org/wiki/Heapsort
     * @param array $target 待排序数组
     *
     * @return array
     */
    public function sort(array $target): array
    {
        $length = count($target);
        $this->buildHeap($target);

        $heapSize = $length - 1;
        for ($i = $heapSize; $i >= 0; $i--) {
            $tmp = $target[0];
            $target[0] = $target[$heapSize];
            $target[$heapSize] = $tmp;
            $heapSize--;

            $this->heapify($target, 0, $heapSize);
        }

        return $target;
    }

    /**
     * buildHeap 构建堆
     *
     * @param array $target
     */
    private function buildHeap(array &$target)
    {
        $length = count($target);
        $heapSize = $length - 1;

        for ($i = ($length / 2); $i >= 0; $i--) {
            $this->heapify($target, $i, $heapSize);
        }
    }

    /**
     * @param array $target
     * @param integer $i
     * @param integer $heapSize
     */
    private function heapify(array &$target, int $i, int $heapSize)
    {
        $largest = $i;
        $left = 2 * $i + 1;
        $right = 2 * $i + 2;

        if ($left <= $heapSize && $target[$left] > $target[$i])
            $largest = $left;

        if ($right <= $heapSize && $target[$right] > $target[$largest])
            $largest = $right;

        if ($largest != $i) {
            $tmp = $target[$i];
            $target[$i] = $target[$largest];
            $target[$largest] = $tmp;
            $this->heapify($target, $largest, $heapSize);
        }
    }
}