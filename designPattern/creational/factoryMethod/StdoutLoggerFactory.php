<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 10:35 AM
 */

namespace DesignPattern\Creational\FactoryMethod;

class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        // TODO: Implement createLogger() method.
        return new StdoutLogger();
    }
}