<?php

namespace App\Behavioural\Repository;

interface PersistenceInterface
{
  public function Persist(array$data);
  public function retrieve(int$id):array;
  public function delete(int$id);
}
