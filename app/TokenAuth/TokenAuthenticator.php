<?php

namespace App\TokenAuth;

class TokenAuthenticator
{

public function tokenLogin(String $key,String $token ){
        return base64_encode($key.'_'.$token);
}
}
