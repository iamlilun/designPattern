<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 股票A Sub system
 |--------------------------------------
 |
 |
 */


namespace Src\Facade\example;


class StockA
{
    public function sell()
    {
        echo "股票A 賣出\n";
    }

    public function buy()
    {
        echo "股票A 買入\n";
    }
}