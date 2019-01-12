<?php
declare(strict_types=1);
/*------------------------------------
 | 具體同事類別
 |------------------------------------
 | 只知道自己的行為，不了解其他同事的情況
 | 但認識同一個仲介者
 |
 */

namespace Src\Mediator\Basic;


class ConcreteColleague2 extends Colleague
{
    /**
     * 發送資訊
     * @param $message
     */
    public function send($message)
    {
        $this->mediator->send($message, $this);
    }

    public function notify($message)
    {
        echo "同事2得到資訊: {$message}\n";
    }
}