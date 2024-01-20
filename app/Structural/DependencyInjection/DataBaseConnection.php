<?php

namespace App\Structural\DependencyInjection;

class DataBaseConnection
{/**
* @var DataBaseConfig
*/
private $Config;
public function __construct(DataBaseConfig$Config)
{
    $this->Config=$Config;
}
public function getConnectionString(){
    return sprintf('mysql://%s:%s@%s:%s/%s',
        $this->Config->getUsername(),
        $this->Config->getPassword(),
        $this->Config->getHost(),
        $this->Config->getPort(),
        $this->Config->getDatBaseName());

}
}
