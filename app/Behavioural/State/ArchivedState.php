<?php

namespace App\Behavioural\State;

class ArchivedState extends State
{
protected string$state=StateEnum::ARCHIVED_STATE;
public function Proceed()
{
}
public function transitionTo(State$state)
{

}
}
