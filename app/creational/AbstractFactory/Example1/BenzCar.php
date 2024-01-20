<?php

namespace App\creational\AbstractFactory\Example1;

class BenzCar implements CarInterface
{
    private $price;
    private $tax;
    public function __construct($price,$tax)
    {
        $this->price=$price;
        $this->tax=$tax;
    }
       public function CalculatePrice()
       {
          return$this->price+$this->tax+2000;
       }
}
