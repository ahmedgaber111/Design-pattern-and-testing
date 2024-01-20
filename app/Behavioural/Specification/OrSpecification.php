<?php

namespace App\Behavioural\Specification;

class OrSpecification implements SpecificationInterface
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
                return  true;
            }
        }
        return  false;
    }

}
