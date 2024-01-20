<?php

namespace App\Structural\Facade\ConvertLib;

class Animator
{
public function animatphoto(Photo $photo){
    return $photo . '-animate';
}
}
