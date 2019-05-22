<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 11:18 AM
 */

namespace DesignPattern\structural\adapter;

class Book implements BookInterface
{
    /**
     * @var string
     */
    private $page;

    public function turnPage()
    {
        // TODO: Implement turnPage() method.
        $this->page++;
    }

    public function open()
    {
        // TODO: Implement open() method.
        $this->page = 1;
    }

    public function getPage(): int
    {
        // TODO: Implement getPage() method.
        return $this->page;
    }
}