<?php

namespace App\Behavioural\Visitor;

class Cairo implements CityInterface
{
    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitCairo($this);
    }
    public function allowToEnter(string$passport):bool
    {
        return in_array($passport,['EG','UK','DE']);
    }
    public function VisitPyramids():void
    {
        echo "pyramids";
    }
}
