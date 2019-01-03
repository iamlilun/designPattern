<?php
declare(strict_types=1);
/*------------------------------------
 | 烤雞翅命令 ConcreteCommand
 |------------------------------------
 |
 |
 |
 */

namespace Src\Command\example;


class BakeChickenCommand extends Command
{

    /**
     * 執行命令
     * @return void
     */
    public function executeCommand()
    {
        $this->receiver->bakeChickenWing();
    }
}