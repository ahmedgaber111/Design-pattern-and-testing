<?php

namespace App\Behavioural\ChainOfResposnsibilty;

interface HandlerInterface
{
    public function SetNext(HandlerInterface$handler);
    public function handle(Request$request);

}
