<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 10:57 AM
 */

namespace DesignPattern\Creational\StaticFactory;

final class StaticFactory
{
    public static function factory(string $type): FormatterInterface
    {
        switch ($type) {
            case 'number':
                return new FormatNumber();
                break;
            case 'string':
                return new FormatString();
                break;
            default:
                break;
        }

        throw new \Exception('Unknown format given');
    }
}