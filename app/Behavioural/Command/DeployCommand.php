<?php

namespace App\Behavioural\Command;

class DeployCommand implements Command
{
    /**
     * @var GitReceiver
     */
    private GitReceiver$gitReceiver;
    public function __construct(GitReceiver$gitReceiver)
    {
        $this->gitReceiver=$gitReceiver;
    }
    public function excute()
    {
      $this->gitReceiver->getAdd();
      $this->gitReceiver->gitCommit();
      $this->gitReceiver->getPush();
    }

}
