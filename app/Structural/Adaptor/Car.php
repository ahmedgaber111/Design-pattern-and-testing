<?php

namespace App\Structural\Adaptor;

class Car
{
    private $engine;
public function __construct(EngineInterface$engine)
{
    $this->engine=$engine;
}
public function Start()
{
  return  $this->engine->StartEngine();
}
}
