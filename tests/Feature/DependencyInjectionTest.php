<?php

use App\Structural\DependencyInjection\DataBaseConfig;
use App\Structural\DependencyInjection\DataBaseConnection;
use Tests\TestCase;

class DependencyInjectionTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */


    public function testCanGetDataBaseStringUrlFromDataBaseConnection()
    {
     $DataBaseConfig=new DataBaseConfig('localhost','root','root','3600','admin');
     $DataBseConnection=new DataBaseConnection($DataBaseConfig);
     $this->assertEquals('mysql://root:root@localhost:3600/admin',$DataBseConnection->getConnectionString());
    }
    }
