<?php

use App\Structural\Facade\ConvertFacade;
use App\Structural\Facade\ConvertLib\Photo;
use Tests\TestCase;

class FacadeTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */

      private $facade;

       protected function setUp(): void
       {
         $this->facade=new ConvertFacade();
       }

    public function testCanConvertToGIF()
    {
     $photo=new Photo();
     $this->facade->GIFConvert($photo);
    $this->assertEquals('-web--GIF-animate',$photo->getType());
    }
    public function testCanConvertToJPG()
{
    $photo=new Photo();
    $this->facade->JPGConverter($photo);
    $this->assertEquals('-web-Color-Correction',$photo->getType());
}
}
