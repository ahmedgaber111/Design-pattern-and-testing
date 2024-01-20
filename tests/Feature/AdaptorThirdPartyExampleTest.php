<?php

use App\BasicAuthLib\BasicAuthenticator;
use App\Structural\AbstractFactory\BENZCar;
use App\Structural\AbstractFactory\BMWCar;
use App\Structural\AbstractFactory\CarAbstractFactory;
use App\Structural\AdaptorThirdPartyExample\TokenAuthAdaptor;
use App\Structural\AdaptorThirdPartyExample\UserLogin;
use App\TokenAuth\TokenAuthenticator;
use Tests\TestCase;

class AdaptorThirdPartyExampleTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */


    public function testCanAuthWithBasicAuthLib()
    {
        $basicauth=new BasicAuthenticator();
        $userlogin=new Userlogin($basicauth);
        $userlogin->login(["username"=>'test','password'=>'test']);
        $this->assertInstanceOf(UserLogin::class,$userlogin);

        //        $basicauthadaptor=$this->createMock(BasicAuthAdaptor::class);
//       $basicauthadaptor->expects($this->once())->method('login')->willReturn('test','test');
//        $userlogin=new Userlogin($basicauthadaptor);
//        $userlogin->login(["username"=>'test','password'=>'test']);
    }   public function testCanAuthWithTokenAuth()
{
    $tokenauth=new TokenAuthenticator();
    $userlogin=new TokenAuthAdaptor($tokenauth);
    $userlogin->login(["Key"=>'test','token'=>'test']);
    $this->assertInstanceOf(TokenAuthAdaptor::class,$userlogin);

    //        $basicauthadaptor=$this->createMock(BasicAuthAdaptor::class);
//       $basicauthadaptor->expects($this->once())->method('login')->willReturn('test','test');
//        $userlogin=new Userlogin($basicauthadaptor);
//        $userlogin->login(["username"=>'test','password'=>'test']);
}
}
