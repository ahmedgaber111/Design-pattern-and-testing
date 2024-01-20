<?php

use App\Behavioural\Mediator\LeftRoad;
use App\Behavioural\Mediator\RightRoad;
use App\Behavioural\Mediator\Road;
use App\Behavioural\Mediator\RoadLightMediator;
use Tests\TestCase;

class MediatorTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */
    private $lightmediator;
    private $rightroad;
    private $leftroad;

     public function setUp(): void
     {
        $this->leftroad=new LeftRoad();
        $this->rightroad=new RightRoad();
        $this->lightmediator=new RoadLightMediator($this->rightroad,$this->leftroad);
     }

    public function testCanMoveRightRoadBasedOnLeftRoad()
    {
        $this->lightmediator->action($this->leftroad,Road::STOP_EVENT);
        self::assertEquals($this->rightroad->getRoadStatus(),'MOVE');
    }
    public function testCanStopRightRoadBasedOnLeftRoad()
    {
        $this->lightmediator->action($this->leftroad,Road::MOVE_EVENT);

        self::assertEquals($this->rightroad->getRoadStatus(),'STOP');
    }
    public function testCanMoveLeftRoadBasedOnRightRoad()
    {
        $this->lightmediator->action($this->rightroad,Road::STOP_EVENT);

        self::assertEquals($this->leftroad->getRoadStatus(),'MOVE');
    }
    public function testCanStopLeftRoadBasedOnRightRoad()
    {
        $this->lightmediator->action($this->leftroad,Road::MOVE_EVENT);

        self::assertEquals($this->rightroad->getRoadStatus(),'STOP');
    }
}
