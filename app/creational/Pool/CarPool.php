<?php
namespace  App\creational\Pool;

class CarPool
{
    /**
     * @var Car[]
     */
    private $freecars=[];
    /**
     * @var Car[]
     */
    private $busycars=[];

        public function rentCar()
         {
        if (count($this->freecars) == 0)
        {
            $car = new Car();
        } else
        {
            $car = array_pop($this->freecars);
        }
        $this->busycars[spl_object_hash($car)] = $car;
        return $car;
         }
        public function freeCar(car $car){
          $carid=spl_object_hash($car);

          if (isset($this->busycars[$carid]))
          {
            unset($this->busycars[$carid]);
          }
        $this->freecars[$carid]=$car;
         }
        public function getReport():int
        {
          return count($this->freecars)+count($this->busycars);
        }
        public function getfreecount():int
        {
          return count($this->freecars);
        }
        public function getbusycount():int
        {
          return count($this->busycars);
        }
}
