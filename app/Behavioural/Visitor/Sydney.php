<?php

namespace App\Behavioural\Visitor;

class Sydney implements CityInterface
{
    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitSydney($this);
    }
    public function calculateBudge(int$amount):bool
    {
        return $amount > 5000;
    }
    public function bookInOpera():void
    {
        echo "Opera";
    }
}
