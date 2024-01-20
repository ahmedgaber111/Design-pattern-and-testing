<?php

namespace App\Structural\Decorator;

class BluePaintingDecorator extends PaintingDecorator
{
    private  const COLOR='-Blue-';
    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }


}
