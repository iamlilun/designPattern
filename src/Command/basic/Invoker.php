<?php
declare(strict_types=1);
/*------------------------------------
 | 要求命令執行這個請求
 |------------------------------------
 |
 |
 |
 */

namespace Src\Command\basic;


class Invoker
{
    private $command;

    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function executeCommand()
    {
        $this->command->execute();
    }
}