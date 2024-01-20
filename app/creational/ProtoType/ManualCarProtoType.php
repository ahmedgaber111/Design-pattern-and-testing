<?php

namespace App\creational\ProtoType;

class ManualCarProtoType extends AbstractCarProtoType
{
    protected $model='manual';

    public function __clone()
{
    // TODO: Implement __clone() method.
}
}
