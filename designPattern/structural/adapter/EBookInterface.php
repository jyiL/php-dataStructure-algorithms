<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 11:21 AM
 */

namespace DesignPattern\structural\adapter;

interface EBookInterface
{
    public function unlock();

    public function pressNext();

    /**
     * 返回当前页和总页数，像 [10, 100] 是总页数100中的第10页。
     *
     * @return int[]
     */
    public function getPage(): array;
}