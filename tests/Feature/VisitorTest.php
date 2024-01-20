<?php

use App\Behavioural\Visitor\Bali;
use App\Behavioural\Visitor\Cairo;
use App\Behavioural\Visitor\London;
use App\Behavioural\Visitor\Sydney;
use App\Behavioural\Visitor\Traveler;
use Tests\TestCase;

class VisitorTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */
  private array$tripPlans;
    protected function setUp(): void
    {
        $this->tripPlans[]=new Cairo();
        $this->tripPlans[]=new Sydney();
        $this->tripPlans[]=new London();
        $this->tripPlans[]=new Bali();

    }

    public function testCanEgPassportTravelSomeCities()
    {
        $traveler=new Traveler('EG',true,500);
        foreach ($this->tripPlans  as   $tripCity)
        {
            $tripCity->accept($traveler);
        }
      self::assertEquals(['Cairo','Bali'],$traveler->getTripHistory());
    }
    public function testCanEgPassportTravelAllCities()
    {
        $traveler=new Traveler('UK',true,50000);
        foreach ($this->tripPlans  as   $tripCity)
        {
            $tripCity->accept($traveler);
        }
        self::assertEquals(['Cairo','Sydney','London','Bali'],$traveler->getTripHistory());
    }

}
