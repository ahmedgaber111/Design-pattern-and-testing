<?php

namespace App\creational\StaticFactory;

class StaticFactory
{
    public static function factory(String $type ){
        if ($type=='BMW'){
            return new BMWCar();
        }elseif ($type=='Benz'){
            return new BenzCar();
        }
        return "null";
    }

}
