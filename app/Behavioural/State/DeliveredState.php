<?php

namespace App\Behavioural\State;

class DeliveredState extends State
{
  protected string$state=StateEnum::DELIVERED_STATE;
public function proceed()
{
    $this->transitionTo(new DoneState());
}
}
