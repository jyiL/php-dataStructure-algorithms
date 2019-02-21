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
    ];

    private $sortNameArrClass = [
        'BubbleSort' => 'Algorithms\Sort\BubbleSort',
        'BubbleSortOptimization' => 'Algorithms\Sort\BubbleSortOptimization',
        'BucketSort' => 'Algorithms\Sort\BucketSort',
        'HeapSort' => 'Algorithms\Sort\HeapSort',
        'InsertionSort' => 'Algorithms\Sort\InsertionSort',
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
        $this->assertNotEquals(implode(',', $_numberArr), implode(',', $tmp));
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
        $this->assertNotEquals(implode(',', $_numberArr), implode(',', $tmp));
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
        $this->assertNotEquals(implode(',', $_numberArr), implode(',', $tmp));
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
        $this->assertNotEquals(implode(',', $_numberArr), implode(',', $tmp));
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
        $this->assertNotEquals(implode(',', $_numberArr), implode(',', $tmp));
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