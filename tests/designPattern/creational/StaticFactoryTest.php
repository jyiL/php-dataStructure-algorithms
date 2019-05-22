<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 11:03 AM
 */

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use DesignPattern\Creational\StaticFactory\StaticFactory;
use DesignPattern\Creational\StaticFactory\FormatString;
use DesignPattern\Creational\StaticFactory\FormatNumber;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(
            FormatNumber::class,
            StaticFactory::factory('number')
        );
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(
            FormatString::class,
            StaticFactory::factory('string')
        );
    }

    /**
     * @expectedException \Exception
     */
    public function testException()
    {
        StaticFactory::factory('object');
    }
}