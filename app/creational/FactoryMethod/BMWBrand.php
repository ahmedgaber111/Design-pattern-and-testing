<?php

namespace App\creational\FactoryMethod;

class BMWBrand implements CarbrandInterface
{
public function CreateBrand()
{
       return "BMW Brand";
}
}
