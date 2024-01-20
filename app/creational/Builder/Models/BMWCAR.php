<?php

namespace App\creational\Builder\Models;

class BMWCAR extends Car
{
    private $data=[];
    public function setpart($name,$value){
        $this->data[$name]=$value;
    }
}
