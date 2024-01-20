<?php

namespace App\creational\Builder\Models;

class BenzCar extends car
{
    private $data  =[];
    public function setpart($name,$value){
         $this->data[$name]=$value;
    }

}
