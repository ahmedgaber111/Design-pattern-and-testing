<?php
namespace App\creational\Pool;
use DateTime;

class Car
{
 private  $rentAt;
  public function __construct()
  {
    $this->rentAt=new DateTime();
  }
  public function movecar()
  {
    return "car is moving";
  }
}
