<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/2/20
 * Time: 11:38 AM
 */

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

use ContainerCore\Container;
use Algorithms\Sort\AlgorithmsSort;

class AlgorithmSortTest extends TestCase
{
    private $sortNameArr = [
        'BubbleSort',
        'BubbleSortOptimization',
        'BucketSort',
        'HeapSort',
        'InsertionSort',
        'MergeSort',
        'QuickSort',
        'RadixSort',
        'SelectionSort',
        'CombSort',
    ];

    private $sortNameArrClass = [
        'BubbleSort' => 'Algorithms\Sort\BubbleSort',
        'BubbleSortOptimization' => 'Algorithms\Sort\BubbleSortOptimization',
        'BucketSort' => 'Algorithms\Sort\BucketSort',
        'HeapSort' => 'Algorithms\Sort\HeapSort',
        'InsertionSort' => 'Algorithms\Sort\InsertionSort',
        'MergeSort' => 'Algorithms\Sort\MergeSort',
        'QuickSort' => 'Algorithms\Sort\QuickSort',
        'RadixSort' => 'Algorithms\Sort\RadixSort',
        'SelectionSort' => 'Algorithms\Sort\SelectionSort',
        'CombSort' => 'Algorithms\Sort\CombSort',
    ];

    public function testBind()
    {
        $container = new Container();

        for ($i = 0; $i < count($this->sortNameArr); $i++) {
            $_sortName = $this->sortNameArr[$i];
            $container->bind($_sortName, function($container) use ($_sortName) {
                return new $this->sortNameArrClass[$_sortName];
            });
        }

        $container->bind('algorithmsSort', function($container, $sort) {
            return new AlgorithmsSort( $container->make($sort) );
        });

        $this->assertNotNull($container);

        return $container;
    }

    /**
     * @depends testBind
     */
    public function testBubbleSort($container)
    {
        $sort = $this->make($container, 'BubbleSort');

        $_numberArr = $this->getRandNumberArr();

        printf(PHP_EOL . '---BubbleSort---' . PHP_EOL);
        printf('Before BubbleSort--' . implode(',', $_numberArr) . PHP_EOL);
        $tmp = $sort->sortArr['algorithms\sort\bubblesort']->sort($_numberArr);

        printf('After BubbleSort--' . implode(',', $tmp) . PHP_EOL);

        sort($_numberArr);
        $this->assertEquals(implode(',', $_numberArr), implode(',', $tmp));
    }

    /**
     * @depends testBind
     */
    public function testBubbleSortOptimization($container)
    {
        $sort = $this->make($container, 'BubbleSortOptimization');

        $_numberArr = $this->getRandNumberArr();

        printf(PHP_EOL . '---BubbleSortOptimization---' . PHP_EOL);
        printf('Before BubbleSortOptimization--' . implode(',', $_numberArr) . PHP_EOL);
        $tmp = $sort->sortArr['algorithms\sort\bubblesortoptimization']->sort($_numberArr);

        printf('After BubbleSortOptimization--' . implode(',', $tmp) . PHP_EOL);

        sort($_numberArr);
        $this->assertEquals(implode(',', $_numberArr), implode(',', $tmp));
    }

    /**
     * @depends testBind
     */
    public function testBucketSort($container)
    {
        $sort = $this->make($container, 'BucketSort');

        $_numberArr = $this->getRandNumberArr();

        printf(PHP_EOL . '---BucketSort---' . PHP_EOL);
        printf('Before BucketSort--' . implode(',', $_numberArr) . PHP_EOL);
        $tmp = $sort->sortArr['algorithms\sort\bucketsort']->sort($_numberArr);

        printf('After BucketSort--' . implode(',', $tmp) . PHP_EOL);

        sort($_numberArr);
        $this->assertEquals(implode(',', $_numberArr), implode(',', $tmp));
    }

    /**
     * @depends testBind
     */
    public function testHeapSort($container)
    {
        $sort = $this->make($container, 'HeapSort');

        $_numberArr = $this->getRandNumberArr(8);

        printf(PHP_EOL . '---HeapSort---' . PHP_EOL);
        printf('Before HeapSort--' . implode(',', $_numberArr) . PHP_EOL);
        $tmp = $sort->sortArr['algorithms\sort\heapsort']->sort($_numberArr);

        printf('After HeapSort--' . implode(',', $tmp) . PHP_EOL);

        sort($_numberArr);
        $this->assertEquals(implode(',', $_numberArr), implode(',', $tmp));
    }

