<?php

namespace App\Behavioural\Observer;

use SplObserver;
use SplSubject;

class Kitchen implements SplObserver
{
    private $State;
    public function update(SplSubject $subject)
    {
        /**@var Restaurant$subject */
        $this->State=sprintf('Kitchen is Ready For Order number%s',$subject->getOrderNumber());
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->State;
    }
}
