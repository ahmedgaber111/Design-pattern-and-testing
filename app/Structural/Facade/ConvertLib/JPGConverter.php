<?php

namespace App\Structural\Facade\ConvertLib;

class JPGConverter
{
public function ConvertToJPG(Photo$photo)
{
    return $photo.'JPG';
}
}
