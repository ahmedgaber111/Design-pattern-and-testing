<?php

namespace App\Structural\Composite;

use PhpParser\Node\Scalar\String_;
use Psy\Util\Str;

class GiftBox  implements  ProductInterface,GiftInterface
{
    private $price;
    private $giftPrice;

public function __construct(int $price,int $giftPrice)
{
    $this->price=$price;
    $this->giftPrice=$giftPrice;

}
public function getPrice()
{
  return  $this->giftPackagePrice() + $this->price;
}
public function giftPackagePrice()
{
        return  $this->giftPrice;
}
}
