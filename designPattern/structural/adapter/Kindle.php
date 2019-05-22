<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 11:23 AM
 */

namespace DesignPattern\structural\adapter;

/**
 * 这里是适配过的类. 在生产代码中, 这可能是来自另一个包的类，一些供应商提供的代码。
 * 注意它使用了另一种命名方案并用另一种方式实现了类似的操作
 */
class Kindle implements EBookInterface
{
    /**
     * @var int
     */
    private $page = 1;

    /**
     * @var int
     */
    private $totalPages = 100;

    public function unlock()
    {
        // TODO: Implement unlock() method.
    }

    public function pressNext()
    {
        // TODO: Implement pressNext() method.
        $this->page++;
    }

    /**
     * 返回当前页和总页数，像 [10, 100] 是总页数100中的第10页。
     *
     * @return int[]
     */
    public function getPage(): array
    {
        // TODO: Implement getPage() method.
        return [$this->page, $this->totalPages];
    }
}