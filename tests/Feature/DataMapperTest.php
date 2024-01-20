<?php

use App\Structural\DataMapper\DataMapper;
use App\Structural\DataMapper\StorageManager;
use App\Structural\DataMapper\User;
use Tests\TestCase;

class DataMapperTest extends TestCase
{


private StorageManager$manager;
private $data;

protected  function setUp(): void
{
$this->data=[1=>['username'=>'admin','password'=>'13']];
$this->manager=new StorageManager($this->data);
}

    public function testCanGetUserById()
    {
        $dataMapper=new DataMapper($this->manager);
        $user=$dataMapper->findbyid(1);
        $this->assertEquals($this->data[1],$user);
    }
    public function testCanSaveUser()
{
  $user=new User();
  $user->setUsername("Ahmed Gaber Mohamed");
  $user->setPassword(123456);
  $user->setId(2);
  $datamapper=new DataMapper($this->manager);
  $this->assertTrue($datamapper->saveUser($user));
}
    }
