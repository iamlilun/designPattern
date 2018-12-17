<?php
declare(strict_types=1);
/*
 |--------------------------------------
 |  看股票的同事 ConcreteObserver
 |--------------------------------------
 |
 |
 */


namespace Src\Observer\example;


class StockObserver extends Observer
{
    public function update()
    {
        echo "{$this->secretary->getAction()} {$this->name} 關閉股票行情，繼續工作！\n";
    }
}