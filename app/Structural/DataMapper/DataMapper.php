<?php

namespace App\Structural\DataMapper;

use PhpParser\Node\Scalar\String_;

class DataMapper
{
    /**
     * @var StorageManager
    */
private $manager;
public function __construct(StorageManager $manager)
{
    $this->manager=$manager;
}
public function findbyid(String $id){
    return $this->manager->find($id);
}
public function saveUser(User$user){
    return$this->manager->save(["username"=>$user->getUsername(),"password"=>$user->getPassword()]);
}
}
