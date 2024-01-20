<?php

namespace App\Structural\Facade\ConvertLib;

class Photo
{
private $type='-web-';

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }
    public function __toString(): string
    {
     return $this->type;
    }
}
