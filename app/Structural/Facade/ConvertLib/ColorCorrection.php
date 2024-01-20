<?php

namespace App\Structural\Facade\ConvertLib;

class ColorCorrection
{
    public function CorrectColor(Photo$photo){
        return $photo . 'Color-Correction';
    }

}
