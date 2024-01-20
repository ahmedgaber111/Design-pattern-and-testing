<?php

namespace App\Behavioural\State;

class PaidState extends State
{
    protected string$state=StateEnum::PAID_STATE;
    private bool $PaymentStatus;
    public function Proceed()
    {
       $this->PaymentStatus=$this->getContext()->getClient()->isPaymentExist();
       if ($this->PaymentStatus)
       {
       $this->transitionTo(new DeliveredState());
       }
       else
       {
             $this->transitionTo(new CancelState());
       }
    }
}
