<?php
namespace App\creational\Builder;
interface CarBuilderInterface
{
    public function addEngine();
    public function addDoors();
    public function addBody();
    public function addWheel();
    public function createCar();
    public function getCar();
}
