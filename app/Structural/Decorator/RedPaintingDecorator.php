<?php

namespace App\Structural\Decorator;

class RedPaintingDecorator extends  PaintingDecorator
{
private  const COLOR='RED';
public function paint(Car $car)
{
    $car->setColor(self::COLOR);
    return parent::paint($car); // TODO: Change the autogenerated stub
}

}