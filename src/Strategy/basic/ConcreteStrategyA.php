<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 具體演算法A
 |--------------------------------------
 |
 |
 */


namespace Src\Strategy\basic;


class ConcreteStrategyA extends Strategy
{

    public function algorithmInterface()
    {
        echo "演算法A實現\n";
    }
}