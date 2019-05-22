<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 10:32 AM
 */

namespace DesignPattern\Creational\FactoryMethod;

class FileLogger implements Logger
{
    /**
     * @var string
     */
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function log(string $message)
    {
        // TODO: Implement Log() method.
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}