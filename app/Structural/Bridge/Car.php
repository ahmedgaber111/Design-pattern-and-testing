<?php

namespace App\Structural\Bridge;

abstract class Car
{
    protected $carcolor;

    public function __construct(CarColor$carcolor)
    {
        $this->carcolor=$carcolor;
    }

    abstract function getProduct();
}
