<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 公債 Sub system
 |--------------------------------------
 |
 |
 */


namespace Src\Facade\example;


class NationalDebt
{
    public function sell()
    {
        echo "公債 賣出\n";
    }

    public function buy()
    {
        echo "公債 買入\n";
    }
}