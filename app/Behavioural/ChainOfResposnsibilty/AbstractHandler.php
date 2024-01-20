<?php

namespace App\Behavioural\ChainOfResposnsibilty;

abstract class AbstractHandler implements HandlerInterface
{
private HandlerInterface$handler;
public function SetNext(HandlerInterface $handler)
{
$this->handler=$handler;
return$handler;
}
public function handle(Request $request)
{
if ($this->handler){
    return$this->handler->handle($request);
}
}
}
