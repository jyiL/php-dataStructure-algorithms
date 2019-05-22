<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 11:53 AM
 */

namespace DesignPattern\structural\Facade;

class Facade
{
    /**
     * @var OsInterface
     */
    private $os;

    /**
     * @var BiosInterface
     * 定义基础输入输出系统接口变量。
     */
    private $bios;

    /**
     * @param BiosInterface $bios
     * @param OsInterface $os
     * 传入基础输入输出系统接口对象 $bios 。
     * 传入操作系统接口对象 $os 。
     */
    public function __construct(BiosInterface $bios, OsInterface $os)
    {
        $this->bios = $bios;
        $this->os = $os;
    }

    /**
     * 构建基础输入输出系统执行启动方法。
     */
    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    /**
     * 构建系统关闭方法。
     */
    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}