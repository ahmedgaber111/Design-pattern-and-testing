<?php

use Tests\TestCase;
use \App\Behavioural\Repository\PersistenceInterface;
use  \App\Behavioural\Repository\UserRepositoryInterface;
class RepositoryTest extends TestCase
{

    private PersistenceInterface $persistence;
    private UserRepositoryInterface$userRepository;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */
   protected function setUp(): void
   {
       $dataSource=
           [
               1=>["name"=>"ahmed","email"=>"1@1","password"=>"123456789"],
               2=>["name"=>"gaber","email"=>"1@1","password"=>"123456789"],
               3=>["name"=>"mohamed","email"=>"1@1","password"=>"123456789"],

           ];
       $this->persistence=new \App\Behavioural\Repository\ArrayEntityManager($dataSource);
       $this->userRepository=new \App\Behavioural\Repository\UserRepository($this->persistence,new \App\Behavioural\Repository\UserDataMapper());

   }
      public function testCanFindUserByID()
       {
           $user=$this->userRepository->find(1);
           self::assertInstanceOf(\App\Behavioural\Repository\User::class,$user);
           self::assertEquals(["name"=>"ahmed","email"=>"1@1","password"=>"123456789"],$user);
       }


    }

