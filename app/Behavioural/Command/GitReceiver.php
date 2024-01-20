<?php

namespace App\Behavioural\Command;

class GitReceiver
{
    private $Gitlog=[];

    /**
     * @return array
     */
    public function getGitLog(): array
    {
        return $this->Gitlog;
    }
    public function gitCommit(){
        $this->Gitlog[] ='Git-Commit';
    }
    public function getAdd(){

        $this->Gitlog[] ='Git-Add';
    }
    public function getPush(){

        $this->Gitlog[] ='Git-Push';
    }
    public function getRevert(){

        $this->Gitlog[] ='Git-Revert';
    }
}
