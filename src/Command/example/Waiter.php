<?php
declare(strict_types=1);
/*------------------------------------
 | 服務生 Invoker
 |------------------------------------
 |
 |
 |
 */

namespace Src\Command\example;


use ReflectionClass;

class Waiter
{
    /** @var array : 存放訂單 */
    private $order = [];

    /**
     * 增加訂單
     * @param Command $command
     * @throws \ReflectionException
     */
    public function setOrder(Command $command)
    {
        $commandName = $this->getClassName($command);

        if($commandName === 'BakeChickenCommand'){ //沒烤雞了
            echo "服務生：雞趐沒有了，請點別的燒烤\n";
        } else {
            $this->order[] = $command;
            echo "增加訂單：{$commandName} 時間：" . date('Y-m-d H:i:s') . PHP_EOL;
        }
    }

    /**
     * 取消訂單
     * @param Command $command
     * @throws \ReflectionException
     */
    public function cancelOrder(Command $command)
    {
        $commandName = $this->getClassName($command);
        $key = array_search($command, $this->order);
        if($this->order[$key] === $command){
            unset($this->order[$key]);
            echo "取消訂單：{$commandName} 時間：" . date('Y-m-d H:i:s') . PHP_EOL;
        }
    }

    /**
     * 通知全部執行
     */
    public function notify()
    {
        foreach ($this->order as $command){
            $command->executeCommand();
        }
    }

    /**
     * 取得class name
     * @param $class
     * @return string
     * @throws \ReflectionException
     */
    private function getClassName($class)
    {
        $reflect = new ReflectionClass($class);
        return $reflect->getShortName();
    }
}