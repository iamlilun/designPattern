<?php
declare(strict_types=1);
/*------------------------------------
 | 伊拉克 ConcreteColleague
 |------------------------------------
 |
 |
 |
 */

namespace Src\Mediator\example;


class Iraq extends Country
{
    /**
     * 宣告
     * @param $message
     */
    public function declare($message)
    {
        $this->mediator->declare($message, $this);
    }

    /**
     * 獲得消息
     * @param $message
     */
    public function getMessage($message)
    {
        echo "伊拉克獲得對方資訊: {$message}\n";
    }
}