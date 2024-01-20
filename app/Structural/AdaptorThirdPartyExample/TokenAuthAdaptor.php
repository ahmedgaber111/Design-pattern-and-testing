<?php

namespace App\Structural\AdaptorThirdPartyExample;

use App\TokenAuth\TokenAuthenticator;

class TokenAuthAdaptor implements AuthenticatorInterface
{
private $authenticator;
public function __construct(TokenAuthenticator $authenticator)
{
    $this->authenticator=$authenticator;
}
public function login(array $params)
{
    return $this->authenticator->tokenLogin($params["Key"],$params["token"]);
}
}
