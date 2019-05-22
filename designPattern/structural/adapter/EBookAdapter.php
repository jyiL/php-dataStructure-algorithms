<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 11:20 AM
 */

namespace DesignPattern\structural\adapter;

/**
 * 这里是一个适配器. 注意他实现了 BookInterface,
 * 因此你不必去更改客户端代码当使用 Book
 */
class EBookAdapter implements BookInterface
{
    /**
     * @var EBookInterface
     */
    protected $eBook;

    /**
     * @param EBookInterface $eBook
     */
    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    /**
     * 这个类使接口进行适当的转换.
     */
    public function open()
    {
        // TODO: Implement open() method.
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        // TODO: Implement turnPage() method.
        $this->eBook->pressNext();
    }

    /**
     * 注意这里适配器的行为： EBookInterface::getPage() 将返回两个整型，除了 BookInterface
     * 仅支持获得当前页，所以我们这里适配这个行为
     *
     * @return int
     */
    public function getPage(): int
    {
        // TODO: Implement getPage() method.
        return $this->eBook->getPage()[0];
    }
}