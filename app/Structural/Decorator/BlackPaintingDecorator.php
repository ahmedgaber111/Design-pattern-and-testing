<?php

namespace App\Structural\Decorator;

class BlackPaintingDecorator extends PaintingDecorator
{
    private  const COLOR='-Black-';
    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }

}
