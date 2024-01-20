<?php

namespace App\creational\SimpleFactory;

class Car
{
    private $type;
public function __construct(String $type)
{
   $this->type=$type;
}
}
