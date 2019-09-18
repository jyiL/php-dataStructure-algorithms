<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 9:41 AM
 */

namespace DesignPattern\Creational\AbstractFactory;

class HtmlFactory extends AbstractFactory
{
    public function createText(string $content): Text
    {
        // TODO: Implement createText() method.
        return new HtmlText($content);
    }
}