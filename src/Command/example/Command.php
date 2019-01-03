<?php
declare(strict_types=1);
/*------------------------------------
 | 抽象命令 Command
 |------------------------------------
 | 只需要確定烤肉串者是誰
 |
 |
 */

namespace Src\Command\example;


abstract class Command
{
    protected $receiver;

    public function __construct(Barbecuer $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * 執行命令
     * @return void
     */
    abstract public function executeCommand();
}