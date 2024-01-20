<?php

namespace App\Behavioural\State;

class CancelState extends State
{
protected string $state=StateEnum::CANCELED_STATE;
public function proceed()
{
   $this->transitionTo(new ArchivedState());
}
}
