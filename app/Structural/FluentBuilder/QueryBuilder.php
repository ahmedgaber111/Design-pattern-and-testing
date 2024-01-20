<?php

namespace App\Structural\FluentBuilder;

class QueryBuilder implements QueryBuilderInterface
{
     private array$fields;
     private string$table;
     private string$alias;
     private array$Condition;
     public function select(array $fields):self
      {
         $this->fields=$fields;
         return $this;
      }
     public function from(string $table, string $alias):self
{
   $this->table=$table;
   $this->alias=$alias;
   return $this;
}
     public function where(array $condition):self
{
    $this->Condition=$condition;
    return $this;
}
     public function SetSQl(){
       return  sprintf('SELECT %s FROM %s AS %s WHERE %s',
         implode(' ',$this->fields),
         $this->table,
         $this->alias,
         implode(' AND ',$this->Condition)
         );
}
}
