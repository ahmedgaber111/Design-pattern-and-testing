<?php

namespace App\creational\FactoryMethod;

class BenzBrandFactory implements BrandFactory
{
public function BuildBrand()
{
    return new BenzBrand();
}
}
