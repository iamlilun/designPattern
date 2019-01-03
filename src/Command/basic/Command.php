<?php
declare(strict_types=1);
/*------------------------------------
 | 執行操作的介面
 |------------------------------------
 |
 |
 |
 */

namespace Src\Command\basic;


abstract class Command
{
    protected $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    abstract public function execute();
}