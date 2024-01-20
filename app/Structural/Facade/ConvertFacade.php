<?php

namespace App\Structural\Facade;

use App\Structural\Facade\ConvertLib\Animator;
use App\Structural\Facade\ConvertLib\ColorCorrection;
use App\Structural\Facade\ConvertLib\GIFConverter;
use App\Structural\Facade\ConvertLib\JPGConverter;
use App\Structural\Facade\ConvertLib\Photo;

class ConvertFacade
{
   public function GIFConvert(Photo$photo)
   {
       $animator=new Animator();
       $gifConverter=new GIFConverter($animator);
       $gifConverter->ConvertToGIF($photo);
   }
   public function JPGConverter(Photo$photo)
   {
       $ColorCorrection=new ColorCorrection();
       $photo->setType($ColorCorrection->CorrectColor($photo));
       $JPGConverter=new JPGConverter();
       return $JPGConverter->ConvertToJPG($photo);
   }
}
