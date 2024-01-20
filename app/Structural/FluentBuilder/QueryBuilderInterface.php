<?php

namespace App\Structural\FluentBuilder;

interface QueryBuilderInterface
{
    public function select(array$fields);
    public function from(string$table,string$alias);
    public function where(array$condition);
}
