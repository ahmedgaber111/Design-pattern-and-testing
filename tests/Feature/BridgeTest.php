<?php

use App\Structural\Bridge\BenzCar;
use App\Structural\Bridge\blueColor;
use App\Structural\Bridge\BMWCar;
use App\Structural\Bridge\RedColor;
use Tests\TestCase;

class BridgeTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */


    public function testCanCreateBlueBMWCar()
    {
          $carcolor=new blueColor();
          $BMW=new BMWCar($carcolor);
    $this->assertEquals('the car type is BMW and the car color is blue',$BMW->getProduct());
    }
    public function testCanCreateRedBMWCar()
    {
        $carcolor=new RedColor();
        $BMW=new BMWCar($carcolor);
        $this->assertEquals('the car type is BMW and the car color is red',$BMW->getProduct());
    }


    public function testCanCreateBlueBenzCar()
{
    $Carcolor=new blueColor();
    $Benz=new BenzCar($Carcolor);
    $this->assertEquals('the car type is Benz and the car color is blue',$Benz->getProduct());
}
    public function testCanCreateRedBenzCar()
    {
        $carcolor=new RedColor();
        $Benz=new BenzCar($carcolor);
        $this->assertEquals('the car type is Benz and the car color is red',$Benz->getProduct());
    }

}
