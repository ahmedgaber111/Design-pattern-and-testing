<?php

namespace App\Structural\Facade\ConvertLib;

class GIFConverter
{
    /**
     * @var  Animator
     */
     private Animator $animator;
     public function __construct(Animator$animator)
     {
         $this->animator=$animator;
     }
   public function ConvertToGIF(Photo$photo)
   {
     $type=$photo->getType() .'-GIF';
     $photo->setType($type);
     $photo->setType($this->animator->animatphoto($photo));
        return $photo;
}

}
