<?php

namespace App\Structural\Proxy;

class BankAccount implements BankAccountInterface
{
private $transactions=[];
public function deposite(int $amount)
{
    $this->transactions[]=+$amount;
return true;
}
public function withdraw(int $amount)
{
if ($this->getBalance()>$amount){
    $this->transactions[]= -$amount;
    return$amount;
}
    return false;
}
public function getBalance()
{
return array_sum($this->transactions);
}
}
