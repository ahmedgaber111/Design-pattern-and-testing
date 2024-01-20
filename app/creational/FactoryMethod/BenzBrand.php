<?php

namespace App\creational\FactoryMethod;

class BenzBrand implements CarBrandInterface
{
    public function createBrand()
    {
        return "Benz Brand";
    }

}
