<?php

use App\Behavioural\Template\HomePage;
use App\Behavioural\Template\LoginPage;
use App\Behavioural\Template\RegisterPage;
use Tests\TestCase;

class TemplateMethodTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */


    public function testCanrenderHomepage()
    {
        $homePage=new HomePage();
         $renderhomepage=$homePage->renderPage();
        self::assertStringContainsString('<header>Load Css and js files</header>',$renderhomepage);
    }
    public function testCanRenderloginpage()

    {
        $homePage=new LoginPage();
        $renderhomepage=$homePage->renderPage();
        self::assertStringContainsString('<header>Load Css and js files</header>',$renderhomepage);
    }
    public function testCanrenderRegisterPage()

    {
        $homePage=new RegisterPage();
        $renderhomepage=$homePage->renderPage();
        self::assertStringContainsString('<header>Load Css and js files</header>',$renderhomepage);
    }

}
