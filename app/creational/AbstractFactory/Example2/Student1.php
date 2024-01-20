<?php

namespace App\creational\AbstractFactory\Example2;

class Student1 implements GradesInterface
{
    private $material;
    private $grades;
    public function __construct($material,$grades)
    {
        $this->material=$material;
        $this->grades=$grades;
    }

    public function calculategrades()
   {
      return    $this->material."=".$this->grades;
   }
}
