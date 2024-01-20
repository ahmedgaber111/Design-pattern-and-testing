<?php

namespace App\Behavioural\Specification;

class WASTASpecification implements SpecificationInterface
{
    public function isSatisfiedBy(Cv $cv): bool
    {
       return true;
     }
}
