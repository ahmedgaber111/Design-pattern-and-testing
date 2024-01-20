<?php


use App\Behavioural\ChainOfResposnsibilty\AfafHandler;
use App\Behavioural\ChainOfResposnsibilty\AliHandler;
use App\Behavioural\ChainOfResposnsibilty\MohsenHandler;
use App\Behavioural\ChainOfResposnsibilty\Request;
use Tests\TestCase;

class ChainOfResponsibiltyTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */


    public function testAliCanHandlerRequest()
    {

        $ali=new AliHandler();
        $afaf=new AfafHandler();
        $mohsen=new MohsenHandler();
        $ali->SetNext($afaf->SetNext($mohsen));
        $Request=new Request();
        $Request->setId(4);
        $response=$ali->handle($Request);
        self::assertTrue($response->isDone());
        self::assertEquals(AliHandler::class,$response->getHandler());
    }
    public function testAfafCanHandlerRequest()
    {

        $ali=new AliHandler();
        $afaf=new AfafHandler();
        $mohsen=new MohsenHandler();
        $ali->SetNext($afaf->SetNext($mohsen));
        $Request=new Request();
        $Request->setId(5);
        $response=$afaf->handle($Request);
        self::assertTrue($response->isDone());
        self::assertEquals(AfafHandler::class,$response->getHandler());
    }
    public function testMohsenCanHandlerRequest()
    {
        $ali=new AliHandler();
        $afaf=new AfafHandler();
        $mohsen=new MohsenHandler();
        $ali->SetNext($afaf->SetNext($mohsen));
        $Request=new Request();
        $Request->setId(6);
        $response=$mohsen->handle($Request);
        self::assertTrue($response->isDone());
        self::assertEquals(MohsenHandler::class,$response->getHandler());
    }

}
