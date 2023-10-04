<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Bicycle;

class BicycleTest extends TestCase
{
    public function testBicycleAttributes()
    {
        $bicycle = new Bicycle("Red", "Cube");

        $this->assertEquals("Red", $bicycle->getColor());
        $this->assertEquals("Cube", $bicycle->getBrand());
    }

    public function testBicycleAcceleration()
    {
        $bicycle = new Bicycle("Red", "Cube");

        $initialSpeed = $bicycle->getCurrentSpeed();
        $acceleration = $bicycle->accelerate(15);

        $this->assertEquals(0, $initialSpeed); //The inital speed should be 0
        $this->assertEquals(15, $acceleration); //Acceleration should be 15
        $this->assertEquals(15, $bicycle->getCurrentSpeed()); //Current speed should be 15 after acceleration

    }
}