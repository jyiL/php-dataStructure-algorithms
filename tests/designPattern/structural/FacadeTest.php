<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 2:08 PM
 */

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use DesignPattern\Structural\Facade\Facade;

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $os = $this->createMock('DesignPattern\Structural\Facade\OsInterface');

        $os->method('getName')->will($this->returnValue('Linux'));

        $bios = $this->getMockBuilder('DesignPattern\Structural\Facade\BiosInterface')
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
            ->disableAutoload()
            ->getMock();

        $bios->expects($this->once())
            ->method('launch')
            ->with($os);

        $facade = new Facade($bios, $os);

        $facade->turnOn();

        $this->assertEquals('Linux', $os->getName());
    }
}