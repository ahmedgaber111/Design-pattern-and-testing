<?php

use App\Structural\Adaptor\Car;
use App\Structural\Adaptor\EngineAdaptor;
use App\Structural\Adaptor\NormalEngine;
use App\Structural\Adaptor\TurboEngine;
use Tests\TestCase;

class AdaptorTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */


    public function testCanStartNormalEngine()
    {
       $engine= new NormalEngine();
       $car=new Car($engine);
       $this->assertEquals("Normal Engine Start",$car->Start());

    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */


    public function testCanStartTurboEngine()

    {
        $engine= new TurboEngine();
        $adaptor= new EngineAdaptor($engine);

        $car=new Car($adaptor);
        $this->assertEquals("Turbo is Start",$car->Start());

    }
}
