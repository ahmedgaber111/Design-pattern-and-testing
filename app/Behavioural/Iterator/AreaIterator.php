<?php

namespace App\Behavioural\Iterator;

use Iterator;

class AreaIterator implements Iterator
{
    private EgyptCitiesCollection$citiesCollection;
    private $index=0;
    private $SortedCites;
    public function __construct(EgyptCitiesCollection$citiesCollection)
    {
      $this->citiesCollection=$citiesCollection;
      $this->sortByArea();
    }

    public function current()
    {
        $this->SortedCites[$this->index];
    }
    public function rewind()
    {
        // TODO: Implement rewind() method.
    }
    public function next()
    {
      $this->index=1;
    }
    public function key()
    {
      $this->index;
    }
    public function valid()
    {
          return isset($this->citiesCollection->getEgyptCities()[$this->index]);
    }

    public function sortByArea()
    {
         $areas=[];
         $this->SortedCites=$this->citiesCollection->getEgyptCities();
   foreach ($this->citiesCollection->getEgyptCities() as $key=>$city)
   {
       $areas[]=$city->getArea;
   }
    array_multisort($areas,SORT_DESC,$this->SortedCites);
    }

}
