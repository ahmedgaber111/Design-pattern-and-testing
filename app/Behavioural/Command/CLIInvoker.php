<?php

namespace App\Behavioural\Command;

class CLIInvoker
{
    private Command$command;

    /**
     * @param Command $command
     */
    public function setCommand(Command $command): void
    {
        $this->command = $command;
    }
    public function run()
    {
        $this->command->excute();
    }
}
