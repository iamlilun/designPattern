<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 股票C Sub system
 |--------------------------------------
 |
 |
 */


namespace Src\Facade\example;


class StockC
{
    public function sell()
    {
        echo "股票C 賣出\n";
    }

    public function buy()
    {
        echo "股票C 買入\n";
    }
}