<?php

use App\Behavioural\Iterator\City;
use App\Behavioural\Iterator\EgyptCitiesCollection;
use Tests\TestCase;

class IteratorTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */


    public function testCanUseOddIterator()
    {
      $Cairo=new City('Cairo',1000);
      $Giza=new City('Giza',5000);
      $Alex=new City('Alex',2000);
      $Aswan=new City('Aswan',400);
      $egypt=new EgyptCitiesCollection();
      $egypt->addCity($Cairo)
            ->addCity($Giza)
            ->addCity($Alex)
            ->addCity($Aswan);

      $list=[];
     foreach ($egypt->getIterator() as $city)
     {
         $list[]=$city->getName();
     }
self::assertEquals(['Giza','Aswan'],$list);
    }
    public function testCanUseEvenIterator()

    {
        $Cairo=new City('Cairo',1000);
        $Giza=new City('Giza',5000);
        $Alex=new City('Alex',2000);
        $Aswan=new City('Aswan',400);
        $egypt=new EgyptCitiesCollection();
        $egypt->addCity($Cairo)
              ->addCity($Giza)
              ->addCity($Alex)
              ->addCity($Aswan);

        $list=[];
        foreach ($egypt->getEvenIterator() as $city)
        {
            $list[]=$city->getName();
        }
        self::assertEquals(['Cairo','Alex'],$list);
    }

}
