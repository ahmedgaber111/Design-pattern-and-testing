<?php

namespace App\Behavioural\Mediator;

class LeftRoad extends Road
{
    const ID='LEFT';
    function getID():string
    {
        return self::ID;
    }
}
