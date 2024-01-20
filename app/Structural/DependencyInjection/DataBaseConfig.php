<?php

namespace App\Structural\DependencyInjection;

class DataBaseConfig
{
    private string $host;
    private string $username;
    private string $password;
    private string $port;
    private string $DatBaseName;

    /**
     * @return mixed
     */

    public function __construct(string$host,string$username,string$password,string$port,string$DataBaseName)
    {
        $this->host=$host;
        $this->username=$username;
        $this->password=$password;
        $this->port=$port;
        $this->DatBaseName=$DataBaseName;

    }
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host): void
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port): void
    {
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getDatBaseName(): string
    {
        return $this->DatBaseName;
    }

    /**
     * @param string $DatBaseName
     */
    public function setDatBaseName(string $DatBaseName): void
    {
        $this->DatBaseName = $DatBaseName;
    }
}
