<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 具體演算法B
 |--------------------------------------
 |
 |
 */


namespace Src\Strategy\basic;


class ConcreteStrategyB extends Strategy
{

    public function algorithmInterface()
    {
        echo "演算法B實現\n";
    }
}