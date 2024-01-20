<?php

namespace App\Structural\Adaptor;

class EngineAdaptor implements EngineInterface
{
    /**
     * @var TurboEngine
     */
    private $engine;
public function __construct(TurboEngine$engine)
{
    $this->engine=$engine;
}

    public function StartEngine()
{
  return $this->engine->StartTurbo();
}
}
