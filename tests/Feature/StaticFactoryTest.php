<?php

use App\creational\StaticFactory\BenzCar;
use App\creational\StaticFactory\BMWCar;
use App\creational\StaticFactory\StaticFactory;
use Tests\TestCase;

class StaticFactoryTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */


   public function testCanCreateBMW(){

$this->assertInstanceOf(BMWCar::class,StaticFactory::factory('BMW'));
       $this->assertInstanceOf(BenzCar::class,StaticFactory::factory('Benz'));

   }
}
