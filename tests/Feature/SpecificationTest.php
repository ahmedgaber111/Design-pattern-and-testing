<?php

use App\Behavioural\Specification\AgeSpecification;
use App\Behavioural\Specification\ANDSpecification;
use App\Behavioural\Specification\Cv;
use App\Behavioural\Specification\LanguageSpecification;
use App\Behavioural\Specification\OrSpecification;
use App\Behavioural\Specification\SkillSpecification;
use App\Behavioural\Specification\TechSpecification;
use App\Behavioural\Specification\WASTASpecification;
use App\Behavioural\Specification\YearOfExpSpecification;
use Tests\TestCase;

class SpecificationTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */


   private function getSeniorBackendDevSpecification()
   {
        $yearOfEx=new YearOfExpSpecification(5);
        $ageSpec=new AgeSpecification(25,30);
        $phpSpec=new LanguageSpecification('php');
        $javaSpec=new LanguageSpecification('java');
        $gitSpec=new TechSpecification('git');
        $dockerSpec=new TechSpecification('Docker');
        $psSpec=new SkillSpecification('problem-Solving');
        $SeniorSpecification=new ANDSpecification(
            $yearOfEx,
            $phpSpec,
            $ageSpec,
            $javaSpec,
            $gitSpec,
            $dockerSpec,
            $psSpec
        );
        return$SeniorSpecification;
   }

    private function getJuniorBackendDevSpecification()
    {
        $yearOfEx=new YearOfExpSpecification(2);
        $phpSpec=new LanguageSpecification('php');
        $javaSpec=new LanguageSpecification('Java');
        $gitSpec=new TechSpecification('git');
        $ageSpec=new AgeSpecification(20,25);

        $JuniorSpecification=new ANDSpecification(
            $yearOfEx,
            $ageSpec,
            new OrSpecification($phpSpec,$javaSpec)
        );
        return$JuniorSpecification;
    }

    private function getJuniorBackendDevSpecificationHasWASTA()
    {
        $yearOfEx=new YearOfExpSpecification(2);
        $phpSpec=new LanguageSpecification('php');
        $javaSpec=new LanguageSpecification('Java');
        $gitSpec=new TechSpecification('git');
        $ageSpec=new AgeSpecification(20,25);
        $wastaSpec=new WASTASpecification();
        $JuniorSpecification=new ANDSpecification(
            $yearOfEx,
            $ageSpec,
            $gitSpec,
            new OrSpecification($phpSpec,$javaSpec)
        );
        return  new OrSpecification($JuniorSpecification,$wastaSpec);
    }

    public function testCanMatchCvWithSeniorSpecification()
   {
       $Cv=new Cv('6',['problem-Solving'],30,['git','Docker','ci/cd'],['php','java','node']);
   self::assertTrue($this->getSeniorBackendDevSpecification()->isSatisfiedBy($Cv));
   }
    public function testCanMatchCvWithJuniorSpecification()
    {
        $Cv=new Cv('3',['problem-Solving'],24,['git'],['java']);
        self::assertTrue($this->getJuniorBackendDevSpecification()->isSatisfiedBy($Cv));
    }
    public function testCanNotMatchCvWithSeniorSpecificationIFAgeIsNotSatisfied()
    {
        $Cv=new Cv('6',['problem-Solving'],30,['git','Docker','ci/cd'],['php','java','node']);
        self::assertTrue($this->getSeniorBackendDevSpecification()->isSatisfiedBy($Cv));
    }
    public function testCanNotMatchCvWithSeniorSpecificationIFSkillsIsNotSatisfied()
    {
        $Cv=new Cv('6',['problem-Solving'],30,['git','Docker','ci/cd'],['php','java','node']);
        self::assertTrue($this->getSeniorBackendDevSpecification()->isSatisfiedBy($Cv));
    }
    public function testCanMatchCvWithJuniorSpecificationIfNoLanguage()
    {
        $Cv=new Cv('3',['problem-Solving'],24,['git'],['node']);
        self::assertTrue($this->getJuniorBackendDevSpecification()->isSatisfiedBy($Cv));
    }
    public function testCanMatchCvWithJuniorSpecificationWithWasta()
    {
        $Cv=new Cv('-2',[],44,[''],['forten']);
        self::assertTrue($this->getJuniorBackendDevSpecificationHasWASTA()->isSatisfiedBy($Cv));
    }
}
