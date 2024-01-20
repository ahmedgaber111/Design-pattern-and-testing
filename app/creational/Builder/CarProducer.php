<?php

namespace App\creational\Builder;



use App\creational\Builder\Models\Car;

class CarProducer
{
    /**
     * @var CarBuilderInterface
     */
    private $builder;
    public function __construct(CarBuilderInterface$builder){
        $this->builder=$builder;
    }
    public function producecar():Car{

        $this->builder->createCar();
        $this->builder->addBody();
        $this->builder->addDoors();
        $this->builder->addEngine();
        $this->builder->addWheel();
        return  $this->builder->getCar();
    }
}
