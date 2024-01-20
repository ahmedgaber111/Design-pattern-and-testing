<?php

use App\Behavioural\State\OrderContext;
use App\Behavioural\State\User;
use App\Behavioural\State\StateEnum;
use Tests\TestCase;

class StateTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */

    public function testCCanCratedOrder()
    {
        $user=new User('ramy','4040',true);
        $order=new OrderContext($user);
        self::assertEquals(StateEnum::CREATED_STATE,$order->getState());
    }
    public function testCanMoveOrderFromCratedToArchivedOrder()
    {
        $user=new User('ramy','4040',true);
        $order=new OrderContext($user);
        $order->OrderProceed();
        $order->OrderProceed();
        $order->OrderProceed();
        $order->OrderProceed();
        $order->OrderProceed();


        self::assertEquals(StateEnum::ARCHIVED_STATE,$order->getState()->getState());
    }
    public function testCanMoveOrderFromCratedToCancelledOrder()

    {
        $user=new User('ramy','4040',false);
        $order=new OrderContext($user);
        $order->OrderProceed();
        $order->OrderProceed();
        $order->OrderProceed();
        self::assertEquals(StateEnum::CANCELED_STATE,$order->getState()->getState());
    }

}

