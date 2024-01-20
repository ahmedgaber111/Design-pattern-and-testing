<?php

namespace App\Behavioural\Repository;

class UserDataMapper
{
public static function dataToData(User$user):array
 {
     return [
         'name'=>$user->getName(),
         'email'=>$user->getEmail(),
         'password'=>$user->getPassword()
     ];
 }
public static function dataToDomain(array$data):User
{
    $user=new User();
    return $user->setEmail($data['data'])
        ->setName($data['name'])
         ->setPassword($data['password']);
}
}
