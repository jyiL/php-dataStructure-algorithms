<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 10:34 AM
 */

namespace DesignPattern\Creational\FactoryMethod;

interface LoggerFactory
{
    public function createLogger(): Logger;
}