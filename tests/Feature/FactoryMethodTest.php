<?php


use App\creational\FactoryMethod\BenzBrand;
use App\creational\FactoryMethod\BenzBrandFactory;
use App\creational\FactoryMethod\BMWBrand;
use App\creational\FactoryMethod\BMWBrandFactory;
use Tests\TestCase;

class FactoryMethodTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */

    public function TestCanBuildBMWBrand()
    {
           $brandFactory=new BMWBrandFactory();
           $myBrand=$brandFactory->buildBrand();
           $this->assertInstanceOf(BMWBrand::class,$myBrand);
           $this->assertEquals("BMW Brand",$myBrand->CreateBrand());
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */

    public function TestCanBuildBenzBrand()
    {
        $brandFactory=new BenzBrandFactory();
        $myBrand=$brandFactory->buildBrand();
        $this->assertInstanceOf(BenzBrand::class,$myBrand);
        $this->assertEquals("Benz Brand",$myBrand->createBrand());
    }
}
