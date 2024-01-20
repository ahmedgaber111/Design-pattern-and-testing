<?php

namespace App\Behavioural\Mediator;

class RightRoad extends Road
{
    const ID='RIGHT';
    function getID():string
    {
        return self::ID;
    }
}
