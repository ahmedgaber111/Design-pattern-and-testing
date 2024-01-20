<?php

namespace App\creational\ProtoType;

abstract class AbstractCarProtoType
{
protected $model;
private $flag;

abstract function __clone();

    /**
     * @param mixed $flag
     */
    public function setFlag($flag): void
    {
        $this->flag = $flag;
    }

    /**
     * @return mixed
     */
    public function getFlag()
    {
        return $this->flag;
    }
}
