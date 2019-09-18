<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 10:36 AM
 */

namespace DesignPattern\Creational\FactoryMethod;

class FileLoggerFactory implements LoggerFactory
{
    /**
     * @var string
     */
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger(): Logger
    {
        // TODO: Implement createLogger() method.
        return new FileLogger($this->filePath);
    }
}