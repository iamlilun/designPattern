<?php
declare(strict_types=1);
/*------------------------------------
 | 美國 ConcreteColleague
 |------------------------------------
 |
 |
 |
 */

namespace Src\Mediator\example;


class USA extends Country
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
        echo "美國獲得對方資訊: {$message}\n";
    }
}