<?php

namespace Feature;

use App\creational\Builder\BenzCarBuilder;
use App\creational\Builder\BMWCARBuilder;
use App\creational\Builder\CarProducer;
use App\creational\Builder\Models\BenzCar;
use App\creational\Builder\Models\BMWCAR;
use Tests\TestCase;

class BuilderTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */

    public function TestProduceBenzCAR(){
        $BenzBUILDER=NEW BenzCarBuilder();
        $CarProducer=new CarProducer($BenzBUILDER);
        $myCar=$CarProducer->producecar();
        $this->assertInstanceOf(BenzCar::class,$BenzBUILDER->getCar());
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */

    public function TestProduceBMWCAR(){
   $BMWBUILDER=NEW BMWCARBuilder();
   $CarProducer=new CarProducer($BMWBUILDER);
   $mycar=$CarProducer->producecar();
   $this->assertInstanceOf(BMWCAR::class,$mycar);
}


}
