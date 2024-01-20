<?php

namespace App\Behavioural\Memento;

class ConcreteMemento implements MementoInterface
{
    /**
     * @var CodeFile
     */
    private CodeFile$codeFile;

    public function __construct(CodeFile$codeFile)
    {
        $this->codeFile=$codeFile;
    }
    public function getSnapShot()
    {
      return $this->codeFile;
     }
}
