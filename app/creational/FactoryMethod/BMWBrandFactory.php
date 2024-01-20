<?php

namespace App\creational\FactoryMethod;

class BMWBrandFactory implements BrandFactory
{
public function BuildBrand()
{
    return new BMWBrand();

}
}
