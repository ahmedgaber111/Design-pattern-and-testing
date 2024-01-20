<?php

namespace App\Behavioural\Specification;

class ANDSpecification implements SpecificationInterface
{
private array$Specs;

public function __construct(SpecificationInterface...$Specs)
{
    $this->Specs=$Specs;
}
public function isSatisfiedBy(Cv $cv): bool
{
    foreach ($this->Specs as  $spec)
    {
        if (!$spec->isSatisfiedBy($cv))
        {
            return  false;
        }
    }
return  true;
}

}
