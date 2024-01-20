<?php

namespace App\creational\AbstractFactory\Example1;

class CarAbstractFactory
{
private $tax=100000;
private $price;
public function __construct($price)
{
    $this->price=$price;
}
public function CreateBMWCar():BMWCar{
    return new BMWCar($this->price);
}
public function CreateBEnzCar():BenzCar{
        return new BenzCar($this->price,$this->tax);
    }
}
