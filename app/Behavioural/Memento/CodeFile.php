<?php

namespace App\Behavioural\Memento;

class CodeFile
{
private  $lines=[];
     public function __construct()
     {
         $this->lines[]='<?php';
     }

    public function addNewLines(string $line)
    {
        $this->lines[] = $line;
    }

    /**
     * @return array
     */
    public function getLines(): array
    {
        return $this->lines;
    }
}
