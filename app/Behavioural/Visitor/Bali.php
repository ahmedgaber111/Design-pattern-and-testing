<?php

namespace App\Behavioural\Visitor;

class Bali implements CityInterface
{
    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitBali($this);
    }
    public function ValidateVisit(string$passport,bool$hotelBooked):bool
    {
        return $hotelBooked && in_array($passport,['EG','UK','DE']);
    }
    public function enjoyKutaBeach():void
    {
        echo "Kuta Beach";
    }
}
