<?php

namespace App\Structural\AdaptorThirdPartyExample;

use App\BasicAuthLib\BasicAuthenticator;

class BasicAuthAdaptor implements AuthenticatorInterface
{
private $authenticator;

public function __construct(BasicAuthenticator$authenticator)
{
    $this->authenticator=$authenticator;
}
public function login(array $params)
{
return$this->authenticator->basicLogin($params["username"],$params['password']);
}
}
