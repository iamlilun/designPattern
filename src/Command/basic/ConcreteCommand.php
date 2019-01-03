<?php
declare(strict_types=1);
/*------------------------------------
 | 具體命令
 |------------------------------------
 |
 |
 |
 */

namespace Src\Command\basic;


class ConcreteCommand extends Command
{

    /**
     * 通知接收者執行命令
     */
    public function execute()
    {
        $this->receiver->action();
    }
}