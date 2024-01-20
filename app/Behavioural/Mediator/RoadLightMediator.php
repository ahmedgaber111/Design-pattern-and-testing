<?php

namespace App\Behavioural\Mediator;


class RoadLightMediator implements MediatorInterface
{
    /**
     * @var Road
     */
    private Road$rightroad;
    /**
     * @var Road
     */
    private Road$leftroad;
    public function __construct(Road$rightroad,Road$leftroad)
    {
        $this->rightroad=$rightroad;
        $this->rightroad->setMediator($this);
        $this->leftroad=$leftroad;
        $this->leftroad->setMediator($this);
    }

    public function action(Road $road, string $event)
           {
            if ($road->getID()==='LEFT') {
                if ($event === Road::MOVE_EVENT) {
                    $this->rightroad->Stop();
                } else {
                    $this->rightroad->move();
                }
            }
              if ($road->getID()==='RIGHT')
               {
                if ($event===Road::MOVE_EVENT)
                {
                   $this->leftroad->Stop();
                 }
               else
               {
                   $this->leftroad->move();
               }
           }

}
}
