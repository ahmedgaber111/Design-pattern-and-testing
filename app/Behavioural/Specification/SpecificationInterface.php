<?php

namespace App\Behavioural\Specification;

interface SpecificationInterface
{
public function isSatisfiedBy(Cv$cv):bool;
}
