<?php

namespace App\Behavioural\Visitor;

interface CityInterface
{
    public function accept(VisitorInterface$visitor):void;

}
