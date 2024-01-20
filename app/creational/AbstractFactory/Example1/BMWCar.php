<?php

namespace App\creational\AbstractFactory\Example1;

class BMWCar implements CarInterface
{
    private $price;
public function __construct($price)
{
    $this->price=$price;
}
public function CalculatePrice()
{
    return$this->price;
}
}
