<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 11:15 AM
 */

namespace DesignPattern\structural\adapter;

interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}