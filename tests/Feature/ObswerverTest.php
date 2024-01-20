<?php

use App\Behavioural\Observer\Cashier;
use App\Behavioural\Observer\Kitchen;
use App\Behavioural\Observer\Restaurant;
use App\Behavioural\Observer\Waiter;
use Tests\TestCase;

class ObswerverTest extends TestCase

{
   private $restaurant;
   private $waiter;
   private $cashier;
   private $kitchen;

   protected function setUp(): void
   {
       $this->restaurant=new Restaurant();
       $this->kitchen=new Kitchen();
       $this->waiter=new Waiter();
       $this->cashier=new Cashier();

       $this->restaurant->attach($this->cashier);
       $this->restaurant->attach($this->waiter);
       $this->restaurant->attach($this->kitchen);



   }


    public function testCanNotifyAllObserversWhenNewOrderIsComing()
    {
        $this->restaurant->addNewOrder();

        $this->assertEquals('Waiter is Ready For Order number1',$this->waiter->getState());
        $this->assertEquals('Cashier is Ready For Order number1',$this->cashier->getState());
        $this->assertEquals('Kitchen is Ready For Order number1',$this->kitchen->getState());


    }
}
