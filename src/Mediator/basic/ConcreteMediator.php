<?php
declare(strict_types=1);
/*------------------------------------
 | 具體仲介者
 |------------------------------------
 |
 |
 |
 */

namespace Src\basic\Mediator;


class ConcreteMediator
{
    public function fuck()
    {
        echo "fuck\n";
    }
//    private $colleague1;
//
//    private $colleague2;
//
//    /**
//     * @param mixed $colleague1
//     */
//    public function setColleague1($colleague1): void
//    {
//        $this->colleague1 = $colleague1;
//    }
//
//    /**
//     * @param mixed $colleague2
//     */
//    public function setColleague2($colleague2): void
//    {
//        $this->colleague2 = $colleague2;
//    }
//
//
//    public function send($message, Colleague $colleague)
//    {
//        if($colleague == $this->colleague1){
//            $this->colleague2->notify($message);
//        } else {
//            $this->colleague1->notify($message);
//        }
//    }
}