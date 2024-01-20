<?php

namespace App\Behavioural\Visitor;

 class Traveler implements VisitorInterface
{
    private string$passport;
    private bool $hotelBooked;
    private int $Budget;
    private array$tripHistory=[];
    public function __construct(string$passport,bool$hotelBooked,int$Budget)
    {
        $this->passport=$passport;
        $this->hotelBooked=$hotelBooked;
        $this->Budget=$Budget;
    }
    public function visitCairo(Cairo$cairo)
    {
        $this->tripHistory[]='Cairo';
      $cairo->VisitPyramids();
    }
    public function visitLondon(London$london)
    {
        if ($london->allowToVisit($this->passport))
        {
            $this->tripHistory[] = 'London';
            $london->GotoBigBan();
        }
        }
    public function visitSydney(Sydney$sydney)
    {
        if ($sydney->calculateBudge($this->Budget)) {
            $this->tripHistory[] = "Sydney";
            $sydney->bookInOpera();
        }
    }
    public function VisitBali(Bali$bali)
        {
            if ($bali->ValidateVisit($this->passport, $this->hotelBooked))
            {
                $this->tripHistory[] = "Bali";
                $bali->enjoyKutaBeach();
            }
        }
     /**
      * @return array
      */
     public function getTripHistory(): array
     {
         return $this->tripHistory;
     }



        }



