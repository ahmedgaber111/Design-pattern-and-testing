<?php

namespace App\creational\AbstractFactory\Example2;

 class StudentGradesAbstract
{
    private string $material;
    private int $grades;
    public function __construct(string$material,int$grades)
    {
        $this->material=$material;
        $this->grades=$grades;
    }
    public function CreateSudent1():Student1
       {
     return new Student1($this->material,$this->grades);
       }
    public function CreateSudent2(): Student2
    {
        return new Student2($this->material,$this->grades);
         }
}