    /**
     * @depends testBind
     */
    public function testInsertionSort($container)
    {
        $sort = $this->make($container, 'InsertionSort');

        $_numberArr = $this->getRandNumberArr(8);

        printf(PHP_EOL . '---InsertionSort---' . PHP_EOL);
        printf('Before InsertionSort--' . implode(',', $_numberArr) . PHP_EOL);
        $tmp = $sort->sortArr['algorithms\sort\insertionsort']->sort($_numberArr);

        printf('After InsertionSort--' . implode(',', $tmp) . PHP_EOL);

        sort($_numberArr);
        $this->assertEquals(implode(',', $_numberArr), implode(',', $tmp));
    }

    /**
     * @depends testBind
     */
    public function testMergeSort($container)
    {
        $sort = $this->make($container, 'MergeSort');

        $_numberArr = $this->getRandNumberArr(8);

        printf(PHP_EOL . '---MergeSort---' . PHP_EOL);
        printf('Before MergeSort--' . implode(',', $_numberArr) . PHP_EOL);
        $tmp = $sort->sortArr['algorithms\sort\mergesort']->sort($_numberArr);

        printf('After MergeSort--' . implode(',', $tmp) . PHP_EOL);

        sort($_numberArr);
        $this->assertEquals(implode(',', $_numberArr), implode(',', $tmp));
    }

    /**
     * @depends testBind
     */
    public function testQuickSort($container)
    {
        $sort = $this->make($container, 'QuickSort');

        $_numberArr = $this->getRandNumberArr(8);

        printf(PHP_EOL . '---QuickSort---' . PHP_EOL);
        printf('Before QuickSort--' . implode(',', $_numberArr) . PHP_EOL);
        $tmp = $sort->sortArr['algorithms\sort\quicksort']->sort($_numberArr);

        printf('After QuickSort--' . implode(',', $tmp) . PHP_EOL);

        sort($_numberArr);
        $this->assertEquals(implode(',', $_numberArr), implode(',', $tmp));
    }

    /**
     * @depends testBind
     */
    public function testRadixSort($container)
    {
        $sort = $this->make($container, 'RadixSort');

        $_numberArr = $this->getRandNumberArr(8);

        printf(PHP_EOL . '---RadixSort---' . PHP_EOL);
        printf('Before RadixSort--' . implode(',', $_numberArr) . PHP_EOL);
        $tmp = $sort->sortArr['algorithms\sort\radixsort']->sort($_numberArr);

        printf('After RadixSort--' . implode(',', $tmp) . PHP_EOL);

        sort($_numberArr);
        $this->assertEquals(implode(',', $_numberArr), implode(',', $tmp));
    }

    /**
     * @depends testBind
     */
    public function testSelectionSort($container)
    {
        $sort = $this->make($container, 'SelectionSort');

        $_numberArr = $this->getRandNumberArr(8);

        printf(PHP_EOL . '---SelectionSort---' . PHP_EOL);
        printf('Before SelectionSort--' . implode(',', $_numberArr) . PHP_EOL);
        $tmp = $sort->sortArr['algorithms\sort\selectionsort']->sort($_numberArr);

        printf('After SelectionSort--' . implode(',', $tmp) . PHP_EOL);

        sort($_numberArr);
        $this->assertEquals(implode(',', $_numberArr), implode(',', $tmp));
    }

    /**
     * @depends testBind
     */
    public function testCombSort($container)
    {
        $sort = $this->make($container, 'CombSort');

        $_numberArr = $this->getRandNumberArr(8);

        printf(PHP_EOL . '---CombSort---' . PHP_EOL);
        printf('Before CombSort--' . implode(',', $_numberArr) . PHP_EOL);
        $tmp = $sort->sortArr['algorithms\sort\combsort']->sort($_numberArr);

        printf('After CombSort--' . implode(',', $tmp) . PHP_EOL);

        sort($_numberArr);
        $this->assertEquals(implode(',', $_numberArr), implode(',', $tmp));
    }


    /**
     * @param integer $num
     *
     * @return array
     */
    private function getRandNumberArr($num = 9): array
    {
        $_numberArr = [];

        for ($i = 0; $i < $num; $i++) {
            $_numberArr[] = rand(0, 100);
        }

        return $_numberArr;
    }

    /**
     * @param mixed $container
     * @param string $name
     *
     * @return mixed
     */
    private function make($container, $name)
    {
        return $container->make('algorithmsSort', [$name]);
    }
}