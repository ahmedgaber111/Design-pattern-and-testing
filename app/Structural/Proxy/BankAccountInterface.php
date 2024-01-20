<?php

namespace App\Structural\Proxy;

interface BankAccountInterface
{
    public function deposite(int$amount);
    public function withdraw(int$amount);
    public function getBalance();

}
