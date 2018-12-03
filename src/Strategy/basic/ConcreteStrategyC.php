<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 具體演算法C
 |--------------------------------------
 |
 |
 */


namespace Src\Strategy\basic;


class ConcreteStrategyC extends Strategy
{

    public function algorithmInterface()
    {
        echo "演算法C實現\n";
    }
}