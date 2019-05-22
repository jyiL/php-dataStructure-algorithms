<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 10:38 AM
 */

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use DesignPattern\Creational\FactoryMethod\FileLogger;
use DesignPattern\Creational\FactoryMethod\FileLoggerFactory;
use DesignPattern\Creational\FactoryMethod\StdoutLogger;
use DesignPattern\Creational\FactoryMethod\StdoutLoggerFactory;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}