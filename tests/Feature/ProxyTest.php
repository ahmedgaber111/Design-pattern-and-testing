<?php

use App\Structural\Proxy\ATMProxy;
use Tests\TestCase;

class ProxyTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */


    public function testCanDepositeFromATM()
    {
       $proxy=new ATMProxy();
       $proxy->deposite(1000);
       $proxy->deposite(5000);
       self::assertEquals(6000,$proxy->getBalance());

    }
    public function testCanWithdrawFromATM()
    {
        $proxy=new ATMProxy();
        $proxy->deposite(1000);
        $proxy->deposite(5000);
        $proxy->withdraw(2000);
        self::assertEquals(4000,$proxy->getBalance());

    }

}
