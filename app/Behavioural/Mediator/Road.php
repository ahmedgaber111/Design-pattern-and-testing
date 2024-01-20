<?php

namespace App\Behavioural\Mediator;

abstract class Road
{
   private $RoadStatus='';
   public const STOP_EVENT='STOP';
   public const MOVE_EVENT='MOVE';

    /**
     * @param MediatorInterface $mediator
     */
    private MediatorInterface$mediator;
    public function __construct()
  {
  }

    /**
     * @param MediatorInterface $mediator
     */
    public function setMediator(MediatorInterface $mediator): void
    {
        $this->mediator = $mediator;
    }
    public function move()
  {
      $this->RoadStatus=self::MOVE_EVENT;
  }
    public function Stop()
  {
     $this->RoadStatus=self::STOP_EVENT;
  }
    abstract function getID():string;

    /**
 * @return string
 */
    public function getRoadStatus(): string
{
    return $this->RoadStatus;
}
}
