<?php

namespace App\Structural\Composite;


class BigBox implements ProductInterface ,ActionInterface
{
    /**
    *@var ProductInterface[]
     */
private $products;
public function __construct(array $products)
{
    $this->products=$products;
}
public function getPrice()
{
      $totalPrice=0;
    foreach ($this->products as $product){

        $totalPrice +=$product->getPrice();
    }
    return $totalPrice;



}
public function add(ProductInterface $product)
{
return    $this->products[]=$product;
}
public function remove(ProductInterface $product)
{
   $this->products= array_filter($this->products,function($productItem) use ($product)
    {
        if($productItem!=$product){
            return $productItem;
        }
        return null;
    });
}
}
