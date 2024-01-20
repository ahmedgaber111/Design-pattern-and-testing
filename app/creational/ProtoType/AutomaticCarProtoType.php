<?php

namespace App\creational\ProtoType;

class AutomaticCarProtoType extends AbstractCarProtoType
{
    protected $model='Automatic';

    public function __clone()
{

}
}
