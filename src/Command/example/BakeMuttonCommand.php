<?php
declare(strict_types=1);
/*------------------------------------
 | 烤羊肉串命令 ConcreteCommand
 |------------------------------------
 |
 |
 |
 */

namespace Src\Command\example;


class BakeMuttonCommand extends Command
{

    /**
     * 執行命令
     * @return void
     */
    public function executeCommand()
    {
        $this->receiver->bakeMutton();
    }
}