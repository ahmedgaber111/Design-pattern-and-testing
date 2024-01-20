<?php

namespace App\Structural\Decorator;

class Car
{
    private string $Color='';

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->Color;
    }

    /**
     * @param string $Color
     */
    public function setColor(string $Color): void
    {
        $this->Color .= $Color;//1
    }
}
