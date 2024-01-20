<?php

namespace App\Behavioural\Strategy;

class Md5Encrypt implements StrategyInterface
{
  public const TYPE="Md5";
  public function Encrypt(string $data): array
  {
      return [md5($data),self::TYPE];
  }
}
