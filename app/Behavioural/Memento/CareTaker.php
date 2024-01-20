<?php

namespace App\Behavioural\Memento;

class CareTaker
{
    /**
     * @var Originator
     */
    private Originator$originator;
    private $mementos=[];
    public function __construct(Originator$originator)
    {
        $this->originator=$originator;
    }
    public function Commit()
    {
        $this->mementos[]=$this->originator->save();
    }
    public function rollBack()
    {
        $memento=array_pop($this->mementos);
        $this->originator->CtrlZ($memento);
    }
}
