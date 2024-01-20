<?php

namespace App\Behavioural\Memento;

class Originator
{
  private $CodeFile;

  public function __construct()
  {
      $this->CodeFile=new CodeFile();
  }
  public function addNewEcho()
  {
      $this->CodeFile->addNewLines("ECHO 'TEST NEW LINE';");
  }
  public function addNewVar()
  {
      $this->CodeFile->addNewLines('SX=15;');
  }
  public function save():MementoInterface
  {
      return new ConcreteMemento(clone $this->CodeFile);
  }
  public function CtrlZ(MementoInterface$memento)
  {
      $this->CodeFile=$memento->getSnapShot();
  }
  public function getCodeFile():CodeFile
  {
      return $this->CodeFile;
  }
}
