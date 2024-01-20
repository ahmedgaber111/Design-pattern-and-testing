<?php

namespace App\creational\AbstractFactory\Example2;

class Student2 implements GradesInterface
{
    private string$material;
    private int$grades;
    public function __construct(string$material,int$grades)
    {
        $this->material=$material;
        $this->grades=$grades;
    }

    public function calculategrades()
   {
      return $this->material."=".$this->grades+10;
   }
}
