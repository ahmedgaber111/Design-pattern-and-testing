<?php

namespace App\Behavioural\State;

class CreatedState extends State
{
   protected string$state=StateEnum::CREATED_STATE;
   public function proceed()
   {
     $this->transitionTo(new CollectedState());
   }
}
