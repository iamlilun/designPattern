<?php
declare(strict_types=1);
/*
 |--------------------------------------
 |  看NBA的同事 ConcreteObserver
 |--------------------------------------
 |
 |
 */


namespace Src\Observer\example;


class NBAObserver extends Observer
{

    public function update()
    {
        echo "{$this->secretary->getAction()} {$this->name} 關閉NBA直播，繼續工作！\n";
    }
}