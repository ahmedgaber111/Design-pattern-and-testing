<?php

namespace App\creational\SimpleFactory;

class CarFactory
{
public function CreateCar(string$type){
   return new Car($type);
}
}
