<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/15
 * Time: 3:26 PM
 */

namespace DesignPattern\Creational\AbstractFactory;

class JsonFactory extends AbstractFactory
{
    public function createText(string $content): Text
    {
        // TODO: Implement createText() method.
        return new JsonText($content);
    }
}