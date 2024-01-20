<?php

namespace App\Structural\Bridge;

class BenzCar  extends Car
{
public function __construct(CarColor $carcolor)
{
    parent::__construct($carcolor);

}
public function getProduct()
{
return sprintf('the car type is %s and the car color is %s',"Benz",$this->carcolor->getColor());
}
}
