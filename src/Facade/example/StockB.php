<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 股票B Sub system
 |--------------------------------------
 |
 |
 */


namespace Src\Facade\example;


class StockB
{
    public function sell()
    {
        echo "股票B 賣出\n";
    }

    public function buy()
    {
        echo "股票B 買入\n";
    }
}