<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 10:20 AM
 */

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use DesignPattern\Creational\Builder\Parts\Car;
use DesignPattern\Creational\Builder\Parts\Truck;
use DesignPattern\Creational\Builder\TruckBuilder;
use DesignPattern\Creational\Builder\CarBuilder;
use DesignPattern\Creational\Builder\Director;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director)->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director)->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}