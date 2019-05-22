<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/15
 * Time: 3:01 PM
 */

namespace DesignPattern\Creational\AbstractFactory;

abstract class AbstractFactory
{
    abstract public function createText(string $content): Text;
}