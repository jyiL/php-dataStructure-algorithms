<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 10:10 AM
 */

namespace DesignPattern\Creational\Builder;

use DesignPattern\Creational\Builder\Parts\Vehicle;

class TruckBuilder implements BuilderInterface
{
    private $truck;

    public function createVehicle()
    {
        $this->truck = new Parts\Truck();
    }

    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Parts\Door());
        $this->truck->setPart('leftDoor', new Parts\Door());
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Parts\Engine());
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Parts\Wheel());
        $this->truck->setPart('wheel2', new Parts\Wheel());
        $this->truck->setPart('wheel3', new Parts\Wheel());
        $this->truck->setPart('wheel4', new Parts\Wheel());
        $this->truck->setPart('wheel5', new Parts\Wheel());
        $this->truck->setPart('wheel6', new Parts\Wheel());
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}