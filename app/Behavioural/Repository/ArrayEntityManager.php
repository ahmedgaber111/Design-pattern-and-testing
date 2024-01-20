<?php

namespace App\Behavioural\Repository;

class ArrayEntityManager implements PersistenceInterface
{
  private array$db;
  public function __construct(array$db)
  {
      $this->db=$db;
  }
  public function Persist(array $data)
  {
        $this->db[]=$data;
  }
  public function retrieve(int $id): array
  {
         return $this->db[$id];
  }
  public function delete(int $id)
  {
        unset($this->db[$id]);
  }
}
