<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 10:18 AM
 */

namespace DesignPattern\Creational\Builder;

use DesignPattern\Creational\Builder\Parts\Vehicle;

class CarBuilder implements BuilderInterface
{
    private $car;

    public function createVehicle()
    {
        $this->car = new Parts\Car();
    }

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Parts\Door());
        $this->car->setPart('leftDoor', new Parts\Door());
        $this->car->setPart('trunkLid', new Parts\Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Parts\Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Parts\Wheel());
        $this->car->setPart('wheelRF', new Parts\Wheel());
        $this->car->setPart('wheelLR', new Parts\Wheel());
        $this->car->setPart('wheelRR', new Parts\Wheel());
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}