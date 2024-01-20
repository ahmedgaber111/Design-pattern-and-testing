<?php

namespace App\creational\Builder;

use App\creational\Builder\Models\BenzCar;
use App\creational\Builder\Models\Car;

class BenzCarBuilder implements CarBuilderInterface
{
    /**
      *@var car $type
     */
     private $type;

    public function createCar()
    {
        $this->type=new BenzCar();
    }
     public function addEngine()
     {
         $this->type->setPart('ENGINE','engine');
     }
     public function addDoors()
     {
         $this->type->setPart('DOORS',"doors");
     }
     public function addBody()
      {
        $this->type->setPart('BODY','body');
      }
     public function addWheel()
     {
         $this->type->setPart('WHEEL','wheel');
     }

     public function getCar() :Car
    {
        return  $this->type;
    }
}
