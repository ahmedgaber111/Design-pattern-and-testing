<?php

namespace App\Behavioural\Mediator;

interface MediatorInterface
{
  public function action(Road$road,string$event);
}
