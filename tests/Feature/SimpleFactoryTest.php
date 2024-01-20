<?php

use App\creational\SimpleFactory\Car;
use App\creational\SimpleFactory\CarFactory;
use Tests\TestCase;

class SimpleFactoryTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */

    public function testCanCreateCar()
    {
        $factory=new  CarFactory();
        $BmwCar=$factory->CreateCar("BMW");
        $this->assertInstanceOf(Car::class,$BmwCar);

    }
}
