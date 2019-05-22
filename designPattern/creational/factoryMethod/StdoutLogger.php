<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 10:31 AM
 */

namespace DesignPattern\Creational\FactoryMethod;

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        // TODO: Implement Log() method.
        echo $message;
    }
}