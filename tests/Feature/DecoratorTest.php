<?php

use App\Structural\Decorator\BlackPaintingDecorator;
use App\Structural\Decorator\BluePaintingDecorator;
use App\Structural\Decorator\Car;
use App\Structural\Decorator\Painting;
use Tests\TestCase;

class DecoratorTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */


    public function testCanPaintCarWithBlackAndBlueColor()
    {
        $car=new Car();
        $painting=new Painting();
        $painting1=new BluePaintingDecorator($painting);
        $painting2=new BlackPaintingDecorator($painting1);

        $painting2->paint($car);
        $this->assertEquals('-Black--Blue-',$car->getColor());
        $this->addToAssertionCount(1);

    }
}
