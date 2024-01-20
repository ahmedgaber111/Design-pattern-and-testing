<?php

namespace App\Structural\Decorator;

class PaintingDecorator implements PaintingInterface
{

    /**
     * @var PaintingInterface
      */
    private PaintingInterface $painting;

    public function __construct(PaintingInterface$painting)
{
     $this->painting=$painting;
}
 public function paint(Car$car)
{
return $this->painting->paint($car);
}
}
