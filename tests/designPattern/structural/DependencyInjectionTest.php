<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 11:46 AM
 */

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use DesignPattern\Structural\DependencyInjection\DatabaseConfiguration;
use DesignPattern\Structural\DependencyInjection\DatabaseConnection;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'admin', 'admin');

        $connection = new DatabaseConnection($config);

        $this->assertEquals('admin:admin@localhost:3306', $connection->getDsn());
    }
}