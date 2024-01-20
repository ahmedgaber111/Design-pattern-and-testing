<?php

namespace App\Behavioural\Specification;

class LanguageSpecification implements SpecificationInterface
{
    private string $Language;
    public function __construct(string$Language)
    {
        $this->Language=$Language;
    }
 public function isSatisfiedBy(Cv $cv): bool
 {
     return in_array($this->Language,$cv->getLanguages(),true);
   }

}
