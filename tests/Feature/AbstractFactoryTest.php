<?php

use App\creational\AbstractFactory\Example1\BenzCar;
use App\creational\AbstractFactory\Example1\BMWCar;
use App\creational\AbstractFactory\Example1\CarAbstractFactory;
use App\creational\AbstractFactory\Example2\Student1;
use App\creational\AbstractFactory\Example2\Student2;
use App\creational\AbstractFactory\Example2\StudentGradesAbstract;
use Tests\TestCase;

class AbstractFactoryTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */


    public function testBMWCar()
    {
        $CareFactory=new CarAbstractFactory('200000');
        $MyCar=$CareFactory->CreateBMWCar();
        $this->assertInstanceOf(BMWCar::class,$MyCar);

    }
    public function testBenzCar()
    {
        $CareFactory=new CarAbstractFactory('200000');
        $MyCar=$CareFactory->CreateBENZCar();
        $this->assertInstanceOf(BENZCar::class,$MyCar);

    }

    public function testStudent1()
    {
          $StudentGradeFactory=new StudentGradesAbstract('math','50') ;
          $Student1=$StudentGradeFactory->CreateSudent1();
          $this->assertInstanceOf(Student1::class,$Student1);
    }
    public function testStudent2()
    {
        $StudentGradeFactory=new StudentGradesAbstract('Science','60') ;
        $Student2=$StudentGradeFactory->CreateSudent2();
        $this->assertInstanceOf(Student2::class,$Student2);
    }
}
