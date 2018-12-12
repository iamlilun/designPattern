<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 房地產 Sub system
 |--------------------------------------
 |
 |
 */


namespace Src\Facade\example;


class Realty
{
    public function sell()
    {
        echo "房地產 賣出\n";
    }

    public function buy()
    {
        echo "房地產 買入\n";
    }
}