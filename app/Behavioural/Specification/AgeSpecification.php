<?php

namespace App\Behavioural\Specification;

class AgeSpecification implements SpecificationInterface
{
  private int $minAge;
  private int $maxAge;
  public function __construct(int$minAge,int$maxAge)
  {
      $this->maxAge=$maxAge;
      $this->minAge=$minAge;
  }
  public function isSatisfiedBy(Cv $cv): bool
  {
      return $cv->getAge() >$this->minAge && $cv->getAge()<=$this->maxAge;
  }
}
