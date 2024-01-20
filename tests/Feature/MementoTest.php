<?php

use App\Behavioural\Memento\CareTaker;
use App\Behavioural\Memento\Originator;
use Tests\TestCase;

class MementoTest extends TestCase
{
    private $originator;
    private $caretaker;

    protected function setUp(): void
    {
       $this->originator=new Originator();
       $this->caretaker=new CareTaker($this->originator);
    }

    public function testCanSaveCodeFileUpdates()
    {
        $this->originator->addNewEcho();
        $this->originator->addNewVar();
        $this->caretaker->Commit();
        $CodeFile=$this->originator->getCodeFile();
        $this->assertEquals(3,count($CodeFile->getLines()));
    }

    public function testCanRestoreCodeFile()
    {
        $this->originator->addNewEcho();;
        $this->originator->addNewVar();
        $this->caretaker->Commit();
        $this->originator->addNewEcho();;
        $this->caretaker->rollBack();
        $CodeFile=$this->originator->getCodeFile();
        $this->assertEquals(3,count($CodeFile->getLines()));
    }
}
