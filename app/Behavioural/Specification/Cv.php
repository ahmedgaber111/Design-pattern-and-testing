<?php

namespace App\Behavioural\Specification;

class Cv
{
     private int $yOfEx;
     private array $Skills;
     private int $age;
     private array $tech;
     private array $Languages;

     public function __construct(int$yOfEx,array$Skills,int$age,array$tech,array$Languages)
     {
         $this->yOfEx=$yOfEx;
         $this->Skills=$Skills;
         $this->age=$age;
         $this->tech=$tech;
         $this->Languages=$Languages;
     }

    /**
     * @return int
     */
    public function getYOfEx(): int
    {
        return $this->yOfEx;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return array
     */
    public function getLanguages(): array
    {
        return $this->Languages;
    }

    /**
     * @return array
     */
    public function getSkills(): array
    {
        return $this->Skills;
    }

    /**
     * @return array
     */
    public function getTech(): array
    {
        return $this->tech;
    }
}
