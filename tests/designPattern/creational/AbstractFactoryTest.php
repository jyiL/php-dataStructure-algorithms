<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 9:47 AM
 */

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use DesignPattern\Creational\AbstractFactory\HtmlFactory;
use DesignPattern\Creational\AbstractFactory\HtmlText;
use DesignPattern\Creational\AbstractFactory\JsonFactory;
use DesignPattern\Creational\AbstractFactory\JsonText;

class AbstractFactoryTest extends TestCase
{
    public function testCreateHtmlText()
    {
        $factory = new HtmlFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf(HtmlText::class, $text);
    }

    public function testCreateJsonText()
    {
        $factory = new JsonFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf(JsonText::class, $text);
    }
}