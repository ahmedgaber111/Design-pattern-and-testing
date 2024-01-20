<?php

namespace App\Structural\Composite;

class SimpleBox implements ProductInterface
{
    private $Price;
public function __construct(int $Price)
{
    $this->Price=$Price;
}
public function getPrice()
{
return $this->Price;
}
}
