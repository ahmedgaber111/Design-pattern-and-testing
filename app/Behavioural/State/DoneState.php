<?php

namespace App\Behavioural\State;

class DoneState  extends State
{
 protected string$state=StateEnum::DONE_STATE;
 public function proceed()
 {
   $this->transitionTo(new ArchivedState());
 }
}
