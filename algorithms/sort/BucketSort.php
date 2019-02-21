<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/2/20
 * Time: 3:08 PM
 */

declare(strict_types = 1);

namespace Algorithms\Sort;

class BucketSort implements SortInterface
{

    /**
     * BucketSort 桶排序
     *
     * Bucket sort, or bin sort,
     * is a sorting algorithm that works by distributing the elements of an array into a number of buckets.
     * Each bucket is then sorted individually,
     * either using a different sorting algorithm,
     * or by recursively applying the bucket sorting algorithm.
     * It is a distribution sort, a generalization of pigeonhole sort,
     * and is a cousin of radix sort in the most-to-least significant digit flavor.
     * Bucket sort can be implemented with comparisons and therefore can also be considered a comparison sort algorithm.
     * The computational complexity depends on the algorithm used to sort each bucket,
     * the number of buckets to use, and whether the input is uniformly distributed.
     *
     * Bucket sort works as follows:
     * Set up an array of initially empty "buckets".
     * Scatter: Go over the original array, putting each object in its bucket.
     * Sort each non-empty bucket.
     * Gather: Visit the buckets in order and put all elements back into the original array.
     *
     * @link https://en.wikipedia.org/wiki/Bucket_sort
     * @param array $target 待排序数组
     *
     * @return array
     */
    public function sort(array $target): array
    {
        $n = count($target);

        if ($n <= 0)
            return $target;

        $min  = min($target);
        $max  = max($target);
        $bucket = [];
        $bucketLen = $max - $min + 1;

        $bucket = array_fill(0, $bucketLen, []);

        // Into the bucket 入桶
        for ($i = 0; $i < $n; $i++) {
            array_push($bucket[$target[$i] - $min], $target[$i]);
        }

        // Out barrel 出桶
        $k = 0;

        for ($i = 0; $i < $bucketLen; $i++) {
            $_count = count($bucket[$i]);

            for ($j = 0; $j < $_count; $j++) {
                $target[$k] = $bucket[$i][$j];
                $k++;
            }
        }
        return $target;
    }
}