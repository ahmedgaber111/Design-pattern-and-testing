<?php

namespace App\BasicAuthLib;

class BasicAuthenticator
{
    public function basicLogin(String$username,String $password){
        return $username."_".$password;
    }
}
