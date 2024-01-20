<?php

use App\Structural\Composite\BigBox;
use App\Structural\Composite\GiftBox;
use App\Structural\Composite\SimpleBox;
use Tests\TestCase;

class CompositeTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */


    public function testCanGetTotalPricePackageTree()
    {
     $item1=new SimpleBox(300);
     $item2=new SimpleBox(200);
    $package=new BigBox([$item1,$item2]);
    $this->assertEquals('500',$package->getPrice());
    }
    public function testCanGetTotalPriceOfPackageTreeWithAction()
    {
        $item1=new SimpleBox(300);
        $item2=new SimpleBox(200);
        $item3=new SimpleBox(400);

        $package=new BigBox([$item1,$item2,$item3]);
        $gift1=new  GiftBox(100,50);
        $package->add($gift1);
        $package->remove($item3);
        $this->assertEquals(650,$package->getPrice());
    }
}
