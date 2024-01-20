<?php

namespace App\Behavioural\Specification;

class SkillSpecification implements SpecificationInterface
{
   private string$Skill;
   public function __construct(string$Skill)
   {
       $this->Skill=$Skill;
   }
   public function isSatisfiedBy(Cv $cv): bool
   {
       return in_array($this->Skill,$cv->getSkills(),true);
   }

}
