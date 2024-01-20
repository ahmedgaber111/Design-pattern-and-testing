<?php

use App\Behavioural\Command\CLIInvoker;
use App\Behavioural\Command\DeployCommand;
use App\Behavioural\Command\GitReceiver;
use App\Behavioural\Command\RevertCommand;
use Tests\TestCase;

class CommandTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */
    private $invocker;
    protected function setUp(): void
    {
       $this->invocker=new CLIInvoker();
    }

    public function testCanExCuteDeployCommand()
    {
     $receiver=new GitReceiver();
     $command=new DeployCommand($receiver);
     $this->invocker->setCommand($command);
     $this->invocker->run();
     self::assertCount(3,$receiver->getGitlog());
     self::assertEquals(
         [
          'Git-Add',
          'Git-Commit',
          'Git-Push'
         ],
         $receiver->getGitlog()
     );
    }

    public function testCanExCuteRevertCommand()

{
    $receiver=new GitReceiver();
    $command=new DeployCommand($receiver);
    $this->invocker->setCommand($command);

    $revertCommand=new RevertCommand($receiver);
    $this->invocker->setCommand($revertCommand);
    $this->invocker->run();

    self::assertCount(1,$receiver->getGitlog());
    self::assertEquals(
        ['Git-Revert'
        ],
        $receiver->getGitlog()
    );

}


}
