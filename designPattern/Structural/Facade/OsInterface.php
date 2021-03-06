<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 11:58 AM
 */

namespace DesignPattern\Structural\Facade;

/**
 * 创建操作系统接口类 OsInterface 。
 */
interface OsInterface
{
    /**
     * 声明关机方法。
     */
    public function halt();

    /**
     * 声明获取名称方法，返回字符串格式数据。
     */
    public function getName(): string;
}