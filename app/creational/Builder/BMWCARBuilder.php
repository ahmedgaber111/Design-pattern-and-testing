<?php

namespace App\creational\Builder;

use App\creational\Builder\Models\BMWCAR;
use App\creational\Builder\Models\Car;

class BMWCARBuilder implements CarBuilderInterface
{
    /**
     *@var car $type
     */
    private $type;
    public function createCar()
    {
        $this->type=new BMWCAR();
    }
    public function addEngine()
    {
        $this->type->setPart('ENGINE','BMW-engine');
    }
    public function addDoors()
    {
        $this->type->setPart('DOORS',"BMW-doors");
    }
    public function addBody()
    {
        $this->type->setPart('BODY','BMW-body');
    }
    public function addWheel()
    {
        $this->type->setPart('WHEEL','BMW-wheel');
    }
    public function getCar():Car
    {
       return $this->type;
    }
}
